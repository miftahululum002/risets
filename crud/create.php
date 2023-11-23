<?php

include 'koneksi.php';

$sql = "INSERT INTO mahasiswa(nim, nama, jenis_kelamin,
    alamat, id_prodi, id_agama, tahun_masuk, no_hp,
    email, id_status_mahasiswa) 
    VALUES(
    '12345', 'MAHASISWA 1', 'Laki-laki', 'Jl. Jalan', 1,
    1, '2020', '08123456789','mail@gmail.com', 1
)";
$insert = mysqli_query($con, $sql);
if (!$insert) {
    echo 'Gagal insert: ' . mysqli_error($con);
    die;
}
echo 'Berhasil Insert Data';
