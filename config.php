<?php
$host = 'localhost';
$dbname = 'dbpetshop';
$user = 'root';
$pass = '';

$conn = mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
    die("Koneksi Gagal" . mysqli_connect_error());
}
// echo "Berhasil";

?>