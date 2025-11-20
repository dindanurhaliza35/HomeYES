<?php

namespace App\Models;

use CodeIgniter\Model;

class KatalogModel extends Model
{
    protected $table            = 'katalog';
    protected $primaryKey       = 'id_produk';
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_produk', 'harga_produk', 'stock', 'kategori_produk'];

    // Mengaktifkan timestamps jika tabel Anda punya kolom created_at/updated_at
    // Karena di SQL Anda tidak ada, kita set false
    protected $useTimestamps    = false;
}