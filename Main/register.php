<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "zidnan";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = trim($_POST["username"]); // Ganti name dengan username
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);
    $phone = trim($_POST["phone"]);
    $address = trim($_POST["address"]);
    $age = (int)$_POST["age"];
    $guardian = trim($_POST["guardian"]);

    // Validasi input
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password) || empty($phone) || empty($address) || empty($age) || empty($guardian)) {
        $errors[] = "Semua field harus diisi.";
    }
    if ($password !== $confirm_password) {
        $errors[] = "Kata sandi dan konfirmasi kata sandi tidak cocok.";
    }

    // Jika tidak ada error, simpan data ke database
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, phone, address, age, guardian) VALUES (?, ?, ?, ?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("sssssis", $username, $email, $hashed_password, $phone, $address, $age, $guardian);
            if ($stmt->execute()) {
                // Setelah berhasil mendaftar, arahkan ke halaman login
                header("Location: login.php");
                exit(); // Pastikan untuk keluar setelah mengarahkan
            } else {
                echo "<div class='alert alert-danger'>Terjadi kesalahan. Silakan coba lagi.</div>";
            }
            $stmt->close();
        } else {
            echo "<div class='alert alert-danger'>Terjadi kesalahan dalam persiapan query.</div>";
        }
    } else {
        // Tampilkan error
        echo "<div class='alert alert-danger'>";
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        echo "</div>";
    }
}

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pendaftaran</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Register</h1>
            <nav>
                <ul>
                    <li><a href="branda.php">Beranda</a></li>
                    <li><a href="register.php">Daftar</a></li>
                    <li><a href="login.php">Masuk</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <h2>Daftar Akun Baru</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Konfirmasi Kata Sandi:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="form-group">
            <label for="phone">Nomor HP:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat Lengkap:</label>
                <textarea id="address" name="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="age">Usia:</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="guardian">Nama Wali/Orang Tua:</label>
                <input type="text" id="guardian" name="guardian" required>
            </div>
            <button type="submit">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="login.php">Masuk di sini</a></p>
    </div>

    <footer>
        <div class="container">
            <p>&copy; Rumah Tahfidz @ 2024 by Zidnan_Course. | all rights reserved!</p>
        </div>
    </footer>
</body>
</html>