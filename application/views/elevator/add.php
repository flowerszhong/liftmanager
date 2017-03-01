<?php $this->load->view('header'); ?>


<?php echo validation_errors(); ?>
<?php echo form_open('elevator/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="lid" class="col-md-4 control-label">Lid</label>
		<div class="col-md-8">
			<input type="text" name="lid" value="<?php echo $this->input->post('lid'); ?>" class="form-control" id="lid" />
		</div>
	</div>
	<div class="form-group">
		<label for="location" class="col-md-4 control-label">Location</label>
		<div class="col-md-8">
			<input type="text" name="location" value="<?php echo $this->input->post('location'); ?>" class="form-control" id="location" />
		</div>
	</div>
	<div class="form-group">
		<label for="code" class="col-md-4 control-label">Code</label>
		<div class="col-md-8">
			<input type="text" name="code" value="<?php echo $this->input->post('code'); ?>" class="form-control" id="code" />
		</div>
	</div>
	<div class="form-group">
		<label for="product_contract" class="col-md-4 control-label">Product Contract</label>
		<div class="col-md-8">
			<input type="text" name="product_contract" value="<?php echo $this->input->post('product_contract'); ?>" class="form-control" id="product_contract" />
		</div>
	</div>
	<div class="form-group">
		<label for="product_orderer" class="col-md-4 control-label">Product Orderer</label>
		<div class="col-md-8">
			<input type="text" name="product_orderer" value="<?php echo $this->input->post('product_orderer'); ?>" class="form-control" id="product_orderer" />
		</div>
	</div>
	<div class="form-group">
		<label for="product_id" class="col-md-4 control-label">Product Id</label>
		<div class="col-md-8">
			<input type="text" name="product_id" value="<?php echo $this->input->post('product_id'); ?>" class="form-control" id="product_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="product_date" class="col-md-4 control-label">Product Date</label>
		<div class="col-md-8">
			<input type="text" name="product_date" value="<?php echo $this->input->post('product_date'); ?>" class="form-control" id="product_date" />
		</div>
	</div>
	<div class="form-group">
		<label for="product_name" class="col-md-4 control-label">Product Name</label>
		<div class="col-md-8">
			<input type="text" name="product_name" value="<?php echo $this->input->post('product_name'); ?>" class="form-control" id="product_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="product_driver" class="col-md-4 control-label">Product Driver</label>
		<div class="col-md-8">
			<input type="text" name="product_driver" value="<?php echo $this->input->post('product_driver'); ?>" class="form-control" id="product_driver" />
		</div>
	</div>
	<div class="form-group">
		<label for="product_type" class="col-md-4 control-label">Product Type</label>
		<div class="col-md-8">
			<input type="text" name="product_type" value="<?php echo $this->input->post('product_type'); ?>" class="form-control" id="product_type" />
		</div>
	</div>
	<div class="form-group">
		<label for="product_os" class="col-md-4 control-label">Product Os</label>
		<div class="col-md-8">
			<input type="text" name="product_os" value="<?php echo $this->input->post('product_os'); ?>" class="form-control" id="product_os" />
		</div>
	</div>
	<div class="form-group">
		<label for="product_maxweight" class="col-md-4 control-label">Product Maxweight</label>
		<div class="col-md-8">
			<input type="text" name="product_maxweight" value="<?php echo $this->input->post('product_maxweight'); ?>" class="form-control" id="product_maxweight" />
		</div>
	</div>
	<div class="form-group">
		<label for="product_speed" class="col-md-4 control-label">Product Speed</label>
		<div class="col-md-8">
			<input type="text" name="product_speed" value="<?php echo $this->input->post('product_speed'); ?>" class="form-control" id="product_speed" />
		</div>
	</div>
	<div class="form-group">
		<label for="product_doortype" class="col-md-4 control-label">Product Doortype</label>
		<div class="col-md-8">
			<input type="text" name="product_doortype" value="<?php echo $this->input->post('product_doortype'); ?>" class="form-control" id="product_doortype" />
		</div>
	</div>
	<div class="form-group">
		<label for="product_doornum" class="col-md-4 control-label">Product Doornum</label>
		<div class="col-md-8">
			<input type="text" name="product_doornum" value="<?php echo $this->input->post('product_doornum'); ?>" class="form-control" id="product_doornum" />
		</div>
	</div>
	<div class="form-group">
		<label for="product_boxsize" class="col-md-4 control-label">Product Boxsize</label>
		<div class="col-md-8">
			<input type="text" name="product_boxsize" value="<?php echo $this->input->post('product_boxsize'); ?>" class="form-control" id="product_boxsize" />
		</div>
	</div>
	<div class="form-group">
		<label for="register_id" class="col-md-4 control-label">Register Id</label>
		<div class="col-md-8">
			<input type="text" name="register_id" value="<?php echo $this->input->post('register_id'); ?>" class="form-control" id="register_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="register_code" class="col-md-4 control-label">Register Code</label>
		<div class="col-md-8">
			<input type="text" name="register_code" value="<?php echo $this->input->post('register_code'); ?>" class="form-control" id="register_code" />
		</div>
	</div>
	<div class="form-group">
		<label for="register_com" class="col-md-4 control-label">Register Com</label>
		<div class="col-md-8">
			<input type="text" name="register_com" value="<?php echo $this->input->post('register_com'); ?>" class="form-control" id="register_com" />
		</div>
	</div>
	<div class="form-group">
		<label for="register_type" class="col-md-4 control-label">Register Type</label>
		<div class="col-md-8">
			<input type="text" name="register_type" value="<?php echo $this->input->post('register_type'); ?>" class="form-control" id="register_type" />
		</div>
	</div>
	<div class="form-group">
		<label for="register_model" class="col-md-4 control-label">Register Model</label>
		<div class="col-md-8">
			<input type="text" name="register_model" value="<?php echo $this->input->post('register_model'); ?>" class="form-control" id="register_model" />
		</div>
	</div>
	<div class="form-group">
		<label for="register_maker" class="col-md-4 control-label">Register Maker</label>
		<div class="col-md-8">
			<input type="text" name="register_maker" value="<?php echo $this->input->post('register_maker'); ?>" class="form-control" id="register_maker" />
		</div>
	</div>
	<div class="form-group">
		<label for="register_licence" class="col-md-4 control-label">Register Licence</label>
		<div class="col-md-8">
			<input type="text" name="register_licence" value="<?php echo $this->input->post('register_licence'); ?>" class="form-control" id="register_licence" />
		</div>
	</div>
	<div class="form-group">
		<label for="register_pid" class="col-md-4 control-label">Register Pid</label>
		<div class="col-md-8">
			<input type="text" name="register_pid" value="<?php echo $this->input->post('register_pid'); ?>" class="form-control" id="register_pid" />
		</div>
	</div>
	<div class="form-group">
		<label for="register_lid" class="col-md-4 control-label">Register Lid</label>
		<div class="col-md-8">
			<input type="text" name="register_lid" value="<?php echo $this->input->post('register_lid'); ?>" class="form-control" id="register_lid" />
		</div>
	</div>
	<div class="form-group">
		<label for="register_copy" class="col-md-4 control-label">Register Copy</label>
		<div class="col-md-8">
			<input type="text" name="register_copy" value="<?php echo $this->input->post('register_copy'); ?>" class="form-control" id="register_copy" />
		</div>
	</div>
	<div class="form-group">
		<label for="preparer" class="col-md-4 control-label">Preparer</label>
		<div class="col-md-8">
			<input type="text" name="preparer" value="<?php echo $this->input->post('preparer'); ?>" class="form-control" id="preparer" />
		</div>
	</div>
	<div class="form-group">
		<label for="submitor" class="col-md-4 control-label">Submitor</label>
		<div class="col-md-8">
			<input type="text" name="submitor" value="<?php echo $this->input->post('submitor'); ?>" class="form-control" id="submitor" />
		</div>
	</div>
	<div class="form-group">
		<label for="submit_date" class="col-md-4 control-label">Submit Date</label>
		<div class="col-md-8">
			<input type="text" name="submit_date" value="<?php echo $this->input->post('submit_date'); ?>" class="form-control" id="submit_date" />
		</div>
	</div>
	<div class="form-group">
		<label for="update_date" class="col-md-4 control-label">Update Date</label>
		<div class="col-md-8">
			<input type="text" name="update_date" value="<?php echo $this->input->post('update_date'); ?>" class="form-control" id="update_date" />
		</div>
	</div>
	<div class="form-group">
		<label for="station_id" class="col-md-4 control-label">Station Id</label>
		<div class="col-md-8">
			<input type="text" name="station_id" value="<?php echo $this->input->post('station_id'); ?>" class="form-control" id="station_id" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>

<?php $this->load->view('footer'); ?>
