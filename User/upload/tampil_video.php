<!-- tampil_video.php -->
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

$sql = "SELECT * FROM videos ORDER BY uploaded_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . $row['title'] . "</h3>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<video width='320' height='240' controls>
                <source src='" . $row['video_url'] . "' type='video/mp4'>
                Your browser does not support the video tag.
            </video>";
        echo "</div><hr>";
    }
} else {
    echo "Tidak ada video yang tersedia.";
}

$conn->close();
?>

<link rel="stylesheet" href="css/tampil_video.css">