<?php

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Start Session
 */
session_start();

/**
 * Autoload global dependencies and allow for auto-loading local dependencies via use
 */
require_once __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get( '/', function (Request $request, Response $response) {
    $response->getBody()->write('Hello World!');
		return $response;
	});

$app->run();