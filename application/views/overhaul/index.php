<?php $this->load->view('header'); ?>

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			电梯故障维修记录
		</div>
		<div class="panel-body">
			<a href="#" class="btn btn-success" id="btn-search">查询</a> 
			<a href="<?php echo site_url('overhaul/add'); ?>" class="btn btn-primary">添加检修记录</a> 

			<?php $this->load->view('overhaul/query'); ?>

			<table class="table table-striped table-bordered table-index clearfix">
			    <tr>
					<th>电梯编号</th>
					<th>安装位置</th>
					<th>报修时间</th>
					<th>故障现象</th>
					<th>故障原因</th>
					<th>处理方法</th>
					<th>更换配件</th>
					<th>修复时间</th>
					<th>维修单位</th>
					<th>填报人</th>
					<th>更新时间</th>
					<th>操作</th>
			    </tr>
				<?php foreach($overhaul as $l){ ?>
			    <tr>
					<td><?php echo $l['lid']; ?></td>
					<td><?php echo $l['escalator_location'] ? $l['escalator_location'] : $l['elevator_location']; ?></td>
					<td><?php echo $l['f_create']; ?></td>
					<td><?php echo $l['f_description']; ?></td>
					<td><?php echo $l['f_cause']; ?></td>
					<td><?php echo $l['f_deal']; ?></td>
					<td><?php echo $l['f_change']; ?></td>
					<td><?php echo $l['f_done']; ?></td>
					<td><?php echo $l['supportor']; ?></td>
					<td><?php echo $l['preparer']; ?></td>
					<td><?php echo $l['update_date']; ?></td>
					<td>
			             <a href="<?php echo site_url('overhaul/edit/'.$l['id']); ?>" class="btn btn-primary">编辑</a> 
			            <a href="<?php echo site_url('overhaul/remove/'.$l['id']); ?>" class="btn btn-danger btn-delete">删除</a>
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


