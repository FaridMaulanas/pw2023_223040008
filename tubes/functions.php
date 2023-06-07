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

    $nama_barang = htmlspecialchars($data['nama_barang']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $gambar = htmlspecialchars($data['gambar']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO produk VALUES (null, '$nama_barang', '$deskripsi', '$gambar', '$harga')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
