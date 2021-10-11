<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function loadData()
    {
        $data = [
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
        ];
        return $data;
    }

    public function home()
    {
        $prd1 = [
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
        ];

        $prd2 = [
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
        ];
    }
}
