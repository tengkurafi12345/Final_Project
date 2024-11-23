<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "zidnan");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data kursus dari database
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursus Kami</title>
    <link rel="stylesheet" href="css/courses.css">
</head>
<body>
    <header>
        <h1>Courses.</h1>
    </header>

    <main>
        <div class="courses-container">
            <div class="course-card">
                <img src="images/matematika.jpg" alt="Matematika Dasar">
                <h3>Matematika Dasar</h3>
                <p>Belajar konsep dasar matematika dengan cara yang menyenangkan.</p>
                <p><strong>Durasi:</strong> 3 Bulan</p>
                <p><strong>Harga:</strong> Rp500.000</p>
                <a href="#" class="btn">Detail</a>
            </div>

            <div class="course-card">
                <img src="images/fisika.jpg" alt="Fisika">
                <h3>Fisika</h3>
                <p>Pahami konsep Fisika dengan eksperimen praktis.</p>
                <p><strong>Durasi:</strong> 4 Bulan</p>
                <p><strong>Harga:</strong> Rp700.000</p>
                <a href="#" class="btn">Detail</a>
            </div>

            <div class="course-card">
                <img src="images/inggris.jpg" alt="Bahasa Inggris">
                <h3>Bahasa Inggris</h3>
                <p>Tingkatkan kemampuan Bahasa Inggris Anda untuk komunikasi sehari-hari.</p>
                <p><strong>Durasi:</strong> 2 Bulan</p>
                <p><strong>Harga:</strong> Rp600.000</p>
                <a href="#" class="btn">Detail</a>
            </div>

            <div class="course-card">
                <img src="images/fisika.2.png" alt="Ilmu Pengetahuan Alam">
                <h3>Ilmu Pengetahuan Alam</h3>
                <p>Pelajari dasar-dasar sains dengan pendekatan eksperimen nyata.</p>
                <p><strong>Durasi:</strong> 5 Bulan</p>
                <p><strong>Harga:</strong> Rp800.000</p>
                <a href="#" class="btn">Detail</a>
            </div>

            <div class="course-card">
                <img src="images/IT.jpg" alt="Dasar Komputer">
                <h3>Dasar Komputer</h3>
                <p>Pahami dasar-dasar komputer dan teknologi digital.</p>
                <p><strong>Durasi:</strong> 3 Bulan</p>
                <p><strong>Harga:</strong> Rp750.000</p>
                <a href="#" class="btn">Detail</a>
            </div>

            <div class="course-card">
                <img src="images/online.jpg" alt="Pemrograman Dasar">
                <h3>Pemrograman Dasar</h3>
                <p>Mulai perjalanan Anda dalam dunia coding dan teknologi.</p>
                <p><strong>Durasi:</strong> 6 Bulan</p>
                <p><strong>Harga:</strong> Rp1.000.000</p>
                <a href="#" class="btn">Detail</a>
            </div>
        </div>
    </main>
    <br>
    <section class="back-to-home">
    <div class="container">
        <a href="home.php" class="btn btn-back">Kembali ke Halaman Utama</a>
    </div>
    </section>
    <br>
    <br>
    <footer>
        <p>&copy; Rumah Tahfidz @ 2024 by Zidnan_Course. | all rights reserved!</p>
    </footer>
</body>
</html>
