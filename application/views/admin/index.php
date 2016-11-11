<?php $this->load->view('header'); ?>


<div class="row">
    <div class="col-lg-12">
        <h2> 管理员列表 </h2>
    </div>
</div>

<hr>

<div class="row">
	<div class="col-lg-12">
		<div class="pull-right">
			<a href="<?php echo site_url('admin/add'); ?>" class="btn btn-success">Add</a> 
		</div>

		<div class="panel panel-default">
        <div class="panel-heading">
            Real Time Traffic
        </div>


		<table class="table table-striped table-bordered">
		    <tr>
				<th>ID</th>
				<th>Name</th>
				<th>Displayname</th>
				<th>Pwd</th>
				<th>Salt1</th>
				<th>Salt2</th>
				<th>Station</th>
				<th>Power</th>
				<th>Actions</th>
		    </tr>
			<?php foreach($lm_admin as $l){ ?>
		    <tr>
				<td><?php echo $l['id']; ?></td>
				<td><?php echo $l['name']; ?></td>
				<td><?php echo $l['displayname']; ?></td>
				<td><?php echo $l['pwd']; ?></td>
				<td><?php echo $l['salt1']; ?></td>
				<td><?php echo $l['salt2']; ?></td>
				<td><?php echo $l['station']; ?></td>
				<td><?php echo $l['power']; ?></td>
				<td>
		            <a href="<?php echo site_url('admin/edit/'.$l['id']); ?>" class="btn btn-info">Edit</a> 
		            <a href="<?php echo site_url('admin/remove/'.$l['id']); ?>" class="btn btn-danger">Delete</a>
		        </td>
		    </tr>
			<?php } ?>
		</table>
		</div>
	</div>
</div>



<?php $this->load->view('footer'); ?>
