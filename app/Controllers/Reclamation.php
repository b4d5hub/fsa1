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

        // Validation des données du formulaire
        $validation = \Config\Services::validation();

        $validation->setRules([
            'subject'    => 'required|min_length[3]',
            'email'   => 'required|valid_email',
            'message' => 'required|min_length[5]',
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->with('alert', 'Vérifiez les données fournies.')->withInput();
        }

        $subject    = $this->request->getPost('subject');
        $email   = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        // Envoi des emails
        $emailService = \Config\Services::email();

        // Envoi à l'administrateur
        $emailService->setMailType('html');
        $emailService->setFrom($email);
        $emailService->setTo('trackwisecom@gmail.com');
        $emailService->setSubject("Nouvelle réclamation de $subject");
        $emailService->setMessage("
            <h3>Nouvelle Réclamation</h3>
            <p><strong>Message:</strong> $message</p>
        ");

        if (!$emailService->send()) {
            return redirect()->back()->with('alert', 'Erreur lors de l\'envoi de l\'email à l\'administrateur.');
        }

        // Envoi à l'utilisateur (email de confirmation)
        $emailService->clear();
        $emailService->setMailType('html');
        $emailService->setFrom('trackwisecom@outlook.com', 'TrackWise');
        $emailService->setTo($email);
        $emailService->setSubject("Nouvelle réclamation de $subject");
        $emailService->setMessage("
            <p>Nous avons bien reçu votre réclamation et nous vous répondrons dans les plus brefs délais.</p>
            <p>Message soumis :</p>
            <blockquote>$message</blockquote>
        ");

        if (!$emailService->send()) {
            return redirect()->back()->with('alert', 'Erreur lors de l\'envoi de l\'email de confirmation.');
        }

        return redirect()->back()->with('message', 'Votre réclamation a été envoyée avec succès.');
    }
}
