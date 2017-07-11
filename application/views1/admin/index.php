<?php
if($this->session->userdata("userID")):
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if ($title){  echo "ASEANHR | ". $title; } else {  echo 'Home';  }?></title>
<link rel="icon" type="image/png" href="<?php echo base_url();?>/image/icon.png" />

<!--set expired job to job_role 1 (inactive job)-->   
<?php
	  date_default_timezone_set('Asia/Phnom_Penh');
	  $Job = $this->Admin_model->show_job();	
	  foreach($Job as $values){	
	  
	  $var_one = strtotime(date('Y-m-d', strtotime($values->job_expire_day)));
	  $var_two = strtotime(date('Y-m-d'));
	  $var_today = date('Y-m-d');
	  
		  if($var_two > $var_one){
			$this->db->where('job_expire_day < ', $var_today)
					->update('tbl_job',array('job_role'=>1)); 
		  }
		
	   }
?>    
<!--endset expired job to job_role 1 -->     

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>ad_library/js/jquery-1.3.2.min.js"></script>
     <script src="<?php echo base_url();?>ad_library/ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url();?>ad_library/ckeditor/samples/sample.js"></script>
    <link href="<?php echo base_url();?>ad_library/ckeditor/ckeditors/sample.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>ad_library/css/bootstrap.min.css">

   <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>ad_library/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>ad_library/css/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>ad_library/css/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url();?>ad_library/css/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url();?>ad_library/css/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>ad_library/css/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>ad_library/css/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url();?>ad_library/css/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>ad_library/css/dataTables.bootstrap.css">
    
     <link rel="stylesheet" href="<?php echo base_url();?>ad_library/css/my_admin_style.css">
     
     <link rel="stylesheet" href="<?php echo base_url();?>ad_library/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

<style>
.custom-default .btn-default {
    background-color: #376F6F !important;
	color:#fff !important;
	padding: 8px 30px !important;
}

.custom-default .btn-default:hover {
    background-color: #1B3434 !important;

}
</style>

  </head>
    <body class="sidebar-mini skin-blue">
    <div class="wrapper">

     <header class="main-header" style="background-color:#D24726 !important;">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>index.php/admin_controller/dashboard" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>H</b>R</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>ASEAN</b>HR</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
         <nav class="navbar navbar-static-top" role="navigation">
         <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

     	<?php
		if($this->session->userdata("userID")&&$this->session->userdata("role")==0):?>      
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url();?>image/img_profile/avatar5.png" class="user-image" alt="User Image">
                  
                  <span class="hidden-xs"><?php  echo $this->session->userdata("fullname"); ?></span>
                </a>
                <ul class="dropdown-menu">
                        
       			  <li class="user-header">
                    <img src="<?php echo base_url();?>image/img_profile/avatar5.png" class="img-circle" alt="User Image">
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
                  
                  <li class="user-footer custom-default">
                  <!--  <div class="pull-left">
                      <a href="<?php echo base_url(); ?>index.php/view_controller/profile" class="btn btn-default btn-flat">Profile</a>
                    </div>-->
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>index.php/login_controller/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
               <a href="#" data-toggle="control-sidebar"><i class="fa fa-sliders" style="color:red;"></i></a>
              </li>
            </ul>
       <?php    
	    elseif($this->session->userdata("userID")&&$this->session->userdata("role")==1): ?>
		     <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url();?>image/img_profile/avatar5.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php  echo $this->session->userdata("fullname"); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="<?php echo base_url();?>image/img_profile/avatar5.png" class="img-circle" alt="User Image">
                    <p>
                      <?php  echo $this->session->userdata("phone"); ?>
                      <small><?php  echo $this->session->userdata("email"); ?></small>
                    </p>
                  </li>
                  <li class="user-footer custom-default">
                    <!--<div class="pull-left">
                      <a href="<?php echo base_url(); ?>index.php/view_controller/profile" class="btn btn-default btn-flat">Profile</a>
                    </div>-->
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
         
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
         
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          
       
<!--<style>
.scrollable-menu-left {
    height: auto;
    max-height:390px;
	width:auto;
    overflow-x: hidden;
}
</style>-->
                    
<script>

//$(function() {
//     var pgurl = window.location.href.substr(window.location.href
//.lastIndexOf("/")+1);
//	
//    $("#nav ul li").each(function(){
//		
//	//alert(pgurl);
//		
//     if($(this).attr("href")  == pgurl  || $(this).attr("href") == "dashboard" )
//          $(this).addClass("active");
//	 		
//     })
//	 
//});


//jQuery(document).ready(function($) {
//	var path = window.location.pathname.split("/").pop();
//	//alert(path);
//	if( path == ''){
//	  path = 'index.php'	
//	}
//    
//	var target = $('#nav a[href="dashboard"]');
//	alert(target);
//	target.addClass('active');
//});


