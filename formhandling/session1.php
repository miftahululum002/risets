<?php

$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : null;
echo $nama;
