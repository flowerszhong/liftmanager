<?php $this->load->view('header'); ?>
<link rel="stylesheet" href="<?php echo asset_file_url('css/lift.css'); ?>" />
<div class="row">
	<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
	电梯列表
</div>	

<div class="panel-body">

<div class="btn-control">
	<a href="<?php echo site_url('lift/add'); ?>" class="btn btn-success">新增 电梯</a> 
</div>

<?php echo form_open('lift/index',array("class"=>"form-horizontal lift-form")); ?>
<table class="table table-striped table-bordered">
<tr>
    <td width="160">内部编码</td>
    <td><input type="text" class="form-control" name="lid" value="<?php echo $this->input->post('lid'); ?>" /></td>
</tr>

<tr>
    <td width="160">主站</td>
    <td>

    <select name="station" class="form-control" id="station">
        <option value="">请选择主站</option>
        <?php 
        foreach($stations as $station)
        {
            $selected = $station['id'] == $this->input->post('station')?'selected':'';
            echo '<option value="'.$station['id'].'" '.$selected.' >'.$station['name'].'</option>';
        } 
        ?>
    </select>

    </td>
</tr>

<tr>
    
</tr>

<tr>
    <td width="160">子站</td>
    <td>
    <select name="substation" class="form-control" id="substation">
        <option value="">请选择子站</option>
        <?php 
        foreach($sub_stations as $sub_station)
        {
            $selected = $sub_station['id'] == $this->input->post('substation')?'selected':'';
            echo '<option data-parent="'. $sub_station['parent'] .'" value="'.$sub_station['id'].'" '. $selected .' >'.$sub_station['name'].'</option>';
        } 
        ?>
    </select>
    </td>
</tr>


<tr>
    <td width="160">安装位置</td>
    <td><input type="text" class="form-control" name="location" value="<?php echo $this->input->post('location'); ?>" /></td>
</tr>
<tr>
    <td width="160">96333编号</td>
    <td><input type="text" class="form-control" name="no96333" /></td>
</tr>
<tr>
    <td></td>
    <td>
        <input type="submit" value="搜索" class="btn btn-danger" >
    </td>
</tr>
</table>

 <?php echo form_close(); ?>



<table class="table table-striped table-bordered">
    <tr>
		<th>序号</th>
		<th>内部编码</th>
		<th>主站</th>
		<th>子站</th>
		<th>电梯类型</th>
		<th>安装位置</th>
		<th>上次检测</th>
		<th>下次检测</th>
		<th>96333编号</th>
		<th>操作</th>
    </tr>
	<?php foreach($lm_lift as $l){ ?>
    <tr>
		<td><?php echo $l['id']; ?></td>
		<td><?php echo $l['lid']; ?></td>
		<td><?php echo $l['station1']; ?></td>
		<td><?php echo $l['substation1']; ?></td>
		<td><?php echo $l['type'] == ESCALATOR ? '扶梯':'垂直电梯'; ?></td>
		<td><?php echo $l['location']; ?></td>
        <td><?php echo date("Y-m-d",strtotime($l['last_check'])); ?></td>
		<td><?php echo date("Y-m-d",strtotime($l['next_check'])); ?></td>
		<td><?php echo $l['no96333']; ?></td>
		<td>
			<a href="" class="btn btn-warning btn-detail"> 详细 </a>
            <a href="<?php echo site_url('lift/edit/'.$l['id']); ?>" class="btn btn-info">编辑</a> 
            <a href="<?php echo site_url('lift/remove/'.$l['id']); ?>" class="btn btn-danger btn-delete">删除</a>
        </td>
    </tr>
    <tr class="detail">
    	<td colspan="10">
    		<label>设备代码</label><?php echo $l['vin']; ?><br>
    		<label>使用编号</label><?php echo $l['code']; ?><br>
    		<label>设备名称或型号</label><?php echo $l['model']; ?><br>
    		<label>原产品合同编号</label><?php echo $l['orig_no']; ?><br>
    		<label>改造产品合同编号</label><?php echo $l['change_no']; ?><br>
    		<label>出厂日期</label><?php echo $l['production_date']; ?><br>
    		<label>制造者</label><?php echo $l['manufacturer']; ?><br>
    		<label>参数</label><?php echo $l['param']; ?><br>
			<label>配电间位置</label><?php echo $l['distribution']; ?><br>
    	</td>
    </tr>
	<?php } ?>
</table>

<?php echo $links; ?>

</div>

</div>
</div>
</div>


<?php $this->load->view('footer'); ?>
