<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
  public $userModel;

  public function __construct() {
    $this->userModel = new UserModel();
  }

  public function index()
  {
      return view('beranda_user');
  }

  public function store()
  {
    $data = [
      'nama' => 'Ujang'
    ];

    $this->userModel->insert($data);
  }
}
