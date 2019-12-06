<?php
	include('conn.php');
 
	$trackid= mysqli_real_escape_string($conn, $_GET['id']);
	$date=  mysqli_real_escape_string($conn, $_POST['date']);
	$location=  mysqli_real_escape_string($conn, $_POST['location']);
	$status=  mysqli_real_escape_string($conn, $_POST['status']);
	$time=  mysqli_real_escape_string($conn, $_POST['time']);
	$remarks=  mysqli_real_escape_string($conn, $_POST['remarks']);
 
	if(mysqli_query($conn,"INSERT into info (trackid, date, location, status, time, remarks) VALUES ('$trackid', '$date', '$location', '$status', '$time', '$remarks')")){
	header('location:admin.php');

	};
 
?>