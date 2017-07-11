<div class="container">
    <!-----------content left------------------->
    <div class="left-content">
     <?php foreach($where_select_employee_cv as $job){ ?>
    	<div class="header-view-job">
            
                <h4 style="text-align:center;"><?php echo $job->emp_name; ?></h4>
            
            
            <div class="review-company" style="margin-left:250px;">
                <div class="list-cv-main">
                    <p>Present Address</p>
                    <p>Phone Number</p>
                    <p>Email</p>
                    
                </div>
                <div class="list-cv-detail" style="width:300px;">
                	<p><?php echo $job->emp_address; ?></p>
                    <p><?php echo $job->emp_phone; ?></p>
                    <p><?php echo $job->emp_email; ?></p>
                </div>
            </div>
           
        </div>
        <div class="review-company">
        	<div class="list-cv-main">
                <p>Date</p>
                <!--<p>Company Name:</p>
                <p>Company Address</p>
                <p>Tell</p>
                <p>Email</p>-->
                <p>Position Apply For</p>
                <p>Salary</p>
            </div>
            <div class="list-cv-detail">
            
                        
                <p><?php echo $job->date; ?></p>
               	<?php /*?><p><?php echo $job->com_name; ?></p>
                <p><?php echo $job->com_address; ?></p>
                <p><?php echo $job->com_phone; ?></p>
                <p><?php echo $job->com_email; ?></p><?php */?>
                <p><?php echo $job->apply_for; ?>r</p>
                <p><?php echo $job->sal_name; ?></p>
                
            </div>
          
        </div>
        <div class="job-description-view">
        	<h4>Your detail cover letter write here</h4>
            <div class="in-job-description-view">
            	<?php echo $job->detail_cover; ?>
            </div>
        </div>
        
        <h4>Curriculum Vitae (CV)</h4>
            
            <div class="review-company">
                <div class="list-cv-main">
                    <p>Full Name</p>
                    <p>Sex</p>
                    <p>Date of Birth</p>
                    <p>Age</p>
                    <p>Nationality</p>
                    <p>Religion</p>
                    <p>Health</p>
                    <p>Marital Status</p>
                    <p>Phone Number</p>
                    <p>E-mail</p>
                    <p>Perminant Address</p>
                </div>
                <div class="list-cv_middle-detail">
                	<p><?php echo $job->emp_name; ?></p>
                    <p><?php echo $job->emp_phone; ?></p>
                    <p><?php echo $job->date_of_birth; ?></p>
                    <p><?php echo $job->age; ?></p>
                    <p><?php echo $job->nationality; ?></p>
                    <p><?php echo $job->religion; ?></p>
                    <p><?php echo $job->health; ?></p>
                    <p><?php echo $job->marital_status; ?></p>
                    <p><?php echo $job->emp_phone; ?></p>
                    <p><?php echo $job->emp_email; ?></p>
                    <p><?php echo $job->emp_address; ?></p>

                </div>
                <div class="list-cv_right-detail">
                
                
                <?php if($job->emp_image == "user.png" ){ ?>
                            <img src="<?php echo base_url();?>image/image_employee/user.png" style="width:180px; height:180px;  margin-top:20px;"/>
                            <?php }else{ ?>
                             <img src="<?php echo base_url();?>image/img_profile/<?php echo $job->emp_image; ?>" style="width:180px; height:180px; margin-top:20px;"/>     
                         <?php } ?>
                
                </div>
                
            </div>    
        
        
        
        <div class="job-description-view">
        	<h4>Personal Profile & Qualification</h4>
            <div class="in-job-description-view">
            	<?php echo $job->qualification; ?>
            </div>
        </div>
        <div class="job-description-view">
        	<h4>Employment History</h4>
            <div class="in-job-description-view">
            	<?php echo $job->history; ?>
            </div>
        </div>
        <div class="job-description-view">
        	<h4>Ecducation Background</h4>
            <div class="in-job-description-view">
            	<?php echo $job->education; ?>
            </div>
        </div>
        <div class="job-description-view">
        	<h4>Training Skills and Course</h4>
            <div class="in-job-description-view">
            	<?php echo $job->training_skill; ?>
            </div>
        </div>
        <div class="job-description-view">
        	<h4>COMPUTER SKILL</h4>
            <div class="in-job-description-view">
            	<?php echo $job->computer_skill; ?>
            </div>
        </div>
        <div class="job-description-view">
        	<h4>Language</h4>
            <div class="in-job-description-view">
            	<?php echo $job->language; ?>
            </div>
        </div>
        
        <div class="job-description-view">
        	<h4>Hobbies</h4>
            <div class="in-job-description-view">
            	<?php echo $job->hobby; ?>
            </div>
        </div>
        
        <h4>Reference One</h4>
            
            <div class="review-company">
                <div class="list-cv-main">
                    <p>Full Name</p>
                    <p>Position </p>
                    <p>Phone Number </p>
                    <p>E-mail </p>
                
                </div>
                <div class="list-cv_middle-detail">
                	<p><?php echo $job->name1; ?></p>
                    <p><?php echo $job->position1; ?></p>
                    <p><?php echo $job->phone1; ?></p>
                    <p><?php echo $job->email1; ?></p>
                   

                </div>
			</div>
        <h4>Reference Two</h4>
            
            <div class="review-company">
                <div class="list-cv-main">
                    <p>Full Name</p>
                    <p>Position </p>
                    <p>Phone Number </p>
                    <p>E-mail </p>
                
                </div>
                <div class="list-cv_middle-detail">
                	<p><?php echo $job->name2; ?></p>
                    <p><?php echo $job->position2; ?></p>
                    <p><?php echo $job->phone2; ?></p>
                    <p><?php echo $job->email2; ?></p>
                   

                </div>
			</div>
            
        <h4>Reference Three</h4>
            
            <div class="review-company">
                <div class="list-cv-main">
                    <p>Full Name</p>
                    <p>Position </p>
                    <p>Phone Number </p>
                    <p>E-mail </p>
                
                </div>
                <div class="list-cv_middle-detail">
                	<p><?php echo $job->name3; ?></p>
                    <p><?php echo $job->position3; ?></p>
                    <p><?php echo $job->phone3; ?></p>
                    <p><?php echo $job->email3; ?></p>
                   

                </div>
			</div>
    
        
        
   <?php } ?>
    </div>
    <!----------------End Content Left------------------>
    
    <!-------------Recruitment Right------------------->
    <div class="recruitment-employer">
        <div class="employer">
            <h3>Recruitment Employer</h3>
            
            <?php  foreach($show_company_logo as $values){ ?>
            <div class="damnel-employer">
                <div class="list-employer">
                
                 <a href="<?=site_url("Pages/company/".$values->com_id);?>"  title="<?php echo $values->com_name; ?>"><img src="<?php echo base_url(); ?>/image/image_company/<?php echo $values->com_image;?>"  style="width:82px; height:70px;" /></a>
                
                </div>
            </div>
            <?php } ?>
            
            
            
           
        </div>
    </div>
    <div class="recruitment-employer">
        <div class="employer">
            <h3>Advertising</h3>
         		 <?php  foreach($show_advertising as $advertise){ 
				 		if($advertise->adv_status == 2 ){
				 ?>
                
                <div class="advertising">
                	
                    	<a href="<?php echo $advertise->adv_url;?>"><img src="<?php echo base_url();?>image/image_advertising/<?php echo $advertise->adv_image;?>"/></a>
                    
                </div>
                 <?php 
						}
				 } ?>
        </div>
    </div>
    <!-------------End Recruitment Right------------------->
</div>




