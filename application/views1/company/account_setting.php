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
                        <li><a class="profile" href="<?=site_url("Companys/employer_center/");?>"><i class="fa fa-briefcase"></i>Job posted</a></li>
                        <li><a class="messages" href="<?=site_url("Companys/employee_apply_job/");?>"><i class="fa fa-list"></i>List of Applicant</a></li>
                        <?php /*?><li><a class="messages" href="<?=site_url("Companys/browse_employee_cv/");?>"><i class="fa fa-search-plus"></i>Browse Applicant CV</a></li><?php */?>
                        <li class="selected"><a class="settings" href="<?=site_url("Companys/account_setting/");?>"><i class="icon-cog"></i>Account Settings</a></li>
                        <li><a class="logout" href="<?php echo base_url(); ?>index.php/login_controller/logout"><i class="icon-signout"></i>Logout</a></li>
                    </ul>         
                
             </div>
        </div>
        <!----------------End Content Left------------------>
        
        <!-------------Recruitment Right------------------->
        <div class="left-company-profile-content">
        <?php foreach($select_profile as $profile): ?>
        	<div class="panel-left">
            	<h2>Employer Account Management</h2>
                <p>Name : <?=$profile->com_name;?></p>
                <p>Email : <?=$profile->com_email;?></p>
                <p>Phone : <?=$profile->com_phone;?></p>
                <p>Address : <?=$profile->com_address;?></p><br/>
                <a href="<?=site_url("Companys/edit_profile_employer");?>">Update user profile</a>
            </div>
            <div class="panel-right">
            	<?php if($profile->com_image == "user.png" ){ ?>
                    <img src="<?php echo base_url();?>image/image_employee/user.png" />
                    <?php }else{ ?>
                     <img src="<?php echo base_url();?>image/image_company/<?php echo $profile->com_image; ?>" />	
                <?php } ?>
                <p>Change Your Image Profile</p>
                <form action="<?=site_url("Companys/uploadimg");?>" method="post" enctype="multipart/form-data">
                    <input type="file" name="userfile[]" class="browse" required/><br/><br/>
                    <input class="change" type="submit" value="Change Image" name="add"/>
                </form>
            </div>
            <?php endforeach; ?>
      	</div>
        <!-------------End Recruitment Right------------------->
 
    </div><!-- End Contianer -->

