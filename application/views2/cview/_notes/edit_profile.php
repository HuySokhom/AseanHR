

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper-custome"><!--wrapper-->

            <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>index.php/view_controller/home" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>P</b>OS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>POS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
         <nav class="navbar navbar-static-top" role="navigation">
        
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

     	<?php
		if($this->session->userdata("userID")&&$this->session->userdata("role")==0):?>      
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url();?>image/img_profile/<?php  echo $this->session->userdata("pic"); ?>" class="user-image" alt="User Image">
                  
                  <span class="hidden-xs"><?php  echo $this->session->userdata("fullname"); ?></span>
                </a>
                <ul class="dropdown-menu">
                        
       			  <li class="user-header">
                    <img src="<?php echo base_url();?>image/img_profile/<?php  echo $this->session->userdata("pic"); ?>" class="img-circle" alt="User Image">
                    <p>
                      <?php  echo $this->session->userdata("phone"); ?>
                      <small><?php  echo $this->session->userdata("email"); ?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
               <?php /*?>   <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li><?php */?>
                  
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>index.php/view_controller/profile" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>index.php/login_controller/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
              
                <a href="<?php echo base_url(); ?>index.php/admin_controller/dashboard" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
       <?php    
	    elseif($this->session->userdata("userID")&&$this->session->userdata("role")==1): ?>
		     <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url();?>image/img_profile/<?php  echo $this->session->userdata("pic"); ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php  echo $this->session->userdata("fullname"); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="<?php echo base_url();?>image/img_profile/<?php  echo $this->session->userdata("pic"); ?>" class="img-circle" alt="User Image">
                    <p>
                      <?php  echo $this->session->userdata("phone"); ?>
                      <small><?php  echo $this->session->userdata("email"); ?></small>
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>index.php/view_controller/profile" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>index.php/login_controller/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>

		<?php		
		endif;
		 ?>
                      
          </div>
        </nav>
      </header>


	

  
	
		<div id="contain">
        
        	<div class="re_header">
            	Edit your Account
            </div>
            <div class="re_message">
				<?php
                    if($this->session->flashdata("error-form")){
                        echo $this->session->flashdata("error-form");
                    }elseif($this->session->flashdata("success-register")){
                        echo $this->session->flashdata("success-register");
                    }
                ?> 
            </div>
        	<div class="re_content">
            	<form action="<?php echo site_url('view_controller/update_profile'); ?>" method="post" enctype="multipart/form-data">
                <?php foreach($select_profile as $profile): ?>
            	<div class="re_input">
                	<span class="fa fa-user" id="re_name"></span>
                	<input type="text" onBlur="this.placeholder = 'Enter your name'" onFocus="this.placeholder = ''" name="name" value="<?=$profile->use_name;?>" readonly />
                </div>
                <div class="re_input">
                	<span class="fa fa-envelope-o" id="re_name"></span>
                	<input type="email" onBlur="this.placeholder = 'E-mail'" onFocus="this.placeholder = ''" name="email" value="<?=$profile->email;?>"/>
                </div>
                <div class="re_input">
                	<span class="fa fa-unlock-alt" id="re_name"></span>
                	<input type="password" onBlur="this.placeholder = 'Password'" onFocus="this.placeholder = ''" name="password"/>
                </div>
                <div class="re_input">
                	<span class="fa fa-phone" id="re_name"></span>
                	<input type="text" onBlur="this.placeholder = 'Phone number'" onFocus="this.placeholder = ''" name="phone" value="<?=$profile->phone;?>"/>
                </div>
                <div class="re_input">
                	<span class="fa fa-home" id="re_name"></span>
                	<textarea onBlur="this.placeholder = 'Address'" onFocus="this.placeholder = ''" name="address" rows="10" ><?=$profile->address;?> </textarea>
                </div>
                <div class="re_submit">
                	<input type="submit" value="Update" name="info"/>
                    <a href="<?=site_url("View_controller/profile");?>">Back</a>
                </div>
                <?php endforeach; ?>
                </form>
            </div>
		</div><!--contain-->
