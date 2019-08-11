<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

$app = AppFactory::create();

$app->addErrorMiddleware(true, true, true);

// Register routes
require __DIR__ . '/../routes/index.php';

$app->run();
