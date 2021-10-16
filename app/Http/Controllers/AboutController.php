<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

  public function index(LoadDataController $loader)
  {
    return view('about', [
      'title' => 'Tentang Kami',
      'keunggulan' => $loader->loadData('../resources/data/keunggulandata.json'),
      'customer' => $loader->loadData('../resources/data/customerdata.json'),
      'kategori' => $loader->loadData('../resources/data/categorydata.json')
    ]);
  }
}
