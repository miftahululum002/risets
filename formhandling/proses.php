<?php
// get
// $nim = $_GET['nim'];
// $password = $_GET['password'];
// echo 'Ini adalah nim: ' . $nim . '<br>';
// echo 'Ini adalah password: ' . $password;
// $param = isset($_GET) ? $_GET : null;
// echo '<pre>';
// print_r($param);
// echo '</pre>';
// die;

// post method
$nim = isset($_POST['nim']) ? $_POST['nim'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
echo 'Ini adalah NIM: ' . $nim . '<br>';
echo 'Ini adalah password: ' . $password;

// $nim = isset($_REQUEST['nim']) ? $_REQUEST['nim'] : null;
// $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
// echo 'Ini adalah nim: ' . $nim . '<br>';
// echo 'Ini adalah password: ' . $password;
