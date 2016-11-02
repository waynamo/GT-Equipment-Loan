<div class="main-panel container-fluid">
<?php if(validation_errors()|| $msg !="") { ?>
	<div class="alert alert-danger">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 <?php echo validation_errors();?>
	 <?php echo $msg;?>
	</div>
<?php }?>
<h3>Login</h3>

	<div class="text-center">
	<?php echo form_open('logins/login','class="form-horizontal"'); ?>	
		<div class="row">
			<div class="col-sm-2 form-group">
				<label class="control-label pull-right" for="equip_type">Username:<span class="glyphicon glyphicon-cog">&nbsp;</span></label>
			</div>
			<div class="col-sm-10 form-group">
				<input type="text" class="form-control" size="120" name="username" placeholder="Example:APAC\<username>" />
			</div>
		</div>			
		<div class="row">
			<div class="col-sm-2 form-group">
				<label class="control-label pull-right" for="equip_type">Password:<span class="glyphicon glyphicon-cog">&nbsp;</span></label>
			</div>
			<div class="col-sm-10 form-group">
				<input type="password" class="form-control" size="120" name="password" />
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 form-group">
			<input type="submit" class="btn btn-info" name="submit" value="Login" />
			</div>
		</div>
	</div>
	</form>
	</div>
</div>