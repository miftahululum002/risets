<?php
include 'koneksi.php';


// buat query delete 
// hpus data mahasiswa dengan id = 2
$sql = "
DELETE FROM mahasiswa
WHERE id =  2
";

// eksekusi query 
$delete  = mysqli_query($con, $sql);
if (!$delete) {
    die('delete data gagal: ' . mysqli_error($con));
}

echo 'Delete berhasil';
