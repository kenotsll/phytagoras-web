<?php
session_start(); // Memulai session

// Menghapus semua variabel session
session_unset();

// Menghancurkan session
session_destroy();

// Redirect pengguna ke halaman login atau halaman utama setelah logout
header("Location: login.php");
exit;
?>
