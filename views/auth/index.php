<?php $this->load->view('templates/header'); ?>

<div id="container">
	<div id="content">
		<div id="wrapper">
	<h1>Users</h1>
	<p>Below is a list of the users.</p>
	
	<div id="infoMessage"><?php echo $message;?></div>
	
	<style>
		table tr td {
			padding: 0 10px 2px 0;
			}
	</style>
	
	<table cellpadding=0 cellspacing=10>
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Email</td>
			<td>Groups</td>
			<td>Status</td>
			<td>Handicap</td>
			<td>Home Course</td>
		</tr>
		<?php foreach ($users as $user):?>
			<tr>
				<td><?php echo $user->first_name;?></td>
				<td><?php echo $user->last_name;?></td>
				<td><?php echo $user->email;?></td>
				<td>
					<?php foreach ($user->groups as $group):?>
						<?php echo $group->name;?><br />
	                <?php endforeach?>
				</td>
				<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, 'Active') : anchor("auth/activate/". $user->id, 'Inactive');?></td>
				<td><?php echo $user->handicap;?></td>
				<td><?php echo $user->homecourse;?></td>
			</tr>
		<?php endforeach;?>
	</table>
	
	<p><a href="<?php echo site_url('auth/create_user');?>">Create a new user</a></p>
	
</div>

</div>
	</div>
</div>
<?php $this->load->view('templates/footer'); ?>
