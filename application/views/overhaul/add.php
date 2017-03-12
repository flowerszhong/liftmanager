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
		<div class="panel- heading">
			新增检修记录
		</div>
		<div class="panel-body">
			<?php echo validation_errors(); ?>

			<?php echo form_open('overhaul/add',array("class"=>"form-horizontal overhaul-add-form")); ?>

			<div class="form-group">
				<label for="lid" class="col-md-1 control-label">电梯编号</label>
				<div class="col-md-11">
					<input type="text" name="lid" value="<?php echo $this->input->post('lid'); ?>" class="form-control" id="lid" />
				</div>
			</div>

			<div class="form-group">
			<?php $this->load->view('lifts'); ?>
			</div>
			<div class="form-group">
				<label for="lid" class="col-md-1 control-label">报修时间</label> 
				<div class="col-md-11">
					<input class="form-control" type="date" name="f_create" value="<?php echo $this->input->post('f_create'); ?>" />
				</div>
			</div>
			<div class="form-group">
				<label for="lid" class="col-md-1 control-label">故障现象</label>
				<div class="col-md-11">
				 	<textarea class="form-control" name="f_description"><?php echo $this->input->post('f_description'); ?></textarea>
				 </div>
			 </div>

			 <div class="form-group">
				<label for="f_cause" class="col-md-1 control-label">故障原因</label>
				<div class="col-md-11">
				 	<textarea class="form-control" name="f_cause"><?php echo $this->input->post('f_cause'); ?></textarea>
				 </div>
			 </div>

			  <div class="form-group">
			 	<label for="f_deal" class="col-md-1 control-label">处理方法</label>
			 	<div class="col-md-11">
			 	 	<textarea class="form-control" name="f_deal"><?php echo $this->input->post('f_deal'); ?></textarea>
			 	 </div>
			  </div>

			   <div class="form-group">
			  	<label for="f_change" class="col-md-1 control-label">更换配件</label>
			  	<div class="col-md-11">
			  	 	<textarea class="form-control" name="f_change"><?php echo $this->input->post('f_change'); ?></textarea>
			  	 </div>
			   </div>

			   <div class="form-group">
			   	<label for="f_done" class="col-md-1 control-label">修复时间</label> 
			   	<div class="col-md-11">
			   		<input class="form-control" type="date" name="f_done" value="<?php echo $this->input->post('f_done'); ?>" />
			   	</div>
			   </div>

			   <div class="form-group">
			   	<label for="supportor" class="col-md-1 control-label">维修单位</label> 
			   	<div class="col-md-11">
			   		<input class="form-control" type="text" name="supportor" value="<?php echo $this->input->post('supportor'); ?>" />
			   	</div>
			   </div>

			   <div class="form-group">
			   	<label for="preparer" class="col-md-1 control-label">填报人</label> 
			   	<div class="col-md-11">
			   		<input class="form-control" type="text" name="preparer" value="<?php echo $this->input->post('preparer'); ?>" />
			   	</div>
			   </div>

			   
				<div class="form-group">
					<div class="col-md-offset-1 col-md-11">
						<button type="submit" class="btn btn-success">确认新增</button>
			        </div>
				</div>

			<?php echo form_close(); ?>
		</div>
	</div>
		
	</div>
</div>

<?php $this->load->view('footer'); ?>


