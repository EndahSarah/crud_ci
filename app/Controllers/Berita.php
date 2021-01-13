<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class Berita extends BaseController
{
    protected $beritaModel;
    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
    }
    public function index()
    {
        $berita =  $this->beritaModel->findAll();

        $data = [
            'title' => 'List Berita | Endah Sarah Wanty',
            'berita' => $this->beritaModel->getBerita()
        ];


        return view('berita/list_berita', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'List Berita | Endah Sarah Wanty',
            'berita' => $this->beritaModel->getBerita($slug)
        ];
        return view('berita/detail', $data);
    }

    //--------------------------------------------------------------------

}
