<?php
session_start();

// Membersihkan sesi
session_unset();
session_destroy();

// Redirect ke halaman login
header('Location: login.php');
exit();
?>
