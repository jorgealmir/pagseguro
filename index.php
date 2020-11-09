<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;
use Src\Config;

var_dump(Config::getUrlSessions() . "?" . http_build_query(Config::getAuthentication()));
return;

$client = new Client();
$response = $client->request('POST', 
    Config::getUrlSessions() . "?" .
    http_build_query(Config::getAuthentication()), 
    [
        "verify" => false
    ]
);

echo $response->getBody()->getContents(); // '{"id": 1420053, "name": "guzzle", ...}'

// Send an asynchronous request.
//$request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
//$promise = $client->sendAsync($request)->then(function ($response) {
//    echo 'I completed! ' . $response->getBody();
//});
