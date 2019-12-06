<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnewperson.php" enctype="multipart/form-data">
		<div class="col-lg-2">
							<label style="position:relative; top:7px;">Tracking Id:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="trackid" class="form-control">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="date" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">shipper:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="shipper" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">reciever:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="reciever" class="form-control">
						</div>
					</div>
<div style="height:10px;"></div>
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
							<label style="position:relative; top:7px;">origin:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="origin" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">package:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="package" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">status:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="status" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">destination:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="destination" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">carrier:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="carrier" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">type:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="type" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">weight:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="weight" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">mode:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="mode" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">reference:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="reference" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">product:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="product" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">qty:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="qty" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">pmtmode:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="pmtmode" class="form-control" >
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">freight:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="freight" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">delivery:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="delivery" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">departure:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="depature" class="form-control" >
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">pickupd:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="pickupd" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">pickupt:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="pickupt" class="form-control">
						</div>
					</div>	<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">comments:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="comments" class="form-control">
						</div>
					</div><div style="height:10px;"></div>
					
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
    <!-- Add New tl -->
    <div class="modal fade" id="tl<?php echo $row['trackid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">new timeline</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="newtl.php?id=<?php echo $tlrow['trackid'];?>">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Date:</label>
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
							<input type="text" class="form-control" name="delivery" required>
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


