<?php

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app = AppFactory::create();

$app->get( '/', function (Request $request, Response $response) {
    $response->getBody()->write('Hello World!');
    return $response;
});

$app->run();