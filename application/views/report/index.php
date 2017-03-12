<?php $this->load->view('header'); ?>

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			年度电梯验收检验报告列表
		</div>
		<div class="panel-body">
		<a href="<?php echo site_url('report/add'); ?>" class="btn btn-primary">新增加报告</a> 


		<table class="table table-striped table-bordered table-index">
		    <tr>
				<th>电梯编号</th>
				<th>电梯位置</th>
				<th>检测报告</th>
				<th>提交人</th>
				<th>提交时间</th>
				<th>更新时间</th>
				<th>操作</th>
		    </tr>


			<?php foreach ($reports as $key => $r) { ?>
				<tr>
					<td>
						<?php echo $r['r_lid']; ?>
					</td>
					<td>
						<?php echo $r['escalator_location'] ? $r['escalator_location']:$r['elevator_location']; ?>
					</td>
					<td>
						<a href="<?php echo base_url('uploads/' . $r['doc']); ?>" target="_blank"><i class="icon-file"></i>查看报告</a>
					</td>

					<td>
						<?php echo $r['admin_display']; ?>
					</td>

					<td>
						<?php echo $r['submit_date']; ?>
					</td>

					<td>
						<?php echo $r['update_date']; ?>
					</td>

					<td>
			            <a href="<?php echo base_url('uploads/' . $r['doc']); ?>" target="_blank" class="btn btn-info">查看</a>
			            <a href="<?php echo site_url('report/del/'.$r['r_id']); ?>" class="btn btn-danger btn-delete">删除</a>
			        </td>

				</tr>
			<?php } ?>

		</table>
		<?php if($this->pagination){
					echo $this->pagination->create_links();
				} ?>
			
		</div>
	</div>
		
	</div>
</div>

<?php $this->load->view('footer'); ?>
