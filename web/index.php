<?php
require_once __DIR__.'/../silex.phar';

/**
 * Navigation.
 */
$navigation = array(
    'homepage'      => 'Главная',
    'nomera_u_zeny' => 'Номера и цены',
    'kak_dobratza'  => 'Как добраться',
    'rasvlecheniya' => 'Развлечение',
    'region'        => 'Регион',
    'uslugi'        => 'Услуги',
);

$app = new Silex\Application();

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path'       => __DIR__.'/../views',
    'twig.class_path' => __DIR__.'/../vendor/twig/lib',
));
$app->register(new Silex\Provider\SymfonyBridgesServiceProvider(), array(
    'symfony_bridges.class_path'  => __DIR__.'/../vendor/symfony/src',
));

$app->get('/', function() use($app, $navigation) {
    return $app['twig']->render('homepage.twig', array('navigation' => $navigation));
})->bind('homepage');

$app->get('/kak-dobratza.html', function() use($app, $navigation) {
    return $app['twig']->render('kak-dobratza.twig', array('navigation' => $navigation));
})->bind('kak_dobratza');

$app->get('/nomera-u-zeny.html', function() use($app, $navigation) {
    return $app['twig']->render('nomera-u-zeny.twig', array('navigation' => $navigation));
})->bind('nomera_u_zeny');

$app->get('/rasvlecheniya.html', function() use($app, $navigation) {
    return $app['twig']->render('rasvlecheniya.twig', array('navigation' => $navigation));
})->bind('rasvlecheniya');

$app->get('/region.html', function() use($app, $navigation) {
    return $app['twig']->render('region.twig', array('navigation' => $navigation));
})->bind('region');

$app->get('/uslugi.html', function() use($app, $navigation) {
    return $app['twig']->render('uslugi.twig', array('navigation' => $navigation));
})->bind('uslugi');

$app->run(); 
