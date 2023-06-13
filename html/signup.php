<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Memeriksa kecocokan password
    if ($password !== $confirm_password) {
        die("Password tidak cocok");
    }

    // Memasukkan data ke database
    $sql = "INSERT INTO tbl_users (email, username, password) VALUES ('$email', '$username', '$password', '$confirm_password')";

    if (mysqli_query($conn, $sql)) {
        header("Location: login.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
