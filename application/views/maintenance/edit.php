<?php $this->load->view('header'); ?>
<link rel="stylesheet" href="<?php echo asset_file_url('css/maintenance.css'); ?>" />

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			修改检修记录
		</div>
		<div class="panel-body">
			

			<?php echo validation_errors(); ?>
			<?php echo form_open('maintenance/edit/'.$lm_maintenance['id'],array("class"=>"form-horizontal form-maintenance")); ?>

				<div class="form-group">
						<label for="lid" class="col-md-2 control-label">Lid</label>
						<div class="col-md-10">
							<select name="lid" class="form-control">
								<option value="">请选择电梯</option>
								<?php 
								foreach($all_lm_lift as $lm_lift)
								{
									$selected = ($lm_lift['lid'] == $lm_maintenance['lid']) ? ' selected="selected"' : null;

									echo '<option value="'.$lm_lift['lid'].'" '.$selected.'>'.$lm_lift['lid'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
				<div class="form-group">
					<label for="maintenance_man" class="col-md-2 control-label">检查人</label>
					<div class="col-md-10">
						<input type="text" name="maintenance_man" value="<?php echo ($this->input->post('maintenance_man') ? $this->input->post('maintenance_man') : $lm_maintenance['maintenance_man']); ?>" class="form-control" id="maintenance_man" />
					</div>
				</div>
				<div class="form-group">
					<label for="check_date" class="col-md-2 control-label">检查日期</label>
					<div class="col-md-10">
						<input type="text" name="check_date" value="<?php echo ($this->input->post('check_date') ? $this->input->post('check_date') : $lm_maintenance['check_date']); ?>" class="form-control" id="check_date" />
					</div>
				</div>
				<div class="form-group">
					<label for="problem" class="col-md-2 control-label">发现问题</label>
					<div class="col-md-10">
						<textarea name="problem" id="problem" class="form-control"><?php echo ($this->input->post('problem') ? $this->input->post('problem') : $lm_maintenance['problem']); ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="cause" class="col-md-2 control-label">原因分析</label>
					<div class="col-md-10">
						<textarea name="cause" id="cause" class="form-control"><?php echo ($this->input->post('cause') ? $this->input->post('cause') : $lm_maintenance['cause']); ?></textarea>

					</div>
				</div>
				<div class="form-group">
					<label for="charge_partment" class="col-md-2 control-label">整改部门</label>
					<div class="col-md-10">
						<input type="text" name="charge_partment" value="<?php echo ($this->input->post('charge_partment') ? $this->input->post('charge_partment') : $lm_maintenance['charge_partment']); ?>" class="form-control" id="charge_partment" />
					</div>
				</div>
				<div class="form-group">
					<label for="charge_man" class="col-md-2 control-label">负责人</label>
					<div class="col-md-10">
						<input type="text" name="charge_man" value="<?php echo ($this->input->post('charge_man') ? $this->input->post('charge_man') : $lm_maintenance['charge_man']); ?>" class="form-control" id="charge_man" />
					</div>
				</div>
				<div class="form-group">
					<label for="deadline" class="col-md-2 control-label">整改期限</label>
					<div class="col-md-10">
						<input type="text" name="deadline" value="<?php echo ($this->input->post('deadline') ? $this->input->post('deadline') : $lm_maintenance['deadline']); ?>" class="form-control" id="deadline" />
					</div>
				</div>
				<div class="form-group">
					<label for="deal" class="col-md-2 control-label">整改措施</label>
					<div class="col-md-10">
						<textarea name="deal" id="deal" class="form-control"><?php echo ($this->input->post('deal') ? $this->input->post('deal') : $lm_maintenance['deal']); ?></textarea>

					</div>
				</div>
				<div class="form-group">
					<label for="status" class="col-md-2 control-label">整改情况</label>
					<div class="col-md-10">
						<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $lm_maintenance['status']); ?>" class="form-control" id="status" />
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

