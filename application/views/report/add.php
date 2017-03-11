<?php $this->load->view('header'); ?>

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			新增 验收检验报告
		</div>
		<div class="panel-body">
			<?php if(isset($errors)){
				echo $errors;
				} ?>

			<?php echo validation_errors(); ?>
			<?php echo form_open_multipart('report/add',array("class"=>"form-horizontal report-add-form")); ?>

			<div class="form-group">
				<label for="lid" class="col-md-1 control-label">电梯编号</label>
				<div class="col-md-11">
					<input type="text" name="lid" value="<?php echo $this->input->post('lid'); ?>" class="form-control" id="lid" />
				</div>


			</div>
			<div class="form-group">
				<?php $this->load->view('report/lifts'); ?>
			</div>

			<div class="form-group">
				<label for="lid" class="col-md-1 control-label">上传报告</label>
				<div class="col-md-11">
					<input type="file" name="doc" size="20" />
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-offset-1 col-md-11">
					<input type="submit" name="add" class="btn btn-primary" value="确认新增"  />
				</div>
			</div>

			<?php echo form_close(); ?>
			
		</div>
	</div>
		
	</div>
</div>

<?php $this->load->view('footer'); ?>
