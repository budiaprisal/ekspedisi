<?php

$server = 'localhost';
$username = 'root';
$password = '';
$namaDB = 'db_ekpedisi';


$koneksi  = mysqli_connect($server,$username, $password, $namaDB);

if (!$koneksi) {
    die(mysqli_errno($koneksi));
}