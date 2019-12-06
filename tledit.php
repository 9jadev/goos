<?php
	include('dbconnect.php');
 
	$trackid1= mysqli_real_escape_string($con, $_GET['id']);
	$date=  mysqli_real_escape_string($con, $_POST['date']);
	$type=  mysqli_real_escape_string($con, $_POST['type']);
	$delivery=  mysqli_real_escape_string($con, $_POST['delivery']);
 
		if(mysqli_query($con,"UPDATE client SET dates='$date', type='$type', delivery='$delivery' WHERE trackid='$trackid1'")){
				header('location:admin.php');

			}else{
				echo'error';
			}
			
 
?>