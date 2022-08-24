<?php

namespace App\Models;

use CodeIgniter\Model;
use \App\Entities\MessageEntity;

class MessageModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'message';
    protected $primaryKey       = 'message_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType = MessageEntity::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'sender_user_account_id',
        'receiver_user_account_id',
        'message'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getMessageListForChat($first_user_account_id, $second_user_account_id) {
        return $this->where("(`receiver_user_account_id` = '$first_user_account_id' AND `sender_user_account_id` = '$second_user_account_id') OR (`receiver_user_account_id` = '$second_user_account_id' AND `sender_user_account_id` = '$first_user_account_id')")->get();
    }
}
