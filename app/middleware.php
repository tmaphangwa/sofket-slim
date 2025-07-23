<?php
    use Slim\App;

    return function (App $app) {

        $app->addErrorMiddleware(
            $app->getContainer()->get('settings')['displayErrorDetails'],
            $app->getContainer()->get('settings')['logErrors'],
            $app->getContainer()->get('settings')['logErrorDetails']
        );

        // Example of adding a custom middleware
        // $app->add(new \App\Middleware\ExampleMiddleware());
    };
?>