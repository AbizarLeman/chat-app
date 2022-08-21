<?php

namespace App\Models;

use CodeIgniter\Model;
use \App\Entities\ProfileEntity;
use Exception;

class ProfileModel extends Model
{
    protected $table = 'profile';
    protected $primaryKey = 'profile_id';
    protected $allowedFields = [
        'user_account_id',
        'fullname',
        'address',
        'nationality',
        'date_of_birth',
        'phone_number',
        'email',
        'ubd_programme',
        'hobby',
        'created_at'
    ];

    protected $returnType = ProfileEntity::class;

    public function findByUserAccountID(string $id) {
        return $this->where('user_account_id', $id)->first();
    }
}
