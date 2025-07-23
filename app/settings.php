<?php
    use \Psr\Container\ContainerInterface;

    return function (ContainerInterface $container) {
        $container->set('settings', function () {
            return [
                'displayErrorDetails' => true,
                'addContentLengthHeader' => false,
                'determineRouteBeforeAppMiddleware' => true,
                'httpVersion' => '1.1',
                'routerCacheFile' => false,
            ];
        });
    };
?>