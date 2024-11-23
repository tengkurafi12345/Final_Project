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

// Query untuk mendapatkan semua link
$sql = "SELECT * FROM links ORDER BY uploaded_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menampilkan data setiap link
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . $row['title'] . "</h3>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<a href='" . $row['link_url'] . "' target='_blank'>Klik untuk mengunjungi</a>";
        echo "</div><hr>";
    }
} else {
    echo "Tidak ada link yang tersedia.";
}

// Menutup koneksi
$conn->close();
?>
