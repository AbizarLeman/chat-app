<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function __construct() {
        $this->session = \Config\Services::session();
    }
    
    public function index()
    {
        if ($this->session->session_data) {
            return view('profile/index');
        }

        return view('auth/login');
    }
}
