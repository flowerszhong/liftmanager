<?php $this->load->view('header'); ?>

<div class="row">
	<div class="col-lg-12">
		

<div class="panel panel-default">
<div class="panel-heading">
	电梯列表
</div>	

<div class="panel-body">

<div class="btn-control">
	<a href="<?php echo site_url('lift/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Lid</th>
		<th>Station</th>
		<th>Substation</th>
		<th>Type</th>
		<th>Vin</th>
		<th>Code</th>
		<th>Location</th>
		<th>Model</th>
		<th>Orig No</th>
		<th>Change No</th>
		<th>Production Date</th>
		<th>Manufacturer</th>
		<th>Param</th>
		<th>Last Check</th>
		<th>Next Check</th>
		<th>Distribution</th>
		<th>No96333</th>
		<th>Actions</th>
    </tr>
	<?php foreach($lm_lift as $l){ ?>
    <tr>
		<td><?php echo $l['id']; ?></td>
		<td><?php echo $l['lid']; ?></td>
		<td><?php echo $l['station']; ?></td>
		<td><?php echo $l['substation']; ?></td>
		<td><?php echo $l['type']; ?></td>
		<td><?php echo $l['vin']; ?></td>
		<td><?php echo $l['code']; ?></td>
		<td><?php echo $l['location']; ?></td>
		<td><?php echo $l['model']; ?></td>
		<td><?php echo $l['orig_no']; ?></td>
		<td><?php echo $l['change_no']; ?></td>
		<td><?php echo $l['production_date']; ?></td>
		<td><?php echo $l['manufacturer']; ?></td>
		<td><?php echo $l['param']; ?></td>
		<td><?php echo $l['last_check']; ?></td>
		<td><?php echo $l['next_check']; ?></td>
		<td><?php echo $l['distribution']; ?></td>
		<td><?php echo $l['no96333']; ?></td>
		<td>
            <a href="<?php echo site_url('lift/edit/'.$l['id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('lift/remove/'.$l['id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>


</div>

</div>
</div>


<?php $this->load->view('footer'); ?>
