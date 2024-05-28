<?php
session_start();

function login($username, $password) {
    // Proses otentikasi contoh
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['user'] = $username;
        return true;
    }
    return false;
}

function check_login() {
    return isset($_SESSION['user']);
}

function logout() {
    session_unset();
    session_destroy();
}
?>
