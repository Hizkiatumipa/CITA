<?php
// Start session
session_start();

// Hapus semua data session
session_destroy();

// Redirect ke halaman login atau halaman utama
header("Location: login.html"); // Ganti dengan halaman yang sesuai
exit;
?>