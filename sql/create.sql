-- 自动扶梯
create table if not exists `lm_escalator` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	-- 电梯编号
	`lid` varchar(15) not null,
	-- 电梯位置
	`location` varchar(40) not null,


	-- 产品合格证	
	-- 使用编号

	`product_code` varchar(40),
	-- 维保单位
	`product_supportor` varchar(40),
	-- 维保电话
	`product_contact` varchar(20),
	-- 检验单位
	`product_service` varchar(40),
	-- 检验人员
	`product_serviceman` varchar(20),
	-- 下次检验日期
	`product_nextcheck` date,
	
	-- 产品（改造）合格证	
	-- 合同号
	`p_contract` varchar(20),
	-- 用户名称
	`p_customer` varchar(40),
	-- 产品型号
	`p_type` varchar(20),
	-- 梯级宽度（MM）
	`p_stepwidth` float(6),
	-- 倾斜角度（度）
	`p_stepangle` float(4),
	-- 额定速度（M/S）
	`p_maxspeed` float(4),
	-- 提升高度（M）
	`p_high` float(4),
	-- 曳引机型号/编号
	`p_dragtype` varchar(30),
	-- 控制屏型号/编号
	`p_controlscreen` varchar(30),
	-- 出厂日期
	`p_date` date,

    -- 使用登记证	
    -- 使用证编号
    `register_id` varchar(30),
	-- 注册代码
	`register_code` varchar(40),
	-- 使用单位
	`register_com` varchar(20),
	-- 设备类别
	`register_type` varchar(20),
	-- 设备名称或型号
	`register_model` varchar(30),
	-- 制造单位
	`register_maker` varchar(20),
	-- 制造许可证号
	`register_licence` varchar(30),
	-- 制造出厂编号
	`register_pid` varchar(20),
	-- 单位内部编号
	`register_lid` varchar(20),
    -- 使用登记证（副本）	
    `register_copy` varchar(30),
	
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
create table if not exists lm_elevator(
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
	product_contract varchar(40),
	-- 订货单位
	product_orderer varchar(40),
	-- 出厂编号
	product_id varchar(20),
	-- 出厂日期
	product_date date,
	-- 产品名称
	product_name varchar(20),
	-- 驱动方式
	product_driver varchar(40),
	-- 产品型号
	product_type varchar(20),
	-- 操作系统
	product_os varchar(20),
	-- 额定载重量（KG）
	product_maxweight int,
	-- 额定速度（M/S）
	product_speed int,
	-- 开门型式
	product_doortype varchar(20),
	-- 站门数（站/门）
	product_doornum varchar(20),
	-- 轿香尺寸（MM宽/MM深）
	product_boxsize varchar(20),


	-- 使用登记证	
	-- 使用证编号
	register_id varchar(30),
	-- 注册代码
	register_code varchar(30),
	-- 使用单位
	register_com varchar(20),
	-- 设备类别
	register_type varchar(20),
	-- 设备名称或型号
	register_model varchar(30),
	-- 制造单位
	register_maker varchar(30),
	-- 制造许可证号
	register_licence varchar(30),
	-- 设备出厂编号
	register_pid varchar(30),
	-- 单位内部编号
	register_lid varchar(30),

	-- 使用登记证（副证）	
	register_copy varchar(40),
	
	-- 填表人	
	preparer varchar(20),

	-- 提交人	
	submitor varchar(20),
	
	-- 提交时间	
	submit_date date,
	-- 更新时间	
	update_date date,

	-- 车站信息
	station_id int
)


-- 报告 report
create table if not exists report(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	lid varchar(15) not null,
	doc varchar(120),
	-- 提交人	
	submitor varchar(20),
	
	-- 提交时间	
	submit_date date,
	-- 更新时间	
	update_date date
);