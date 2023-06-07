<?php
require('functions.php');

$name = 'ubah produk';
$id = $_GET['id'];
$brt = query("SELECT * FROM berita WHERE id = $id")[0];

if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'admin.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
<div class="container mt-3">
    <h1>Ubah produk</h1>


    <div class="row">
        <div class="col-md-8">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $prdk['id']; ?>">
                <div class="mb-3 w-25">
                    <label for="nama_barang" class="form-label">nama barang</label>
                    <input type="text" class="form-control" name="nama_barang" id="nama_barang" autofocus required value="<?= $prdk['nama_barang']; ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?= $prdk['deskripsi']; ?>">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="text" class="form-control" name="gambar" id="gambar" value="<?= $prdk['gambar']; ?>">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">harga</label>
                    <input type="date" class="form-control" name="harga" id="harga" value="<?= $prdk['harga']; ?>">
                </div>
                <button class=" btn btn-primary" type="submit" name="ubah">Ubah Data</button>
            </form>
        </div>
    </div>

</div>

</html>