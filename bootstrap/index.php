<?php
    use DI\Container;
    use Slim\Factory\AppFactory;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Psr\Http\Message\ResponseInterface as Response;

    require dirname(__DIR__). '/vendor/autoload.php';

    $container = new Container();
    AppFactory::setContainer($container);

    $settings = require dirname(__DIR__). '/app/settings.php';
    $settings($container);

    $app = AppFactory::create();

    $middleware = require dirname(__DIR__). '/app/middleware.php';
    $middleware($app);

    $routes = require dirname(__DIR__). '/app/routes.php';
    $routes($app);

    $app->run();
?>