<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'siswa';

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die("gagal". mysqli_connect_error());
} else{
    echo "berhasil";
}

?>