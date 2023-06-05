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

    $Nama_Produk = htmlspecialchars($data['Nama_produk']);
    $Deskripsi = htmlspecialchars($data['Deskripsi']);
    $gambar = htmlspecialchars($data['gambar']);
    $Kategori = htmlspecialchars($data['Kategori']);
    $Harga = htmlspecialchars($data['Harga']);
    $Stock = htmlspecialchars($data['link']);

    $query = "INSERT INTO berita VALUES (null, '$Nama_Produk', '$Deskripsi', '$gambar', '$Kategori', '$Harga', '$Stock')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
