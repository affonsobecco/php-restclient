<?php

// Test are comprised of two components: a simple json response for testing
// interaction via the built-in PHP server, and PHPUnit test methods. 

// Test Server
// This code is only executed by the test server instance. It returns simple 
// JSON debug information for validating behavior. 
if(php_sapi_name() == 'cli-server'){
    header("Content-Type: application/json");
    die(json_encode(array(
        'SERVER' => $_SERVER, 
        'REQUEST' => $_REQUEST, 
        'POST' => $_POST, 
        'GET' => $_GET, 
        'body' => file_get_contents('php://input'), 
        'headers' => getallheaders()
    )));
}
