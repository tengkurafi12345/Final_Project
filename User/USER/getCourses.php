<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "zidnan_bimbel";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data courses
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Paket Kursus</title>
</head>

<body>
    <div class="container">
        <h1>Daftar Paket Kursus</h1>
        <div class="course-list">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='course-item'>";
                    echo "<img src='" . $row['image'] . "' alt='" . $row['name'] . "'>";
                    echo "<h2>" . $row['name'] . "</h2>";
                    echo "<p>" . $row['description'] . "</p>";
                    echo "<p><strong>Level:</strong> " . $row['level'] . "</p>";
                    echo "<p><strong>Harga:</strong> Rp" . number_format($row['price'], 0, ',', '.') . "</p>";
                    echo "<button onclick=\"redirectToWhatsApp('" . $row['name'] . "')\">Daftar</button>";
                    echo "</div>";
                }
            } else {
                echo "<p>Belum ada paket kursus tersedia.</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>
<?php $conn->close(); ?>
