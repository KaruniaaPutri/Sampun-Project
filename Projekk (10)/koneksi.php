<?php
$servername = "localhost";
$username = "root"; // Ganti sesuai dengan username MySQL Anda
$password = ""; // Ganti sesuai dengan password MySQL Anda
$dbname = "projek_web";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
