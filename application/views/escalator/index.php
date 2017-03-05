
<?php $this->load->view('header'); ?>
<link rel="stylesheet" href="<?php echo asset_file_url('css/escalator.css'); ?>" />

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			扶梯列表
		</div>
		<div class="panel-body">
			<div class="pull-left clearfix">
				<a href="#" class="btn btn-success" id="btn-search">查询</a> 
				<a href="<?php echo site_url('escalator/add'); ?>" class="btn btn-primary">新增加扶梯</a> 
			</div>
			
			<?php $this->load->view('escalator/query'); ?>

			<table class="table table-striped table-bordered table-index">
			    <tr>
					<th rowspan="2">编号</th>
					<th rowspan="2">位置</th>
					<th colspan="6">产品合格证</th>
					<th colspan="4">使用登记证</th>
					<th rowspan="2">操作</th>
			    </tr>
			    <tr>
			    	<th>使用编号</th>
			    	<th>维保单位</th>
			    	<th>维保电话</th>
			    	<th>检验单位</th>
			    	<th>检验人员</th>
			    	<th>下次检验日期</th>
			    	<th>使用证编号</th>
			    	<th>注册代码</th>
			    	<th>使用单位</th>
			    	<th>制造单位</th>
			    </tr>
				<?php foreach($escalator as $l){ ?>
			    <tr>
					<td><?php echo $l['lid']; ?></td>
					<td><?php echo $l['location']; ?></td>
					<td><?php echo $l['product_code']; ?></td>
					<td><?php echo $l['product_supportor']; ?></td>
					<td><?php echo $l['product_contact']; ?></td>
					<td><?php echo $l['product_service']; ?></td>
					<td><?php echo $l['product_serviceman']; ?></td>
					<td><?php echo $l['product_nextcheck']; ?></td>
					
					<td><?php echo $l['register_id']; ?></td>
					<td><?php echo $l['register_code']; ?></td>
					<td><?php echo $l['register_com']; ?></td>
					<td><?php echo $l['register_maker']; ?></td>
					<td>
			            <a href="<?php echo site_url('escalator/view/'.$l['id']); ?>" class="btn btn-info">查看</a> 
			            <a href="<?php echo site_url('escalator/edit/'.$l['id']); ?>" class="btn btn-info">编辑</a> 
			            <a href="<?php echo site_url('escalator/remove/'.$l['id']); ?>" class="btn btn-danger">删除</a>
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
