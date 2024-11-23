<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "video"; // Ganti dengan nama database kamu

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengecek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $link_url = $_POST['link_url'];
    $description = $_POST['description'];

    // Menyiapkan query untuk menyimpan data ke database
    $sql = "INSERT INTO links (title, link_url, description) VALUES (?, ?, ?)";

    // Menyiapkan statement
    if ($stmt = $conn->prepare($sql)) {
        // Mengikat parameter ke statement
        $stmt->bind_param("sss", $title, $link_url, $description);

        // Mengeksekusi statement
        if ($stmt->execute()) {
            echo "Link berhasil diupload!";
        } else {
            echo "Gagal mengupload link: " . $conn->error;
        }

        // Menutup statement
        $stmt->close();
    }
}

// Menutup koneksi
$conn->close();
?>
<!-- form_upload_link.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Link</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Upload Link Pembelajaran</h1>
        <form action="upload_link.php" method="POST">
            <label for="title">Judul Link</label>
            <input type="text" name="title" id="title" required><br>

            <label for="link_url">URL Link</label>
            <input type="url" name="link_url" id="link_url" required><br>

            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" required></textarea><br>

            <input type="submit" name="submit" value="Upload Link">
        </form>
    </div>
</body>
</html>
