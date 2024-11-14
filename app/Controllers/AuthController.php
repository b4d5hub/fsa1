<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{

    protected $session;
    protected $userModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = new UserModel();
    }

    public function register()
    {
        $validation = \Config\Services::validation();

        // Règles de validation
        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]'
        ]);

        // Exécution de la validation
        if (!$validation->withRequest($this->request)->run()) {
            // Si la validation échoue, redirigez avec les erreurs
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Collecte des données du formulaire
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT); // Hash du mot de passe

        // Enregistrement de l'utilisateur
        if ($this->userModel->save(['name' => $name, 'email' => $email, 'password' => $password])) {
            $this->session->setFlashdata('success', 'Inscription réussie');
            return redirect()->to('/signup');
        } else {
            $this->session->setFlashdata('error', 'Erreur lors de l\'inscription');
            return redirect()->to('/signup');
        }
    }

    public function login()
    {
        // Récupérer les données envoyées depuis le formulaire
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Valider les données de connexion
        if (empty($email) || empty($password)) {
            $this->session->setFlashdata('error', 'Veuillez remplir tous les champs');
            return redirect()->to('/signin'); // Rediriger vers la page de connexion
        }

        // Rechercher l'utilisateur dans la base de données
        $user = $this->userModel->where('email', $email)->first();

        // Vérifier si l'utilisateur existe et si le mot de passe est correct
        if ($user && password_verify($password, $user['password'])) {
            // L'utilisateur est authentifié avec succès
            $this->session->set('user_id', $user['id']);
            $this->session->set('email', $user['email']);
            $this->session->setFlashdata('success', 'Connexion réussie');
            return redirect()->to('/dashboard'); // Rediriger vers la page d'accueil (exemple : dashboard)
        } else {
            // Si les informations sont incorrectes
            $this->session->setFlashdata('error', 'Email ou mot de passe incorrect');
            return redirect()->to('/signin'); // Rediriger vers la page de connexion
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }

    public function profile()
    {
        // Récupérer l'ID de l'utilisateur depuis la session
        $userId = $this->session->get('user_id');

        // Vérifiez si l'utilisateur est connecté
        if (!$userId) {
            return redirect()->to('/signin');
        }

        // Récupérer les informations de l'utilisateur à partir de la base de données
        $user = $this->userModel->find($userId);

        // Passer les données à la vue
        return view('pages/profile', [
            'user' => $user
        ]);
    }
    public function settings()
    {
        // Récupérer l'ID de l'utilisateur depuis la session
        $userId = $this->session->get('user_id');

        // Vérifier si l'utilisateur est connecté
        if (!$userId) {
            return redirect()->to('/pages/signin');
        }

        // Récupérer les informations de l'utilisateur à partir de la base de données
        $user = $this->userModel->find($userId);

        // Passer les données de l'utilisateur à la vue
        return view('pages/settings/index', [
            'user' => $user
        ]);
    }
    public function changeEmail_pw()
{
    // Load validation library
    $validation = \Config\Services::validation();

    // Define validation rules
    $validation->setRules([
        'email' => 'required|valid_email',
        'password' => 'required|min_length[8]'
    ]);

    // Check if validation fails
    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }
    // Retrieve the form data
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    // Hash the password before saving it
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Get the logged-in user ID from the session
    $userId = session()->get('user_id');  // Adjust according to your session configuration

    // Check if the new email already exists in the database
    $db = \Config\Database::connect();
    $builder = $db->table('users');
    $builder->where('email', $email);
    $existingUser = $builder->get()->getRow();

    if ($existingUser) {
        // If the email already exists, redirect back with an error message
        return redirect()->back()->withInput()->with('errors', ['email' => 'This email is already registered.']);
    }
    // Update email and password in the database
    $builder->where('id', $userId);
    $builder->update(['email' => $email, 'password' => $hashedPassword]);

    // Redirect to the settings page with a success message
    return redirect()->to('/settings-profile')->with('success', 'Email and password updated successfully.');
}
// Inside Auth controller
public function changeName()
{
    // Load validation library
    $validation = \Config\Services::validation();

    // Define validation rules
    $validation->setRules([
        'name' => 'required|min_length[3]|max_length[255]'
    ]);

    // Check if validation fails
    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    // Retrieve the new name from the form
    $name = $this->request->getPost('name');

    // Get the logged-in user ID from the session
    $userId = session()->get('user_id');  // Adjust according to your session configuration

    // Update the user's name in the database
    $db = \Config\Database::connect();
    $builder = $db->table('users');
    $builder->where('id', $userId);
    $builder->update(['name' => $name]);

    // Redirect to the settings page with a success message
    return redirect()->to('/settings-profile')->with('success', 'Full Name updated successfully.');
}
// Inside Auth controller
public function changeCurrency()
{
    // Load validation library
    $validation = \Config\Services::validation();

    // Define validation rule for currency
    $validation->setRules([
        'currency' => 'required|in_list[MAD,USD,EUR,AED,GBP]'
    ]);

    // Check if validation fails
    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    // Retrieve the selected currency from the form
    $currency = $this->request->getPost('currency');

    // Get the logged-in user ID from the session
    $userId = session()->get('user_id');  // Adjust according to your session configuration

    // Update the user's currency in the database
    $db = \Config\Database::connect();
    $builder = $db->table('users');
    $builder->where('id', $userId);
    $builder->update(['currency' => $currency]);
    // Redirect to the settings page with a success message
    return redirect()->to('/settings-profile')->with('success', 'Primary currency updated successfully.');
}

}
