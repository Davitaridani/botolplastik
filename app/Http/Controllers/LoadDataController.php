<?php

namespace App\Http\Controllers;

class LoadDataController extends Controller
{
    /**
     * Controller ini untuk mengambil data dari file json
     *
     * @return void
     */
    public function __construct()
    {
        
    }

  //
  public function loadData($json_file_path)
  {
    $json = file_get_contents($json_file_path);
    $data = json_decode($json, true);
    return $data;
  }
}
