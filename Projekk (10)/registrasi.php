<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];

    $sql = "INSERT INTO pengguna (username, password, nama_lengkap, email)
            VALUES ('$username', '$password', '$nama_lengkap', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrasi berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Pengguna</title>
</head>
<body>
    <form method="POST">
        <label>Username: <input type="text" name="username" required></label><br>
        <label>Password: <input type="password" name="password" required></label><br>
        <label>Nama Lengkap: <input type="text" name="nama_lengkap" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>
