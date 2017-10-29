<?php
require 'vendor/autoload.php';
use  GuzzleHttp\Psr7\Request;
use \GuzzleHttp\Psr7\Uri;
/**
 * Created by PhpStorm.
 * User: Airi
 * Date: 29.10.2017
 * Time: 15:53
 */

    $uri = new Uri('https://radio2.zaycev.fm/export/stations.json');
    $request = new Request('GET', $uri);
    $request = $request->withHeader('Accept', '*/*');

    echo $request->getUri()->getScheme().PHP_EOL;
    echo $request->getUri()->getHost().PHP_EOL;
    echo $request->getUri()->getPath().PHP_EOL;
    print_r($request->getHeader('Accept'));


    $client = new \GuzzleHttp\Client();
    $response = $client->request($request->getMethod(),$request->getUri());

    echo $response->getBody()->getContents();
