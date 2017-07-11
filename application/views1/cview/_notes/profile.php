
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
      


	
<div class="container" style="color:#fff !important; margin-top:35px; margin-bottom:160px;">
           <div class="row">
            <div class="container-fluid">
            <div class="col-md-12">
              	
                
                    <div>
                    	<?php foreach($select_profile as $profile): ?>
                    
                		<div class="col-md-4 col-md-offset-2">
                   			 <img src="<?php echo base_url();?>image/img_profile/<?php echo $profile->user_img; ?>" width="200px" height="220px"/>
                             <?php if($this->session->flashdata('already')){
								 echo $this->session->flashdata('already');
								 }?>
                             <p><b>Change Your Image Profile</b></p>
                    <p>
                        <form action="<?=site_url("view_controller/uploadimg");?>" method="post" enctype="multipart/form-data">
                            <input type="file" name="userfile[]" class="browse" required/><br/><br/>
                            <input class="change" type="submit" value="Change Image" name="add"/>
                        </form>
                    </p>
                    
                   		</div>
                    	<div class="col-md-5">
                            <h1 class="pro_name">Personal Information</h1>
                            <h4>Name :<?=$profile->use_name;?></h4>
                            <h4>Email  : <?=$profile->email;?> </h4>
                            <h4>Phone : <?=$profile->phone;?></h4>
                            <h4>Address : <?=$profile->address;?> </h4>
                        <br/>
                     			<div class="profile_view"> 
                                <a href="<?=site_url("view_controller/edit_profile");?>">Update user profile</a>
                                 </div>
 <style>
 .pro_back{background: #146c1e none repeat scroll 0 0;
    border: 0 none;
    border-radius: 3px;
    color: #fff !important;
    cursor: pointer;
	margin-top:20px;
    padding: 10px 32px;
    width: 20%;}
.pro_back a { color:#fff;
			}
.pro_back a:hover { color:#3c8dbc;
			}
 </style>                                
                                 
                                 <div class="pro_back">
                                 <a href="<?=site_url("view_controller/home");?>">Back</a>
                                 </div>
                   		 </div>
                          
                             <br/>
                  			  <br/> 
                         <?php endforeach; ?>
                          
                   			 
           			</div>
              
            </div>
         </div>
     </div> 
     </div>   
          
          
    