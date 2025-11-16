<?php
$host = "localhost";
$user = "root"; // default XAMPP
$pass = "";     // kosongkan kalau belum diatur
$db   = "db_lextra";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
