
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title><?php echo '登录' . $this->config->item('site_name','site_settings'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  	<meta content="" name="description" />
  	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="<?php asset_file_url('plugins/bootstrap/css/bootstrap.css'); ?>" />
     <link rel="stylesheet" href="<?php asset_file_url('css/login.css'); ?>" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
    <h1 class="site-name">
      <?php echo $this->config->item('site_name','site_settings'); ?>
    </h1>
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
        <?php echo validation_errors(); ?>
        <?php echo form_open('login/index',array("class"=>"form-signin login-form")); ?>
            <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                请输入账号和密码
            </p>

            <input type="text" placeholder="请输入账号..." name="name" class="form-control" value="<?php echo $this->input->post('name'); ?>" />
            <input type="password" placeholder="请输入密码..." name="password" class="form-control" value="<?php echo $this->input->post('name'); ?>" />
            
            <?php if(isset($error)){ ?>
            <div class="alert alert-danger">
               <?php echo $error; ?>
            </div>
            <?php } ?>

            <button class="btn text-muted text-center btn-danger" type="submit">登录</button>
            <label for="" class="hint">忘记密码请联系管理员</label>
        <?php echo form_close(); ?>
        </div>
    </div>

</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="<?php asset_file_url('plugins/jquery-2.0.3.min.js'); ?>"></script>
      <script src="<?php asset_file_url('plugins/bootstrap/js/bootstrap.js'); ?>"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
