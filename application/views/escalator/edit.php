<?php $this->load->view('header'); ?>

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			编辑
		</div>
		<div class="panel-body">
			<?php echo form_open('escalator/edit/'.$escalator['id'],array("class"=>"form-horizontal escalator-edit-form")); ?>

				<div class="form-group">
					<label for="lid" class="col-md-2 control-label">电梯编号</label>
					<div class="col-md-10">
						<input type="text" name="lid" value="<?php echo ($this->input->post('lid') ? $this->input->post('lid') : $escalator['lid']); ?>" class="form-control" id="lid" />
					</div>
				</div>
				<div class="form-group">
					<label for="location" class="col-md-2 control-label">电梯位置</label>
					<div class="col-md-10">
						<input type="text" name="location" value="<?php echo ($this->input->post('location') ? $this->input->post('location') : $escalator['location']); ?>" class="form-control" id="location" />
					</div>
				</div>

				<hr>

				<div class="form-group">
					<label for="product_code" class="col-md-2 control-label">使用编号</label>
					<div class="col-md-10">
						<input type="text" name="product_code" value="<?php echo ($this->input->post('product_code') ? $this->input->post('product_code') : $escalator['product_code']); ?>" class="form-control" id="product_code" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_supportor" class="col-md-2 control-label">维保单位</label>
					<div class="col-md-10">
						<input type="text" name="product_supportor" value="<?php echo ($this->input->post('product_supportor') ? $this->input->post('product_supportor') : $escalator['product_supportor']); ?>" class="form-control" id="product_supportor" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_contact" class="col-md-2 control-label">维保电话</label>
					<div class="col-md-10">
						<input type="text" name="product_contact" value="<?php echo ($this->input->post('product_contact') ? $this->input->post('product_contact') : $escalator['product_contact']); ?>" class="form-control" id="product_contact" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_service" class="col-md-2 control-label">检验单位</label>
					<div class="col-md-10">
						<input type="text" name="product_service" value="<?php echo ($this->input->post('product_service') ? $this->input->post('product_service') : $escalator['product_service']); ?>" class="form-control" id="product_service" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_serviceman" class="col-md-2 control-label">检验人员</label>
					<div class="col-md-10">
						<input type="text" name="product_serviceman" value="<?php echo ($this->input->post('product_serviceman') ? $this->input->post('product_serviceman') : $escalator['product_serviceman']); ?>" class="form-control" id="product_serviceman" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_nextcheck" class="col-md-2 control-label">下次检验日期</label>
					<div class="col-md-10">
						<input type="text" name="product_nextcheck" value="<?php echo ($this->input->post('product_nextcheck') ? $this->input->post('product_nextcheck') : $escalator['product_nextcheck']); ?>" class="form-control" id="product_nextcheck" />
					</div>
				</div>

				<hr>

				<div class="form-group">
					<label for="p_contract" class="col-md-2 control-label">合同号</label>
					<div class="col-md-10">
						<input type="text" name="p_contract" value="<?php echo ($this->input->post('p_contract') ? $this->input->post('p_contract') : $escalator['p_contract']); ?>" class="form-control" id="p_contract" />
					</div>
				</div>
				<div class="form-group">
					<label for="p_customer" class="col-md-2 control-label">用户名称</label>
					<div class="col-md-10">
						<input type="text" name="p_customer" value="<?php echo ($this->input->post('p_customer') ? $this->input->post('p_customer') : $escalator['p_customer']); ?>" class="form-control" id="p_customer" />
					</div>
				</div>
				<div class="form-group">
					<label for="p_type" class="col-md-2 control-label">产品型号</label>
					<div class="col-md-10">
						<input type="text" name="p_type" value="<?php echo ($this->input->post('p_type') ? $this->input->post('p_type') : $escalator['p_type']); ?>" class="form-control" id="p_type" />
					</div>
				</div>
				<div class="form-group">
					<label for="p_stepwidth" class="col-md-2 control-label">梯级宽度（MM）</label>
					<div class="col-md-10">
						<input type="text" name="p_stepwidth" value="<?php echo ($this->input->post('p_stepwidth') ? $this->input->post('p_stepwidth') : $escalator['p_stepwidth']); ?>" class="form-control" id="p_stepwidth" />
					</div>
				</div>
				<div class="form-group">
					<label for="p_stepangle" class="col-md-2 control-label">倾斜角度（度）</label>
					<div class="col-md-10">
						<input type="text" name="p_stepangle" value="<?php echo ($this->input->post('p_stepangle') ? $this->input->post('p_stepangle') : $escalator['p_stepangle']); ?>" class="form-control" id="p_stepangle" />
					</div>
				</div>
				<div class="form-group">
					<label for="p_maxspeed" class="col-md-2 control-label">额定速度（M/S）</label>
					<div class="col-md-10">
						<input type="text" name="p_maxspeed" value="<?php echo ($this->input->post('p_maxspeed') ? $this->input->post('p_maxspeed') : $escalator['p_maxspeed']); ?>" class="form-control" id="p_maxspeed" />
					</div>
				</div>
				<div class="form-group">
					<label for="p_high" class="col-md-2 control-label">提升高度（M）</label>
					<div class="col-md-10">
						<input type="text" name="p_high" value="<?php echo ($this->input->post('p_high') ? $this->input->post('p_high') : $escalator['p_high']); ?>" class="form-control" id="p_high" />
					</div>
				</div>
				<div class="form-group">
					<label for="p_dragtype" class="col-md-2 control-label">曳引机型号/编号</label>
					<div class="col-md-10">
						<input type="text" name="p_dragtype" value="<?php echo ($this->input->post('p_dragtype') ? $this->input->post('p_dragtype') : $escalator['p_dragtype']); ?>" class="form-control" id="p_dragtype" />
					</div>
				</div>
				<div class="form-group">
					<label for="p_controlscreen" class="col-md-2 control-label">控制屏型号/编号</label>
					<div class="col-md-10">
						<input type="text" name="p_controlscreen" value="<?php echo ($this->input->post('p_controlscreen') ? $this->input->post('p_controlscreen') : $escalator['p_controlscreen']); ?>" class="form-control" id="p_controlscreen" />
					</div>
				</div>
				<div class="form-group">
					<label for="p_date" class="col-md-2 control-label">出厂日期</label>
					<div class="col-md-10">
						<input type="text" name="p_date" value="<?php echo ($this->input->post('p_date') ? $this->input->post('p_date') : $escalator['p_date']); ?>" class="form-control" id="p_date" />
					</div>
				</div>

				<hr>

				<div class="form-group">
					<label for="register_id" class="col-md-2 control-label">使用证编号</label>
					<div class="col-md-10">
						<input type="text" name="register_id" value="<?php echo ($this->input->post('register_id') ? $this->input->post('register_id') : $escalator['register_id']); ?>" class="form-control" id="register_id" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_code" class="col-md-2 control-label">注册代码</label>
					<div class="col-md-10">
						<input type="text" name="register_code" value="<?php echo ($this->input->post('register_code') ? $this->input->post('register_code') : $escalator['register_code']); ?>" class="form-control" id="register_code" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_com" class="col-md-2 control-label">使用单位</label>
					<div class="col-md-10">
						<input type="text" name="register_com" value="<?php echo ($this->input->post('register_com') ? $this->input->post('register_com') : $escalator['register_com']); ?>" class="form-control" id="register_com" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_type" class="col-md-2 control-label">设备类别</label>
					<div class="col-md-10">
						<input type="text" name="register_type" value="<?php echo ($this->input->post('register_type') ? $this->input->post('register_type') : $escalator['register_type']); ?>" class="form-control" id="register_type" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_model" class="col-md-2 control-label">设备名称或型号</label>
					<div class="col-md-10">
						<input type="text" name="register_model" value="<?php echo ($this->input->post('register_model') ? $this->input->post('register_model') : $escalator['register_model']); ?>" class="form-control" id="register_model" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_maker" class="col-md-2 control-label">制造单位</label>
					<div class="col-md-10">
						<input type="text" name="register_maker" value="<?php echo ($this->input->post('register_maker') ? $this->input->post('register_maker') : $escalator['register_maker']); ?>" class="form-control" id="register_maker" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_licence" class="col-md-2 control-label">制造许可证号</label>
					<div class="col-md-10">
						<input type="text" name="register_licence" value="<?php echo ($this->input->post('register_licence') ? $this->input->post('register_licence') : $escalator['register_licence']); ?>" class="form-control" id="register_licence" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_pid" class="col-md-2 control-label">制造出厂编号</label>
					<div class="col-md-10">
						<input type="text" name="register_pid" value="<?php echo ($this->input->post('register_pid') ? $this->input->post('register_pid') : $escalator['register_pid']); ?>" class="form-control" id="register_pid" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_lid" class="col-md-2 control-label">单位内部编号</label>
					<div class="col-md-10">
						<input type="text" name="register_lid" value="<?php echo ($this->input->post('register_lid') ? $this->input->post('register_lid') : $escalator['register_lid']); ?>" class="form-control" id="register_lid" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_copy" class="col-md-2 control-label">使用登记证（副本）</label>
					<div class="col-md-10">
						<input type="text" name="register_copy" value="<?php echo ($this->input->post('register_copy') ? $this->input->post('register_copy') : $escalator['register_copy']); ?>" class="form-control" id="register_copy" />
					</div>
				</div>

				<hr>

				<div class="form-group">
					<label for="preparer" class="col-md-2 control-label">填表人</label>
					<div class="col-md-10">
						<input type="text" name="preparer" value="<?php echo ($this->input->post('preparer') ? $this->input->post('preparer') : $escalator['preparer']); ?>" class="form-control" id="preparer" />
					</div>
				</div>
				<div class="form-group">
					<label for="submitor" class="col-md-2 control-label">提交人</label>
					<div class="col-md-10">
						<input type="text" name="submitor" value="<?php echo ($this->input->post('submitor') ? $this->input->post('submitor') : $escalator['submitor']); ?>" class="form-control" id="submitor" />
					</div>
				</div>
				<div class="form-group">
					<label for="submit_date" class="col-md-2 control-label">提交时间</label>
					<div class="col-md-10">
						<input type="text" name="submit_date" value="<?php echo ($this->input->post('submit_date') ? $this->input->post('submit_date') : $escalator['submit_date']); ?>" class="form-control" id="submit_date" />
					</div>
				</div>
				<div class="form-group">
					<label for="update_date" class="col-md-2 control-label">更新时间</label>
					<div class="col-md-10">
						<input type="text" name="update_date" value="<?php echo ($this->input->post('update_date') ? $this->input->post('update_date') : $escalator['update_date']); ?>" class="form-control" id="update_date" />
					</div>
				</div>
				<div class="form-group">
					<label for="station_id" class="col-md-2 control-label">所属站点</label>
					<div class="col-md-10">
						<input type="text" name="station_id" value="<?php echo ($this->input->post('station_id') ? $this->input->post('station_id') : $escalator['station_id']); ?>" class="form-control" id="station_id" />
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<button type="submit" class="btn btn-success">确认编辑</button>
			        </div>
				</div>
				
			<?php echo form_close(); ?>
		</div>
	</div>
		
	</div>
</div>

<?php $this->load->view('footer'); ?>