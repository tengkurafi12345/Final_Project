<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Simpan data ke file atau database (opsional)
    $logFile = 'messages.txt';
    $logMessage = "Nama: $name\nEmail: $email\nPesan: $message\n---\n";
    file_put_contents($logFile, $logMessage, FILE_APPEND);

    // Tampilkan pesan sukses
    echo "<script>
            alert('Pesan berhasil dikirim! Terima kasih sudah menghubungi kami.');
            window.location.href = 'contact.php'; 
          </script>";
} else {
    header("Location: contact.php");
    exit();
}
