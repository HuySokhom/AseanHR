<?php
if($this->session->userdata("userID")):
?>
  <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POS | Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>library/bootstrap/css/mystyle.css">
    <link rel="stylesheet" href="<?php echo base_url();?>library/bootstrap/css/front-mystyle.css">
    
    
        <link rel="stylesheet" href="<?php echo base_url();?>library/bootstrap/css/demo.css">


	<script src="<?php echo base_url();?>library/bootstrap/js/ajax-libs-jquery-1.10.2.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>library/bootstrap/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url();?>library/bootstrap/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>library/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>library/dist/css/skins/_all-skins.min.css">

  </head>
 
<?php
else:
	redirect("view_controller/login");
endif;
?>