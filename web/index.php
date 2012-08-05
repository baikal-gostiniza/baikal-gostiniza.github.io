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
    'fotoalbom'     => 'Фотоальбом',
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

    $images = array(
        'DSC04732.jpg',
        'DSC04733.jpg',
        'DSC04734.jpg',
        'DSC04736.jpg',
        'DSC04738.jpg',
        'DSC04739.jpg',
        'DSC04745.jpg',
        'DSC04746.jpg',
        'DSC04747.jpg',
        'DSC04748.jpg',
        'DSC04700.jpg',
        'DSC04701.jpg',
    );

    return $app['twig']->render('nomera-u-zeny.twig', array('navigation' => $navigation, 'images' => $images));
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

$app->get('/fotoalbom.html', function() use($app, $navigation) {

    // Read all files.
    $images  = array(
        'L1000661.JPG',
        'L1000683.JPG',
        'L1000699.JPG',
        'L1000704.JPG',
        'L1000728.JPG',
        'L1000755.JPG',
        'L1000756.JPG',
        'L1000757.JPG',
        'L1000758.JPG',
        'L1000764.JPG',
        'L1000765.JPG',
        'L1000766.JPG',
        'L1000767.JPG',
        'L1000780.JPG',
        'L1000792.JPG',
        'L1000796.JPG',
        'L1000801.JPG',
        'L1000802.JPG',
        'L1000807.JPG',
        'L1000830.JPG',
        'L1000831.JPG',
        'L1000832.JPG',
        'L1000854.JPG',
        'L1000858.JPG',
        'L1000859.JPG',
        'L1000860.JPG',
        'L1000861.JPG',
        'L1000862.JPG',
        'L1000863.JPG',
        'L1000864.JPG',
        'L1000865.JPG',
        'L1000867.JPG',
        'L1000876.JPG',
        'L1000877.JPG',
        'L1000879.JPG',
        'L1000882.JPG',
        'L1000889.JPG',
        'L1000893.JPG',
        'L1000895.JPG',
        'L1000902.JPG',
        'L1000973.JPG',
        'L1000976.JPG',
        'L1000982.JPG',
        'L1000987.JPG',
        'L1000988.JPG',
        'L1000996.JPG',
        'L1000997.JPG',
        'L1010026.JPG',
    );

    return $app['twig']->render('fotoalbom.twig', array('navigation' => $navigation, 'images' => $images));
})->bind('fotoalbom');

$app->run(); 
