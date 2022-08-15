<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public $session;

    public function __construct() {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if ($this->session->session_data) {
            return view('dashboard');
        }

        return view('auth/login');
    }
}
