<?php
	include('dbconnect.php');
 $image = $_FILES['image']['name'];
  	$target = "images/".basename($image);
	$trackid1= mysqli_real_escape_string($con, $_GET['id']);
	$date=  mysqli_real_escape_string($con, $_POST['date']);
	$shipper=  mysqli_real_escape_string($con, $_POST['shipper']);
	$reciever=  mysqli_real_escape_string($con, $_POST['reciever']);
	$origin=  mysqli_real_escape_string($con, $_POST['origin']);
	$package=  mysqli_real_escape_string($con, $_POST['package']);
	$status=  mysqli_real_escape_string($con, $_POST['status']);
	$destination=  mysqli_real_escape_string($con, $_POST['destination']);
	$carrier=  mysqli_real_escape_string($con, $_POST['carrier']);
	$type=  mysqli_real_escape_string($con, $_POST['type']);
	$weight=  mysqli_real_escape_string($con, $_POST['weight']);
	$mode=  mysqli_real_escape_string($con, $_POST['mode']);
	$reference=  mysqli_real_escape_string($con, $_POST['reference']);
	$product=  mysqli_real_escape_string($con, $_POST['product']);
	$qty=  mysqli_real_escape_string($con, $_POST['qty']);
	$pmtmode=  mysqli_real_escape_string($con, $_POST['pmtmode']);
	$freight=  mysqli_real_escape_string($con, $_POST['freight']);
	$delivery=  mysqli_real_escape_string($con, $_POST['delivery']);
	$depature=  mysqli_real_escape_string($con, $_POST['depature']);
	$pickupd=  mysqli_real_escape_string($con, $_POST['pickupd']);
	$pickupt=  mysqli_real_escape_string($con, $_POST['pickupt']);
	$comments=  mysqli_real_escape_string($con, $_POST['comments']);

 
		if(mysqli_query($con,"UPDATE client SET date='$date', shipper='$shipper',reciever='$reciever',origin='$origin', package='$package', status='$status', destination='$destination', carrier='$carrier', type='$type', weight='$weight', mode='$mode', reference='$reference', product='$product', qty='$qty', pmtmode='$pmtmode', freight='$freight', delivery='$delivery', depature='$depature', pickupd='$pickupd', pickupt='$pickupt', comments='$comments', image='$image' WHERE trackid='$trackid1'")){
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		header('location:admin.php');
			

			}

else{
  		header('location:admin.php');
}		
	}
			
 
?>