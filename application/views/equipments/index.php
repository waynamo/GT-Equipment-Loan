<div class="main-panel container-fluid">

<?php if(validation_errors()) { ?>
	<div class="alert alert-danger">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 <?php echo validation_errors();?>
	</div>
<?php }?>

<h3>Equipment Lists</h3>
	<table class="table table-striped">
		<thead>
		  <tr>
			<th>ID</th>
			<th>Equipment Name</th>
			<th>Added On</th>
			<th>Manage</th>			
		  </tr>
		</thead>
		</thead>
		<tbody>
		<?php foreach ($equipments as $equipments_item): ?>
		<tr>
			<td><?php echo $equipments_item['id'];?></td>
			<td><?php echo $equipments_item['equip_name']; ?></td>
			<td><?php echo $equipments_item['date_added']; ?></td>
			<td><a href="/equipments/get_equip/<?php echo $equipments_item['id'];?>" class="btn btn-info" role="button">Edit</a>
				<a href="/equipments/delete/<?php echo $equipments_item['id'];?>" class="btn btn-danger" role="button">Delete</a>
			</td>	
		</tr>
		<?php endforeach; ?>
		<?php if(empty($equipments[0])){?>
		<tr>
			<td colspan="3">No records.</td>
		</tr>
		<?php } ?>
        </tbody>
	</table>
	<br />
	<div class="text-center">
	<?php echo form_open('equipments/create','class="form-horizontal"'); ?>	
		<div class="row">
			<div class="col-sm-2 form-group">
				<label class="control-label pull-right" for="equip_type">Equipment Name:<span class="glyphicon glyphicon-cog">&nbsp;</span></label>
			</div>
			<div class="col-sm-10 form-group">
				<input type="text" class="form-control" size="50" name="equip_name" />
			</div>
		</div>		
		<div class="row">
			<div class="col-sm-12 form-group">
			<input type="submit" class="btn btn-info" name="submit" value="Add Equipment" />
			</div>
		</div>
	</div>
	</form>
	</div>
</div>

