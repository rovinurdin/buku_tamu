<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "buku_tamu";

//membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $db) or die("Koneksi Gagal");
