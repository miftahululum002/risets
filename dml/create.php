<?php
include 'koneksi.php';

// Insert data ke Mahasiswa

// Tambah data mahasiswa 
// nama = "nama saya" 
// nim = 123456789 
// jenis_kelamin =Laki-laki
// id_prodi = 1
// id_agama = 1
// tahun_masuk = 2023
// id_status_mahasiswa =1 
// email = mail@gmail.com
$sql = "
insert into mahasiswa (nama, nim, jenis_kelamin, id_prodi, id_agama, tahun_masuk, id_status_mahasiswa, email)
values ('nama saya', '123456789', 'Laki-laki', 1, 1, '2023', 1, 'mail@gmail.com')
";

// Eksekusi query 
$create = mysqli_query($con, $sql);
if (!$create) {
    die('Gagal insert data: ' . mysqli_error($con));
}
echo 'Insert berhasil';
