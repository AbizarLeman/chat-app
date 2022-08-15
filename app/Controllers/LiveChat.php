<?php

namespace App\Controllers;

class LiveChat extends BaseController
{
    public function __construct() {
        $this->session = \Config\Services::session();
    }
    
    public function index()
    {
        if ($this->session->session_data) {
            return view('live_chat/index');
        }

        return view('auth/login');
    }
}
