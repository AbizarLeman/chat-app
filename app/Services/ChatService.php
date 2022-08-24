<?php

namespace App\Services;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use App\Entities\MessageEntity;

class ChatService implements MessageComponentInterface {
    protected $connections;
    protected $message_service;

    public function __construct() {
        $this->connections = new \SplObjectStorage;
        $this->message_service = new MessageService;
    }

    public function onOpen(ConnectionInterface $connection) {
        // Store the new connection to send messages to later
        $querry_string = $connection->httpRequest->getUri()->getQuery();
        $querry_array = [];
        parse_str($querry_string, $querry_array);

        $sender_user_account_id = intval($querry_array['sender_user_account_id']);
        $connection->sender_user_account_id = $sender_user_account_id;
        $receiver_user_account_id = intval($querry_array['receiver_user_account_id']);
        $connection->receiver_user_account_id = $receiver_user_account_id;

        $this->connections->attach($connection);

        return "New connection! ({$connection->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $messageEntitiy = new MessageEntity;
        
        $messageEntitiy->sender_user_account_id = $from->sender_user_account_id;
        $messageEntitiy->receiver_user_account_id = $from->receiver_user_account_id;
        $messageEntitiy->message = $msg;

        $this->message_service->createMessage($messageEntitiy);

        foreach ($this->connections as $connection) {
            if ($from !== $connection && $from->receiver_user_account_id === $connection->sender_user_account_id) {
                $connection->send($msg);
            }
        }
    }

    public function onClose(ConnectionInterface $connection) {
        // The connection is closed, remove it, as we can no longer send it messages
        $this->connections->detach($connection);

        echo "Connection {$connection->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $connection, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $connection->close();
    }
}