<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    
    public function halaman_custom()
    {
      return view('custom_page');
    }
}
