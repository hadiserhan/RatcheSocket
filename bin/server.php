<?php

//server.php

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Chat;

    require dirname(__DIR__) . '/vendor/autoload.php';

    // $allow = ['localhost', 'wwebsoketserver.herokuapp.com'];

    // $server = new App('wwebsoketserver.herokuapp.com', 8080);

    // //$server->route('/wamp', new Wamp(), $allow);
    // //$server->route('/echo', new EchoServer(), $allow);
    // $server->route('/socket', new Chat(), $allow);

    // $server->run();
    $server = new Ratchet\App('0.0.0.0', 8080);
    $server->route('/chat', new Chat, array('*'));
    $server->route('/echo', new Ratchet\Server\EchoServer, array('*'));
  
    // $server = IoServer::factory(
    //     new HttpServer(
    //         new WsServer(
    //             new Chat()
    //         )
    //     ),
    //     8080
    // );

    $server->run();


?>