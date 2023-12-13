<?php
session_start();

// Hapus semua variabel session
session_unset();

// Hancurkan session
session_destroy();

// Redirect ke halaman login atau halaman lainnya setelah logout
header("Location: login.php"); // Ganti login.php dengan halaman yang sesuai
exit();
?>
