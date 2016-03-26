<?php

// Routes

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

global $app, $twig;

// Add trailing slash: http://www.slimframework.com/docs/cookbook/route-patterns.html
$app->add(function (Request $request, Response $response, callable $next) {
    $uri = $request->getUri();
    $path = $uri->getPath();
    if ($path != '/' && substr($path, -1) == '/') {
        // permanently redirect paths with a trailing slash
        // to their non-trailing counterpart
        $uri = $uri->withPath(substr($path, 0, -1));
        return $response->withRedirect((string)$uri, 301);
    }

    return $next($request, $response);
});

$app->get('/[{name}]', function ($request, $response, $args) use($twig) {

    $this->logger->info("Slim-Skeleton '/' route");

    return $twig->render('index.twig', $args);

})->setName('homepage');

$app->get('/hello/world[/{name}]', function ($request, $response, $args) use($twig) {
    return $twig->render('hello.twig', array(

    ));
})->setName('hello');
