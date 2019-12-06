<?php
	include('conn.php');
	$location= mysqli_real_escape_string($conn, $_GET['location']);
	$trackid= mysqli_real_escape_string($conn, $_GET['id']);
	mysqli_query($conn,"DELETE FROM info WHERE `location` = '$location' AND `trackid` = '$trackid'");
		# code...
			header('location:admin.php');
// echo $location;

	
 
?>