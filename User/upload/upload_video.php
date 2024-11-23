// upload_video.php
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

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $video = $_FILES['video'];

    // Cek apakah file yang di-upload adalah video
    $allowedTypes = array('mp4', 'avi', 'mov', 'mkv');
    $videoType = strtolower(pathinfo($video['name'], PATHINFO_EXTENSION));

    if (in_array($videoType, $allowedTypes)) {
        // Tentukan direktori untuk menyimpan video
        $targetDir = "uploads/videos/";
        $targetFile = $targetDir . basename($video['name']);

        // Pindahkan video ke server
        if (move_uploaded_file($video['tmp_name'], $targetFile)) {
            // Masukkan data video ke dalam database
            $stmt = $conn->prepare("INSERT INTO videos (title, description, video_url) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $title, $description, $targetFile);

            if ($stmt->execute()) {
                echo "Video berhasil diupload!";
            } else {
                echo "Gagal menyimpan informasi video ke database!";
            }

            $stmt->close();
        } else {
            echo "Gagal meng-upload video.";
        }
    } else {
        echo "Hanya format video yang diperbolehkan!";
    }
}
$conn->close();
?>

<!-- form_upload_video.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/upload_video.css">
    <title>Upload Video</title>
</head>
<body>
    <div class="container">
        <h1>Upload Video Pembelajaran</h1>
        <form action="upload_video.php" method="POST" enctype="multipart/form-data">
            <label for="title">Judul Video</label>
            <input type="text" name="title" id="title" required><br>

            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" required></textarea><br>

            <label for="video">Pilih Video</label>
            <input type="file" name="video" id="video" accept="video/*" required><br>

            <input type="submit" name="submit" value="Upload Video">
        </form>
    </div>
</body>
</html>
