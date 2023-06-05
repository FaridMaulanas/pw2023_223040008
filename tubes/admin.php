<?php
require 'functions.php';

$produk = query("SELECT * FROM produk");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Polosan.ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h4>Halo, Selamat datang Admin Polosan.ID</h4>
            </a>
        </div>
    </nav>
    <div class="container mt-3">
        <h3>Daftar Produk</h4>
            <hr>
            <a href="tambah.php" class="btn btn-secondary">Tambah Produk</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($produk as $prdk) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td>
                                <img src="img/<?= $prdk['gambar']; ?>" width="50">
                            </td>
                            <td><?= $prdk['Nama_Barang']; ?></td>
                            <td><?= $prdk['Deskripsi']; ?></td>
                            <td><?= $prdk['Kategori']; ?></td>
                            <td><?= $prdk['Harga']; ?></td>
                            <td><?= $prdk['stock']; ?></td>
                            <td>
                                <a href="ubah.php?id=<?= $prdk['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                                <a href="hapus.php?id=<?= $prdk['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>