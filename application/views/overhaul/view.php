<?php $this->load->view('header'); ?>
<style>
	form input{
		max-width: 240px;
	}

	form textarea{
		max-width: 600px;
	}
</style>
<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			查看
		</div>
		<div class="panel-body">
			

			<?php echo validation_errors(); ?>

			<?php echo form_open(null,array("class"=>"form-horizontal overhaul-edit-form")); ?>

			<div class="form-group">
				<label for="lid" class="col-md-1 control-label">电梯编号</label>
				<div class="col-md-11">
					<input type="text" name="lid" value="<?php echo ($this->input->post('lid') ? $this->input->post('lid') : $overhaul['lid']); ?>"" class="form-control" id="lid" />
				</div>
			</div>


			<div class="form-group">
				<label for="f_create" class="col-md-1 control-label">报修时间</label>
				<div class="col-md-11">
					<input type="text" name="f_create" value="<?php echo ($this->input->post('f_create') ? $this->input->post('f_create') : $overhaul['f_create']); ?>"" class="form-control" id="f_create" />
				</div>
			</div>


			<div class="form-group">
				<label for="f_description" class="col-md-1 control-label">故障现象</label>
				<div class="col-md-11">
					<textarea name="f_description" class="form-control"><?php echo ($this->input->post('f_description') ? $this->input->post('f_description') : $overhaul['f_description']); ?></textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="f_cause" class="col-md-1 control-label">故障原因</label>
				<div class="col-md-11">
					<textarea name="f_cause" class="form-control"><?php echo ($this->input->post('f_cause') ? $this->input->post('f_cause') : $overhaul['f_cause']); ?></textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="f_deal" class="col-md-1 control-label">处理方法</label>
				<div class="col-md-11">
					<textarea name="f_deal" class="form-control"><?php echo ($this->input->post('f_deal') ? $this->input->post('f_deal') : $overhaul['f_deal']); ?></textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="f_change" class="col-md-1 control-label">更换配件</label>
				<div class="col-md-11">
					<textarea name="f_change" class="form-control"><?php echo ($this->input->post('f_change') ? $this->input->post('f_change') : $overhaul['f_change']); ?></textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="f_done" class="col-md-1 control-label">修复时间</label>
				<div class="col-md-11">
					<input type="text" name="f_done" value="<?php echo ($this->input->post('f_done') ? $this->input->post('f_done') : $overhaul['f_done']); ?>"" class="form-control" id="f_done" />
				</div>
			</div>

			<div class="form-group">
				<label for="supportor" class="col-md-1 control-label">维修单位</label>
				<div class="col-md-11">
					<input type="text" name="supportor" value="<?php echo ($this->input->post('f_done') ? $this->input->post('supportor') : $overhaul['supportor']); ?>"" class="form-control" id="supportor" />
				</div>
			</div>

			<div class="form-group">
				<label for="preparer" class="col-md-1 control-label">填报人</label>
				<div class="col-md-11">
					<input type="text" name="preparer" value="<?php echo ($this->input->post('f_done') ? $this->input->post('preparer') : $overhaul['preparer']); ?>"" class="form-control" id="preparer" />
				</div>
			</div>
				
			<?php echo form_close(); ?>
		</div>
	</div>
		
	</div>
</div>

<?php $this->load->view('footer'); ?>

