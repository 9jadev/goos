
<?php
	include('dbconnect.php');
  	$image = $_FILES['image']['name'];
  	$target = "images/".basename($image);

	$trackid1= mysqli_real_escape_string($con, $_GET['id']);
	$date=  mysqli_real_escape_string($con, $_POST['date']);
$trackid=  mysqli_real_escape_string($con, $_POST['trackid']);
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
 
	if(mysqli_query($con,"INSERT into client (trackid, date, shipper, reciever, origin, package, status, destination, carrier, type, weight, mode, reference, product, qty, pmtmode, freight, delivery, depature, pickupd, pickupt, comments, image) VALUES ('$trackid', '$date', '$shipper', '$reciever', '$origin', '$package', '$status', '$destination', '$carrier', '$type', '$weight', '$mode', '$reference', '$product', '$qty', '$pmtmode', '$freight', '$delivery', '$depature', '$pickupd', '$pickupt', '$comments', '$image')")){
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		header('location:admin.php');
  	}else{
  		header('location:admin.php');
}
	

	};
 
?>