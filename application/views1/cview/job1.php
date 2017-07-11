<div class="container">
    <!-----------content left------------------->
    <div class="left-content">
     <?php foreach($show_job_detail as $job){ ?>
    	<div class="header-view-job">
            <div class="view-job-left">
                <h4><?php echo $job->job_name; ?></h4>
            </div>

            <?php
			if($this->session->userdata("employeeID")){
			?>
			<div class="view-job-right">
				   <button class="btn-apply" type="submit" style="cursor:pointer" id="myBtn">Apply Now</button>
			</div>
			<?php } else { ?>
			<?php echo form_open('Pages/login_employee');?> 
			<div class="view-job-right">
			 <button type="submit" style="cursor:pointer"  class="btn-apply">Apply Now</button>  
			 </div>           
			<?php echo form_close();?>
						  
			<?php }?>
            
            
        </div>
        <div class="review-company">
           <div class="list-com-main">
                <p>Company</p>
                <p>Type</p>
                <p>Industry</p>
                <p>Employees</p>
                <p>Location</p>
            </div>
            <div class="list-com-detail">
            <?php foreach($show_company as $com){ 
								if($com->com_id == $job->comp_id){
						?>
                        
                <p><?php echo $com->com_name; ?></p>
                <p><?php foreach($show_type as $typ){ 
							if($typ->typ_id == $com->type_id){
						?>
                    	<?php echo $typ->typ_name; ?>
                        <?php } }?>
                </p>
                <p><?php foreach($show_industry as $ind){ 
								if($ind->ind_id == $com->industry_id){
						?>
                    	<?php echo $ind->ind_name; ?>
                        <?php } }?>
                </p>
                <p><?php echo $com->com_employee_num; ?></p>
                
           
                <p><?php foreach($show_location as $loc){ 
                                        if($loc->loc_id == $job->loca_id){
                                        ?>
                                        <?php echo $loc->loc_name; ?>
                                        <?php } }?>
                </p>
                <?php } } ?>
            </div>
            <div class="list-com-logo">
                <?php foreach($show_company as $com){
					if($com->com_id == $job->comp_id){	
				?>
                <a href="<?=site_url("Pages/company/".$com->com_id);?>" title="<?php echo $com->com_name; ?>">
            	<img src="<?php echo base_url();?>image/image_company/<?php echo $com->com_image; ?>"/>
                <?php } } ?></a>
            </div>
        </div>
        <div class="list-table-job">
        	<table class="table table-striped table-bordered" cellspacing="0" width="100%">
                <tbody>
                   <tr>
                       <td class="job-details">Level</td>
                       <td><?php foreach($show_level as $lev){ 
                                            if($lev->lev_id == $job->leve_id){
                                    ?>
                                    <?php echo $lev->lev_name; ?>
                                    <?php } }?>
                       </td>
                       <td class="job-details">Term</td>
                       <td> <?php foreach($show_term as $ter){ 
                                            if($ter->ter_id == $job->term_id){
                                             echo $ter->ter_name; 
                                     } }?>
                       </td>
                  </tr>
                  <tr>
                       <td class="job-details">Year of Exp.</td>
                       <td><?php echo $job->job_experience; ?></td>
                       <td class="job-details">Function</td>
                       <td><?php foreach($show_function as $fun){ 
                                            if($fun->fun_id == $job->func_id){
                                             echo $fun->fun_name; 
                                     } }?></td>
                  </tr>
                  <tr>
                       <td class="job-details">Hiring</td>
                       <td><?php echo $job->job_hire; ?></td>
                       <td class="job-details">Industry</td>
                       <td><?php foreach($show_industry as $ind){ 
								if($ind->ind_id == $com->industry_id){
						?>
                    	<?php echo $ind->ind_name; ?>
                        <?php } }?></td>
                  </tr>
                  <tr>
                       <td class="job-details">Salary</td>
                       <td><?php foreach($show_salary as $sal){ 
                                        if($sal->sal_id == $job->sala_id){
                                        ?>
                                        <?php echo $sal->sal_name; ?>
                                        <?php } }?>
                       </td>
                       <td class="job-details">Qualification</td>
                       <td><?php echo $job->job_qualification; ?></td>
                  </tr>
                  <tr>
                       <td class="job-details">Sex</td>
                       <td>
                  		 <?php   
				   		 if($job->job_sex_id == 0){
							  echo 'Male';
							  
						  }
						  elseif ($job->job_sex_id == 1)
						  {
								echo 'Female';  
	  
						  }
						  else
						  {
							  echo 'Both';
	  
						  }
							  
						  ?>
                       
                       </td>
                       <td class="job-details">Language</td>
                       <td><?php echo $job->job_language; ?></td>
                  </tr>
                  <tr>
                       <td class="job-details">Age</td>
                       <td><?php echo $job->job_age; ?></td> 	
                       <td class="job-details">Location</td>
                       <td><?php foreach($show_location as $loc){ 
                                        if($loc->loc_id == $job->loca_id){
                                        ?>
                                        <?php echo $loc->loc_name; ?>
                                        <?php } }?></td>
                  </tr>
                  <tr>
                       <td class="job-details">Publish Date</td>
                       <td><?php echo $job->job_age; ?></td>
                       <td class="job-details">Closing Date</td>
                       <td><?php echo $job->job_closing_date; ?></td>
                  </tr>
                </tbody>
             </table>
        </div>
        <div class="job-description-view">
        	<h4>Job Responsibilities</h4>
            <div class="in-job-description-view">
            	<?php echo $job->job_description; ?>
            </div>
        </div>
        <div class="job-description-view">
        	<h4>Job Requirements</h4>
            <div class="in-job-description-view">
            	<?php echo $job->job_requirement; ?>
            </div>
        </div>
        
        <div class="job-description-view">
        	<h4>Other</h4>
            <div class="in-job-description-view">
            	<?php echo $job->job_other; ?>
            </div>
        </div>
        
        <div class="job-description-view">
        	<h4>How to apply</h4>
            <div class="in-job-description-view">
            	 <?php
				    foreach($show_setting as $set){
						
						echo $set->apply_job_text;
						}
				   
				    ?>
            </div>
        </div>
        
        <div class="job-description-view">
        	<h4>Contact Information</h4>
           <div class="review-company">
            <div class="list-com-main">
                <p>Name</p>
                <p>Phone</p>
                <p>Email</p>
                
            </div>
            <div class="list-com-detail">
            
                        
                <p><?php echo $job->job_contact_person; ?></p>
                <p><?php echo $job->job_contact_phone; ?></p>
                <p><?php echo $job->job_contact_email; ?></p>
            </div>
            </div>
            
            
            
            
        </div>
        
        <?php
		if($this->session->userdata("employeeID")){
		?>
        <div class="view-job-middle">
               <button class="btn-apply" type="submit" style="cursor:pointer" id="myBtnOne">Apply Now</button>
        </div>
        <?php } else { ?>
		<?php echo form_open('Pages/login_employee');?> 
        <div class="view-job-middle">
         <button type="submit" style="cursor:pointer"  class="btn-apply">Apply Now</button>  
         </div>           
        <?php echo form_close();?>
                      
        <?php }?>
        
        
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
				 		if($advertise->adv_status == 1 ){
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

<style>
	/* The Modal (background) */
	.modal {
		display: none;
		position: fixed;
		z-index: 1;
		padding-top: 100px;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: auto;
		background-color: rgb(0,0,0);
		background-color: rgba(0,0,0,0.4);
	}
	
	/* Modal Content */
	.modal-content {
		background-color: #fff;
		margin: auto;
		width: 540px;
		overflow:hidden;
	}
	
	/* The Close Button */
	.close {
		color: #aaaaaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
		padding-right: 10px;
    	padding-top: 3px;
	}
	
	.close:hover,
	.close:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}
	.brows{ display:none; }
</style>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  	<script>
    	$(document).ready(function(){
			$(".btn-apply").click(function(){
			   $('#file_cv').removeAttr('required');
			});
			
			$('input[type="radio"]').click(function(){
				if($(this).attr("value")=="brow"){
					$("#brow").removeClass('brows');
					$('#file_cv').prop('required',true);
					$("#brow").show();
					$("#profile").hide();
				}if($(this).attr("value")=="profile"){
					$("#profile").show();
					$("#brow").addClass('brows');
					$('#file_cv').removeAttr('required');
				}
			});
		});
    </script>
    <div style="background:#E6062B;">
        <span class="close">&times;</span>
        <h3 style="color:#fff; font-size:18px; padding:10px 0px 10px 10px; margin-top:0px;">Apply Job</h3>
    </div>
    <p style="padding:0px 0px 0px 10px; font-size:16px;">Please, select your CV and your Cover Letter below!</p>
    <form action="<?=site_url('Pages/apply_job');?>" method="post" enctype="multipart/form-data">
    	<input type="hidden" name="jobs_id" value="<?php echo $this->session->userdata("session_job_url") ?>" />
        <input type="hidden" name="employee_id" value="<?php echo $this->session->userdata("employeeID") ?>" />
        <input type="hidden" name="app_date" value="<?php date_default_timezone_set('Asia/Phnom_Penh'); echo date("Y-m-d H:i:s");?>"/>
        <div class="my_apply_job">
              <label>Apply to<span style="margin-left:51px;">:</span></label>
              <input type="text" name="apply_to" value="<?=$values->com_name;?>"/>
        </div>
        <div class="my_apply_job">
          <label>Position apply for:</label>
          <input type="text" name="apply_subject" value="<?=$job->job_name;?>"/>
        </div>
        <span style="margin-right:65px; margin-left:5px;"><input checked type="radio" name="checked" value="profile"/> Select your CV from your account</span>
        <input type="radio" name="checked" value="brow"/> Browse your CV from your computer<br/>
        <div id="profile">
            <div class="my_apply_job">
                <label>CV Name:</label>
                <select name="employee_cv_id">
                <?php
                    foreach($show_employee_cv as $com):
                    echo '<option value="'.$com->cv_id.'">'.$com->apply_for.'</option>';	
                    endforeach;
                ?>
                </select>
            </div>
            <?php /*?><div class="group-post-job">
                <div class="job-post">
                    <label>Cover Latter Name:</label>
                    <select style="width:522px;" name="employee_cover_letter_id" class="form-control"  />
                    <?php
                        foreach($show_employee_cover_letter as $cover):
                        echo '<option value="'.$cover->cov_id.'">'.$cover->cov_apply_for.'</option>';	
                        endforeach;
                    ?>
                    </select>
                </div>
            </div><?php */?>
        </div>
        <div style="margin-left:10px; margin-top:15px;" id="brow" class="brows">
        	<label style="font-weight:bold; color:red;">Browse your CV from your computer</label><br/>
            <input type="file" name="userfile[]" id="file_cv" required/>
        </div>
        <div class="my_apply_job">
          <label>Description:</label>
          <textarea name="descripiton" role="20" style="width:500px;"></textarea>
        </div>
    <div style="border-top:1px solid #ccc; padding:10px 0px; margin-top:20px;">
        <button type="button" style="border:none; background:#E6062B; float:right; color:#fff; padding:8px 28px; margin-right:10px; font-size:16px; margin-top:5px; cursor:pointer;" id="turn_off">No</button>
        <button type="submit" style="border:none; background:#E6062B; float:right; color:#fff; padding:8px 18px; margin-right:10px; font-size:16px; margin-bottom:15px; margin-top:5px; cursor:pointer;">Submit</button>
    </div>
    </form>
  </div>

</div>

<script>
	// Get the modal
	var modal = document.getElementById('myModal');
	
	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");
	
	// Get the button that opens the modal
	var btnOne = document.getElementById("myBtnOne");
	
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];
	
	// When the user clicks the button, open the modal 
	btn.onclick = function() {
		modal.style.display = "block";
	}
	
	// When the user clicks the button, open the modal 
	btnOne.onclick = function() {
		modal.style.display = "block";
	}
	
	$("#turn_off").click(function(){
		modal.style.display = "none";
	});
	
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>



