<div class="main-panel container-fluid">

<?php if(validation_errors()) { ?>
	<div class="alert alert-danger">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 <?php echo validation_errors();?>
	</div>
<?php }?>

	<table class="table table-striped">
		<tbody>
		<tr>
			<td>Loan On:</td><td><?php echo $loan_item['loan_date']; ?></td>
		</tr>		
		<tr>
			<td>Equipment Name:</td><td><?php echo $loan_item['equip_name']; ?></td>
		</tr>
		<tr>
			<td>Loan By:</td><td><?php echo $loan_item['loan_by']; ?></td>
		</tr>
		<tr>
			<td>Issued By:</td><td><?php echo $loan_item['issue_by']; ?></td>
		</tr>
		<tr>
			<td>Remarks:</td><td><?php if($loan_item['remarks']!='')echo $loan_item['remarks']; else echo "No remarks."; ?></td>	
		</tr>		
        </tbody>
	</table>
	<br />
	<div class="text-center">
	<?php echo form_open('loans/return_loan_item','class="form-horizontal"'); ?>	
		<div class="row">
			<div class="col-sm-4 form-group">
				<label class="control-label pull-right" for="equip_type">Return By:<span class="glyphicon glyphicon-cog">&nbsp;</span></label>
			</div>
			<div class="col-sm-4 form-group">
				<input type="text" class="form-control" size="50" name="return_by" />
			</div>
		</div>		
		<div class="row">
			<div class="col-sm-4 form-group">
				<label class="control-label pull-right" for="equip_type">Received By:<span class="glyphicon glyphicon-cog">&nbsp;</span></label>
			</div>
			<div class="col-sm-4 form-group">
				<input type="text" class="form-control" size="50" name="receive_by" />
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 form-group">
			<input type="submit" class="btn btn-info" name="submit" value="Return Equipment" />
			</div>
		</div>
	</div>
	<input type="hidden" name="id" value=<?php echo $loan_item['id'];?>>
	</form>
	</div>
</div>

