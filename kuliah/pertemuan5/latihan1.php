<?php
//Array
// membuat array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myarray = ['Farid', 19, false];
$binatang = ['Kucing', 'Kelinci', 'Monyet', 'Koala', 'Sapi'];

// Mencetak Array
// Menambah elemen diakhir menggunakan index
echo $hari[1];
echo "<hr>";
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";
var_dump($myarray);
echo "<hr>";

// Manipulasi Array
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);
echo "<hr>";
// Menambahkan elemen di akhir menggunakan array_push()
array_push($bulan, 'April', 'Mei', 'Juni');
print_r($bulan);
echo "<hr>";
// Menambahkan elemen di awal menggunakan arra7_unshift()
array_unshift($binatang, 'Ular');
print_r($binatang);
echo "<hr>";
// Menghapus elemen di awal, menggunakan array_pop()
array_pop($hari);
print_r($hari);
echo "<hr>";
// menghapus elemen di awal, menggunakan array_shift()
array_shift($hari);
print_r($hari);
