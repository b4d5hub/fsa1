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
}
