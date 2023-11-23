<?php
$hostname = '127.0.0.1';
$username = 'roots';
$password = '';
$database = '';


// $con = mysqli_connect($hostname, $username, $password, $database);
// if (!$con) {
//     echo mysqli_connect_error();
//     die;
// }
// echo 'Koneksi berhasil';


$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
    echo 'Koneksi gagal OOP: ' . $conn->connect_error;
    die;
}
echo 'Koneksi berhasil OOP';
