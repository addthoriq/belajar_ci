<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;
use Config\Validation;

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

      $validasi = \Config\Services::validation();
      $validasi->setRules([
        'kolom_judul' => 'required',
        'kolom_isi' => 'required'
      ]);
      $isDataValid = $validasi->withRequest($this->request)->run();

      $judul = $this->request->getPost('kolom_judul');
      $isi = $this->request->getPost('kolom_isi');

      if ($isDataValid) {
        $data = [
          'judul' => $judul,
          'isi' => $isi
        ];
        $news->insert($data);
      }
      
      return redirect()->back();
    }

    public function edit($id)
    {
      $news = new PostModel();
      $data['news'] = $news->where('id', $id)->first();

      $validasi = \Config\Services::validation();
      $validasi->setRules([
        'kolom_judul' => 'required',
        'kolom_isi' => 'required'
      ]);
      $isDataValid = $validasi->withRequest($this->request)->run();

      if ($isDataValid) {
        $news->update($id, [
          'judul' => $this->request->getPost('kolom_judul'),
          'isi' => $this->request->getPost('kolom_isi')
        ]);
        return redirect('news');
      }
      
      echo view('berita_edit', $data);
    }

    public function delete($id)
    {
      $news = new PostModel();
      $news->delete($id);
      return redirect()->back();
    }
}
