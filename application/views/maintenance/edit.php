<?php echo validation_errors(); ?>
<?php echo form_open('maintenance/edit/'.$lm_maintenance['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
			<label for="lid" class="col-md-4 control-label">Lid</label>
			<div class="col-md-8">
				<select name="lid" class="form-control">
					<option value="">select lm_lift</option>
					<?php 
					foreach($all_lm_lift as $lm_lift)
					{
						$selected = ($lm_lift['id'] == $lm_maintenance['lid']) ? ' selected="selected"' : null;

						echo '<option value="'.$lm_lift['id'].'" '.$selected.'>'.$lm_lift['lid'].'</option>';
					} 
					?>
				</select>
			</div>
		</div>
	<div class="form-group">
		<label for="maintenance_man" class="col-md-4 control-label">Maintenance Man</label>
		<div class="col-md-8">
			<input type="text" name="maintenance_man" value="<?php echo ($this->input->post('maintenance_man') ? $this->input->post('maintenance_man') : $lm_maintenance['maintenance_man']); ?>" class="form-control" id="maintenance_man" />
		</div>
	</div>
	<div class="form-group">
		<label for="check_date" class="col-md-4 control-label">Check Date</label>
		<div class="col-md-8">
			<input type="text" name="check_date" value="<?php echo ($this->input->post('check_date') ? $this->input->post('check_date') : $lm_maintenance['check_date']); ?>" class="form-control" id="check_date" />
		</div>
	</div>
	<div class="form-group">
		<label for="problem" class="col-md-4 control-label">Problem</label>
		<div class="col-md-8">
			<input type="text" name="problem" value="<?php echo ($this->input->post('problem') ? $this->input->post('problem') : $lm_maintenance['problem']); ?>" class="form-control" id="problem" />
		</div>
	</div>
	<div class="form-group">
		<label for="cause" class="col-md-4 control-label">Cause</label>
		<div class="col-md-8">
			<input type="text" name="cause" value="<?php echo ($this->input->post('cause') ? $this->input->post('cause') : $lm_maintenance['cause']); ?>" class="form-control" id="cause" />
		</div>
	</div>
	<div class="form-group">
		<label for="charge_partment" class="col-md-4 control-label">Charge Partment</label>
		<div class="col-md-8">
			<input type="text" name="charge_partment" value="<?php echo ($this->input->post('charge_partment') ? $this->input->post('charge_partment') : $lm_maintenance['charge_partment']); ?>" class="form-control" id="charge_partment" />
		</div>
	</div>
	<div class="form-group">
		<label for="charge_man" class="col-md-4 control-label">Charge Man</label>
		<div class="col-md-8">
			<input type="text" name="charge_man" value="<?php echo ($this->input->post('charge_man') ? $this->input->post('charge_man') : $lm_maintenance['charge_man']); ?>" class="form-control" id="charge_man" />
		</div>
	</div>
	<div class="form-group">
		<label for="deadline" class="col-md-4 control-label">Deadline</label>
		<div class="col-md-8">
			<input type="text" name="deadline" value="<?php echo ($this->input->post('deadline') ? $this->input->post('deadline') : $lm_maintenance['deadline']); ?>" class="form-control" id="deadline" />
		</div>
	</div>
	<div class="form-group">
		<label for="deal" class="col-md-4 control-label">Deal</label>
		<div class="col-md-8">
			<input type="text" name="deal" value="<?php echo ($this->input->post('deal') ? $this->input->post('deal') : $lm_maintenance['deal']); ?>" class="form-control" id="deal" />
		</div>
	</div>
	<div class="form-group">
		<label for="status" class="col-md-4 control-label">Status</label>
		<div class="col-md-8">
			<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $lm_maintenance['status']); ?>" class="form-control" id="status" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>