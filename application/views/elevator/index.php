<?php $this->load->view('header'); ?>


<div class="pull-right">
	<a href="<?php echo site_url('elevator/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Lid</th>
		<th>Location</th>
		<th>Code</th>
		<th>Product Contract</th>
		<th>Product Orderer</th>
		<th>Product Id</th>
		<th>Product Date</th>
		<th>Product Name</th>
		<th>Product Driver</th>
		<th>Product Type</th>
		<th>Product Os</th>
		<th>Product Maxweight</th>
		<th>Product Speed</th>
		<th>Product Doortype</th>
		<th>Product Doornum</th>
		<th>Product Boxsize</th>
		<th>Register Id</th>
		<th>Register Code</th>
		<th>Register Com</th>
		<th>Register Type</th>
		<th>Register Model</th>
		<th>Register Maker</th>
		<th>Register Licence</th>
		<th>Register Pid</th>
		<th>Register Lid</th>
		<th>Register Copy</th>
		<th>Preparer</th>
		<th>Submitor</th>
		<th>Submit Date</th>
		<th>Update Date</th>
		<th>Station Id</th>
		<th>Actions</th>
    </tr>
	<?php foreach($elevator as $l){ ?>
    <tr>
		<td><?php echo $l['id']; ?></td>
		<td><?php echo $l['lid']; ?></td>
		<td><?php echo $l['location']; ?></td>
		<td><?php echo $l['code']; ?></td>
		<td><?php echo $l['product_contract']; ?></td>
		<td><?php echo $l['product_orderer']; ?></td>
		<td><?php echo $l['product_id']; ?></td>
		<td><?php echo $l['product_date']; ?></td>
		<td><?php echo $l['product_name']; ?></td>
		<td><?php echo $l['product_driver']; ?></td>
		<td><?php echo $l['product_type']; ?></td>
		<td><?php echo $l['product_os']; ?></td>
		<td><?php echo $l['product_maxweight']; ?></td>
		<td><?php echo $l['product_speed']; ?></td>
		<td><?php echo $l['product_doortype']; ?></td>
		<td><?php echo $l['product_doornum']; ?></td>
		<td><?php echo $l['product_boxsize']; ?></td>
		<td><?php echo $l['register_id']; ?></td>
		<td><?php echo $l['register_code']; ?></td>
		<td><?php echo $l['register_com']; ?></td>
		<td><?php echo $l['register_type']; ?></td>
		<td><?php echo $l['register_model']; ?></td>
		<td><?php echo $l['register_maker']; ?></td>
		<td><?php echo $l['register_licence']; ?></td>
		<td><?php echo $l['register_pid']; ?></td>
		<td><?php echo $l['register_lid']; ?></td>
		<td><?php echo $l['register_copy']; ?></td>
		<td><?php echo $l['preparer']; ?></td>
		<td><?php echo $l['submitor']; ?></td>
		<td><?php echo $l['submit_date']; ?></td>
		<td><?php echo $l['update_date']; ?></td>
		<td><?php echo $l['station_id']; ?></td>
		<td>
            <a href="<?php echo site_url('elevator/edit/'.$l['id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('elevator/remove/'.$l['id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>


<?php $this->load->view('footer'); ?>
