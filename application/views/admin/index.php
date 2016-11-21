<?php $this->load->view('header'); ?>

<div class="row">
	<div class="col-lg-12">
		

		<div class="panel panel-default">
        <div class="panel-heading">
            管理员列表
        </div>


        <div class="panel-body">
        <div class="btn-control">
        	<a href="<?php echo site_url('admin/add'); ?>" class="btn btn-success">新增 管理员</a> 
        </div>
		<table class="table table-striped table-bordered">
		    <tr>
				<th>编号</th>
				<th>账号</th>
				<th>名称</th>
				<th>车站</th>
				<th>权限</th>
				<th>操作</th>
		    </tr>
			<?php foreach($lm_admin as $l){ ?>
		    <tr>
				<td><?php echo $l['id']; ?></td>
				<td><?php echo $l['name']; ?></td>
				<td><?php echo $l['displayname']; ?></td>
				<td><?php echo $l['station_name']; ?></td>
				<td>管理员</td>
				<td>
		            <a href="<?php echo site_url('admin/edit/'.$l['id']); ?>" class="btn btn-info">编辑</a> 
		            <a href="<?php echo site_url('admin/remove/'.$l['id']); ?>" class="btn btn-danger btn-delete">删除</a>
		        </td>
		    </tr>
			<?php } ?>
		</table>
		</div>
		</div>
	</div>
</div>



<?php $this->load->view('footer'); ?>
