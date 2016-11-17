<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title><?php echo $this->config->item('site_name','site_settings'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="<?php asset_file_url('plugins/bootstrap/css/bootstrap.css'); ?>" />
    <link rel="stylesheet" href="<?php asset_file_url('css/main.css'); ?>" />
    <link rel="stylesheet" href="<?php asset_file_url('css/theme.css'); ?>" />
    <link rel="stylesheet" href="<?php asset_file_url('css/MoneAdmin.css'); ?>" />
    <link rel="stylesheet" href="<?php asset_file_url('plugins/Font-Awesome/css/font-awesome.css'); ?>" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link rel="stylesheet" href="<?php asset_file_url('plugins/dataTables/dataTables.bootstrap.css'); ?>" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">

<?php $this->load->view('top'); ?>
<?php $this->load->view('sidebar'); ?>

<!--PAGE CONTENT -->
<div id="content">
<div class="inner">
        
