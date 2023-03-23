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

  public function get_data()
  {
    $datas = [
      'users' => $this->userModel->findAll()
    ];
    // $data = [
    //   'user' => $this->userModel->find(3)
    // ];

    // $datas = [
    //   'users' => $this->userModel->selectMax('id')->first()
    // ];
    // SELECT * FROM users WHERE id = 2;

      // Nampilin tanpa ngakses file View
      // $datas = $this->userModel->findAll();
      foreach ($datas as $d) {
        echo $d->id . " " . $d->nama . "<br>";
      }
      
    return view('get_data', $datas);
  }

  public function update()
  {
    $this->userModel->set('nama', 'Maman')->where('id', 3)->update();
  }

  public function delete()
  {
    $this->userModel->delete(5);
    // $this->userModel->delete([1,3]);
    // $this->userModel->where('nama', 'Ujang')->delete();
  }
}
