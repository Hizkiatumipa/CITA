<?php
$host = "localhost";
$username = "id20906969_createyourcita1";
$password = "@Createyourcita1";
$database = "id20906969_db_upload";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
