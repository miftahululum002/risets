<?php

function tampilNama()
{
    echo "Miftahul Ulum";
}

// tampilNama();
/*
 tampilAlamat
 param $alamat
 return string
*/
function tampilAlamat($alamat)
{
    $result = 'Kota ' . $alamat;
    return $result;
}
// void function
function tampilBiodata($nama = 'Miftahul', $alamat = 'Malang')
{
    $alamatAsli = tampilAlamat($alamat);
    echo "Nama saya adalah: $nama, alamat saya di: $alamatAsli";
}

// tampilBiodata('Dimas', 'Jakarta');


function tambah($bilangan1, $bilangan2)
{
    $hasil = $bilangan1 + $bilangan2;
    return $hasil;
}

// echo "hasil dari penjumlahan 1 + 2 adalah: " . tambah(1, 2);

// $angka1 = 20;
// $angka2 = 20;
// if ($angka1 <= $angka2) {
//     echo 'Ini adalah benar';
// } else {
//     echo 'Ini adalah salah';
// }

function konversi($nilai)
{
    if ($nilai > 80 && $nilai <= 100) {
        return 'A';
    } elseif ($nilai > 70 && $nilai <= 80) {
        return 'B';
    } elseif ($nilai >= 50 && $nilai <= 70) {
        return 'C';
    } else {
        return 'D';
    }
}

// echo "nilai 75 sama dengan: " . konversi(75);
function cek($nilai)
{
    if ($nilai >= 10) {
        echo "1. Nilai $nilai Ini adalah nilai >= $nilai<br>";
    } else {
        if ($nilai <= 10) {
            echo "2. Nilai $nilai Ini adalah nilai <= $nilai<br>";
        }
        if ($nilai <= 10) {
            echo "3. Nilai $nilai Ini adalah nilai <= $nilai<br>";
        }
        if ($nilai <= 10) {
            echo "4. Nilai $nilai Ini adalah nilai <= $nilai<br>";
        }
    }
}

// swicth 

function pengecekan($opsi)
{
    switch ($opsi) {
        case '1':
            echo "anda memilih opsi $opsi<br>";
            break;
        case '2':
            echo "anda memilih opsi $opsi<br>";
            break;
        default:
            # code...
            echo "default: anda memilih yang tidak masuk opsi<br>";
            break;
    }
}

// pengecekan(2);
// for ($i = 0; $i < 10; $i++) {
//     if ($i == 4) {
//         continue;
//     } else {
//         echo "$i Ini adalah list<br>";
//     }
// }
// echo '<br>=============';

// $k = 0;
// echo '<ol>';
// while ($k < 0) {
//     echo '<li>Ini adalah list</li>';
//     $k++;
// }
// echo '</ol>';

// $i = 0;
// do {
//     echo $i . '<br>';
//     $i++;
// } while ($i < 0);



// array 
// terindeks -> 0
$name = array('miftahul', 'ulum', 'malang');

// assosiative
$employee = [
    'name' => 'Miftahul',
    'gender' => 'Laki-laki',
    'address' => 'Malang',
];


$employees = [
    [
        'name' => 'miftahul1',
        'gender' => 'Laki-laki',
        'address' => 'Malang'
    ],
    [
        'name' => 'miftahul2',
        'gender' => 'Perempuan',
        'address' => 'Malang'
    ],
    [
        'name' => 'miftahul2',
        'gender' => 'Perempuan',
        'address' => 'Jakarta'
    ],
];

foreach ($employees as $key => $value) {
    echo 'Pegawai dengan nama ' . $value['name'] . ' berjenis kelamin ' . $value['gender'] . ' beralamat di ' . $value['address'] . '<br>';
}
