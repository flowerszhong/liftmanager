<?php $this->load->view('header'); ?>

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			新增 验收检验报告
		</div>
		<div class="panel-body">
			<?php echo form_open('report/add',array("class"=>"form-horizontal report-add-form")); ?>

			<div class="form-group">
				<label for="lid" class="col-md-2 control-label">电梯编号</label>
				<div class="col-md-10">
					<input type="text" name="lid" value="<?php echo $this->input->post('lid'); ?>" class="form-control" id="lid" />
				</div>
			</div>

			<div class="form-group">
				<label for="lid" class="col-md-2 control-label">电梯位置</label>
				<div class="col-md-10">
					<input type="text" name="lid" value="<?php echo $this->input->post('lid'); ?>" class="form-control" id="lid" />
				</div>
			</div>

			<?php echo form_close(); ?>
			
		</div>
	</div>
		
	</div>
</div>

<?php $this->load->view('footer'); ?>
