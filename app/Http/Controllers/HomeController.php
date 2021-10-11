<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class HomeController extends BaseController
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

  public function loadCategoryData()
  {
    $data = [
      [
        'name' => 'PET Performs',
        'link' => ''
      ],
      [
        'name' => 'PET Bottles',
        'link' => ''
      ],
      [
        'name' => 'Drinking Cup',
        'link' => ''
      ],
      [
        'name' => 'Lids',
        'link' => ''
      ],
      [
        'name' => 'PP Jars',
        'link' => ''
      ],
    ];
    return $data;
  }

  public function loadBottleData()
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
    $bottleData = array_chunk($this->loadBottleData(), 4, false);
    $categoryData = $this->loadCategoryData();
    return view('design1', [
      'title' => 'BotolPlastik',
      'produk' => $bottleData,
      'kategori' => $categoryData
    ]);
  }
}
