<?php
include 'sesi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($username, $password)) {
        header('Location: profil.php');
    } else {
        echo 'Login gagal';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label>Username: <input type="text" name="username" required></label>
        <br>
        <label>Password: <input type="password" name="password" required></label>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
