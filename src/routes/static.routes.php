<?php

use Pages\Admin;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/assets/{path:.+}', function(Request $request, Response $response, array $args) {
    $path = getcwd() . "/src/public/assets/".implode('/',$args);
    $path = str_replace('themes/default/assets/fonts','fonts', $path);

    $extension = pathinfo($path, PATHINFO_EXTENSION);

    $contentType = 'text/html';

    switch($extension)
    {
        case 'js';
            $contentType = 'application/javascript';
            break;
        case 'css';
            $contentType = 'text/css';
            break;
    }

    $content = file_get_contents($path);
    return $response->withStatus(200)
                    ->withHeader('Content-Type', $contentType)
                    ->write($content);
});