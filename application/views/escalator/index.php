<?php $this->load->view('header'); ?>


<div class="pull-right">
	<a href="<?php echo site_url('escalator/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Lid</th>
		<th>Location</th>
		<th>Product Code</th>
		<th>Product Supportor</th>
		<th>Product Contact</th>
		<th>Product Service</th>
		<th>Product Serviceman</th>
		<th>Product Nextcheck</th>
		<th>P Contract</th>
		<th>P Customer</th>
		<th>P Type</th>
		<th>P Stepwidth</th>
		<th>P Stepangle</th>
		<th>P Maxspeed</th>
		<th>P High</th>
		<th>P Dragtype</th>
		<th>P Controlscreen</th>
		<th>P Date</th>
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
	<?php foreach($escalator as $l){ ?>
    <tr>
		<td><?php echo $l['id']; ?></td>
		<td><?php echo $l['lid']; ?></td>
		<td><?php echo $l['location']; ?></td>
		<td><?php echo $l['product_code']; ?></td>
		<td><?php echo $l['product_supportor']; ?></td>
		<td><?php echo $l['product_contact']; ?></td>
		<td><?php echo $l['product_service']; ?></td>
		<td><?php echo $l['product_serviceman']; ?></td>
		<td><?php echo $l['product_nextcheck']; ?></td>
		<td><?php echo $l['p_contract']; ?></td>
		<td><?php echo $l['p_customer']; ?></td>
		<td><?php echo $l['p_type']; ?></td>
		<td><?php echo $l['p_stepwidth']; ?></td>
		<td><?php echo $l['p_stepangle']; ?></td>
		<td><?php echo $l['p_maxspeed']; ?></td>
		<td><?php echo $l['p_high']; ?></td>
		<td><?php echo $l['p_dragtype']; ?></td>
		<td><?php echo $l['p_controlscreen']; ?></td>
		<td><?php echo $l['p_date']; ?></td>
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
            <a href="<?php echo site_url('escalator/edit/'.$l['id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('escalator/remove/'.$l['id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>


<?php $this->load->view('footer'); ?>
