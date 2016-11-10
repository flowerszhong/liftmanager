<div class="pull-right">
	<a href="<?php echo site_url('station/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Grade</th>
		<th>Parent</th>
		<th>Comments</th>
		<th>Thumbnail</th>
		<th>Actions</th>
    </tr>
	<?php foreach($lm_station as $l){ ?>
    <tr>
		<td><?php echo $l['id']; ?></td>
		<td><?php echo $l['name']; ?></td>
		<td><?php echo $l['grade']; ?></td>
		<td><?php echo $l['parent']; ?></td>
		<td><?php echo $l['comments']; ?></td>
		<td><?php echo $l['thumbnail']; ?></td>
		<td>
            <a href="<?php echo site_url('station/edit/'.$l['id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('station/remove/'.$l['id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>