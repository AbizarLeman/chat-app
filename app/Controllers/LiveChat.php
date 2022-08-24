<?php

namespace App\Controllers;

use App\Services\ProfileService;
use App\Services\MessageService;

class LiveChat extends BaseController
{
    protected $session;
    protected $profile_service;
    protected $message_service;

    public function __construct() {
        $this->session = \Config\Services::session();
        $this->profile_service = new ProfileService;
        $this->message_service = new MessageService;
    }
    
    public function index()
    {
        if ($this->session->session_data) {
            $profile = $this->profile_service->getProfileByUserAccountID($this->session->session_data['user_account_id']);

            if($profile) {                
                $profiles = $this->profile_service->getAllProfile();

                return view('live_chat/profile_list', ['profiles' => $profiles, 'user_account_id' => $this->session->session_data['user_account_id']]);
            } else {
                return view('live_chat/no_profile');
            }
        }

        return view('auth/login');
    }

    public function chat($id)
    {
        if ($this->session->session_data) {
            $profile = $this->profile_service->getProfile($id);
            $messages = $this->message_service->getMessageListForChat($this->session->session_data['user_account_id'], $profile->user_account_id);

            return view('live_chat/live_chat', ['profile' => $profile, 'user_account_id' => $this->session->session_data['user_account_id'], 'messages' => $messages]);
        }

        return view('auth/login');
    }
}
