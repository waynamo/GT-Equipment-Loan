<div class="main-panel container-fluid">
<?php if(validation_errors()) { ?>
	<div class="alert alert-danger">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 <?php echo validation_errors();?>
	</div>
<?php }?>
<h3>Edit Equipment</h3>

	<div class="text-center">
	<?php echo form_open('equipments/edit','class="form-horizontal"'); ?>	
		<div class="row">
			<div class="col-sm-2 form-group">
				<label class="control-label pull-right" for="equip_type">Equipment Name:<span class="glyphicon glyphicon-cog">&nbsp;</span></label>
			</div>
			<div class="col-sm-10 form-group">
				<input type="text" class="form-control" size="120" name="equip_name" value="<?php echo $equipments['equip_name'];?>" />
			</div>
		</div>	
		<input type="hidden" name="id" value="<?php echo $equipments['id'];?>">
		<div class="row">
			<div class="col-sm-12 form-group">
			<input type="submit" class="btn btn-info" name="submit" value="Update Equipment" />
			</div>
		</div>
	</div>
	</form>
	</div>
</div>