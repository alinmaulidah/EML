<?php
$host="localhost";
$user="root";
$pass="";
$db="eml";

$koneksi=mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Gagal Terkoneksi");
}else{
    echo "koneksi berhasil";
}