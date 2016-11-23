<?php $this->load->view('header'); ?>
<link rel="stylesheet" href="<?php echo asset_file_url('css/lift.css'); ?>" />

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			修改电梯信息
		</div>
		<div class="panel-body">
			<?php echo validation_errors(); ?>
			<?php echo form_open('lift/edit/'.$lm_lift['id'],array("class"=>"form-horizontal lift-form")); ?>

				<div class="form-group">
					<label for="lid" class="col-md-2 control-label">内部编码</label>
					<div class="col-md-10">
						<input type="text" readonly="readonly" name="lid" value="<?php echo ($this->input->post('lid') ? $this->input->post('lid') : $lm_lift['lid']); ?>" class="form-control" id="lid" />
					</div>
				</div>
				<div class="form-group">
					<label for="station" class="col-md-2 control-label">车站</label>
					<div class="col-md-10">
						<select name="station" id="station" class="form-control">
							<option value="">请选择主站</option>
							<?php 
							foreach($stations as $station)
							{
								$selected = $station['id'] == $lm_lift['station']?'selected':'';
								echo '<option value="'.$station['id'].'" '.$selected.' >'.$station['name'].'</option>';
							} 
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="substation" class="col-md-2 control-label">子站</label>
					<div class="col-md-10">
						<select name="substation" id="substation" class="form-control">
							<option value="">请选择子站</option>
							<?php 
							foreach($sub_stations as $sub_station)
							{
								$selected = $sub_station['id'] == $lm_lift['substation']?'selected':'';
								echo '<option value="'.$sub_station['id'].'" '. $selected .' >'.$sub_station['name'].'</option>';
							} 
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
						<label for="type" class="col-md-2 control-label">电梯类型</label>
						<div class="col-md-10">
							<select name="type" class="form-control">
								<option value="">请选择电梯类型</option>
								<?php 
								$type_values = array(
									'1'=>'扶梯',
									'2'=>'垂直电梯',
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
					<label for="vin" class="col-md-2 control-label">设备代码</label>
					<div class="col-md-10">
						<input type="text" name="vin" value="<?php echo ($this->input->post('vin') ? $this->input->post('vin') : $lm_lift['vin']); ?>" class="form-control" id="vin" />
					</div>
				</div>
				<div class="form-group">
					<label for="code" class="col-md-2 control-label">使用编号</label>
					<div class="col-md-10">
						<input type="text" name="code" value="<?php echo ($this->input->post('code') ? $this->input->post('code') : $lm_lift['code']); ?>" class="form-control" id="code" />
					</div>
				</div>
				<div class="form-group">
						<label for="location" class="col-md-2 control-label">安装位置</label>
						<div class="col-md-10">
							<input type="text" name="location" value="<?php echo ($this->input->post('location') ? $this->input->post('location') : $lm_lift['location']); ?>" class="form-control" id="location" />
						</div>
					</div>
				<div class="form-group">
					<label for="model" class="col-md-2 control-label">设备名称或型号</label>
					<div class="col-md-10">
						<input type="text" name="model" value="<?php echo ($this->input->post('model') ? $this->input->post('model') : $lm_lift['model']); ?>" class="form-control" id="model" />
					</div>
				</div>
				<div class="form-group">
					<label for="orig_no" class="col-md-2 control-label">原产品合同编号</label>
					<div class="col-md-10">
						<input type="text" name="orig_no" value="<?php echo ($this->input->post('orig_no') ? $this->input->post('orig_no') : $lm_lift['orig_no']); ?>" class="form-control" id="orig_no" />
					</div>
				</div>
				<div class="form-group">
					<label for="change_no" class="col-md-2 control-label">改造产品合同编号</label>
					<div class="col-md-10">
						<input type="text" name="change_no" value="<?php echo ($this->input->post('change_no') ? $this->input->post('change_no') : $lm_lift['change_no']); ?>" class="form-control" id="change_no" />
					</div>
				</div>
				<div class="form-group">
					<label for="production_date" class="col-md-2 control-label">出产日期</label>
					<div class="col-md-10">
						<input type="text" name="production_date" value="<?php echo ($this->input->post('production_date') ? $this->input->post('production_date') : $lm_lift['production_date']); ?>" class="form-control" id="production_date" />
					</div>
				</div>
				<div class="form-group">
					<label for="manufacturer" class="col-md-2 control-label">制造厂家</label>
					<div class="col-md-10">
						<input type="text" name="manufacturer" value="<?php echo ($this->input->post('manufacturer') ? $this->input->post('manufacturer') : $lm_lift['manufacturer']); ?>" class="form-control" id="manufacturer" />
					</div>
				</div>
				<div class="form-group">
					<label for="param" class="col-md-2 control-label">主要性能参数</label>
					<div class="col-md-10">
						<textarea name="param" class="form-control" id="param" cols="30" rows="10"><?php echo ($this->input->post('param') ? $this->input->post('param') : $lm_lift['param']); ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="last_check" class="col-md-2 control-label">上次检验日期</label>
					<div class="col-md-10">
						<input type="text" name="last_check" value="<?php echo ($this->input->post('last_check') ? $this->input->post('last_check') : $lm_lift['last_check']); ?>" class="form-control" id="last_check" />
					</div>
				</div>
				<div class="form-group">
					<label for="next_check" class="col-md-2 control-label">下次检验日期</label>
					<div class="col-md-10">
						<input type="text" name="next_check" value="<?php echo ($this->input->post('next_check') ? $this->input->post('next_check') : $lm_lift['next_check']); ?>" class="form-control" id="next_check" />
					</div>
				</div>
				<div class="form-group">
					<label for="distribution" class="col-md-2 control-label">配电间</label>
					<div class="col-md-10">
						<input type="text" name="distribution" value="<?php echo ($this->input->post('distribution') ? $this->input->post('distribution') : $lm_lift['distribution']); ?>" class="form-control" id="distribution" />
					</div>
				</div>
				<div class="form-group">
					<label for="no96333" class="col-md-2 control-label">96333编号</label>
					<div class="col-md-10">
						<input type="text" name="no96333" value="<?php echo ($this->input->post('no96333') ? $this->input->post('no96333') : $lm_lift['no96333']); ?>" class="form-control" id="no96333" />
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



