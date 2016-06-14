<?php
// Routes

$app->get('/', App\Action\HomeAction::class)
    ->setName('homepage');

$app->get('/acerca', 'App\Action\HomeAction:viewAcerca')
    ->setName('acercapage');

$app->get('/servicios', 'App\Action\HomeAction:viewServicios')
    ->setName('serviciospage');

$app->get('/productos', 'App\Action\HomeAction:viewProductos')
    ->setName('productospage');

$app->get('/contacto', 'App\Action\HomeAction:viewContacto')
    ->setName('contactopage');