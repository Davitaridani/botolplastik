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

  public function loadData($json_file_path)
  {
    $json = file_get_contents($json_file_path);
    $data = json_decode($json, true);
    return $data;
  }

  public function home()
  {

    return view('design1', [
      'title' => 'BotolPlastik',
      'produk' => $this->loadData('../resources/data/bottledata.json'),
      'kategori' => $this->loadData('../resources/data/categorydata.json'),
      'aplikasi' => $this->loadData('../resources/data/applicationdata.json'),
      'customer' => $this->loadData('../resources/data/customerdata.json')
    ]);
  }
}
