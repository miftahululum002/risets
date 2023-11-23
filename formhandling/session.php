<?php
// User : Miftahul

session_start();
$_SESSION['nama'] = 'Miftahul';
// mekanisme login berhasil 
$logicAuth = true;
if ($logicAuth == true) {
    header('Location:session2.php');
}
