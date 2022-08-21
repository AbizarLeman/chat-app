<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use App\Models\ProfileModel;

class ProfileEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at'];
    protected $casts   = [];
}
