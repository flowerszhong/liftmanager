<?php echo validation_errors(); ?>
<?php echo form_open('lift/edit/'.$lm_lift['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="lid" class="col-md-4 control-label">Lid</label>
		<div class="col-md-8">
			<input type="text" name="lid" value="<?php echo ($this->input->post('lid') ? $this->input->post('lid') : $lm_lift['lid']); ?>" class="form-control" id="lid" />
		</div>
	</div>
	<div class="form-group">
		<label for="station" class="col-md-4 control-label">Station</label>
		<div class="col-md-8">
			<input type="text" name="station" value="<?php echo ($this->input->post('station') ? $this->input->post('station') : $lm_lift['station']); ?>" class="form-control" id="station" />
		</div>
	</div>
	<div class="form-group">
		<label for="substation" class="col-md-4 control-label">Substation</label>
		<div class="col-md-8">
			<input type="text" name="substation" value="<?php echo ($this->input->post('substation') ? $this->input->post('substation') : $lm_lift['substation']); ?>" class="form-control" id="substation" />
		</div>
	</div>
	<div class="form-group">
			<label for="type" class="col-md-4 control-label">Type</label>
			<div class="col-md-8">
				<select name="type" class="form-control">
					<option value="">select</option>
					<?php 
					$type_values = array(
						'1'=>'垂直电梯',
						'2'=>'扶梯',
					);

					foreach($type_values as $value => $display_text)
					{
						$selected = ($value == $lm_lift['type']) ? ' selected="selected"' : null;

						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					} 
					?>
				</select>
			</div>
		</div>
	<div class="form-group">
		<label for="vin" class="col-md-4 control-label">Vin</label>
		<div class="col-md-8">
			<input type="text" name="vin" value="<?php echo ($this->input->post('vin') ? $this->input->post('vin') : $lm_lift['vin']); ?>" class="form-control" id="vin" />
		</div>
	</div>
	<div class="form-group">
		<label for="code" class="col-md-4 control-label">Code</label>
		<div class="col-md-8">
			<input type="text" name="code" value="<?php echo ($this->input->post('code') ? $this->input->post('code') : $lm_lift['code']); ?>" class="form-control" id="code" />
		</div>
	</div>
	<div class="form-group">
			<label for="location" class="col-md-4 control-label">Location</label>
			<div class="col-md-8">
				<select name="location" class="form-control">
					<option value="">select</option>
					<?php 
					$location_values = array(
					);

					foreach($location_values as $value => $display_text)
					{
						$selected = ($value == $lm_lift['location']) ? ' selected="selected"' : null;

						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					} 
					?>
				</select>
			</div>
		</div>
	<div class="form-group">
		<label for="model" class="col-md-4 control-label">Model</label>
		<div class="col-md-8">
			<input type="text" name="model" value="<?php echo ($this->input->post('model') ? $this->input->post('model') : $lm_lift['model']); ?>" class="form-control" id="model" />
		</div>
	</div>
	<div class="form-group">
		<label for="orig_no" class="col-md-4 control-label">Orig No</label>
		<div class="col-md-8">
			<input type="text" name="orig_no" value="<?php echo ($this->input->post('orig_no') ? $this->input->post('orig_no') : $lm_lift['orig_no']); ?>" class="form-control" id="orig_no" />
		</div>
	</div>
	<div class="form-group">
		<label for="change_no" class="col-md-4 control-label">Change No</label>
		<div class="col-md-8">
			<input type="text" name="change_no" value="<?php echo ($this->input->post('change_no') ? $this->input->post('change_no') : $lm_lift['change_no']); ?>" class="form-control" id="change_no" />
		</div>
	</div>
	<div class="form-group">
		<label for="production_date" class="col-md-4 control-label">Production Date</label>
		<div class="col-md-8">
			<input type="text" name="production_date" value="<?php echo ($this->input->post('production_date') ? $this->input->post('production_date') : $lm_lift['production_date']); ?>" class="form-control" id="production_date" />
		</div>
	</div>
	<div class="form-group">
		<label for="manufacturer" class="col-md-4 control-label">Manufacturer</label>
		<div class="col-md-8">
			<input type="text" name="manufacturer" value="<?php echo ($this->input->post('manufacturer') ? $this->input->post('manufacturer') : $lm_lift['manufacturer']); ?>" class="form-control" id="manufacturer" />
		</div>
	</div>
	<div class="form-group">
		<label for="param" class="col-md-4 control-label">Param</label>
		<div class="col-md-8">
			<input type="text" name="param" value="<?php echo ($this->input->post('param') ? $this->input->post('param') : $lm_lift['param']); ?>" class="form-control" id="param" />
		</div>
	</div>
	<div class="form-group">
		<label for="last_check" class="col-md-4 control-label">Last Check</label>
		<div class="col-md-8">
			<input type="text" name="last_check" value="<?php echo ($this->input->post('last_check') ? $this->input->post('last_check') : $lm_lift['last_check']); ?>" class="form-control" id="last_check" />
		</div>
	</div>
	<div class="form-group">
		<label for="next_check" class="col-md-4 control-label">Next Check</label>
		<div class="col-md-8">
			<input type="text" name="next_check" value="<?php echo ($this->input->post('next_check') ? $this->input->post('next_check') : $lm_lift['next_check']); ?>" class="form-control" id="next_check" />
		</div>
	</div>
	<div class="form-group">
		<label for="distribution" class="col-md-4 control-label">Distribution</label>
		<div class="col-md-8">
			<input type="text" name="distribution" value="<?php echo ($this->input->post('distribution') ? $this->input->post('distribution') : $lm_lift['distribution']); ?>" class="form-control" id="distribution" />
		</div>
	</div>
	<div class="form-group">
		<label for="no96333" class="col-md-4 control-label">No96333</label>
		<div class="col-md-8">
			<input type="text" name="no96333" value="<?php echo ($this->input->post('no96333') ? $this->input->post('no96333') : $lm_lift['no96333']); ?>" class="form-control" id="no96333" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>