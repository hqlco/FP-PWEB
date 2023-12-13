<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: unauthorized.php"); 
    exit(); 
}
$delete = mysqli_query($conn, "DELETE FROM data_bulan WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: bulan.php');
}
else{
	echo 'Gagal upload';
}

?>
