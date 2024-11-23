<?php
define('DB_SERVER', 'localhost'); // Your database server
define('DB_USERNAME', 'root'); // Your database username
define('DB_PASSWORD', ''); // Your database password
define('DB_DATABASE', 'zidnan'); // Your database name

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check connection
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>