<?php

namespace App\Controllers;

use App\Models\FilmModel;
use Config\Validation;

class Film extends BaseController
{
    protected $filmModel;
    public function __construct()
    {
        $this->filmModel = new FilmModel();
    }
    public function index()
    {
        $film =  $this->filmModel->findAll();

        $data = [
            'title' => 'List Film | Endah Sarah Wanty',
            'film' => $this->filmModel->getFilm()
        ];


        return view('film/list_film', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'List Film | Endah Sarah Wanty',
            'film' => $this->filmModel->getFilm($slug)
        ];

        if (empty($data['film'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Film' . $slug . 'Tidak ditemukan');
        }
        return view('film/detail', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'List Film | Endah Sarah Wanty',
            'validation' => \Config\Services::validation()
        ];
        return view('film/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'judul' => 'required|is_unique[list_film.judul]',
            'sutradara' => 'required',
            'Synopsis' => 'required',
            'cover' => 'required',
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/film/create')->withInput()->with('validation', $validation);
        }
        session()->setFlashdata('pesan', 'List Film Telah Berhasil Ditambahkan');
        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->filmModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'sutradara' => $this->request->getVar('sutradara'),
            'Synopsis' => $this->request->getVar('Synopsis'),
            'cover' => $this->request->getVar('cover')
        ]);
        return redirect()->to('/film');
    }

    public function delete($id)
    {
        $this->filmModel->delete($id);
        session()->setFlashdata('pesan', 'List Film Telah Berhasil Dihapus');
        return redirect()->to('/film');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Update List Film | Endah Sarah Wanty',
            'validation' => \Config\Services::validation(),
            'film' => $this->filmModel->getFilm($slug)
        ];
        return view('film/edit', $data);
    }

    public function update($id)
    {
        $filmLama = $this->filmModel->getFilm($this->request->getVar('slug'));
        if ($filmLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[list_film.judul]';
        }
        if (!$this->validate([
            'judul' => $rule_judul,
            'sutradara' => 'required',
            'Synopsis' => 'required',
            'cover' => 'required',
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/film/edit' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }
        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->filmModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'sutradara' => $this->request->getVar('sutradara'),
            'Synopsis' => $this->request->getVar('Synopsis'),
            'cover' => $this->request->getVar('cover')
        ]);
        session()->setFlashdata('pesan', 'List Film Telah Berhasil Di Update');
        return redirect()->to('/film');
    }

    //--------------------------------------------------------------------

}
