<?php $this->load->view('header'); ?>
<link rel="stylesheet" href="<?php echo asset_file_url('css/maintenance.css'); ?>" />

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			新增检修记录
		</div>
		<div class="panel-body">
			
			<?php echo validation_errors(); ?>
			<?php echo form_open('maintenance/add',array("class"=>"form-horizontal form-maintenance")); ?>

				<div class="form-group">
						<label for="lid" class="col-md-2 control-label">电梯内部编号</label>
						<div class="col-md-10">
							<select name="lid" class="form-control">
								<option value="">请选择电梯</option>
								<?php 
								foreach($all_lm_lift as $lm_lift)
								{
									$selected = ($lm_lift['lid'] == $this->input->post('lid')) ? ' selected="selected"' : null;

									echo '<option value="'.$lm_lift['lid'].'" '.$selected.'>'.$lm_lift['lid'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
				<div class="form-group">
					<label for="maintenance_man" class="col-md-2 control-label">检查人</label>
					<div class="col-md-10">
						<input type="text" name="maintenance_man" value="<?php echo $this->input->post('maintenance_man'); ?>" class="form-control" id="maintenance_man" />
					</div>
				</div>
				<div class="form-group">
					<label for="check_date" class="col-md-2 control-label">检查日期</label>
					<div class="col-md-10">
						<input type="date" name="check_date" value="<?php echo $this->input->post('check_date'); ?>" class="form-control" id="check_date" />
					</div>
				</div>
				<div class="form-group">
					<label for="problem" class="col-md-2 control-label">发现问题</label>
					<div class="col-md-10">
						<textarea name="problem" id="problem" class="form-control" ><?php echo $this->input->post('problem'); ?> </textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="cause" class="col-md-2 control-label">原因分析</label>
					<div class="col-md-10">
						<textarea name="cause" id="cause" class="form-control" ><?php echo $this->input->post('cause'); ?> </textarea>

					</div>
				</div>
				<div class="form-group">
					<label for="charge_partment" class="col-md-2 control-label">整改部门</label>
					<div class="col-md-10">
						<input type="text" name="charge_partment" value="<?php echo $this->input->post('charge_partment'); ?>" class="form-control" id="charge_partment" />
					</div>
				</div>
				<div class="form-group">
					<label for="charge_man" class="col-md-2 control-label">负责人</label>
					<div class="col-md-10">
						<input type="text" name="charge_man" value="<?php echo $this->input->post('charge_man'); ?>" class="form-control" id="charge_man" />
					</div>
				</div>
				<div class="form-group">
					<label for="deadline" class="col-md-2 control-label">整改期限</label>
					<div class="col-md-10">
						<input type="date" name="deadline" value="<?php echo $this->input->post('deadline'); ?>" class="form-control" id="deadline" />
					</div>
				</div>
				<div class="form-group">
					<label for="deal" class="col-md-2 control-label">整改措施</label>
					<div class="col-md-10">
						<textarea name="deal" id="deal" class="form-control" ><?php echo $this->input->post('deal'); ?> </textarea>

					</div>
				</div>
				<div class="form-group">
					<label for="status" class="col-md-2 control-label">整改情况</label>
					<div class="col-md-10">
						<?php echo form_radio('status', M_STATE_NORMAL, FALSE); 
						 echo form_label('正常检修，未发现问题', 'status'); ?>
						<?php echo form_radio('status', M_STATE_PROBLEM, TRUE); 
						 echo form_label('发现问题，正在整改', 'status'); ?>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">保存</button>
			        </div>
				</div>

			<?php echo form_close(); ?>
		</div>
	</div>
		
	</div>
</div>

<?php $this->load->view('footer'); ?>



