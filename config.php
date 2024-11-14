<?php

$server = "localhost:3308";
$user = "root";
$password = "";
$nama_database = "pendaftaran_siswarpl";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>