<?php

require "../vendor/autoload.php";

$client = new \GuzzleHttp\Client();

$request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
$promise = $client->sendAsync($request)->then(function($response) {
	echo 'I completed! '.$response->getBody();
});

$promise->wait();
