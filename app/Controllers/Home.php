<?php

namespace App\Controllers;

use App\Models\Transaction;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {

        return view('pages/index');
    }
}
