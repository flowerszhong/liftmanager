<?php $this->load->view('header'); ?>

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
	<div class="panel-heading">
		添加车站	
	</div>
	<div class="panel-body">
		
<?php echo validation_errors(); ?>
<?php echo form_open('station/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="name" class="col-md-2 control-label">车站名称</label>
		<div class="col-md-10">
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="grade" class="col-md-2 control-label">车站类别</label>
		<div class="col-md-10">
			<?php echo form_radio('grade', '10', FALSE,array("id"=>"station_main")); 
			 echo form_label('主站', 'grade'); ?>
			<?php echo form_radio('grade', '1', TRUE,array("id"=>"station_sub")); 
			 echo form_label('子站', 'grade'); ?>
		</div>
	</div>
	<div class="form-group"  id="mainstation-row">
		<label for="parent" class="col-md-2 control-label">主站</label>
		<div class="col-md-10">
			<select name="parent" id="station-parent" class="form-control">
				<option value="">请选择主站</option>
				<?php 
				foreach($stations as $station)
				{
					echo '<option value="'.$station['id'].'">'.$station['name'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="comments" class="col-md-2 control-label">站点信息备注</label>
		<div class="col-md-10">
			<textarea name="comments" class="form-control" id="comments"><?php echo $this->input->post('comments'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-success">添加</button>
        </div>
	</div>

<?php echo form_close(); ?>

</div>
</div>
</div>
</div>


<?php $this->load->view('footer'); ?>