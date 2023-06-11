<?php
require 'functions.php';

if (isset($_GET['search'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM 
  produk
  WHERE 
  nama_barang LIKE '%$keyword%' 
  ";
    $produk = query($query);
} else {
    $produk = query("SELECT * FROM produk");
}


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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Polosan.<strong>ID</strong> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-underline mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">DAFTAR</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fas fa-right-from-bracket fa-lg">Logout</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <h3>Daftar Produk</h4>
            <hr>
            <div class="row">
                <div class="col-md-7 ">
                    <a href="tambah.php" class="btn btn-secondary">Tambah Produk</a>
                </div>
                <div class="col-md-5 justify-content-end">
                    <form action="" method="get">
                        <div class="input-group my-3">
                            <input type="search" name="keyword" id="keyword" class="form-control" placeholder="Cari daftar Produk." autofocus autocomplete="off">
                            <button class="btn btn-secondary" type="submit" name="search" id="search-button">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php if ($produk) : ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Harga</th>
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
                                <td><?= $prdk['nama_barang']; ?></td>
                                <td><?= $prdk['deskripsi']; ?></td>
                                <td><?= $prdk['harga']; ?></td>
                                <td>
                                    <a href="ubah.php?id=<?= $prdk['id']; ?>" class="badge text-bg-warning">Ubah</a> |
                                    <a href="hapus.php?id=<?= $prdk['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?');">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>