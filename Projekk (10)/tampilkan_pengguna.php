<?php
include 'koneksi.php';

$sql = "SELECT id, username, nama_lengkap, email FROM pengguna";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nama: " . $row["nama_lengkap"]. " - Username: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 hasil";
}
$conn->close();
?>
