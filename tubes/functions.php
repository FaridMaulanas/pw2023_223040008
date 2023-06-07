<?php
function koneksi()
{
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "tubes";

    return mysqli_connect($server, $user, $pass, $database);
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama_barang = htmlspecialchars($data['nama_barang']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO produk VALUES (null, '$gambar', '$nama_barang', '$deskripsi', '$harga')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    $query = "DELETE FROM produk WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data["id"];
    $gambar = htmlspecialchars($data['gambar']);
    $nama_barang = htmlspecialchars($data['nama_barang']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);


    $query = "UPDATE produk SET
            gambar = '$gambar',
            nama_barang = '$nama_barang',
            deskripsi = '$deskripsi',
            harga = '$harga'
            WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
