<?php echo form_open('elevator/index',array('class'=>'form-horizontal elevator-query-form','method'=>'get')); ?>
		
	<div class="panel-search panel panel-success">
	<div class="panel-heading">
	<h3 class="sub-title">
		查询字段
	</h3>
	</div>
	<div class="panel-body">
		
				<div class="panel panel-info">
				  <div class="panel-heading">
				  <h3 class="sub-title">
				  	基础查询字段
				  </h3>
				  </div>
				  <div class="panel-body">
				    <div class="form-group">
				    	<label for="lid" class="col-md-2 control-label">电梯编号</label>
				    	<div class="col-md-10">
				    		<input type="text" name="lid" value="<?php echo $this->input->get('lid'); ?>" class="form-control" id="lid" />
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label for="location" class="col-md-2 control-label">电梯位置</label>
				    	<div class="col-md-10">
				    		<input type="text" name="location" value="<?php echo $this->input->get('location'); ?>" class="form-control" id="location" />
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label for="code" class="col-md-2 control-label">设备代码</label>
				    	<div class="col-md-10">
				    		<input type="text" name="code" value="<?php echo $this->input->get('code'); ?>" class="form-control" id="code" />
				    	</div>
				    </div>
				  </div>
				</div>

				<div class="panel panel-info sub-panel">
					<div class="panel-heading">
						<h3 class="sub-title">
							产品合格证 
							<span>点击展开/收起查询字段</span>
						</h3>
					</div>
					<div class="panel-body">
						<div class="form-group">
					<label for="product_contract" class="col-md-2 control-label">产品合同编号</label>
					<div class="col-md-10">
						<input type="text" name="product_contract" value="<?php echo $this->input->get('product_contract'); ?>" class="form-control" id="product_contract" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_orderer" class="col-md-2 control-label">订货单位</label>
					<div class="col-md-10">
						<input type="text" name="product_orderer" value="<?php echo $this->input->get('product_orderer'); ?>" class="form-control" id="product_orderer" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_id" class="col-md-2 control-label">出厂编号</label>
					<div class="col-md-10">
						<input type="text" name="product_id" value="<?php echo $this->input->get('product_id'); ?>" class="form-control" id="product_id" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_date" class="col-md-2 control-label">出厂日期</label>
					<div class="col-md-10">
						<input type="text" name="product_date" value="<?php echo $this->input->get('product_date'); ?>" class="form-control" id="product_date" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_name" class="col-md-2 control-label">产品名称</label>
					<div class="col-md-10">
						<input type="text" name="product_name" value="<?php echo $this->input->get('product_name'); ?>" class="form-control" id="product_name" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_driver" class="col-md-2 control-label">驱动方式</label>
					<div class="col-md-10">
						<input type="text" name="product_driver" value="<?php echo $this->input->get('product_driver'); ?>" class="form-control" id="product_driver" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_type" class="col-md-2 control-label">产品型号</label>
					<div class="col-md-10">
						<input type="text" name="product_type" value="<?php echo $this->input->get('product_type'); ?>" class="form-control" id="product_type" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_os" class="col-md-2 control-label">操作系统</label>
					<div class="col-md-10">
						<input type="text" name="product_os" value="<?php echo $this->input->get('product_os'); ?>" class="form-control" id="product_os" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_maxweight" class="col-md-2 control-label">额定载重量（KG）</label>
					<div class="col-md-10">
						<input type="text" name="product_maxweight" value="<?php echo $this->input->get('product_maxweight'); ?>" class="form-control" id="product_maxweight" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_speed" class="col-md-2 control-label">额定速度（M/S）</label>
					<div class="col-md-10">
						<input type="text" name="product_speed" value="<?php echo $this->input->get('product_speed'); ?>" class="form-control" id="product_speed" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_doortype" class="col-md-2 control-label">开门型式</label>
					<div class="col-md-10">
						<input type="text" name="product_doortype" value="<?php echo $this->input->get('product_doortype'); ?>" class="form-control" id="product_doortype" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_doornum" class="col-md-2 control-label">站门数（站/门）</label>
					<div class="col-md-10">
						<input type="text" name="product_doornum" value="<?php echo $this->input->get('product_doornum'); ?>" class="form-control" id="product_doornum" />
					</div>
				</div>
				<div class="form-group">
					<label for="product_boxsize" class="col-md-2 control-label">轿香尺寸（MM宽/MM深）</label>
					<div class="col-md-10">
						<input type="text" name="product_boxsize" value="<?php echo $this->input->get('product_boxsize'); ?>" class="form-control" id="product_boxsize" />
					</div>
				</div>

					</div>
				</div>

				


		<div class="panel panel-info sub-panel">
					<div class="panel-heading">
						<h3 class="sub-title">
							使用登记证
							<span>点击展开/收起查询字段</span>
						</h3>
					</div>
					<div class="panel-body">
			
				<div class="form-group">
					<label for="register_id" class="col-md-2 control-label">使用证编号</label>
					<div class="col-md-10">
						<input type="text" name="register_id" value="<?php echo $this->input->get('register_id'); ?>" class="form-control" id="register_id" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_code" class="col-md-2 control-label">注册代码</label>
					<div class="col-md-10">
						<input type="text" name="register_code" value="<?php echo $this->input->get('register_code'); ?>" class="form-control" id="register_code" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_com" class="col-md-2 control-label">使用单位</label>
					<div class="col-md-10">
						<input type="text" name="register_com" value="<?php echo $this->input->get('register_com'); ?>" class="form-control" id="register_com" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_type" class="col-md-2 control-label">设备类别</label>
					<div class="col-md-10">
						<input type="text" name="register_type" value="<?php echo $this->input->get('register_type'); ?>" class="form-control" id="register_type" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_model" class="col-md-2 control-label">设备名称或型号</label>
					<div class="col-md-10">
						<input type="text" name="register_model" value="<?php echo $this->input->get('register_model'); ?>" class="form-control" id="register_model" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_maker" class="col-md-2 control-label">制造单位</label>
					<div class="col-md-10">
						<input type="text" name="register_maker" value="<?php echo $this->input->get('register_maker'); ?>" class="form-control" id="register_maker" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_licence" class="col-md-2 control-label">制造许可证号</label>
					<div class="col-md-10">
						<input type="text" name="register_licence" value="<?php echo $this->input->get('register_licence'); ?>" class="form-control" id="register_licence" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_pid" class="col-md-2 control-label">制造出厂编号</label>
					<div class="col-md-10">
						<input type="text" name="register_pid" value="<?php echo $this->input->get('register_pid'); ?>" class="form-control" id="register_pid" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_lid" class="col-md-2 control-label">单位内部编号</label>
					<div class="col-md-10">
						<input type="text" name="register_lid" value="<?php echo $this->input->get('register_lid'); ?>" class="form-control" id="register_lid" />
					</div>
				</div>
				<div class="form-group">
					<label for="register_copy" class="col-md-2 control-label">使用登记证（副本）</label>
					<div class="col-md-10">
						<input type="text" name="register_copy" value="<?php echo $this->input->get('register_copy'); ?>" class="form-control" id="register_copy" />
					</div>
				</div>
			</div>
			</div>


			<div class="panel panel-info sub-panel">
					<div class="panel-heading">
						<h3 class="sub-title">
							其它信息
							<span>点击展开/收起查询字段</span>
						</h3>
					</div>
					<div class="panel-body">

			<div class="form-group">
				<label for="preparer" class="col-md-2 control-label">填表人	</label>
				<div class="col-md-10">
					<input type="text" name="preparer" value="<?php echo $this->input->get('preparer'); ?>" class="form-control" id="preparer" />
				</div>
			</div>
			</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success">查询</button>
		        </div>
			</div>	
	</div>
	</div>
<?php echo form_close(); ?>