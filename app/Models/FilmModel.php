<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table      = 'list_film';
    //agar bisa save dari film.php/save update table $usetime ganti false
    protected $useTimestamps = false;
    protected $allowedFields = ['judul', 'sutradara', 'Synopsis', 'cover', 'slug'];

    public function getFilm($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
