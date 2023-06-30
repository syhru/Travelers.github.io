<?php

$server = 'localhost';
$user = 'root';
$password = '';
$dbName = 'tiket_wisata';

$conn = mysqli_connect($server, $user, $password, $dbName);

if (!$conn) {
    die('Gagal terhubung dengan database: ' . mysqli_connect_error());
}
?>