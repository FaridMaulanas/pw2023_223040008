<?php
session_start();
require "functions.php";

if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    header("Location: profile.php");
    exit();
}


function getUserInfo($username)
{

    $conn = koneksi();
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Bersihkan username untuk mencegah SQL injection
    $clean_username = mysqli_real_escape_string($conn, $username);

    // Lakukan query untuk mendapatkan informasi pengguna berdasarkan username
    $query = "SELECT * FROM users WHERE username = '$clean_username'";
    $result = mysqli_query($conn, $query);

    // Periksa query berhasil 
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit();
    }

    // Ambil hasil query
    $users = mysqli_fetch_assoc($result);

    // Tutup koneksi ke database
    mysqli_close($conn);

    return $users;
}

// Ambil informasi pengguna dari tabel "user"
$user = getUserInfo($_SESSION['username']);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Polosan.ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <div class="container">
        <div class="card profile-card">

            <h1>Halo <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></h1>

            <div class="card-img-top profile-img">
                <img src="img/nofoto.jpg" alt="Default Image" class="img-profile">
            </div>
            <div class="card-body profile-info">
                <p><strong>Username: <?php echo $user['username']; ?></strong></p>
                <p><strong>Email: <?php echo $user['email']; ?></strong></p>
            </div>
            <a class="btn btn-secondary logout-link" href="index.php">Back</a>
        </div>