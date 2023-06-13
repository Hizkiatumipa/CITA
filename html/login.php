<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['login-email'];
    $password = $_POST['login-password'];

    // Memeriksa login
    $sql = "SELECT * FROM tbl_users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login berhasil
        $_SESSION['username'] = $username;
        echo "<script>alert('Login Berhasil'); setTimeout(function(){ window.location.href = 'profile.html'; }, 0);</script>";
    } else {
        // Login gagal
        $_SESSION['username'] = $username;
        echo "<script>alert('Login gagal. Silakan cek kembali username dan password Anda.'); window.location.href = 'login.html';</script>";
        exit();
    }
}

mysqli_close($conn);
?>
