<?php
$mahasiswa = [
    [
        "nama" => "Farid Maulana Suherman",
        "nrp" => "223040008",
        "email" => "faridmaulanas@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "farid.png"

    ],
    [
        "nama" => "Daffaa Aprilino",
        "nrp" => "2230400025",
        "email" => "Daffaaprilino@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "daffa.jfif"

    ],
    [
        "nama" => "Daniel Satya R",
        "nrp" => "223040011",
        "email" => "danielsatyar@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "daniel.jfif"

    ],
    [
        "nama" => "Alvin Abdul Sahab",
        "nrp" => "2230400032",
        "email" => "Alvinabdulsahab@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "alvin.jfif"

    ],
    [
        "nama" => "Muhammad Alghifari",
        "nrp" => "223040001",
        "email" => "halfungget@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "algi.jfif"

    ],
    [
        "nama" => "Muhammad Alfa Rizky",
        "nrp" => "223040009",
        "email" => "muhammadalfar@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "alfa.png"

    ],
    [
        "nama" => "Akbar Nur Iman",
        "nrp" => "223040006",
        "email" => "akbarnuriman@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "akbar.jfif"

    ],
    [
        "nama" => "Jerry Cerdian",
        "nrp" => "223040027",
        "email" => "jerrycerdian@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "jerry.jfif"

    ],
    [
        "nama" => "Miftah Fauzi",
        "nrp" => "223040019",
        "email" => "mifuzii@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "miftah.jfif"

    ],
    [
        "nama" => "George Fredrik Pingak",
        "nrp" => "223040016",
        "email" => "joofredrik@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "george.png"

    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<? $mhs["gambar"]; ?>">
            </li>
            <li>Nama :<?= $mhs["nama"]; ?> </li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan :<?= $mhs["jurusan"] ?></li>
            <li>Email :<?= $mhs["email"] ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>