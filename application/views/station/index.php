<?php $this->load->view('header'); ?>


<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
        <div class="panel-heading">
        	车站列表
        </div>

<div class="panel-body">
<div class="btn-control">
	<a href="<?php echo site_url('station/add'); ?>" class="btn btn-success">新增 站点</a> 
</div>


<table class="table table-striped table-bordered">
    <tr>
		<th>编号</th>
		<th>车站名称</th>
		<th>车站类别</th>
		<th>主站</th>
		<th>站点信息备注</th>
		<th>操作</th>
    </tr>
	<?php foreach($lm_station as $l){ ?>
    <tr>
		<td><?php echo $l['id']; ?></td>
		<td><?php echo $l['name']; ?></td>
		<td><?php echo $l['grade'] == STATION ? '主站':'子站'; ?></td>
		<td><?php echo $l['main_station']; ?></td>
		<td><?php echo $l['comments']; ?></td>
		<td>
            <a href="<?php echo site_url('station/edit/'.$l['id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('station/remove/'.$l['id']); ?>" class="btn btn-danger btn-delete">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

</div>
</div>
</div>
</div>


<?php $this->load->view('footer'); ?>
