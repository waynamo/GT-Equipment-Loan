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
			<input type="text" class="form-control" name="username"  placeholder="APAC\<username>" value="<?php echo isset($users['username'])?set_value('username',$users['username']):set_value('username'); ?>"/>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="pull-right" for="title">First name:<span class="glyphicon glyphicon-calendar">&nbsp;</span></label>
		</div>
		<div class="col-sm-4 form-group">
			<input type="text" class="form-control" name="firstname" value="<?php echo isset($users['firstname'])?set_value('firstname',$users['firstname']):set_value('firstname'); ?>"/>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="pull-right" for="title">Last name:<span class="glyphicon glyphicon-user">&nbsp;</span></label>
		</div>
		<div class="col-sm-4 form-group">
			<input type="text" class="form-control" name="lastname" value="<?php echo isset($users['lastname'])?set_value('lastname',$users['lastname']):set_value('lastname'); ?>"/>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 form-group">
			<label class="pull-right" for="title">Email Address:<span class="glyphicon glyphicon-user">&nbsp;</span></label>
		</div>
		<div class="col-sm-4 form-group">
			<input type="text" class="form-control" name="email_address"  placeholder="Email Address" value="<?php echo isset($users['email_address'])?set_value('email_address',$users['email_address']):set_value('email_address'); ?>"/>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 form-group text-center">
		<input type="submit" class="btn btn-info" name="submit" value="<?php echo isset($users['username'])?set_value('submit','Update User'):set_value('submit','Add User');?>" />
		</div>
	</div>
</form>

</div>
