<?php
include 'koneksi.php';
$sql = "SELECT * FROM mahasiswa";
$read = mysqli_query($con, $sql);
if (!$read) {
    echo 'Gagal mengambil data: ' . mysqli_error($con);
    die;
}
while ($data = mysqli_fetch_array($read)) {
    echo 'Nama: ' . $data['nama'] . '<br>';
    echo 'NIM: ' . $data['nim'] . '<br>';
    echo 'Alamat: ' . $data['alamat'] . '<br>';
    echo 'Jenis Kelamin: ' . $data['jenis_kelamin'] . '<br>';
}
