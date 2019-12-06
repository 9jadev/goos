
<?php 
include('dbconnect.php'); 
include('conn.php'); 
session_start();

if(isset($_SESSION['usr_email']) != "sayhitobona@gmail.com") {
    header("Location: adminlogin.php");
    }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"" rel="nofollow" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #090909;">
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:90%;    background-color: #cacaca;">
	<span style="font-size:25px;"><center><strong><h1>TRANS CARGO ADMIN PAGE</h1> </strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New Client</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th><h4>Tracking Id</h4></th>
				<th><h4>Date Added</h4> </th>
				
			</thead>
			<tbody>
		<?php 
		
 
    $query = mysqli_query($con, "SELECT * FROM client");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>

						<td><?php echo $row['trackid']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td>
							<a href="#edit<?php echo $row['trackid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="#del<?php echo $row['trackid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a> ||
							<a href="#tl<?php echo $row['trackid']; ?>" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> New Timeline</a> ||
							<a href="#deltl<?php echo $row['trackid']; ?>" data-toggle="modal" class="btn btn-info"><span class="glyphicon glyphicon-trash"></span> Timeline delete</a>

						
						</td>
						</tr>
					
					<tr>
							
							<?php include('button.php'); ?>
						</td>
					</tr>

					<?php
				}
 
			?>
			</tbody>
		</table>
	</div>
	<?php include('addnewclient.php'); ?>
</div>
</body>
</html>