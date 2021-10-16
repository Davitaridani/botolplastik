<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(LoadDataController $loader)
    {
    return view('contact', [
      'title' => 'Hubungi Kami',
      'customer' => $loader->loadData('../resources/data/customerdata.json'),
      'kategori' => $loader->loadData('../resources/data/categorydata.json')
    ]);
    }
}
