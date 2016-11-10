<?php echo validation_errors(); ?>
<?php echo form_open('admin/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="displayname" class="col-md-4 control-label">Displayname</label>
		<div class="col-md-8">
			<input type="text" name="displayname" value="<?php echo $this->input->post('displayname'); ?>" class="form-control" id="displayname" />
		</div>
	</div>
	<div class="form-group">
		<label for="pwd" class="col-md-4 control-label">Pwd</label>
		<div class="col-md-8">
			<input type="text" name="pwd" value="<?php echo $this->input->post('pwd'); ?>" class="form-control" id="pwd" />
		</div>
	</div>
	<div class="form-group">
		<label for="salt1" class="col-md-4 control-label">Salt1</label>
		<div class="col-md-8">
			<input type="text" name="salt1" value="<?php echo $this->input->post('salt1'); ?>" class="form-control" id="salt1" />
		</div>
	</div>
	<div class="form-group">
		<label for="salt2" class="col-md-4 control-label">Salt2</label>
		<div class="col-md-8">
			<input type="text" name="salt2" value="<?php echo $this->input->post('salt2'); ?>" class="form-control" id="salt2" />
		</div>
	</div>
	<div class="form-group">
		<label for="station" class="col-md-4 control-label">Station</label>
		<div class="col-md-8">
			<input type="text" name="station" value="<?php echo $this->input->post('station'); ?>" class="form-control" id="station" />
		</div>
	</div>
	<div class="form-group">
		<label for="power" class="col-md-4 control-label">Power</label>
		<div class="col-md-8">
			<input type="text" name="power" value="<?php echo $this->input->post('power'); ?>" class="form-control" id="power" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>