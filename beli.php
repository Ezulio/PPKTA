<?php
$idmobil = $_POST['id']
$namamobil= $_POST['nama']
$ktp = $_POST['ktp']
$pembeli = $_POST['pembeli']
$jumlahMobil = $_POST['stok']
$hargaMobil = $_POST['harga']
$karyawan = $_POST['karyawan']

$dbhost= "localhost";
$dbuser="id11576188_user111048";
$dbpass="983ysa65h";
$db="id11576188_tugasppk";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
$sql="update mobil set stok=stok-$jumlahMobil where ID_mobil= $idmobil";
if(mysqli_query($conn, $sql)){
    echo "Berhasil memasukkan data.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
