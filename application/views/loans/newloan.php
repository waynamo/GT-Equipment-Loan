<div class="text-center">

<?php if(validation_errors()) { ?>
	<div class="alert alert-danger">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 <?php echo validation_errors();?>
	</div>
<?php }?>

<?php echo form_open('loans/create','class="form-horizontal"'); ?>
	
	<div class="row">
        <div class="col-sm-6 form-group">
			<label class="control-label pull-right" for="equip_type">Equipment Type:<span class="glyphicon glyphicon-cog">&nbsp;</span></label>
		</div>
		<div class="col-sm-4 form-group">			
			<select class="form-control" name="equip_name">
			<?php foreach ($equipments as $equipments_item): ?>	
					<option><?php echo $equipments_item['equip_name']; ?></option>
			<?php endforeach; ?>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="control-label pull-right" for="serial_num">Serial Number:<span class="glyphicon glyphicon-barcode">&nbsp;</span></label>
		</div>
		<div class="col-sm-4 form-group">
			<input type="text" class="form-control" name="serial_num" />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="pull-right" for="title">Loan Date:<span class="glyphicon glyphicon-calendar">&nbsp;</span></label>
		</div>
		<div class="col-sm-2 form-group">
			<input type="text" class="form-control" name="loan_date" />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="pull-right" for="title">Loan By:<span class="glyphicon glyphicon-user">&nbsp;</span></label>
		</div>
		<div class="col-sm-4 form-group">
			<input type="text" class="form-control" name="loan_by" />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="pull-right" for="title">Issue By:<span class="glyphicon glyphicon-user">&nbsp;</span></label>
		</div>
		<div class="col-sm-4 form-group">
			<input type="text" class="form-control" name="issue_by" />
		</div>
	</div>
	<!--
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="pull-right" for="title">Return Date:<span class="glyphicon glyphicon-calendar">&nbsp;</span></label>
		</div>
		<div class="col-sm-2 form-group">
			<input type="text" class="form-control" name="return_date" />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="pull-right" for="title">Return By:<span class="glyphicon glyphicon-user">&nbsp;</span></label>
		</div>
		<div class="col-sm-4 form-group">
			<input type="text" class="form-control" name="return_by" />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="pull-right" for="title">Receive By:<span class="glyphicon glyphicon-user">&nbsp;</span></label>
		</div>
		<div class="col-sm-4 form-group">
			<input type="text" class="form-control" name="receive_by" />
		</div>
	</div>
	-->
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="pull-right" for="title">Remarks:<span class="glyphicon glyphicon-pencil">&nbsp;</span></label>
		</div>
		<div class="col-sm-4 form-group">
			 <textarea class="form-control" rows="5" name="remarks"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 form-group">
		<input type="submit" class="btn btn-info" name="submit" value="Submit" />
		</div>
	</div>
</form>

</div>

<script type="text/javascript">
$(function() {
    $('input[name="loan_date"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
		locale: {
            format: 'YYYY-MM-DD'
		}
    }, 
    function(start, end, label) {
        //var years = moment().diff(start, 'years');
  
    });
	
	$('input[name="return_date"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
		autoUpdateInput: false,
		locale: {
            format: 'YYYY-MM-DD'
		}
    }); 
});
</script>