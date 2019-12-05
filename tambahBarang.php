<?php

$namamobil= $_POST['nama']
$jumlahMobil = $_POST['stok']
$hargaMobil = $_POST['harga']

$dbhost= "localhost";
$dbuser="id11576188_user111048";
$dbpass="983ysa65h";
$db="id11576188_tugasppk";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
$sql="INSERT INTO  mobil values($idmobil,$namaMobil,$jumlahMobil,$hargaMobil)";
if(mysqli_query($conn, $sql)){
    echo "Berhasil memasukkan data.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
