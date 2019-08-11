<?php

use Pages\Admin;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/admin', function (Request $request, Response $response, array $args) {

    $page = Admin::getHomePage();

    $response->getBody()->write($page);

    return $response;
});

$app->any('/admin/tomato', function (Request $request, Response $response, array $args) {

    $page = Admin::getTomatoPage();

    $response->getBody()->write($page);

    return $response;
});