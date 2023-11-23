<?php

include 'koneksi.php';


// / buat query untuk menampilkan semua data mahasiswa 
$sql = "
SELECT * FROM mahasiswa";

$read = mysqli_query($con, $sql);
if (!$read) {
    die('Read data gagal: ' . mysqli_error($con));
}
while ($d = mysqli_fetch_array($read)) {
    echo 'Nama: ' . $d['nama'] . '<br>';
    echo 'NIM: ' . $d['nim'] . '<br>';
    echo 'Jenis Kelamin: ' . $d['jenis_kelamin'] . '<br>';
    echo 'Email: ' . $d['email'] . '<br>';
}
