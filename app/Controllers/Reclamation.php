<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Email\Email;
use App\Models\UserModel;
use Config\Email as EmailConfig;

class Reclamation extends Controller
{


    public function submit()
    {
        helper(['form', 'url']);

        // Load validation service and define rules
        $validation = \Config\Services::validation();

        $validationRules = [
            'subject' => 'required|min_length[3]',
            'email'   => 'required|valid_email',
            'message' => 'required|min_length[5]',
        ];

        // Validate the request
        if (!$this->validate($validationRules)) {
            return redirect()->back()->with('alert', 'Check the provided data.')->withInput();
        }

        $subject = esc($this->request->getPost('subject'));
        $email = esc($this->request->getPost('email'));
        $message = esc($this->request->getPost('message'));

        // Email configuration
        $emailService = \Config\Services::email();
        $emailService->setMailType('html');

        // Email to administrator
        $emailService->setFrom($email);
        $emailService->setTo('trackwisecom@gmail.com');
        $emailService->setSubject("New Inquiry Reminder");
        $emailService->setMessage("
            <h3>New Inquiry</h3>
            <p><strong>From:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong> $message</p>
        ");

        if (!$emailService->send()) {
            log_message('error', 'Failed to send email to administrator: ' . $emailService->printDebugger(['headers']));
            return redirect()->back()->with('alert', 'Erreur lors de l\'envoi de l\'email à l\'administrateur.');
        }

        // Clear email settings and send confirmation email to the user
        $emailService->clear();
        $emailService->setFrom('trackwisecom@gmail.com', 'TrackWise');
        $emailService->setTo($email);
        $emailService->setSubject("Inquiry Received - $subject");
        $emailService->setMessage(
            "<p>Hello,</p>
            <p>We have received your complaint, and we will respond as soon as possible.</p>
            <p><strong>Submitted message:</strong></p>
            <blockquote>$message</blockquote>
            <p>Thank you,</p>
            <p>TrackWise Team</p>"
        );

        if (!$emailService->send()) {
            log_message('error', 'Failed to send confirmation email to user: ' . $emailService->printDebugger(['headers']));
            return redirect()->back()->with('alert', 'Error occurred while sending the confirmation email.');
        }

        return redirect()->back()->with('message', 'Your inquiry has been successfully submitted.');
    }
}
