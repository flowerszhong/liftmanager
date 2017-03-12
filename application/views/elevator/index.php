<?php $this->load->view('header'); ?>
<link rel="stylesheet" href="<?php echo asset_file_url('css/escalator.css'); ?>" />

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			垂直电梯列表
		</div>
		<div class="panel-body">
			<a href="#" class="btn btn-success" id="btn-search">查询</a> 

			<a href="<?php echo site_url('elevator/add'); ?>" class="btn btn-primary">新增加直梯</a> 

			<?php $this->load->view('elevator/query'); ?>
			

			<table class="table table-striped table-bordered table-index clearfix">
			    <tr>
					<th rowspan="2">电梯编号</th>
					<th rowspan="2">电梯位置</th>
					<th rowspan="2">设备代码</th>
					<th colspan="3">产品合格证 </th>

					<th colspan="3">使用登记证 </th>
					<th rowspan="2">填表人</th>
					<th rowspan="2">更新时间</th>
					<th rowspan="2">操作</th>
				</tr>

				<tr>
					<th>产品合同编号</th>
					<th>订货单位</th>
					<th>出厂编号</th>
					<th>使用证编号</th>
					<th>注册代码</th>
					<th>制造单位</th>
			    </tr>
				<?php foreach($elevator as $l){ ?>
			    <tr>
					<td><?php echo $l['lid']; ?></td>
					<td><?php echo $l['location']; ?></td>
					<td><?php echo $l['code']; ?></td>
					<td><?php echo $l['product_contract']; ?></td>
					<td><?php echo $l['product_orderer']; ?></td>
					<td><?php echo $l['product_id']; ?></td>
					<td><?php echo $l['register_id']; ?></td>
					<td><?php echo $l['register_code']; ?></td>
					<td><?php echo $l['register_maker']; ?></td>
					<td><?php echo $l['preparer']; ?></td>
					<td><?php echo $l['update_date']; ?></td>
					<td>
			            <a href="<?php echo site_url('elevator/view/'.$l['id']); ?>" class="btn btn-primary">查看</a> 
			            <a href="<?php echo site_url('elevator/edit/'.$l['id']); ?>" class="btn btn-info">编辑</a> 
			            <a href="<?php echo site_url('elevator/remove/'.$l['id']); ?>" class="btn btn-danger btn-delete">删除</a>
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






