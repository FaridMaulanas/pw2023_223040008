 <?php
    // Koneksi ke database
    $conn = mysqli_connect("nama_host", "nama_pengguna", "kata_sandi", "nama_database");

    // Periksa koneksi
    if (!$conn) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    // Query untuk mengambil data produk
    $sql = "SELECT * FROM Products";
    $result = mysqli_query($conn, $sql);

    // Tampilkan data produk dalam tabel
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>" . $row["stock"] . "</td>";
            echo "<td><a href='edit_product.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete_product.php?id=" . $row["id"] . "'>Hapus</a></td>";
            echo "</tr>";
        }
    }

    // Tutup koneksi
    mysqli_close($conn);
    ?>