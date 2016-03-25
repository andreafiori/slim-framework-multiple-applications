<?php

// Routes

global $app, $twig;

$app->get('/[{name}]', function ($request, $response, $args) {

    $this->logger->info("Slim-Skeleton '/' route");

    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/hello/[{name}]', function ($request, $response, $args) use($twig) {
    return $twig->render('index.twig', array(

    ));
});
