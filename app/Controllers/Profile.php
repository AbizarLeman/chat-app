<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Entities\ProfileEntity;
use App\Services\ProfileService;

class Profile extends BaseController
{
    protected $session;
    protected $profile_service;

    public function __construct($_profile_service = new ProfileService()) {
        $this->session = \Config\Services::session();
        $this->profile_service = $_profile_service;
    }
    
    public function index()
    {
        if ($this->session->session_data) {
            $profile = $this->profile_service->getProfileByUserAccountID($this->session->session_data['user_account_id']);

            if($profile) {                
                return view('profile/view_profile', ['profile' => $profile]);
            } else {
                return view('profile/create_profile');
            }
        }

        return view('auth/login');
    }

    public function save()
    {
        if ($this->session->session_data) {
            $profile_entity = new ProfileEntity();
            $profile_entity = $profile_entity->fill($this->request->getPost());
            $profile_entity->user_account_id = $this->session->session_data['user_account_id'];

            if ($this->profile_service->createProfile($profile_entity)) {
                return redirect()->to('/Profile');
            } else {
                //TODO: Add error message
                return view('profile/create_profile');
            }
        }

        return view('auth/login');
    }

    public function edit()
    {
        if ($this->session->session_data) {
            $profile = $this->profile_service->getProfileByUserAccountID($this->session->session_data['user_account_id']);

            if($profile) {                
                return view('profile/edit_profile', ['profile' => $profile]);
            } else {
                return redirect()->to('/Profile');
            }
        }

        return view('auth/login');
    }

    public function update()
    {
        if ($this->session->session_data) {
            $profile_entity = new ProfileEntity();
            $profile_entity = $profile_entity->fill($this->request->getPost());
            $profile_entity->user_account_id = $this->session->session_data['user_account_id'];

            if ($this->profile_service->updateProfile($profile_entity)) {
                return redirect()->to('/Profile');
            } else {
                //TODO: Add error message
                return view('profile/edit_profile');
            }
        }

        return view('auth/login');
    }
}
