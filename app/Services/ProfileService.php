<?php

namespace App\Services;

use App\Models\ProfileModel;
use App\Entities\ProfileEntity;

interface ProfileServiceInterface {
    public function createProfile($profile_entity) : bool;
    public function getProfileByUserAccountID($user_account_id);
    public function updateProfile($profile_entity): bool;
}

class ProfileService implements ProfileServiceInterface {

    protected $profile_model;

    public function __construct() {
        $this->profile_model = new ProfileModel();
    }

    public function createProfile($profile_entity) : bool {
        return $this->profile_model->save($profile_entity);
    }

    public function getProfileByUserAccountID($user_account_id) {
        $profile = $this->profile_model->findByUserAccountID($user_account_id);

        if ($profile) {
            $date = date_create($profile->date_of_birth);
            $profile->date_of_birth = date_format($date,"Y-m-d");

            return $profile;
        }
    }

    public function updateProfile($profile_entity) : bool {
        return $this->profile_model->update($profile_entity->profile_id, $profile_entity);
    }
}