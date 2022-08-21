<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Entities\ProfileEntity;

class Profile extends BaseController
{
    protected $profileModel;

    public function __construct() {
        $this->session = \Config\Services::session();
        $this->profileModel = new ProfileModel();
    }
    
    public function index()
    {
        if ($this->session->session_data) {
            $profile = $this->profileModel->findByUserAccountID($this->session->session_data['user_account_id']);

            if($profile) {
                $date = date_create($profile->date_of_birth);
                $profile->date_of_birth = date_format($date,"Y-m-d");
                
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
            $profileEntity = new ProfileEntity();
            $profileEntity = $profileEntity->fill($this->request->getPost());
            $profileEntity->user_account_id = $this->session->session_data['user_account_id'];
            
            $result = $this->profileModel->save($profileEntity);

            if ($result) {
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
            $profile = $this->profileModel->findByUserAccountID($this->session->session_data['user_account_id']);

            if($profile) {
                $date = date_create($profile->date_of_birth);
                $profile->date_of_birth = date_format($date,"Y-m-d");
                
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
            $profileEntity = new ProfileEntity();
            $profileEntity = $profileEntity->fill($this->request->getPost());
            $profileEntity->user_account_id = $this->session->session_data['user_account_id'];
            
            $result = $this->profileModel->update($profileEntity->profile_id, $profileEntity);

            if ($result) {
                return redirect()->to('/Profile');
            } else {
                //TODO: Add error message
                return view('profile/edit_profile');
            }
        }

        return view('auth/login');
    }
}
