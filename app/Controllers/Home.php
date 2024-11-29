<?php

namespace App\Controllers;

use App\Models\Transaction;
use App\Models\UserModel;

class Home extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $userId = $this->session->get('user_id');

        return view('pages/index', ['userId'=>$userId]);
    }
}
