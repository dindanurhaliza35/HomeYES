<?php

namespace App\Controllers;

use App\Models\KatalogModel;

class Katalog extends BaseController
{
    public function index()
    {
        // 1. Panggil Model
        $model = new KatalogModel();

        // 2. Ambil semua data dari tabel katalog
        $data['produk'] = $model->findAll();

        // 3. Kirim data ke View
        return view('about', $data);
    }
}