<?php
// Menghubungkan ke database
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "zidnan"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari tabel users
$sql = "SELECT id, username, email, created_at FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="css/branda.css">
</head>
<body>
    <header>
        <h1>Beranda</h1>
        <nav>
            <ul>
                <li><a href="branda.php">Beranda</a></li>
                <li><a href="register.php">Daftar</a></li>
                <li><a href="login.php">Masuk</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Daftar Pengguna</h2>
        <table border="1" style="width: 100%; border-collapse: collapse;">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal Dibuat</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                // Menampilkan data setiap baris
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['username']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['created_at']}</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Tidak ada data pengguna.</td></tr>";
            }
            ?>
        </table>
    </div>

    <section class="back-to-home">
    <div class="container">
        <a href="home.php" class="btn btn-back">Kembali ke Halaman Utama</a>
    </div>
    </section>

    <footer>
        <p>&copy; Rumah Tahfidz @ 2024 by Zidnan_Course. | all rights reserved!</p>
    </footer>
</body>
</html>

<?php
// Menutup koneksi
$conn->close();
?>