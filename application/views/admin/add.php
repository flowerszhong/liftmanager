<?php $this->load->view('header'); ?>
<link rel="stylesheet" href="<?php echo asset_file_url('css/admin.css'); ?>" />
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
        <div class="panel-heading">
            新增管理员
        </div>

<div class="panel-body">
<?php echo validation_errors(); ?>
<?php echo form_open('admin/add',array("class"=>"form-horizontal admin-form")); ?>

	<div class="form-group">
		<label for="name" class="col-md-2 control-label">账号</label>
		<div class="col-md-10">
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="displayname" class="col-md-2 control-label">名称</label>
		<div class="col-md-10">
			<input type="text" name="displayname" value="<?php echo $this->input->post('displayname'); ?>" class="form-control" id="displayname" />
		</div>
	</div>
	<div class="form-group">
		<label for="pwd" class="col-md-2 control-label">密码</label>
		<div class="col-md-10">
			<input type="text" name="pwd" value="<?php echo $this->input->post('pwd'); ?>" class="form-control" id="pwd" />
		</div>
	</div>
	<div class="form-group">
		<label for="station" class="col-md-2 control-label">车站</label>
		<div class="col-md-10">
			<input type="text" name="" readonly="readonly" class="form-control" id="station-name">
			<input type="hidden" name="station" value="<?php echo $this->input->post('station'); ?>" id="station" />
			<input type="hidden" name="grade" value="<?php echo $this->input->post('grade'); ?>" id="grade" />
			<?php $this->load->view('stations'); ?>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
<?php echo form_close(); ?>
	</div>
	</div>


</div>

</div>

<?php $this->load->view('footer'); ?>
