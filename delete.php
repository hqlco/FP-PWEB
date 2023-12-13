<?php
include 'db.php';
session_start();

// Check if the user is logged in and has the role of admin
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    // Redirect to another page or show an error message
    header("Location: unauthorized.php"); // Redirect to an unauthorized page
    exit(); // Stop further execution of the current page
}
$delete = mysqli_query($conn, "DELETE FROM data_minggu WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: minggu.php');
}
else{
	echo 'Gagal upload';
}

?>
