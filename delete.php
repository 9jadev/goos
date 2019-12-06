<?php
	include('dbconnect.php');
	$trackid1= mysqli_real_escape_string($con, $_GET['id']);
	mysqli_query($con,"delete from client where trackid='$trackid1'");
	header('location:admin.php');
 
?>