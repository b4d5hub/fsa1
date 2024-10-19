<?php

namespace App\Controllers;

class Pagt extends BaseController
{
    public function index(): string
    {
        return view('pagy');
    }
}
