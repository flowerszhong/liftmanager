<?php $this->load->view('header'); ?>

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			电梯故障维修记录
		</div>
		<div class="panel-body">
			<a href="<?php echo site_url('overhaul/add'); ?>" class="btn btn-primary">添加检修记录</a> 

			<table class="table table-striped table-bordered table-index clearfix">
			    <tr>
					<th>电梯编号</th>
					<th>F Create</th>
					<th>F Description</th>
					<th>F Cause</th>
					<th>F Deal</th>
					<th>F Change</th>
					<th>F Done</th>
					<th>Supportor</th>
					<th>Preparer</th>
					<th>Submitor</th>
					<th>Submit Date</th>
					<th>Update Date</th>
					<th>Actions</th>
			    </tr>
				<?php foreach($overhaul as $l){ ?>
			    <tr>
					<td><?php echo $l['lid']; ?></td>
					<td><?php echo $l['f_create']; ?></td>
					<td><?php echo $l['f_description']; ?></td>
					<td><?php echo $l['f_cause']; ?></td>
					<td><?php echo $l['f_deal']; ?></td>
					<td><?php echo $l['f_change']; ?></td>
					<td><?php echo $l['f_done']; ?></td>
					<td><?php echo $l['supportor']; ?></td>
					<td><?php echo $l['preparer']; ?></td>
					<td><?php echo $l['submitor']; ?></td>
					<td><?php echo $l['submit_date']; ?></td>
					<td><?php echo $l['update_date']; ?></td>
					<td>
			            <a href="<?php echo site_url('overhaul/edit/'.$l['id']); ?>">Edit</a> | 
			            <a href="<?php echo site_url('overhaul/remove/'.$l['id']); ?>">Delete</a>
			        </td>
			    </tr>
				<?php } ?>
			</table>
		</div>
	</div>
		
	</div>
</div>

<?php $this->load->view('footer'); ?>


