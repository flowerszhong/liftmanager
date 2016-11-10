<div class="pull-right">
	<a href="<?php echo site_url('maintenance/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Lid</th>
		<th>Maintenance Man</th>
		<th>Check Date</th>
		<th>Problem</th>
		<th>Cause</th>
		<th>Charge Partment</th>
		<th>Charge Man</th>
		<th>Deadline</th>
		<th>Deal</th>
		<th>Status</th>
		<th>Actions</th>
    </tr>
	<?php foreach($lm_maintenance as $l){ ?>
    <tr>
		<td><?php echo $l['id']; ?></td>
		<td><?php echo $l['lid']; ?></td>
		<td><?php echo $l['maintenance_man']; ?></td>
		<td><?php echo $l['check_date']; ?></td>
		<td><?php echo $l['problem']; ?></td>
		<td><?php echo $l['cause']; ?></td>
		<td><?php echo $l['charge_partment']; ?></td>
		<td><?php echo $l['charge_man']; ?></td>
		<td><?php echo $l['deadline']; ?></td>
		<td><?php echo $l['deal']; ?></td>
		<td><?php echo $l['status']; ?></td>
		<td>
            <a href="<?php echo site_url('maintenance/edit/'.$l['id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('maintenance/remove/'.$l['id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>