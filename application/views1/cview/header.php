<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>ASEANHR | Home</title>
<link rel="icon" type="image/png" href="<?php echo base_url();?>/image/icon.png" />
<link rel="stylesheet" type="text/css" href="<?=base_url('library/css/style.css');?>" />
<link rel="stylesheet" type="text/css" href="<?=base_url('library/css/menu.css');?>" />
<link rel="stylesheet" type="text/css" href="<?=base_url('library/css/menu_left.css');?>" />
<link rel="stylesheet" type="text/css" href="<?=base_url('library/css/login.css');?>" />
<link rel="stylesheet" type="text/css" href="<?=base_url('library/css/fonts/css/font-awesome.min.css');?>" />

<link rel="stylesheet" type="text/css" href="<?=base_url('ad_library/css/datepicker3.css');?>" />

<!--========Menu===========-->
<script type="text/javascript" src="<?php echo base_url();?>library/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>library/js/superfish.js"></script>
<script>
	(function($){ //create closure so we can safely use $ as alias for jQuery
		$(document).ready(function(){
			// initialise plugin
			var example = $('#example').superfish({
				//add options here if required
			});
			// buttons to demonstrate Superfish's public methods
			$('.destroy').on('click', function(){
				example.superfish('destroy');
			});
			$('.init').on('click', function(){
				example.superfish();
			});
			$('.open').on('click', function(){
				example.children('li:first').superfish('show');
			});
			$('.close').on('click', function(){
				example.children('li:first').superfish('hide');
			});
		});
	})(jQuery);
</script>
<!--========End Menu===========-->
 <script src="<?php echo base_url();?>ad_library/js/jQuery-2.1.4.min.js"></script>
 <script src="<?php echo base_url();?>ad_library/js/jquery-ui.min.js"></script>
<!--<script src="<?php echo base_url();?>ad_library/js/jquery-1.3.2.min.js"></script>-->

<script src="<?php echo base_url();?>ad_library/ckeditor/ckeditor.js"></script>

<link href="<?php echo base_url();?>ad_library/ckeditor/ckeditors/sample.css" rel="stylesheet" type="text/css" />
</head>



<body>

    <div class="header">

    	<div class="top-sidebar">

        	<ul>
				<?php if($this->session->userdata("userID")){ ?>
					     <li><i class="fa fa-phone" aria-hidden="true"></i> 095 666 716/ 093 220 978 <span>|</span></li>
						 <li><i class="fa fa-envelope-o" aria-hidden="true"></i> job@asean.com <span>|</span></li>
                         <li><a href="<?php echo base_url(); ?>index.php/Admin_controller/dashboard"> <span class="fa fa-user"></span> <?php echo $this->session->userdata("fullname"); ?></a> <span>|</span></li>
                         <li><a href="<?php echo base_url(); ?>index.php/login_controller/logout"><span class="fa fa-sign-out"></span>Sign Out</a></li>
				<?php }elseif($this->session->userdata("employeeID")){?>	
                		 <li><i class="fa fa-phone" aria-hidden="true"></i> 095 666 716/ 093 220 978 <span>|</span></li>
						 <li><i class="fa fa-envelope-o" aria-hidden="true"></i> job@asean.com <span>|</span></li>
                         <li><a href="<?php echo base_url(); ?>index.php/Pages/user_center"><span class="fa fa-user"></span> <?php echo $this->session->userdata("fullname"); ?></a> <span>|</span></li>
                         <li><a href="<?php echo base_url(); ?>index.php/login_controller/logout"><span class="fa fa-sign-out"></span>Sign Out</a></li>
                <?php }elseif($this->session->userdata("companyID")){?>
                		 <li><i class="fa fa-phone" aria-hidden="true"></i> 095 666 716/ 093 220 978 <span>|</span></li>
						 <li><i class="fa fa-envelope-o" aria-hidden="true"></i> job@asean.com <span>|</span></li>
                         <li><a href="<?php echo base_url(); ?>index.php/Companys/employer_center"><span class="fa fa-user"></span> <?php echo $this->session->userdata("fullname"); ?></a></li>
                         <li><a href="<?php echo base_url(); ?>index.php/login_controller/logout"><span class="fa fa-sign-out"></span>Sign Out</a></li>
                <?php }else{?>
						 <li><i class="fa fa-phone" aria-hidden="true"></i> 095 666 716/ 093 220 978 <span>|</span></li>
						 <li><i class="fa fa-envelope-o" aria-hidden="true"></i> job@asean.com</li>
		        <?php } ?>

            </ul>

        </div>

        <div class="logo">

        	<img src="<?php echo base_url();?>library/img/logo.jpg"/>

        </div>

        <div class="banner-header">

        	<img src="<?php echo base_url();?>library/img/job.jpg"/>

        </div>

    </div>

    

    <!----------Menu------------------>

    <div class="menu">

    	<div class="line-menu-display">

            <ul class="sf-menu" id="example">

                <li class="current">

                    <a href="<?php echo base_url();?>">Home</a>

                </li>

    <?php

		foreach($show_maincategory as $main_menu){	

		

	?>



                <li>

                    <a href="#"><?=$main_menu->name;?></a>

                    <ul>

                    <?php

						foreach($show_category as $cate){

							if($cate->main_id == $main_menu->mai_id){

					?>  

                        <li>

                            <a href="<?=site_url('Pages/page/'.$cate->cat_id.'/'.$cate->main_id)?>"><?=$cate->cat_name;?></a>

                     

                        </li>

                    <?php } } ?>

                    </ul>

                </li>

	<?php } ?>

    			<li>

                    <a href="<?=site_url('Pages/contactus');?>">Contact Us</a>

                </li>

                

                <li>

                    <a href="<?=site_url('Pages/instruction');?>">Instruction!!!!</a>

                </li>

               

		

            </ul>

        </div>

    </div>

    <!-----------End Menu---------------------->