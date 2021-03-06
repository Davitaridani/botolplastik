<?php

namespace App\Http\Controllers;

use App\Http\Controllers\LoadDataController;

class ProductController extends Controller
{
  //
  public function index(LoadDataController $loader)
  {
    return view('products', [
      'title' => 'Koleksi Botol Plastik',
      'aplikasi' => $loader->loadData('../resources/data/applicationdata.json'),
      'customer' => $loader->loadData('../resources/data/customerdata.json'),
      'produk' => $loader->loadData('../resources/data/bottledata.json'),
      'kategori' => $loader->loadData('../resources/data/categorydata.json')
    ]);
  }

  public function details(LoadDataController $loader, $id)
  {
    $produk = $loader->loadData('../resources/data/bottledata.json');
    return view('details', [
      'title' => "Detail Produk",
      'produk' => $produk,
      'detail' => $produk[$id],
      'kategori' => $loader->loadData('../resources/data/categorydata.json'),
      'customer' => $loader->loadData('../resources/data/customerdata.json')
    ]);
  }
}
