<div class="main-panel container-fluid">

<?php if(validation_errors()) { ?>
	<div class="alert alert-danger">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 <?php echo validation_errors();?>
	</div>
<?php }?>

<?php echo form_open('app_users/create_user','class="form-horizontal"'); ?>
	
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="control-label pull-right" for="serial_num">Username:<span class="glyphicon glyphicon-barcode">&nbsp;</span></label>
		</div>
		<div class="col-sm-4 form-group">
			<input type="text" class="form-control" name="username"  placeholder="APAC\<username>" />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="pull-right" for="title">First name:<span class="glyphicon glyphicon-calendar">&nbsp;</span></label>
		</div>
		<div class="col-sm-4 form-group">
			<input type="text" class="form-control" name="firstname" />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="pull-right" for="title">Last name:<span class="glyphicon glyphicon-user">&nbsp;</span></label>
		</div>
		<div class="col-sm-4 form-group">
			<input type="text" class="form-control" name="lastname" />
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="pull-right" for="title">Email Address:<span class="glyphicon glyphicon-user">&nbsp;</span></label>
		</div>
		<div class="col-sm-4 form-group">
			<input type="text" class="form-control" name="email_address"  placeholder="Email Address"/>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 form-group text-center">
		<input type="submit" class="btn btn-info" name="submit" value="Add User" />
		</div>
	</div>
</form>

</div>
