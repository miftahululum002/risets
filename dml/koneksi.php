<?php

$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'siakad';


$con = mysqli_connect($hostname, $username, $password, $database);

if (!$con) {
    die('Koneksi gagal:' . mysqli_connect_error());
}
