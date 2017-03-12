

<?php echo form_open('overhaul/index',array('class'=>'form-horizontal overhaul-query-form','method'=>'get')); ?>
		
	<div class="panel-search panel panel-success">
	<div class="panel-heading">
	<h3 class="sub-title">
		查询字段
	</h3>
	</div>
	<div class="panel-body">
			
			<div class="form-group">
				<label for="lid" class="col-md-1 control-label">电梯编号</label>
				<div class="col-md-11">
					<input type="text" name="lid" value="<?php echo $this->input->get('lid'); ?>" class="form-control" id="lid" />
				</div>
			</div>
		
			<div class="form-group">
				<label for="location" class="col-md-1 control-label">安装位置</label> 
				<div class="col-md-11">
					<input class="form-control" type="text" name="location" value="<?php echo $this->input->get('location'); ?>" />
				</div>
			</div>

			   <div class="form-group">
			   	<label for="supportor" class="col-md-1 control-label">维修单位</label> 
			   	<div class="col-md-11">
			   		<input class="form-control" type="text" name="supportor" value="<?php echo $this->input->get('supportor'); ?>" />
			   	</div>
			   </div>

			   <div class="form-group">
			   	<label for="preparer" class="col-md-1 control-label">填报人</label> 
			   	<div class="col-md-11">
			   		<input class="form-control" type="text" name="preparer" value="<?php echo $this->input->get('preparer'); ?>" />
			   	</div>
			   </div>

			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-11">
					<button type="submit" class="btn btn-success">查询</button>
		        </div>
			</div>	
	</div>
	</div>

<?php echo form_close(); ?>