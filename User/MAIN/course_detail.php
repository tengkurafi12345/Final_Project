<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "zidnan");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data kursus berdasarkan ID
$id = $_GET['id'];
$sql = "SELECT * FROM courses WHERE id = $id";
$result = $conn->query($sql);
$course = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kursus</title>
    <link rel="stylesheet" href="css/courses.css">
</head>
<body>
    <header>
        <h1>Detail Kursus</h1>
    </header>

    <main>
        <div class="course-detail-container">
            <div class="course-image">
                <img src="images/math.jpg" alt="Matematika Dasar">
            </div>
            <div class="course-info">
                <h2>Matematika Dasar</h2>
                <p>Pelajari dasar-dasar matematika dengan metode pembelajaran inovatif yang menyenangkan dan efektif.</p>
                <p><strong>Durasi:</strong> 3 Bulan</p>
                <p><strong>Harga:</strong> Rp500.000</p>
                <a href="courses.php" class="btn">Kembali</a>
            </div>
        </div>
    </main>
</body>
</html>

