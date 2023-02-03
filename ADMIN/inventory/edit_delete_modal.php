<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Stock</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Medicine:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="mname" value="<?php echo $row['mname'];  ?>" required>
					</div>
				</div>
					
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Type:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="type" required>
							 <option value="Live-attenuated vaccines.">Live-attenuated vaccines.</option>
							 <option value="Inactivated vaccines.">Inactivated vaccines.</option>
							 <option value="Subunit, recombinant, conjugate, and polysaccharide vaccines.">Subunit, recombinant, conjugate, and polysaccharide vaccines.</option>
						     <option value="mRNA vaccines.">mRNA vaccines.</option>
						     <option value="Viral vector vaccines.">Viral vector vaccines.</option>
						</select>
					
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Description:</label>
					</div>
					<div class="col-sm-10">
						<textarea class="form-control" name="description" required><?php echo $row['description']; ?></textarea>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Stocks:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="stocks" value="<?php echo  $row['stocks']; ?>" required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Vaccine Record</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['mname']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>