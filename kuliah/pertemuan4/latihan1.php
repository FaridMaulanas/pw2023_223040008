<?php
$angka = 123;
// memeriksa apakah $angka itu bilangan ganjil
// bilangan yang jika dibagi 2 sisanya 1
function cek_ganjil_genap($angka, $nama = 'Admin') // parameter
{
    if ($angka % 2 == 1) {
        echo "$angka adalah bilangan GANJIL!";
    } else {
        echo "$angka adalah bilangan GENAP!";
    }
}

echo cek_ganjil_genap(10, "Farid"); //argument
echo "<br>";
echo cek_ganjil_genap(5, "Farid"); //argument
echo "<br>";
echo cek_ganjil_genap(100, "Farid"); //argument
