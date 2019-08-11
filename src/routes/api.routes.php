<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/api/bestemmia', function (Request $request, Response $response, array $args) {

    $json = json_encode(\Api\Bestemmia::bestemmia());

    $response->getBody()->write($json);

    return $response->withHeader('Content-Type', 'application/json');
});