<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti jika diperlukan
$password = ""; // Ganti jika diperlukan
$dbname = "zidnan";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses formulir jika disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validasi input
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Siapkan dan jalankan pernyataan SQL
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "<p>Pesan Anda telah dikirim!</p>";
        } else {
            echo "<p>Terjadi kesalahan: " . $stmt->error . "</p>";
        }

        $stmt->close();
    } else {
        echo "<p>Silakan isi semua kolom.</p>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Zidnan Course</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

<header>
    <div class="container">
        <h1>Zidnan_Course.</h1>
        <nav>
            <ul>
                <!-- <li><a href="branda.php">Branda</a></li> -->
                <li><a href="about.php">Tentang Kami</a></li>
                <li><a href="courses.php">Kursus</a></li>
                <li><a href="contact.php" class="active">Kontak</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="contact-form">
    <div class="container">
        <h2>Hubungi Kami</h2>
        <p>Jika Anda memiliki pertanyaan, keluhan, atau saran, silakan kirimkan pesan kepada kami melalui formulir di bawah ini.</p>
        <form action="process_contact.php" method="POST">
            <input type="text" name="name" placeholder="Nama Anda" required>
            <input type="email" name="email" placeholder="Email Anda" required>
            <textarea name="message" placeholder="Pesan atau Keluhan Anda" required></textarea>
            <button type="submit" class="btn">Kirim Pesan</button>
        </form>
    </div>
</section>

<section class="contact-details">
    <div class="container">
        <h2>Detail Kontak</h2>
        <ul>
            <li><strong>Nomor Telepon:</strong> +62 812-3456-7890</li>
            <li><strong>Email:</strong> info@zidnancourse.com</li>
            <li><strong>WhatsApp:</strong> +62 856-1234-5678</li>
        </ul>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank">Facebook</a>
            <a href="https://instagram.com" target="_blank">Instagram</a>
            <a href="https://twitter.com" target="_blank">Twitter</a>
        </div>
    </div>
</section>

<section class="back-to-home">
    <div class="container">
        <a href="home.php" class="btn btn-back">Kembali ke Halaman Utama</a>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; Rumah Tahfidz @ 2024 by Zidnan_Course. | all rights reserved!</p>
    </div>
</footer>

</body>
</html>
