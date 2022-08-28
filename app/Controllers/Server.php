<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use App\Services\ChatService;

class Server extends BaseController
{
    protected $chat_service;

    public function __construct($_chat_service = new ChatService()) {
        $this->chat_service = $_chat_service;
    }

    public function index()
    {
      if(is_cli()) {
        $server = IoServer::factory(new HttpServer(new WsServer($this->chat_service)), 9788);
        $server->run();
      }
    }
}
