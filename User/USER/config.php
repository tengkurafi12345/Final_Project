<?php
$host = 'localhost'; // Nama host (server MySQL)
$user = 'root'; // Nama pengguna MySQL
$pass = ''; // Password MySQL (kosong jika default)
$dbname = 'bimbel_dtb'; // Nama database yang dibuat

// Membuat koneksi ke MySQL
$conn = new mysqli($host, $user, $pass, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
