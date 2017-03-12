# liftmanager
a lift management system


# 电梯检修管理系统

以下为未完成
----------------------------------

## 权限设置
四个管理权限
1. 小站管理员（只可查看该站信息）
2. 车间管理员（只可查看该车间信息，添加电梯信息）
3. 广州南车管理员（可查看所有车站信息，并添加管理员，添加检修信息）
4. 超级管理员（可查看所有）

## 搜索功能
* 电梯搜索功能
* 电梯检修搜索功能



# 系统安装

## 将 liftmanager 放置 php套件的www目录下

如：网站根域名如为：`http://localhost`,那么，liftmanager应用物域名应为 `http://localhost/liftmanager`


## 设置 base_url, 在`application/config/config.php`文件下设置
```php
$config['base_url'] = 'http://localhost/liftmanager';
```


## 开启`mod_rewrite` url 重定向模块
修改 `httpd.conf` 文件，大致路径：`D:\wamp\bin\apache\apache2.4.9\conf`
重启apache服务器

## 导入数据
* 创建数据库，如，创建一个名为`gznlift`的数据库
* 将`sql`目录下的数据文件导入到`gznlift`
* 配置数据库 `application/config/database.php`文件
```php
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '输入数据库用户密码，无为空',
	'database' => 'gznlift',
	'dbdriver' => 'mysqli',
	'dbprefix' => 'lm_',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```

## 访问
浏览器打开 `http://localhost/liftmanager`


## 如何部署在局域网
首先，查看自己的本机IP， 比如，本机IP为192.168.1.103
则在在`application/config/config.php`文件下设置
$config['base_url'] = 'http://192.168.1.103/liftmanager';
然后其它局域网机器通过 http://192.168.1.103/liftmanager 就能访问该系统





