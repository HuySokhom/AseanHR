<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet" />

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
    
    <div class="container">
    	
                
         <!-----------content left------------------->
        <div class="left-company-profile">
        	<div class="company-profile">
            	<ul class="form">
                     <li><a class="profile" href="<?=site_url("Pages/user_center/");?>"><i class="icon-paste"></i>CV Register</a></li>
                       <?php /*?> <li><a class="messages" href="<?=site_url("Pages/cover_letter/");?>"><i class="icon-envelope-alt"></i>Cover Letters</a></li><?php */?>
                        <li><a class="messages" href="<?=site_url("Pages/employee_apply_job/");?>"><i class="icon-circle-arrow-down"></i>Applied Job</a></li>
                        <li class="selected"><a class="settings" href="<?=site_url("Pages/account_setting/");?>"><i class="icon-cog"></i>Account Settings</a></li>
                        <li><a class="logout" href="<?php echo base_url(); ?>index.php/login_controller/logout"><i class="icon-signout"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <!----------------End Content Left------------------>
                
                
                <!-------------Recruitment Right------------------->
        <div class="left-company-profile-content">
        <?php foreach($select_profile as $profile): ?>
        	<div class="panel-left">
            	<h2>Employee Account Management</h2>
                
                <p>Name : <?=$profile->emp_name;?></p>
                <p>Email : <?=$profile->emp_email;?></p>
                <p>Phone : <?=$profile->emp_phone;?></p>
                <p>Address :  <?=$profile->emp_address;?></p><br/>
                <a href="<?=site_url("Pages/edit_profile");?>">Update user profile</a>
            </div>
            <div class="panel-right">
            	
                <?php if($profile->emp_image == "user.png" ){ ?>
                    <img src="<?php echo base_url();?>image/image_employee/user.png" />
                    <?php }else{ ?>
                     <img src="<?php echo base_url();?>image/img_profile/<?php echo $profile->emp_image; ?>" />     
                 <?php } ?>
                             
                <p>Change Your Image Profile</p>
                 		<form action="<?=site_url("Pages/uploadimg");?>" method="post" enctype="multipart/form-data">
                            <input type="file" name="userfile[]" class="browse" required/><br/><br/>
                            <input class="change" type="submit" value="Change Image" name="add"/>
                        </form>
            </div>
            <?php endforeach; ?>
      	</div>
        <!-------------End Recruitment Right------------------->
        
        

 

   

    </div><!-- End Contianer -->

