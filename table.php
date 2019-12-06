
<?php 
session_start();

include_once 'conn.php';
include_once 'dbconnect.php';
 ?>


<!DOCTYPE html>
<html>
<head>
		<title> Track / Trace  -  Trans Cargo Ltd.  </title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.css" />

</head>
<body style="background: #e0e1e2;">



<div class="ui text container">
<div class="ui raised segment">

<div class="">
	
<p class="ui right aligned tiny header">
<button class="ui button bt">
<i class="print icon"></i>
    Click here to print</button>
  </p>	


  <br>
  <br>
</div>
<div id="hu">
	

	<div class="ui stackable two column grid">
  <div class="column">
  	<h2>Tracking No: <?php echo $_SESSION['user_trackid'] ?></h2>
  	<br>
  	<i class="massive barcode icon"></i>
  </div>
  <div class="column">
  	<img class="ui medium centered circular image" src="images/<?php echo $_SESSION['image'] ?>">

  </div>
 
  <div class="column"></div>
</div><div class="ui stackable two column grid">
  <div class="column">
  	<div class="ui raised segment">
  		<h4>Shipper Address</h4>
  		<hr>
 
  	
  	<br>
  <?php echo $_SESSION['shipper'] ?>
  </div> 	</div>
 
  <div class="column">
  	<div class="ui raised segment">
  		<h4>Reciever Address</h4>
  		<hr>
 
  	
  	<br>
<?php echo $_SESSION['reciever'] ?>
  </div> 	</div>
  <div class="column"></div>
</div>	<div class="ui grid">
		 <div class="column">
		 	<div class="ui raised segment">
  	<table class="ui table">
  <thead>
    <tr>
      <th>Origin:</th>
      <th>Package:</th>
      <th>Status:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['origin'] ?></td>
      <td><?php echo $_SESSION['package'] ?></td>
      <td><?php echo $_SESSION['status'] ?></td>
    </tr>

  </tbody>  <thead>
    <tr>
      <th>Destination:</th>
      <th>Carrier:</th>
      <th>Type of Shipment:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['destination'] ?></td>
      <td><?php echo $_SESSION['carrier'] ?></td>
      <td><?php echo $_SESSION['type'] ?></td>
    </tr>

  </tbody> <thead>
    <tr>
      <th>Weight:</th>
      <th>Shipment Mode:</th>
      <th>Carrier Reference No.:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['weight'] ?></td>
      <td><?php echo $_SESSION['mode'] ?></td>
      <td><?php echo $_SESSION['reference'] ?></td>
    </tr>

  </tbody> <thead>
    <tr>
      <th>Product:</th>
      <th>Qty:</th>
      <th>Payment Mode:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['product'] ?></td>
      <td><?php echo $_SESSION['qty'] ?></td>
      <td><?php echo $_SESSION['pmtmode'] ?></td>
    </tr>

  </tbody> <thead>
    <tr>
      <th>Total Freight:</th>
      <th>Expected Delivery Date:</th>
      <th>Departure Time:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['freight'] ?></td>
      <td><?php echo $_SESSION['delivery'] ?></td>
      <td><?php echo $_SESSION['depature'] ?></td>
    </tr>

  </tbody> <thead>
    <tr>
      <th>Pick-up Date:</th>
      <th>Pick-up Time:</th>
      <th></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['pickupd'] ?></td>
      <td><?php echo $_SESSION['pickupt'] ?></td>
      <td></td>
     
    </tr>

  </tbody> <thead>
    <tr>
      <th>Comments:</th>
      <th></th>
      <th></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['comments'] ?></td>
     
    </tr>

  </tbody>
</table>
</div>

  </div>

</div>
<div class="ui grid">
	<div class="column">
		

	<div class="ui raised segment">
		<h3>Shipment History</h3>
	<table class="ui red striped table">
  <thead>
    <tr>
      <th>Date</th>
      <th>TIME</th>
      <th>LOCATION</th>
      <th>STATUS</th>
      <th>REMARKS</th>
    </tr>
  </thead>
  <tbody>
  	<?php
		
				include('conn.php');
 
    $query = mysqli_query($conn, "SELECT * FROM info WHERE trackid = '" . $_SESSION['user_trackid']. "' ORDER BY id DESC");
				while($row=mysqli_fetch_array($query)){
					?>
				  <tr>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['time']; ?></td>
      <td><?php echo $row['location']; ?></td>
      <td><?php echo $row['status']; ?></td>
      <td><?php echo $row['remarks']; ?></td>
    </tr>
    <?php
				}
 
			?>
 
 
  </tbody>
</table>
	</div>
</div>

	
</div>
</div>
</div>	
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.js"></script>
<script src="jQuery.print.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script>
	$(".ui.button.bt").on("click", function(){
			$("#hu").print(/*options*/);

	})
</script>
</body>
</html>