<?php
$idMobil = $_POST['idMobil']
$namaMobil= $_POST['namaMobil'];
$jumlahMobil= $_POST['jumlahMobil']
$hargaMobil = $_POST['hargaMobil']

$dbhost= "localhost";
$dbuser="web111048";
$dbpass="projekppk";
$dbpass="tugasakhirppk";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
$sql="UPDATE Mobil set namaMobil=$namaMobil ,jumlahMobil=$jumlahMobil,hargaMobil=$hargaMobil where mobil_ID=$idMobil";
if(mysqli_query($conn, $sql)){
    echo "Berhasil mengubah data.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
