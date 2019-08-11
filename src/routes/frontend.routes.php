<?php


use Pages\Frontend;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/', function (Request $request, Response $response, array $args) {

    $page = Frontend::getHomePage();

    $response->getBody()->write($page);

    return $response;
});