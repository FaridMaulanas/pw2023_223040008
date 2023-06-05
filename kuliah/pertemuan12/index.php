<?php
require('functions.php');
$name = 'Home';

// koneksi ke DB
$conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040008') or die('KONEKSI GAGAL');
// Queryke tabel mahasiswa 
$result = mysqli_query($conn, "SELECT * FROM mahasiswa") or die(mysqli_error($conn));



$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}


$students = $rows;


require('views/index.view.php');
