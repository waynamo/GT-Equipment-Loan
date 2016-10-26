	<table class="table table-striped">
		<thead>
		  <tr>
			<th>ID</th>
			<th>Equipment Name</th>
			<th>Serial Number</th>
			<th>Loan Date</th>
			<th>Loan By</th>
		  </tr>
		</thead>
		</thead>
		<tbody>
		
		<?php foreach ($loans as $loan_item): ?>
		<tr>
			<td><?php echo $loan_item['id'];?></td>
			<td><?php echo $loan_item['equip_name']; ?></td>
			<td><?php echo $loan_item['serial_num']; ?></td>				
			<td><?php echo $loan_item['loan_date']; ?></td>
			<td><?php echo $loan_item['loan_by']; ?></td>
		</tr>
		<?php endforeach; ?>
		<?php if(empty($loans[0])){?>
		<tr>
			<td colspan="3">No records.</td>
		</tr>
		<?php } ?>
        </tbody>
	</table>