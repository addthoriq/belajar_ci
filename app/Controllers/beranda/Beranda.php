<?php

namespace App\Controllers\beranda;

use App\Controllers\BaseController;

class Beranda extends BaseController
{
  public function index()
  {
    // return view('welcome_message');
    return "Hallo";
  }

  public function halaman_custom()
  {
    return view('custom_page');
  }

  public function getData($id)
  {
    // return view('welcome_message');
    return "Selamat datang " . $id;
  }
}
