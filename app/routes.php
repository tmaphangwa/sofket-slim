<?php
    use Slim\App;
    use Jenssegers\Blade\Blade;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Psr\Http\Message\ResponseInterface as Response;
    
    function view(Response $response, $template, $with){
        $cache = __DIR__. '/cache/cache';
        $views = __DIR__. '/views';

        $blade = (new Blade($views, $cache))->make($template, $with = []);

        $response->getBody()->write($blade->render());

        return $response;
    }

    $app->get('/home', function(Request $request, Response $response, $prams){

        return view($response, 'home', [
            'title' => 'Home Page',
            'content' => 'Welcome to the Home Page!'
        ]);
    });

    $app->get('/', function(Request $request, Response $response, $prams){
        $response->getBody()->write("Hello World");

        return $response;
    });
?>