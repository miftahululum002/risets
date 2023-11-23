<?php
include 'koneksi.php';
$sql = "DELETE FROM mahasiswa WHERE id = 1";
$update = mysqli_query($con, $sql);
if (!$update) {
    echo 'Gagal menghapus data: ' . mysqli_error($con);
    die;
}
echo 'Berhasil menghapus data';
