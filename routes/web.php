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
                'image' => 'images/produk1.jpg',
                'nama' => 'Botol Plastik 1',
                'link' => ''
            ],
            [
                'image' => 'images/produk2.jpg',
                'nama' => 'Botol Plastik 2',
                'link' => ''
            ],
            [
                'image' => 'images/produk3.jpg',
                'nama' => 'Botol Plastik 3',
                'link' => ''
            ],
            [
                'image' => 'images/produk4.jpg',
                'nama' => 'Botol Plastik 4',
                'link' => ''
            ],
            [
                'image' => 'images/produk5.jpg',
                'nama' => 'Botol Plastik 1',
                'link' => ''
            ],
            [
                'image' => 'images/produk6.jpg',
                'nama' => 'Botol Plastik 2',
                'link' => ''
            ],
            [
                'image' => 'images/produk7.jpg',
                'nama' => 'Botol Plastik 3',
                'link' => ''
            ],
            [
                'image' => 'images/produk8.jpg',
                'nama' => 'Botol Plastik 4',
                'link' => ''
            ]
        ],
        'produk1' => [
            [
                'image' => 'images/produk1.jpg',
                'nama' => 'Botol Plastik 1',
                'link' => ''
            ],
            [
                'image' => 'images/produk2.jpg',
                'nama' => 'Botol Plastik 2',
                'link' => ''
            ],
            [
                'image' => 'images/produk3.jpg',
                'nama' => 'Botol Plastik 3',
                'link' => ''
            ],
            [
                'image' => 'images/produk4.jpg',
                'nama' => 'Botol Plastik 4',
                'link' => ''
            ]
        ],
        'produk2' => [
            [
                'image' => 'images/produk5.jpg',
                'nama' => 'Botol Plastik 1',
                'link' => ''
            ],
            [
                'image' => 'images/produk6.jpg',
                'nama' => 'Botol Plastik 2',
                'link' => ''
            ],
            [
                'image' => 'images/produk7.jpg',
                'nama' => 'Botol Plastik 3',
                'link' => ''
            ],
            [
                'image' => 'images/produk8.jpg',
                'nama' => 'Botol Plastik 4',
                'link' => ''
            ]
        ]
    ]);
});

