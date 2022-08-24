<?php

namespace App\Services;

use App\Models\MessageModel;
use App\Entities\MessageEntity;

interface MessageServiceInterface {
    public function createMessage($message_entity) : bool;
    public function getMessageListForChat($first_user_account_id, $second_user_account_id);
}

class MessageService implements MessageServiceInterface {

    protected $message_model;

    public function __construct() {
        $this->message_model = new MessageModel;
    }

    public function createMessage($message_entity) : bool {
        return $this->message_model->save($message_entity);
    }

    public function getMessageListForChat($first_user_account_id, $second_user_account_id) {
        $messages = $this->message_model->getMessageListForChat($first_user_account_id, $second_user_account_id);

        if (!empty($messages)) return $messages;
    }
}