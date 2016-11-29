<div class="main-panel container-fluid">

<?php if($msg!="") { ?>
	<div class="alert alert-info">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 <?php echo $msg;?>
	</div>
<?php }?>
<h3>On Loan Items</h3>
	<table class="table table-striped">
		<thead>
		  <tr>
			<th>Loan Date</th>
			<th>Loan By</th>
			<th>Equipment Name</th>
			<th>Serial Number</th>
			<th>Manage</th>
		  </tr>
		</thead>
		</thead>
		<tbody>
		
		<?php foreach ($loans as $loan_item): ?>
		<tr>
			<td><?php echo $loan_item['loan_date']; ?></td>	
			<td><?php echo $loan_item['loan_by']; ?></td>
			<td><?php echo $loan_item['equip_name']; ?></td>
			<td><?php if($loan_item['serial_num']) {echo $loan_item['serial_num'];}else{echo "-";} ?></td>			
			<td><a href="/loans/get_loan_item/<?php echo $loan_item['id'];?>" class="btn btn-primary" role="button">View</a></td>
		</tr>
		<?php endforeach; ?>
		<?php if(empty($loans[0])){?>
		<tr>
			<td colspan="3">No records.</td>
		</tr>
		<?php } ?>
        </tbody>
	</table>
</div>

<div class="main-panel container-fluid text-center">
	<?php if(!empty($pages)){?>
		
			<?php echo($pages);?>
		
	<?php } ?>
</div>