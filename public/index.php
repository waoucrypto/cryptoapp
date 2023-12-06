<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use App\Middleware\SessionMiddleware;

require __DIR__ . '/../vendor/autoload.php';

// Importez les fonctions et les routes
require __DIR__ . '/../Functions/ApiFunctions.php';
require __DIR__ . '/../Routes/web.php';

// Créez l'application
$app = AppFactory::create();
$app->add(new SessionMiddleware());

// Ajoutez les routes
webRoutes($app);

// Exécutez l'application
$app->run();
