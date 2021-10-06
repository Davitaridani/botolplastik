<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/home', function () {
    return view('design1', [
        'title' => 'BotolPlastik',
        'produk' => [
            [
                'image' => 'image/botol/botol1.png',
                'nama' => 'Botol Plastik 1',
                'link' => ''
            ],
            [
                'image' => 'image/botol/botol2.png',
                'nama' => 'Botol Plastik 2',
                'link' => ''
            ],
            [
                'image' => 'image/botol/botol3.png',
                'nama' => 'Botol Plastik 3',
                'link' => ''
            ],
            [
                'image' => 'image/botol/botol4.png',
                'nama' => 'Botol Plastik 4',
                'link' => ''
            ],
            [
                'image' => 'image/botol/botol5.png',
                'nama' => 'Botol Plastik 1',
                'link' => ''
            ],
            [
                'image' => 'image/botol/botol6.png',
                'nama' => 'Botol Plastik 2',
                'link' => ''
            ],
            [
                'image' => 'image/botol/botol7.png',
                'nama' => 'Botol Plastik 3',
                'link' => ''
            ],
            [
                'image' => 'image/botol/botol8.png',
                'nama' => 'Botol Plastik 4',
                'link' => ''
            ]
        ]
    ]);
});
