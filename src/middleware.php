<?php

// Application middleware
global $app, $twig;

$twig->addExtension( new \core\twig\AssetExtension() );
$twig->addExtension( new \Slim\Views\TwigExtension(
    $container['router'],
    $container['request']->getUri()
));
