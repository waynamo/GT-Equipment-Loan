<div class="main-panel container-fluid">
<h3>Users Management</h3> [<a href="/app_users/add_user">Add Users</a>]

	<table class="table table-striped">
		<thead>
		  <tr>
			<th>Username</th>
			<th>Name</th>
			<th>Email Address</th>
			<th>Last login</th>
			<th>Date created</th>
			<th>Manage</th>
		  </tr>
		</thead>
		</thead>
		<tbody>
		
		<?php foreach ($users as $user): ?>
		<tr>
			<td><?php echo $user['username']; ?></td>	
			<td><?php echo $user['firstname'].' '.$user['lastname']; ?></td>
			<td><?php echo $user['email_address']; ?></td>
			<td>-</td>			
			<td><?php echo $user['date_created']; ?></td>
			<td><a href="/app_users/get_user/<?php echo $user['id'];?>" class="btn btn-primary" role="button">View</a></td>
		</tr>
		<?php endforeach; ?>
		<?php if(empty($users[0])){?>
		<tr>
			<td colspan="6">No records.</td>
		</tr>
		<?php } ?>
        </tbody>
	</table>

</div>