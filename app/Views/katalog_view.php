<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Katalog Produk</title>
    <!-- Menggunakan Bootstrap 5 CSS via CDN untuk tampilan yang rapi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Daftar Katalog Produk</h1>
        
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                Data Produk
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Looping data dari Controller -->
                        <?php if(!empty($produk)): ?>
                            <?php foreach($produk as $index => $row): ?>
                            <tr>
                                <td><?= $index + 1; ?></td>
                                <td><?= esc($row['nama_produk']); ?></td>
                                <td>
                                    <span class="badge bg-info text-dark">
                                        <?= esc($row['kategori_produk']); ?>
                                    </span>
                                </td>
                                <td>Rp <?= number_format($row['harga_produk'], 0, ',', '.'); ?></td>
                                <td><?= esc($row['stock']); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data produk.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>