<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zidnan Bimbel menawarkan paket bimbel terbaik untuk Matematika, Fisika, dan Bahasa Inggris. Gabung sekarang!">
    <meta name="keywords" content="Bimbel, Kursus, Matematika, Fisika, Bahasa Inggris, Pendidikan, Zidnan">
    <meta name="author" content="Zidnan Course">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Zidnan Bimbel</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="getCourses.php">Paket Kursus</a>
        <a href="siswa.php">Siswa</a>
        <a href="guru.php">Guru</a>
        <a href="blog.php">Blog</a>
        <a href="testimonial.php">Testimonial</a>
        <a href="buku-media.php">Buku & Media</a>
    </div>

    <!-- Header -->
    <header>
        <h1>Selamat Datang di Zidnan Bimbel</h1>
        <p>Temukan paket bimbel terbaik sesuai kebutuhan Anda</p>
    </header>

    <!-- Konten Utama -->
    <div class="container" id="home">
        <h1>Paket Bimbel Kami</h1>
        <p>Pilih paket bimbel yang sesuai dan klik daftar untuk memulai proses pendaftaran.</p>

        <!-- Daftar Paket Bimbel -->
        <div class="course-container">
            <div class="course-package">
                <img src="img/matematika.jpg" alt="Paket Matematika Dasar">
                <h2>Paket Matematika Dasar</h2>
                <p>Untuk siswa SD - SMP</p>
                <p>Harga: Rp300.000/bulan</p>
                <button onclick="redirectToWhatsApp('Paket Matematika Dasar')">Daftar</button>
            </div>
            <div class="course-package">
                <img src="img/fisika.jpg" alt="Paket Fisika SMA">
                <h2>Paket Fisika SMA</h2>
                <p>Untuk siswa SMA</p>
                <p>Harga: Rp350.000/bulan</p>
                <button onclick="redirectToWhatsApp('Paket Fisika SMA')">Daftar</button>
            </div>
            <div class="course-package">
                <img src="img/inggris.jpg" alt="Paket Bahasa Inggris">
                <h2>Paket Bahasa Inggris</h2>
                <p>Untuk semua tingkat</p>
                <p>Harga: Rp400.000/bulan</p>
                <button onclick="redirectToWhatsApp('Paket Bahasa Inggris')">Daftar</button>
            </div>
        </div>

        <div class="course-container2">
            <div class="course-package2">
                <img src="img/matematika.jpg" alt="Paket Matematika Dasar">
                <h3>Keunggulan Paket Matematika Dasar</h3>
                <h4><b>Keunggulan Paket:</b></h4>
                <p><b>* Materi Terstruktur: Pembahasan konsep dasar hingga soal latihan yang disusun sistematis, memudahkan siswa memahami Matematika secara bertahap.</b></p>
                <p><b>* Tutor Berpengalaman: Didukung oleh pengajar profesional yang siap membantu menjawab setiap pertanyaan.</b></p>
                <p><b>* Latihan Soal Intensif: Tersedia soal dan kuis yang bervariasi untuk meningkatkan pemahaman dan kemampuan siswa.</b></p>
                <p><b>* Metode Belajar Interaktif: Kelas yang didesain untuk mengajak siswa aktif dan menyukai Matematika.</b></p>
                <p><b>Yuk, gabung sekarang dan buat Matematika lebih mudah!</b></p>
            </div>

            <div class="course-package2">
                <img src="img/fisika.jpg" alt="Paket Fisika SMA">
                <h3>Keunggulan Paket Fisika SMA</h3>
                <h4><b>Keunggulan Paket:</b></h4>
                <p><b>* Materi Terstruktur: Pembahasan konsep dasar hingga soal latihan yang disusun sistematis, memudahkan siswa memahami Fisika secara bertahap.</b></p>
                <p><b>* Tutor Berpengalaman: Didukung oleh pengajar profesional yang siap membantu menjawab setiap pertanyaan.</b></p>
                <p><b>* Latihan Soal Intensif: Tersedia soal dan kuis yang bervariasi untuk meningkatkan pemahaman dan kemampuan siswa.</b></p>
                <p><b>* Metode Belajar Interaktif: Kelas yang didesain untuk mengajak siswa aktif dan menyukai Fisika.</b></p>
                <p><b>Yuk, gabung sekarang dan buat Fisika lebih mudah!</b></p>
            </div>

            <div class="course-package2">
                <img src="img/inggris.jpg" alt="Paket Bahasa Inggris">
                <h3>Keunggulan Paket Bahasa Inggris</h3>
                <h4><b>Keunggulan Paket:</b></h4>
                <p><b>* Materi Terstruktur: Pembahasan konsep dasar hingga soal latihan yang disusun sistematis, memudahkan siswa memahami Bahasa Inggris secara bertahap.</b></p>
                <p><b>* Tutor Berpengalaman: Didukung oleh pengajar profesional yang siap membantu menjawab setiap pertanyaan.</b></p>
                <p><b>* Latihan Soal Intensif: Tersedia soal dan kuis yang bervariasi untuk meningkatkan pemahaman dan kemampuan siswa.</b></p>
                <p><b>* Metode Belajar Interaktif: Kelas yang didesain untuk mengajak siswa aktif dan menyukai Bahasa Inggris.</b></p>
                <p><b>Yuk, gabung sekarang dan buat Bahasa Inggris lebih mudah!</b></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; Rumah Tahfidz @ 2024 by Zidnan_Course. | All rights reserved!</p>
        <p>
        <a href="https://facebook.com/zidnanbimbel" target="_blank">
            <i class="fab fa-facebook" style="font-size: 30px; margin-right: 10px;"></i>
        </a>
        <a href="https://instagram.com/zidnanbimbel" target="_blank">
            <i class="fab fa-instagram" style="font-size: 30px; margin-right: 10px;"></i>
        </a>
        <a href="https://twitter.com/zidnanbimbel" target="_blank">
            <i class="fab fa-twitter" style="font-size: 30px; margin-right: 10px;"></i>
        </a>
        <a href="#kontak">
            <i class="fas fa-envelope" style="font-size: 30px;"></i>
        </a>
    </p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>