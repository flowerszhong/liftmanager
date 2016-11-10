<?php echo validation_errors(); ?>
<?php echo form_open('station/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="grade" class="col-md-4 control-label">Grade</label>
		<div class="col-md-8">
			<input type="text" name="grade" value="<?php echo $this->input->post('grade'); ?>" class="form-control" id="grade" />
		</div>
	</div>
	<div class="form-group">
		<label for="parent" class="col-md-4 control-label">Parent</label>
		<div class="col-md-8">
			<input type="text" name="parent" value="<?php echo $this->input->post('parent'); ?>" class="form-control" id="parent" />
		</div>
	</div>
	<div class="form-group">
		<label for="comments" class="col-md-4 control-label">Comments</label>
		<div class="col-md-8">
			<input type="text" name="comments" value="<?php echo $this->input->post('comments'); ?>" class="form-control" id="comments" />
		</div>
	</div>
	<div class="form-group">
		<label for="thumbnail" class="col-md-4 control-label">Thumbnail</label>
		<div class="col-md-8">
			<input type="text" name="thumbnail" value="<?php echo $this->input->post('thumbnail'); ?>" class="form-control" id="thumbnail" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>