<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="bimbel online, kursus online, belajar fleksibel">
    <meta name="robots" content="index, follow">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zidnan Course - Bimbel online terpercaya dengan kursus interaktif dan fleksibel untuk semua jenjang pendidikan. Daftar sekarang untuk pengalaman belajar terbaik!">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Website Bimbel</title>
    <link rel="stylesheet" href="css/home.css">
    <a href="#" class="back-to-top">Kembali ke Atas</a>
</head>
<body>
    
    <header>
        <div class="container">
            <h1>Zidnan_Course.</h1>
            <nav>
                <ul>
                    <li><a href="register.php">Registrasi</a></li>
                    <li><a href="login.php">login</a></li>
                    <li><a href="about.php">Tentang Kami</a></li>
                    <li><a href="contact.php">Kontak</a></li>
                </ul>
            </nav>

            <!-- <nav class="breadcrumb">
                <a href="index.php">Beranda</a> > 
                <a href="courses.php">Kursus</a> > 
                <span>Detail Kursus</span>
            </nav>             -->
        </div>
    </header>

    <section class="hero" style="background-image: url('images/online.jpg'); background-size: cover; width: 100%; height: 450px;">
        <div class="hero-content">
            <h2>Belajar Dengan Mudah Dimana Saja</h2>
            <p>Dapatkan akses ke kursus yang fleksibel dan berkualitas untuk semua jenjang pendidikan.</p>
            <a href="register.php" class="btn">Daftar Sekarang</a>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h2>Kenapa Memilih Kami?</h2>
            <div class="feature-item">
                <img src="images/zidnan.3.webp" alt="Kelas Interaktif dengan Pengajar Berpengalaman" class="feature-img">
                <h3>Kelas Interaktif</h3>
                <p>Ikuti kursus dengan pengajar yang berpengalaman dan interaktif.</p>
            </div>   
            <div class="feature-item">
                <img src="images/zidnan.2.webp" alt="Kursus Online Fleksibel" class="feature-img">
                <h3>Kursus Online Fleksibel</h3>
                <p>Belajar kapan saja dan di mana saja dengan akses online yang mudah.</p>
            </div>   
            <div class="feature-item">
                <img src="images/sertifikat.jpeg" alt="Sertifikat Resmi" class="feature-img">
                <h3>Sertifikat Resmi</h3>
                <p>Dapatkan sertifikat resmi setelah menyelesaikan kursus.</p>
            </div>   
            <div class="feature-item">
                <img src="images/kelas-interaktif.jpg" alt="Pengajaran Interaktif" class="feature-img">
                <h3>Pengajaran Interaktif</h3>
                <p>Metode pengajaran yang menyenangkan dan interaktif untuk meningkatkan pemahaman.</p>
            </div>            
        </div>
    </section>

    

<footer>
    <div class="container">
        <p>&copy; Rumah Tahfidz @ 2024 by Zidnan_Course. | all rights reserved!</p>
        <ul>
            <li><a href="privacy.php">Kebijakan Privasi</a></li>
            <li><a href="terms.php">Syarat dan Ketentuan</a></li>
            <li><a href="contact.php">Hubungi Kami</a></li>
        </ul>
        <div class="social-media">
            <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
            <a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i> Instagram</a>
            <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
        </div>        
    </div>
</footer>

    <script src="js/script.js"></script>
    <script>
        window.onscroll = function() {
            const button = document.querySelector('.back-to-top');
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                button.style.display = "block";
            } else {
                button.style.display = "none";
            }
        };

        document.querySelector('form').addEventListener('submit', function(e) {
    const name = document.querySelector('input[name="name"]').value;
    const email = document.querySelector('input[name="email"]').value;
    const password = document.querySelector('input[name="password"]').value;

    if (name === '' || email === '' || password === '') {
        alert('Semua kolom harus diisi!');
        e.preventDefault(); // Mencegah pengiriman formulir jika ada kolom kosong
    }
});

        </script>
</body>
</html> 