<?php $this->load->view('header'); ?>
<link rel="stylesheet" href="<?php echo asset_file_url('css/station.css'); ?>" />

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			编辑 站点
		</div>
		<div class="panel-body">
			<?php echo validation_errors(); ?>
			<?php echo form_open('station/edit/'.$lm_station['id'],array("class"=>"form-horizontal station-form")); ?>

				<div class="form-group">
					<label for="name" class="col-md-2 control-label">车站名称</label>
					<div class="col-md-10">
						<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $lm_station['name']); ?>" class="form-control" id="name" />
					</div>
				</div>
				<div class="form-group">
					<label for="grade" class="col-md-2 control-label">车站类别</label>
					<div class="col-md-10">
						<?php echo form_radio('grade', '10', $lm_station['grade'] == STATION); 
						 echo form_label('主站', 'grade'); ?>
						<?php echo form_radio('grade', '1', $lm_station['grade'] == SUB_STATION); 
						 echo form_label('子站', 'grade'); ?>
					</div>
				</div>
				<?php if($lm_station['grade'] == SUB_STATION){ ?>
				<div class="form-group">
					<label for="parent" class="col-md-2 control-label">主站</label>
					<div class="col-md-10">
						<select name="parent" class="form-control">
							<option value="">请选择主站</option>
							<?php 
							foreach($stations as $station)
							{
								$selected = $station['id'] == $lm_station['parent'] ? 'selected' :'';
								echo '<option value="'.$station['id'].'" '. $selected.' >'.$station['name'].'</option>';
							} 
							?>
						</select>
					</div>
				</div>
				<?php } ?>
				<div class="form-group">
					<label for="comments" class="col-md-2 control-label">备注</label>
					<div class="col-md-10">
						<textarea name="comments" id="comments" class="form-control">
							<?php echo ($this->input->post('comments') ? $this->input->post('comments') : $lm_station['comments']); ?>
						</textarea>
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




