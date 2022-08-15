<?php

namespace App\Models;

use CodeIgniter\Model;
use \App\Entities\UserAccountEntity;
use Exception;

class UserAccountModel extends Model
{
    protected $table = 'user_account';
    protected $allowedFields = [
        'user_account_id',
        'user_name',
        'password_hash',
        'created_at',
    ];
    protected $returnType    = UserAccountEntity::class;

    public function findByUserName(string $name): ?UserAccountEntity
    {
        return $this->where('user_name', $name)->first();
    }

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data): array
    {
        return $this->getUpdatedDataWithHashedPassword($data);
    }

    protected function beforeUpdate(array $data): array
    {
        return $this->getUpdatedDataWithHashedPassword($data);
    }

    private function getUpdatedDataWithHashedPassword(array $data): array
    {
        if (isset($data['data']['password_hash'])) {
            $plaintextPassword = $data['data']['password_hash'];
            $data['data']['password_hash'] = $this->hashPassword($plaintextPassword);
        }
        return $data;
    }

    private function hashPassword(string $plaintextPassword): string
    {
        return password_hash($plaintextPassword, PASSWORD_BCRYPT);
    }
}
