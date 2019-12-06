<!-- Delete -->
							<?php include('dbconnect.php'); ?>

    <div class="modal fade" id="del<?php echo $row['trackid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($con,"select * from client where trackid='".$row['trackid']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Tracking ID: <strong><?php echo $drow['trackid']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['trackid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
 
            </div>
        </div>
    </div>
<!-- /.modal -->
 
<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['trackid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($con,"SELECT * FROM client WHERE trackid='".$row['trackid']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit1.php?id=<?php echo $erow['trackid']; ?>" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Tracking Id:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="trackid" class="form-control" value="<?php echo $erow['trackid']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="date" class="form-control" value="<?php echo $erow['date']; ?>">
						</div>
					</div>
	<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">image:</label>
						</div>
						<div class="col-lg-10">
							<input type="file" name="image" class="form-control">
						</div>
					</div>
	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">shipper:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="shipper" class="form-control" value="<?php echo $erow['shipper']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">reciever:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="reciever" class="form-control" value="<?php echo $erow['reciever']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">origin:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="origin" class="form-control" value="<?php echo $erow['origin']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">package:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="package" class="form-control" value="<?php echo $erow['package']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">status:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="status" class="form-control" value="<?php echo $erow['status']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">destination:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="destination" class="form-control" value="<?php echo $erow['destination']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">carrier:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="carrier" class="form-control" value="<?php echo $erow['carrier']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">type:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="type" class="form-control" value="<?php echo $erow['type']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">weight:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="weight" class="form-control" value="<?php echo $erow['weight']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">mode:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="mode" class="form-control" value="<?php echo $erow['mode']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">reference:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="reference" class="form-control" value="<?php echo $erow['reference']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">product:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="product" class="form-control" value="<?php echo $erow['product']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">qty:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="qty" class="form-control" value="<?php echo $erow['qty']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">pmtmode:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="pmtmode" class="form-control" value="<?php echo $erow['pmtmode']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">freight:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="freight" class="form-control" value="<?php echo $erow['freight']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">delivery:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="delivery" class="form-control" value="<?php echo $erow['delivery']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">departure:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="depature" class="form-control" value="<?php echo $erow['depature']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">pickupd:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="pickupd" class="form-control" value="<?php echo $erow['pickupd']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">pickupt:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="pickupt" class="form-control" value="<?php echo $erow['pickupt']; ?>">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">comments:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="comments" class="form-control" value="<?php echo $erow['comments']; ?>">
						</div>
					</div><div style="height:10px;"></div>
					
					
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->
 <!-- Add New tl -->
    <div class="modal fade" id="tl<?php echo $row['trackid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">NEW TIMELINE</h4></center>
                </div>
                <div class="modal-body">
                	<?php
					$tl=mysqli_query($con,"SELECT * FROM client WHERE trackid='".$row['trackid']."'");
					$tlrow=mysqli_fetch_array($tl);
				?>
				<div class="container-fluid">

				<form method="POST" action="newtl.php?id=<?php echo $tlrow['trackid'];?>">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Date Of Activity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="date" required="">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Tracking Id:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="trackid" required value="<?php echo $row['trackid']; ?>" readonly="">
						</div>
					</div><div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Location:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="location" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Status:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="status" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">time:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="time" required>
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">remarks:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="remarks" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
 
            </div>
        </div>
    </div>
    <!-- modal -->
    <!-- Delete -->
							<?php include('conn.php'); ?>

    <div class="modal fade" id="deltl<?php echo $row['trackid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$deltl=mysqli_query($conn,"select * from info where trackid='".$row['trackid']."'");
					while($drows=mysqli_fetch_array($deltl)){
					
				?>
				<div class="container-fluid" style="text-align: center;margin-bottom: 40px">
					<h5><center>Location: <strong><?php echo $drows['location']; ?></strong></center></h5>
					<h5><center>Status: <strong><?php echo $drows['status']; ?></strong></center></h5> 
                
				
               
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deletetl.php?location=<?php echo $drows['location']; ?>&id=<?php echo $drows['trackid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
             </div>
                		<?php 
				}

			?>
				</div>

 
            </div>
        </div>
    </div>
    