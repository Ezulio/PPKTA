<?php

$namaPetugas= $_POST['namaPetugas'];

$dbhost= "localhost";
$dbuser="id11576188_user111048";
$dbpass="983ysa65h";
$db="id11576188_tugasppk";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
$sql="INSERT INTO karyawan values('$namaPetugas')";
if(mysqli_query($conn, $sql)){
    $message = "Data Berhasil Dimasukkan";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
