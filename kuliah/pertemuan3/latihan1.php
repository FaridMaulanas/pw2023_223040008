<?php
// Pengulangan While 
// 1. Inisialisasi / Nilai awal
// 2. Kondisi Terminasi / kapan pengulangannya berhenti 
// 3. Increment / Decrement
$nilai_awal = 1; // Inisialisasi
while ($nilai_awal <= 10) { // Kondisi Terminasi 
    echo "Hello World $nilai_awal x<br>";
    $nilai_awal++; // Increment / Decrement
}
echo "<hr>";
// for
for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal++) {
    echo "Hello World $nilai_awal x<br>";
}
