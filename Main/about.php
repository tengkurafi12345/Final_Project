<?php
// Koneksi ke database
$servername = "localhost"; // Ganti dengan server Anda jika berbeda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "zidnan"; // Nama database yang telah Anda buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari tabel about
$sql = "SELECT title, content FROM about WHERE id = 1"; // Mengambil data dengan id 1
$result = $conn->query($sql);

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami</title>
  <link rel="stylesheet" href="css/about.css">
</head>
<body>
  <header>
    <h1>Tentang Kami</h1>
  </header>
  <main>
    <!-- Profil Singkat -->
    <section class="about-section">
      <h2>Profil Singkat</h2>
      <p>Lembaga bimbingan belajar kami didirikan pada tahun 2020 dengan tujuan utama membantu siswa mencapai prestasi akademik terbaik mereka. Kami berkomitmen untuk mendidik generasi cerdas dan berakhlak.</p>
    </section>

    <!-- Visi & Misi -->
    <section class="about-section">
      <h2>Visi & Misi</h2>
      <h3>Visi</h3>
      <p>"Menciptakan generasi cerdas dan berakhlak."</p>
      <h3>Misi</h3>
      <ul>
        <li>Memberikan pendidikan berkualitas melalui pendekatan personal.</li>
        <li>Mengembangkan potensi siswa sesuai dengan kebutuhan mereka.</li>
        <li>Menyediakan materi ajar yang relevan dan menarik.</li>
      </ul>
    </section>

    <!-- Struktur Pengajar & Staf -->
    <section class="about-section">
      <h2>Struktur Pengajar & Staf</h2>
      <div class="staff">
        <div class="staff-member">
          <img src="images/dino.jpg" alt="Pengajar 1">
          <p><strong>Ahmad Syarif</strong><br>Matematika</p>
        </div>
        <div class="staff-member">
          <img src="images/dino.jpg" alt="Pengajar 2">
          <p><strong>Siti Nurhaliza</strong><br>Bahasa Inggris</p>
        </div>
        <div class="staff-member">
          <img src="images/dino.jpg" alt="Pengajar 3">
          <p><strong>Rina Kartika</strong><br>Fisika</p>
        </div>
      </div>
    </section>

    <!-- Sertifikasi & Akreditasi -->
    <section class="about-section">
      <h2>Sertifikasi & Akreditasi</h2>
      <p>Lembaga kami telah diakreditasi oleh Badan Akreditasi Nasional dan memiliki sertifikasi resmi. Berikut adalah beberapa dokumen penting:</p>
      <img src="images/sertifikat.jpeg" alt="Sertifikasi" class="certification">
    </section>

    <section class="back-to-home">
    <div class="container">
        <a href="home.php" class="btn btn-back">Kembali ke Halaman Utama</a>
    </div>
    </section>


  </main>
  <footer>
    <p>&copy; Rumah Tahfidz @ 2024 by Zidnan_Course. | all rights reserved!</p>
  </footer>
</body>
</html>
