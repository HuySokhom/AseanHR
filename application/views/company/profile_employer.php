
      


	
<div class="container" style="margin-top:35px; margin-bottom:160px;">
           <div class="row">
            <div class="container-fluid">
            <div class="col-md-12">
              	
                
                    <div>
                    	<?php foreach($select_profile as $profile): ?>
                    
                		<div class="col-md-4 col-md-offset-2">
                   			 <img src="<?php echo base_url();?>image/image_company/<?php echo $profile->com_image; ?>" width="200px" height="220px"/>
                             <?php if($this->session->flashdata('already')){
								 echo $this->session->flashdata('already');
								 }?>
                             <p><b>Change Your Image Profile</b></p>
                    <p>
                        <form action="<?=site_url("Companys/uploadimg");?>" method="post" enctype="multipart/form-data">
                            <input type="file" name="userfile[]" class="browse" required/><br/><br/>
                            <input class="change" type="submit" value="Change Image" name="add"/>
                        </form>
                    </p>
                    
                   		</div>
                    	<div class="col-md-5">
                            <h1 class="pro_name">Personal Information</h1>
                            <h4>Name :<?=$profile->com_name;?></h4>
                            <h4>Email  : <?=$profile->com_email;?> </h4>
                            <h4>Phone : <?=$profile->com_phone;?></h4>
                            <h4>Address : <?=$profile->com_address;?> </h4>
                        <br/>
                     			<div class="profile_view"> 
                                <a href="<?=site_url("Companys/edit_profile_employer");?>">Update user profile</a>
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
                                 <a href="<?=site_url("Pages/home");?>">Back</a>
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
          
          
    