<?php
$hostname = 'localhost';
$username = 'root';
$password = 'bwm';
$database = 'uas-muthi';

$conn = new mysqli($hostname, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal".mysqli_connect_error();
}
