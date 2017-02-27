-- 自动扶梯
create table if not exists `lm_escalator` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	-- 电梯编号
	`lid` varchar(15) not null,
	-- 电梯位置
	`location` varchar(40) not null,
	-- 产品合格证	
	-- 使用编号

	`code` varchar(40),
	-- 维保单位
	`supportor` varchar(40),
	-- 维保电话
	`upportor_contact` varchar(20),
	-- 检验单位
	`inspect_com` varchar(40),
	-- 检验人员
	`inspector` varchar(20),
	-- 下次检验日期
	`next_check_time` date,
	
	-- 产品（改造）合格证	
	-- 合同号
	`contract_no` varchar(20),
	-- 用户名称
	`customer` varchar(40),
	-- 产品型号
	`product_type` varchar(20),
	-- 梯级宽度（MM）
	`step_width` float(6),
	-- 倾斜角度（度）
	`step_angle` float(4),
	-- 额定速度（M/S）
	`limit_speed` float(4),
	-- 提升高度（M）
	`up_high` float(4),
	-- 曳引机型号/编号
	`drag_type` varchar(30),
	-- 控制屏型号/编号
	`control_screen` varchar(30),
	-- 出厂日期
	`production_date` date,

    -- 使用登记证	
    -- 使用证编号
    `use_id` varchar(30),
	-- 注册代码
	`register_id` varchar(40),
	-- 使用单位
	`use_com` varchar(20),
	-- 设备类别
	`device_type` varchar(20),
	-- 设备名称或型号
	`device_model` varchar(30),
	-- 制造单位
	`manufacturer` varchar(20),
	-- 制造许可证号
	`manufacturer_code` varchar(30),
	-- 制造出厂编号
	`device_id` varchar(20),
	-- 单位内部编号
	`device_inner_id` varchar(20),
    -- 使用登记证（副本）	
    `use_copy` varchar(30),
	
	--  填表人	
	`preparer` varchar(10),
	-- 提交人	
	`submitor` varchar(10),
	-- 提交时间	
	`submit_date` date,
	`update_date` date,


	-- 车站信息
	station_id int
);

-- 垂直电梯
create table lift(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	-- 电梯编号
	lid varchar(15) not null,
	-- 电梯位置	
	location varchar(40) not null,
	-- 设备代码	
	code varchar(40),
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -
	-- 产品合格证	
	-- 产品合同编号
		订货单位
		出厂编号
		出厂日期
		产品名称
		驱动方式
		产品型号
		操作系统
		额定载重量（KG）
		额定速度（M/S）
		开门型式
		站门数（站/门）
		轿香尺寸（MM宽/MM深）
	使用登记证	使用证编号
		注册代码
		使用单位
		设备类别
		设备名称或型号
		制造单位
		制造许可证号
		设备出厂编号
		单位内部编号
	使用登记证（副证）	
	填表人	
	提交人	
	提交时间	
	更新时间	

)