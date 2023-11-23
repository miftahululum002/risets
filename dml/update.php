<?php
include 'koneksi.php';


// buat query untuk mengubah data mahasiswa dengan id = 2
// update nama -> Nama masing-masing
// nim -> NIM masing-masing
// jenis_kelamin -> Jenis kelamin masing-masing
$sql = "
UPDATE mahasiswa
SET nama = 'sandi', nim = '362155401063'
WHERE id = 2
";

$update = mysqli_query($con, $sql);
if (!$update) {
    die('Update data gagal: ' . mysqli_error($con));
}
echo "Update data berhasil";
