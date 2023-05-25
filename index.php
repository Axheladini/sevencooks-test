<?php

require './app/bootstrap.php';



use App\Config\Settings as Settings;
use Widop\HttpAdapter\CurlHttpAdapter as CurlHttpAdapter;

$httpAdapter = new CurlHttpAdapter();
$response = $httpAdapter->getContent('https://swapi.dev/api/starships');

$result = $response->getBody();
echo $result->result;

$config = new Settings();

//echo $config->get_constant();