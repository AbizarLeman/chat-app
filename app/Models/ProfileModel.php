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
        'self_description'
    ];

    protected $validationRules = [
        'user_account_id' => 'required',
        'fullname' => 'required',
        'address' => 'required',
        'date_of_birth' => 'required',
        'phone_number' => 'required',
        'email' => 'required',
        'ubd_programme' => 'required',
        'hobby' => 'required',
        'self_description' => 'required',
    ];

    protected $validationMessages = [
        'fullname' => [
            'required' => 'Please fill in your fullname.'
        ],
        'address' => [
            'required' => 'Please fill in your address.'
        ],
        'date_of_birth' => [
            'required' => 'Please fill in your date of birth.'
        ],
        'phone_number' => [
            'required' => 'Please fill in your phone number.'
        ],
        'email' => [
            'required' => 'Please fill in your email.'
        ],
        'ubd_programme' => [
            'required' => 'Please fill in your UBD programme.'
        ],
        'hobby' => [
            'required' => 'Please fill in your hobby.'
        ],
        'self_description' => [
            'required' => 'Please fill in your self-description.'
        ]
    ];

    protected $returnType = ProfileEntity::class;

    public function findByUserAccountID(string $id) {
        return $this->where('user_account_id', $id)->first();
    }
}
