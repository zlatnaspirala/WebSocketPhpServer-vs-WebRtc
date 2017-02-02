<?php

require '../vendor/autoload.php';

use Amir\Comm;

//set an array of origins allowed to connect to this server
$allowed_origins = ['localhost', '192.168.0.106' , '127.0.0.1' , '0.0.0.0' , '*' ];

// Run the server application through the WebSocket protocol on port 8080
 //$app = new Ratchet\App('localhost', 8080 ,'0.0.0.0' );//App(hostname, port, 'whoCanConnectIP', '')
 $app = new Ratchet\App('192.168.0.106', 8080 ,'0.0.0.0' );//App(hostname, port, 'whoCanConnectIP', '')
 //  $app = new Ratchet\App('127.0.0.1', 8080 ,'0.0.0.0'  );//App(hostname, port, 'whoCanConnectIP', '')

//create socket routes
//route(uri, classInstance, arrOfAllowedOrigins)
$app->route('/comm', new Comm, $allowed_origins);

//run websocket
$app->run();



