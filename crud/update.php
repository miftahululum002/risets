<?php
include 'koneksi.php';
$sql = "UPDATE mahasiswa SET nama = 'MAHASISWA UBAH' WHERE id = 1";
$update = mysqli_query($con, $sql);
if (!$update) {
    echo 'Gagal mengubah data: ' . mysqli_error($con);
    die;
}
echo 'Berhasil mengubah data';
