<?php
$idMobil = $_POST['idMobil']
$namaMobil= $_POST['namaMobil'];
$jumlahMobil= $_POST['jumlahMobil']
$hargaMobil = $_POST['hargaMobil']

$dbhost= "localhost";
$dbuser="id11576188_user111048";
$dbpass="983ysa65h";
$db="id11576188_tugasppk";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
$sql="DELETE from mobil where ID_mobil=$idMobil";
if(mysqli_query($conn, $sql)){
    echo "Berhasil menghapus data";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
