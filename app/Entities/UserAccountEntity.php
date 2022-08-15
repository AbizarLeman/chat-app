<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use App\Models\UserAccountModel;

class UserAccountEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at'];
    protected $casts   = [];
}