//$(function(){
//    var current = location.pathname;
//    current = current.substring(current.lastIndexOf('/'));
//    $('#nav ul li').each(function(){
//        var $this = $(this);
//        // if the current path is like this link, make it active
//        if($this.attr('href').indexOf(current) !== -1){
//            $this.addClass('active');
//        }
//    });
//});


</script>

        <div class="scrollable-menu-left">
          <!-- sidebar menu: : style can be found in sidebar.less -->
    <nav id="nav">
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php if($this->uri->segment(2)=="dashboard"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
            </li>
		   
            <li class="<?php if($this->uri->segment(2)=="show_edit_setting"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/show_edit_setting">
                <i class="fa fa-users"></i>
                <span>Setting</span>
              </a>
            </li>
            
            <li class="treeview <?php if($this->uri->segment(2)=="contact_us" || $this->uri->segment(2)=="show_edit_contact_us" || $this->uri->segment(2)=="instruction" || $this->uri->segment(2)=="show_edit_instruction" || $this->uri->segment(2)=="maincategory" || $this->uri->segment(2)=="add_maincategory" || $this->uri->segment(2)=="show_edit_maincategory" || $this->uri->segment(2)=="category" || $this->uri->segment(2)=="add_category" || $this->uri->segment(2)=="show_edit_category" || $this->uri->segment(2)=="sub_category" || $this->uri->segment(2)=="add_sub_category" || $this->uri->segment(2)=="show_edit_sub_category" ){echo "active";}?> ">
              <a href="#">
                <i class="fa fa-bars"></i> <span>Top Menu</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if($this->uri->segment(2)=="contact_us" || $this->uri->segment(2)=="show_edit_contact_us"){echo "active";}?>">
                  <a href="<?php echo base_url(); ?>index.php/admin_controller/contact_us">
                    <i class="fa fa-circle-o"></i>
                    <span>Contact Us</span>
                  </a>
                </li>
                
                <li class="<?php if($this->uri->segment(2)=="instruction" || $this->uri->segment(2)=="show_edit_instruction"){echo "active";}?>">
                  <a href="<?php echo base_url(); ?>index.php/admin_controller/instruction">
                    <i class="fa fa-circle-o"></i>
                    <span>Instruction</span>
                  </a>
                </li>
                
                <li class="<?php if($this->uri->segment(2)=="maincategory" || $this->uri->segment(2)=="add_maincategory" || $this->uri->segment(2)=="show_edit_maincategory"){echo "active";}?>">
                  <a href="<?php echo base_url(); ?>index.php/admin_controller/maincategory">
                    <i class="fa fa-circle-o"></i>
                    <span>Main Category Management</span>
                  </a>
                </li>
                
                <li class="<?php if($this->uri->segment(2)=="category" || $this->uri->segment(2)=="add_category" || $this->uri->segment(2)=="show_edit_category" ){echo "active";}?>">
                  <a href="<?php echo base_url(); ?>index.php/admin_controller/category">
                    <i class="fa fa-circle-o"></i>
                    <span>Category Management</span>
                  </a>
                </li>
                
<?php /*?>                <li class="<?php if($this->uri->segment(2)=="sub_category" || $this->uri->segment(2)=="add_sub_category" || $this->uri->segment(2)=="show_edit_sub_category"){echo "active";}?>">
                  <a href="<?php echo base_url(); ?>index.php/admin_controller/sub_category">
                    <i class="fa fa-circle-o"></i>
                    <span>Sub-Category Management</span>
                  </a>
                </li><?php */?>

              </ul>
            </li>
            
            
            

            
            <li class="<?php if($this->uri->segment(2)=="page"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/page">
                <i class="fa fa-book"></i>
                <span>Page Management</span>
              </a>
            </li>
            
            <li class="<?php if($this->uri->segment(2)=="user"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/user">
                <i class="fa fa-users"></i>
                <span>User Admin</span>
              </a>
            </li>
<?php /*?>            <li class="<?php if($this->uri->segment(2)=="highlight"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/highlight">
                <i class="fa fa-cubes"></i>
                <span>Highlights Management</span>
              </a>
            </li><?php */?>
            
  <?php /*?>           <li class="treeview <?php if($this->uri->segment(2)=="advertising_maincategory" ||  $this->uri->segment(2)=="advertising" ){echo "active";}?> ">
             	<a href="#">
                <i class="fa fa-picture-o"></i> <span>Advertising Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              	</a>
              
              <ul class="treeview-menu">
                    <li class="<?php if($this->uri->segment(2)=="advertising_maincategory"){echo "active";}?> ">
                      <a href="<?php echo base_url(); ?>index.php/admin_controller/advertising_maincategory">
                        <i class="fa fa-circle-o"></i>
                        <span>Advertising Maincategory</span>
                      </a>
                    </li>
                    
                    <li class="<?php if($this->uri->segment(2)=="advertising"){echo "active";}?> ">
                      <a href="<?php echo base_url(); ?>index.php/admin_controller/advertising">
                        <i class="fa fa-circle-o"></i>
                        <span>Advertising Other</span>
                      </a>
                    </li>
                    
            	</ul>
            </li><?php */?> 
            
            <li class="<?php if($this->uri->segment(2)=="advertising"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/advertising">
                <i class="fa fa-arrow-circle-down"></i>
                <span>Advertising </span>
              </a>
            </li>
            
            <li class="<?php if($this->uri->segment(2)=="employee_apply_job"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/employee_apply_job">
                <i class="fa fa-arrow-circle-down"></i>
                <span>Employee Applied Job </span>
              </a>
            </li>
            
<?php /*?>            <li class="<?php if($this->uri->segment(2)=="slideshow"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/slideshow">
                <i class="fa fa-film"></i>
                <span>Slide Show</span>
              </a>
            </li><?php */?>
            
            
              
            
            <li class="<?php if($this->uri->segment(2)=="salary"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/salary">
                <i class="fa fa-money"></i>
                <span>Salary Range</span>
              </a>
            </li>
            
            <li class="<?php if($this->uri->segment(2)=="type"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/type">
                <i class="fa fa-clone"></i>
                <span>Type</span>
              </a>
            </li>
            
            <li class="<?php if($this->uri->segment(2)=="level"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/level">
                <i class="fa fa-bar-chart"></i>
                <span>Job Level</span>
              </a>
            </li>
            
            <li class="<?php if($this->uri->segment(2)=="term"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/term">
                <i class="fa fa-tasks"></i>
                <span>Job Schedule</span>
              </a>
            </li>
            
            <li class="<?php if($this->uri->segment(2)=="location"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/location">
                <i class="fa fa-map-marker"></i>
                <span>Location</span>
              </a>
            </li>
            
            <li class="<?php if($this->uri->segment(2)=="function_job"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/function_job">
                <i class="fa fa-road"></i>
                <span>Function</span>
              </a>
            </li>
            
            <li class="<?php if($this->uri->segment(2)=="industry"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/industry">
                <i class="fa fa-industry"></i>
                <span>Industry</span>
              </a>
            </li>
            
            <li class="<?php if($this->uri->segment(2)=="company"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/company">
                <i class="fa fa-building"></i>
                <span>Company</span>
              </a>
            </li>
            
             <li class="<?php if($this->uri->segment(2)=="employee"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/employee">
                <i class="fa fa-male"></i>
                <span>Employee</span>
              </a>
            </li>
            
             <li class="<?php if($this->uri->segment(2)=="job"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/job">
                <i class="fa fa-star"></i>
                <span>Job</span>
              </a>
            </li>
            
             <li class="<?php if($this->uri->segment(2)=="cv"){echo "active";}?> treeview">
              <a href="<?php echo base_url(); ?>index.php/admin_controller/cv">
                <i class="fa fa-star"></i>
                <span>CV</span>
              </a>
            </li>
            
            <li class="treeview">
              <a href="http://aseanhr.com:2095/logout/?locale=en">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>Go to Email</span>
              </a>
            </li>
            
        

            
           <?php /*?> <li class="<?php if($this->uri->segment(2)=="company" || $this->uri->segment(2)=="contact"){echo "active";}?>"  class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>CRM</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if($this->uri->segment(2)=="company"){echo "active";}?>"><a href="<?php echo base_url(); ?>index.php/admin_controller/company"><i class="fa fa-building"></i> Company</a></li>
                <li class="<?php if($this->uri->segment(2)=="contact"){echo "active";}?>"><a href="<?php echo base_url(); ?>index.php/admin_controller/contact"><i class="fa fa-book"></i> Contact</a></li>
              </ul>
            </li>
            
             <li class="<?php if($this->uri->segment(2)=="item" || $this->uri->segment(2)=="invoice" || $this->uri->segment(2)=="show_edit_invoice"){echo "active";}?>" class="treeview">
              <a href="#">
                <i class="fa fa-suitcase"></i> <span>Sale</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if($this->uri->segment(2)=="item"){echo "active";}?>"><a href="<?php echo base_url(); ?>index.php/admin_controller/item"><i class="fa fa-circle-o"></i> Item</a></li>
                <li class="<?php if($this->uri->segment(2)=="invoice" || $this->uri->segment(2)=="show_edit_invoice"){echo "active";}?>"><a href="<?php echo base_url(); ?>index.php/admin_controller/invoice"><i class="fa fa-file-archive-o"></i> Invoice</a></li>
              </ul>
            </li><?php */?>
            
 
       
          </ul>
    </nav>
       </div>
        </section>
        <!-- /.sidebar -->
      </aside>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
   
        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
           	  
              
              
      <!--------=====================================Load Content Pages==========================-------------->
      
      				<?php
						include($this->uri->segment(2).'.php');
					?>
      
      <!--------=====================================Colse Content Pages==========================-------------->   
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Designed And Developed by <a href="http://parrotstudio.com/">www.parrotstudio.com</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <!--<h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
          
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul>-->

           
          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <!--<form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div>

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div>
            </form>-->
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>ad_library/js/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo base_url();?>ad_library/js/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>ad_library/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->

        <script src="<?php echo base_url();?>ad_library/js/ajax-libs-raphael-min.js"></script>
    <script src="<?php echo base_url();?>ad_library/js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url();?>ad_library/js/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url();?>ad_library/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>ad_library/js/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url();?>ad_library/js/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url();?>ad_library/js/ajax-libs-moment.min.js"></script>

    <script src="<?php echo base_url();?>ad_library/js/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url();?>ad_library/js/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url();?>ad_library/js/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url();?>ad_library/js/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>ad_library/js/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>ad_library/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url();?>ad_library/js/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>ad_library/js/demo.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url();?>ad_library/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>ad_library/js/dataTables.bootstrap.min.js"></script>
    <script>
				CKEDITOR.replace( 'editor1', {
					extraPlugins: 'htmlwriter',
					filebrowserBrowseUrl : '<?php echo base_url();?>ad_library/ckeditor/core/elfinder.html',
					uiColor : '#9AB8F3',
					contentsCss: 'body {color:#000; background-color#:FFF;}',
					docType: '<!DOCTYPE HTML>',
					allowedContent:
						'h1 h2 h3 p pre[align]; ' +
						'blockquote code kbd samp var del ins cite q b i u strike ul ol li hr table tbody tr td th caption; ' +
						'img[!src,alt,align,width,height]; font[!face]; font[!family]; font[!color]; font[!size]; font{!background-color}; a[!href]; a[!name]',
					coreStyles_bold: { element: 'b' },
					coreStyles_italic: { element: 'i' },
					coreStyles_underline: { element: 'u' },
					coreStyles_strike: { element: 'strike' },
					font_style: {
						element: 'font',
						attributes: { 'face': '#(family)' }
					},
					fontSize_sizes: 'xx-small/1;x-small/2;small/3;medium/4;large/5;x-large/6;xx-large/7',
					fontSize_style: {
						element: 'font',
						attributes: { 'size': '#(size)' }
					},
					colorButton_foreStyle: {
						element: 'font',
						attributes: { 'color': '#(color)' }
					},
					colorButton_backStyle: {
						element: 'font',
						styles: { 'background-color': '#(color)' }
					},
					stylesSet: [
						{ name: 'Computer Code', element: 'code' },
						{ name: 'Keyboard Phrase', element: 'kbd' },
						{ name: 'Sample Text', element: 'samp' },
						{ name: 'Variable', element: 'var' },
						{ name: 'Deleted Text', element: 'del' },
						{ name: 'Inserted Text', element: 'ins' },
						{ name: 'Cited Work', element: 'cite' },
						{ name: 'Inline Quotation', element: 'q' }
					],
					on: {
						pluginsLoaded: configureTransformations,
						loaded: configureHtmlWriter
					}
				});
				function configureTransformations( evt ) {
					var editor = evt.editor;
					editor.dataProcessor.htmlFilter.addRules( {

						attributes: {
							style: function( value, element ) {
								return CKEDITOR.tools.convertRgbToHex( value );
							}
						}
					} );
					function alignToAttribute( element ) {
						if ( element.styles[ 'text-align' ] ) {
							element.attributes.align = element.styles[ 'text-align' ];
							delete element.styles[ 'text-align' ];
						}
					}
					editor.filter.addTransformations( [
						[ { element: 'p',	right: alignToAttribute } ],
						[ { element: 'h1',	right: alignToAttribute } ],
						[ { element: 'h2',	right: alignToAttribute } ],
						[ { element: 'h3',	right: alignToAttribute } ],
						[ { element: 'pre',	right: alignToAttribute } ]
					] );
				}
				function configureHtmlWriter( evt ) {
					var editor = evt.editor,
						dataProcessor = editor.dataProcessor;
					dataProcessor.writer.selfClosingEnd = '>';
					var dtd = CKEDITOR.dtd;
					for ( var e in CKEDITOR.tools.extend( {}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent ) ) {
						dataProcessor.writer.setRules( e, {
							indent: true,
							breakBeforeOpen: true,
							breakAfterOpen: false,
							breakBeforeClose: !dtd[ e ][ '#' ],
							breakAfterClose: true
						});
					}
				}
				CKEDITOR.replace( 'editor2', {
					extraPlugins: 'htmlwriter',
					filebrowserBrowseUrl : '<?php echo base_url();?>ad_library/ckeditor/core/elfinder.html',
					uiColor : '#9AB8F3',
					contentsCss: 'body {color:#000; background-color#:FFF;}',
					docType: '<!DOCTYPE HTML>',
					allowedContent:
						'h1 h2 h3 p pre[align]; ' +
						'blockquote code kbd samp var del ins cite q b i u strike ul ol li hr table tbody tr td th caption; ' +
						'img[!src,alt,align,width,height]; font[!face]; font[!family]; font[!color]; font[!size]; font{!background-color}; a[!href]; a[!name]',
					coreStyles_bold: { element: 'b' },
					coreStyles_italic: { element: 'i' },
					coreStyles_underline: { element: 'u' },
					coreStyles_strike: { element: 'strike' },
					font_style: {
						element: 'font',
						attributes: { 'face': '#(family)' }
					},
					fontSize_sizes: 'xx-small/1;x-small/2;small/3;medium/4;large/5;x-large/6;xx-large/7',
					fontSize_style: {
						element: 'font',
						attributes: { 'size': '#(size)' }
					},
					colorButton_foreStyle: {
						element: 'font',
						attributes: { 'color': '#(color)' }
					},
					colorButton_backStyle: {
						element: 'font',
						styles: { 'background-color': '#(color)' }
					},
					stylesSet: [
						{ name: 'Computer Code', element: 'code' },
						{ name: 'Keyboard Phrase', element: 'kbd' },
						{ name: 'Sample Text', element: 'samp' },
						{ name: 'Variable', element: 'var' },
						{ name: 'Deleted Text', element: 'del' },
						{ name: 'Inserted Text', element: 'ins' },
						{ name: 'Cited Work', element: 'cite' },
						{ name: 'Inline Quotation', element: 'q' }
					],
					on: {
						pluginsLoaded: configureTransformations,
						loaded: configureHtmlWriter
					}
				});
				function configureTransformations( evt ) {
					var editor = evt.editor;
					editor.dataProcessor.htmlFilter.addRules( {

						attributes: {
							style: function( value, element ) {
								return CKEDITOR.tools.convertRgbToHex( value );
							}
						}
					} );
					function alignToAttribute( element ) {
						if ( element.styles[ 'text-align' ] ) {
							element.attributes.align = element.styles[ 'text-align' ];
							delete element.styles[ 'text-align' ];
						}
					}
					editor.filter.addTransformations( [
						[ { element: 'p',	right: alignToAttribute } ],
						[ { element: 'h1',	right: alignToAttribute } ],
						[ { element: 'h2',	right: alignToAttribute } ],
						[ { element: 'h3',	right: alignToAttribute } ],
						[ { element: 'pre',	right: alignToAttribute } ]
					] );
				}
				function configureHtmlWriter( evt ) {
					var editor = evt.editor,
						dataProcessor = editor.dataProcessor;
					dataProcessor.writer.selfClosingEnd = '>';
					var dtd = CKEDITOR.dtd;
					for ( var e in CKEDITOR.tools.extend( {}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent ) ) {
						dataProcessor.writer.setRules( e, {
							indent: true,
							breakBeforeOpen: true,
							breakAfterOpen: false,
							breakBeforeClose: !dtd[ e ][ '#' ],
							breakAfterClose: true
						});
					}
				}
				CKEDITOR.replace( 'editor3', {
					extraPlugins: 'htmlwriter',
					filebrowserBrowseUrl : '<?php echo base_url();?>ad_library/ckeditor/core/elfinder.html',
					uiColor : '#9AB8F3',
					contentsCss: 'body {color:#000; background-color#:FFF;}',
					docType: '<!DOCTYPE HTML>',
					allowedContent:
						'h1 h2 h3 p pre[align]; ' +
						'blockquote code kbd samp var del ins cite q b i u strike ul ol li hr table tbody tr td th caption; ' +
						'img[!src,alt,align,width,height]; font[!face]; font[!family]; font[!color]; font[!size]; font{!background-color}; a[!href]; a[!name]',
					coreStyles_bold: { element: 'b' },
					coreStyles_italic: { element: 'i' },
					coreStyles_underline: { element: 'u' },
					coreStyles_strike: { element: 'strike' },
					font_style: {
						element: 'font',
						attributes: { 'face': '#(family)' }
					},
					fontSize_sizes: 'xx-small/1;x-small/2;small/3;medium/4;large/5;x-large/6;xx-large/7',
					fontSize_style: {
						element: 'font',
						attributes: { 'size': '#(size)' }
					},
					colorButton_foreStyle: {
						element: 'font',
						attributes: { 'color': '#(color)' }
					},
					colorButton_backStyle: {
						element: 'font',
						styles: { 'background-color': '#(color)' }
					},
					stylesSet: [
						{ name: 'Computer Code', element: 'code' },
						{ name: 'Keyboard Phrase', element: 'kbd' },
						{ name: 'Sample Text', element: 'samp' },
						{ name: 'Variable', element: 'var' },
						{ name: 'Deleted Text', element: 'del' },
						{ name: 'Inserted Text', element: 'ins' },
						{ name: 'Cited Work', element: 'cite' },
						{ name: 'Inline Quotation', element: 'q' }
					],
					on: {
						pluginsLoaded: configureTransformations,
						loaded: configureHtmlWriter
					}
				});
				function configureTransformations( evt ) {
					var editor = evt.editor;
					editor.dataProcessor.htmlFilter.addRules( {

						attributes: {
							style: function( value, element ) {
								return CKEDITOR.tools.convertRgbToHex( value );
							}
						}
					} );
					function alignToAttribute( element ) {
						if ( element.styles[ 'text-align' ] ) {
							element.attributes.align = element.styles[ 'text-align' ];
							delete element.styles[ 'text-align' ];
						}
					}
					editor.filter.addTransformations( [
						[ { element: 'p',	right: alignToAttribute } ],
						[ { element: 'h1',	right: alignToAttribute } ],
						[ { element: 'h2',	right: alignToAttribute } ],
						[ { element: 'h3',	right: alignToAttribute } ],
						[ { element: 'pre',	right: alignToAttribute } ]
					] );
				}
				function configureHtmlWriter( evt ) {
					var editor = evt.editor,
						dataProcessor = editor.dataProcessor;
					dataProcessor.writer.selfClosingEnd = '>';
					var dtd = CKEDITOR.dtd;
					for ( var e in CKEDITOR.tools.extend( {}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent ) ) {
						dataProcessor.writer.setRules( e, {
							indent: true,
							breakBeforeOpen: true,
							breakAfterOpen: false,
							breakBeforeClose: !dtd[ e ][ '#' ],
							breakAfterClose: true
						});
					}
				}
				CKEDITOR.replace( 'editor4', {
					extraPlugins: 'htmlwriter',
					filebrowserBrowseUrl : '<?php echo base_url();?>ad_library/ckeditor/core/elfinder.html',
					uiColor : '#9AB8F3',
					contentsCss: 'body {color:#000; background-color#:FFF;}',
					docType: '<!DOCTYPE HTML>',
					allowedContent:
						'h1 h2 h3 p pre[align]; ' +
						'blockquote code kbd samp var del ins cite q b i u strike ul ol li hr table tbody tr td th caption; ' +
						'img[!src,alt,align,width,height]; font[!face]; font[!family]; font[!color]; font[!size]; font{!background-color}; a[!href]; a[!name]',
					coreStyles_bold: { element: 'b' },
					coreStyles_italic: { element: 'i' },
					coreStyles_underline: { element: 'u' },
					coreStyles_strike: { element: 'strike' },
					font_style: {
						element: 'font',
						attributes: { 'face': '#(family)' }
					},
					fontSize_sizes: 'xx-small/1;x-small/2;small/3;medium/4;large/5;x-large/6;xx-large/7',
					fontSize_style: {
						element: 'font',
						attributes: { 'size': '#(size)' }
					},
					colorButton_foreStyle: {
						element: 'font',
						attributes: { 'color': '#(color)' }
					},
					colorButton_backStyle: {
						element: 'font',
						styles: { 'background-color': '#(color)' }
					},
					stylesSet: [
						{ name: 'Computer Code', element: 'code' },
						{ name: 'Keyboard Phrase', element: 'kbd' },
						{ name: 'Sample Text', element: 'samp' },
						{ name: 'Variable', element: 'var' },
						{ name: 'Deleted Text', element: 'del' },
						{ name: 'Inserted Text', element: 'ins' },
						{ name: 'Cited Work', element: 'cite' },
						{ name: 'Inline Quotation', element: 'q' }
					],
					on: {
						pluginsLoaded: configureTransformations,
						loaded: configureHtmlWriter
					}
				});
				function configureTransformations( evt ) {
					var editor = evt.editor;
					editor.dataProcessor.htmlFilter.addRules( {

						attributes: {
							style: function( value, element ) {
								return CKEDITOR.tools.convertRgbToHex( value );
							}
						}
					} );
					function alignToAttribute( element ) {
						if ( element.styles[ 'text-align' ] ) {
							element.attributes.align = element.styles[ 'text-align' ];
							delete element.styles[ 'text-align' ];
						}
					}
					editor.filter.addTransformations( [
						[ { element: 'p',	right: alignToAttribute } ],
						[ { element: 'h1',	right: alignToAttribute } ],
						[ { element: 'h2',	right: alignToAttribute } ],
						[ { element: 'h3',	right: alignToAttribute } ],
						[ { element: 'pre',	right: alignToAttribute } ]
					] );
				}
				function configureHtmlWriter( evt ) {
					var editor = evt.editor,
						dataProcessor = editor.dataProcessor;
					dataProcessor.writer.selfClosingEnd = '>';
					var dtd = CKEDITOR.dtd;
					for ( var e in CKEDITOR.tools.extend( {}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent ) ) {
						dataProcessor.writer.setRules( e, {
							indent: true,
							breakBeforeOpen: true,
							breakAfterOpen: false,
							breakBeforeClose: !dtd[ e ][ '#' ],
							breakAfterClose: true
						});
					}
				}
				CKEDITOR.replace( 'editor5', {
					extraPlugins: 'htmlwriter',
					filebrowserBrowseUrl : '<?php echo base_url();?>ad_library/ckeditor/core/elfinder.html',
					uiColor : '#9AB8F3',
					contentsCss: 'body {color:#000; background-color#:FFF;}',
					docType: '<!DOCTYPE HTML>',
					allowedContent:
						'h1 h2 h3 p pre[align]; ' +
						'blockquote code kbd samp var del ins cite q b i u strike ul ol li hr table tbody tr td th caption; ' +
						'img[!src,alt,align,width,height]; font[!face]; font[!family]; font[!color]; font[!size]; font{!background-color}; a[!href]; a[!name]',
					coreStyles_bold: { element: 'b' },
					coreStyles_italic: { element: 'i' },
					coreStyles_underline: { element: 'u' },
					coreStyles_strike: { element: 'strike' },
					font_style: {
						element: 'font',
						attributes: { 'face': '#(family)' }
					},
					fontSize_sizes: 'xx-small/1;x-small/2;small/3;medium/4;large/5;x-large/6;xx-large/7',
					fontSize_style: {
						element: 'font',
						attributes: { 'size': '#(size)' }
					},
					colorButton_foreStyle: {
						element: 'font',
						attributes: { 'color': '#(color)' }
					},
					colorButton_backStyle: {
						element: 'font',
						styles: { 'background-color': '#(color)' }
					},
					stylesSet: [
						{ name: 'Computer Code', element: 'code' },
						{ name: 'Keyboard Phrase', element: 'kbd' },
						{ name: 'Sample Text', element: 'samp' },
						{ name: 'Variable', element: 'var' },
						{ name: 'Deleted Text', element: 'del' },
						{ name: 'Inserted Text', element: 'ins' },
						{ name: 'Cited Work', element: 'cite' },
						{ name: 'Inline Quotation', element: 'q' }
					],
					on: {
						pluginsLoaded: configureTransformations,
						loaded: configureHtmlWriter
					}
				});
				function configureTransformations( evt ) {
					var editor = evt.editor;
					editor.dataProcessor.htmlFilter.addRules( {

						attributes: {
							style: function( value, element ) {
								return CKEDITOR.tools.convertRgbToHex( value );
							}
						}
					} );
					function alignToAttribute( element ) {
						if ( element.styles[ 'text-align' ] ) {
							element.attributes.align = element.styles[ 'text-align' ];
							delete element.styles[ 'text-align' ];
						}
					}
					editor.filter.addTransformations( [
						[ { element: 'p',	right: alignToAttribute } ],
						[ { element: 'h1',	right: alignToAttribute } ],
						[ { element: 'h2',	right: alignToAttribute } ],
						[ { element: 'h3',	right: alignToAttribute } ],
						[ { element: 'pre',	right: alignToAttribute } ]
					] );
				}
				function configureHtmlWriter( evt ) {
					var editor = evt.editor,
						dataProcessor = editor.dataProcessor;
					dataProcessor.writer.selfClosingEnd = '>';
					var dtd = CKEDITOR.dtd;
					for ( var e in CKEDITOR.tools.extend( {}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent ) ) {
						dataProcessor.writer.setRules( e, {
							indent: true,
							breakBeforeOpen: true,
							breakAfterOpen: false,
							breakBeforeClose: !dtd[ e ][ '#' ],
							breakAfterClose: true
						});
					}
				}
				CKEDITOR.replace( 'editor6', {
					extraPlugins: 'htmlwriter',
					filebrowserBrowseUrl : '<?php echo base_url();?>ad_library/ckeditor/core/elfinder.html',
					uiColor : '#9AB8F3',
					contentsCss: 'body {color:#000; background-color#:FFF;}',
					docType: '<!DOCTYPE HTML>',
					allowedContent:
						'h1 h2 h3 p pre[align]; ' +
						'blockquote code kbd samp var del ins cite q b i u strike ul ol li hr table tbody tr td th caption; ' +
						'img[!src,alt,align,width,height]; font[!face]; font[!family]; font[!color]; font[!size]; font{!background-color}; a[!href]; a[!name]',
					coreStyles_bold: { element: 'b' },
					coreStyles_italic: { element: 'i' },
					coreStyles_underline: { element: 'u' },
					coreStyles_strike: { element: 'strike' },
					font_style: {
						element: 'font',
						attributes: { 'face': '#(family)' }
					},
					fontSize_sizes: 'xx-small/1;x-small/2;small/3;medium/4;large/5;x-large/6;xx-large/7',
					fontSize_style: {
						element: 'font',
						attributes: { 'size': '#(size)' }
					},
					colorButton_foreStyle: {
						element: 'font',
						attributes: { 'color': '#(color)' }
					},
					colorButton_backStyle: {
						element: 'font',
						styles: { 'background-color': '#(color)' }
					},
					stylesSet: [
						{ name: 'Computer Code', element: 'code' },
						{ name: 'Keyboard Phrase', element: 'kbd' },
						{ name: 'Sample Text', element: 'samp' },
						{ name: 'Variable', element: 'var' },
						{ name: 'Deleted Text', element: 'del' },
						{ name: 'Inserted Text', element: 'ins' },
						{ name: 'Cited Work', element: 'cite' },
						{ name: 'Inline Quotation', element: 'q' }
					],
					on: {
						pluginsLoaded: configureTransformations,
						loaded: configureHtmlWriter
					}
				});
				function configureTransformations( evt ) {
					var editor = evt.editor;
					editor.dataProcessor.htmlFilter.addRules( {

						attributes: {
							style: function( value, element ) {
								return CKEDITOR.tools.convertRgbToHex( value );
							}
						}
					} );
					function alignToAttribute( element ) {
						if ( element.styles[ 'text-align' ] ) {
							element.attributes.align = element.styles[ 'text-align' ];
							delete element.styles[ 'text-align' ];
						}
					}
					editor.filter.addTransformations( [
						[ { element: 'p',	right: alignToAttribute } ],
						[ { element: 'h1',	right: alignToAttribute } ],
						[ { element: 'h2',	right: alignToAttribute } ],
						[ { element: 'h3',	right: alignToAttribute } ],
						[ { element: 'pre',	right: alignToAttribute } ]
					] );
				}
				function configureHtmlWriter( evt ) {
					var editor = evt.editor,
						dataProcessor = editor.dataProcessor;
					dataProcessor.writer.selfClosingEnd = '>';
					var dtd = CKEDITOR.dtd;
					for ( var e in CKEDITOR.tools.extend( {}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent ) ) {
						dataProcessor.writer.setRules( e, {
							indent: true,
							breakBeforeOpen: true,
							breakAfterOpen: false,
							breakBeforeClose: !dtd[ e ][ '#' ],
							breakAfterClose: true
						});
					}
				}
				CKEDITOR.replace( 'editor7', {
					extraPlugins: 'htmlwriter',
					filebrowserBrowseUrl : '<?php echo base_url();?>ad_library/ckeditor/core/elfinder.html',
					uiColor : '#9AB8F3',
					contentsCss: 'body {color:#000; background-color#:FFF;}',
					docType: '<!DOCTYPE HTML>',
					allowedContent:
						'h1 h2 h3 p pre[align]; ' +
						'blockquote code kbd samp var del ins cite q b i u strike ul ol li hr table tbody tr td th caption; ' +
						'img[!src,alt,align,width,height]; font[!face]; font[!family]; font[!color]; font[!size]; font{!background-color}; a[!href]; a[!name]',
					coreStyles_bold: { element: 'b' },
					coreStyles_italic: { element: 'i' },
					coreStyles_underline: { element: 'u' },
					coreStyles_strike: { element: 'strike' },
					font_style: {
						element: 'font',
						attributes: { 'face': '#(family)' }
					},
					fontSize_sizes: 'xx-small/1;x-small/2;small/3;medium/4;large/5;x-large/6;xx-large/7',
					fontSize_style: {
						element: 'font',
						attributes: { 'size': '#(size)' }
					},
					colorButton_foreStyle: {
						element: 'font',
						attributes: { 'color': '#(color)' }
					},
					colorButton_backStyle: {
						element: 'font',
						styles: { 'background-color': '#(color)' }
					},
					stylesSet: [
						{ name: 'Computer Code', element: 'code' },
						{ name: 'Keyboard Phrase', element: 'kbd' },
						{ name: 'Sample Text', element: 'samp' },
						{ name: 'Variable', element: 'var' },
						{ name: 'Deleted Text', element: 'del' },
						{ name: 'Inserted Text', element: 'ins' },
						{ name: 'Cited Work', element: 'cite' },
						{ name: 'Inline Quotation', element: 'q' }
					],
					on: {
						pluginsLoaded: configureTransformations,
						loaded: configureHtmlWriter
					}
				});
				function configureTransformations( evt ) {
					var editor = evt.editor;
					editor.dataProcessor.htmlFilter.addRules( {

						attributes: {
							style: function( value, element ) {
								return CKEDITOR.tools.convertRgbToHex( value );
							}
						}
					} );
					function alignToAttribute( element ) {
						if ( element.styles[ 'text-align' ] ) {
							element.attributes.align = element.styles[ 'text-align' ];
							delete element.styles[ 'text-align' ];
						}
					}
					editor.filter.addTransformations( [
						[ { element: 'p',	right: alignToAttribute } ],
						[ { element: 'h1',	right: alignToAttribute } ],
						[ { element: 'h2',	right: alignToAttribute } ],
						[ { element: 'h3',	right: alignToAttribute } ],
						[ { element: 'pre',	right: alignToAttribute } ]
					] );
				}
				function configureHtmlWriter( evt ) {
					var editor = evt.editor,
						dataProcessor = editor.dataProcessor;
					dataProcessor.writer.selfClosingEnd = '>';
					var dtd = CKEDITOR.dtd;
					for ( var e in CKEDITOR.tools.extend( {}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent ) ) {
						dataProcessor.writer.setRules( e, {
							indent: true,
							breakBeforeOpen: true,
							breakAfterOpen: false,
							breakBeforeClose: !dtd[ e ][ '#' ],
							breakAfterClose: true
						});
					}
				}
	</script>
   
  </body>
  </body>
</html>

<?php
else:
	redirect("Pages/login");
endif;
?>