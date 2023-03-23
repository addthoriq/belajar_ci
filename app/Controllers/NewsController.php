<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;

class NewsController extends BaseController
{
    public function index()
    {
      $news = new PostModel();
      $data['newses'] = $news->findAll();
      echo view('berita', $data);
    }

    public function store()
    {
      $news = new PostModel();
      $judul = $this->request->getPost('kolom_judul');
      $isi = $this->request->getPost('kolom_isi');
      $data = [
        'judul' => $judul,
        'isi' => $isi
      ];
      $news->insert($data);
      return redirect('beranda');
    }
}
