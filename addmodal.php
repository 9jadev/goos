<!-- Add New -->\r
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">\r
        <div class="modal-dialog">\r
            <div class="modal-content">\r
                <div class="modal-header">\r
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>\r
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>\r
                </div>\r
                <div class="modal-body">\r
				<div class="container-fluid">\r
				<form method="POST" action="addnew.php">\r
					<div class="row">\r
						<div class="col-lg-2">\r
							<label class="control-label" style="position:relative; top:7px;">Tracking Id:</label>\r
						</div>\r
						<div class="col-lg-10">\r
							<input type="text" class="form-control" name="trackid" value=" <?php echo $row['trackid']; ?>">\r
						</div>\r
					</div>\r
					<div style="height:10px;"></div>\r
					<div class="row">\r
						<div class="col-lg-2">\r
							<label class="control-label" style="position:relative; top:7px;">Location:</label>\r
						</div>\r
						<div class="col-lg-10">\r
							<input type="text" class="form-control" name="location">\r
						</div>\r
					</div>\r
					<div style="height:10px;"></div>\r
					<div class="row">\r
						<div class="col-lg-2">\r
							<label class="control-label" style="position:relative; top:7px;">Status:</label>\r
						</div>\r
						<div class="col-lg-10">\r
							<input type="text" class="form-control" name="status">\r
						</div>\r
					</div>\r<div style="height:10px;"></div>\r
					<div class="row">\r
						<div class="col-lg-2">\r
							<label class="control-label" style="position:relative; top:7px;">Remarks:</label>\r
						</div>\r
						<div class="col-lg-10">\r
							<input type="text" class="form-control" name="remarks">\r
						</div>\r
					</div>\r
                </div> \r
				</div>\r
                <div class="modal-footer">\r
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>\r
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>\r
				</form>\r
                </div>\r
 \r
            </div>\r
        </div>\r
    </div>