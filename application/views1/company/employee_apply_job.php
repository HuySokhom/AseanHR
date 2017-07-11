<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet" />
<style>
.table th { background:#2980B9; color:#FFF; padding:15px 5px !important; text-align:center !important; border:1px solid #FFF !important;}
.table td { padding-top:12px !important; padding-bottom:12px !important; }


</style>
 	<!--Data Table-->
	<script src="<?php echo base_url();?>ad_library/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>ad_library/js/dataTables.bootstrap.min.js"></script>
    <!--End Data Table-->

    
    <div class="container">
    	<!-----------content left------------------->
        <div class="left-company-profile">
        	<div class="company-profile">
            
                    <ul class="form">
                        <li><a class="profile" href="<?=site_url("Companys/employer_center/");?>"><i class="fa fa-briefcase"></i>Job posted</a></li>
                        <li class="selected"><a class="messages" href="<?=site_url("Companys/employee_apply_job/");?>"><i class="fa fa-list"></i>List of Applicant</a></li>
                        <?php /*?><li><a class="messages" href="<?=site_url("Companys/browse_employee_cv/");?>"><i class="fa fa-search-plus"></i>Browse Applicant CV</a></li><?php */?>
                        <li><a class="settings" href="<?=site_url("Companys/account_setting/");?>"><i class="icon-cog"></i>Account Settings</a></li>
                        <li><a class="logout" href="<?php echo base_url(); ?>index.php/login_controller/logout"><i class="icon-signout"></i>Logout</a></li>
                    </ul>         
             </div>
        </div>
<style>

.my_custom_serach_box label {
    display: table-caption;}

@media only screen and (max-width: 991px) {
	
.my_custom_serach_box label {
    display: inline-block;}

}

</style>
                <!-------------Recruitment Right------------------->
        <div class="left-company-profile-content">
                <br />
                	<h2>List of Applicant</h2>

                  
                    <div class="list-table-job">
					<table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Job Title</th>
                                  <th>Applicant</th>
                                  <th>Applied Date</th>
                                  <!--<th>View CV</th>
                                 <th>View Cover Letter</th>-->
                                  <th>Delete </th>
                             
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                                    $n = 1;
                                     foreach($show_job_list as $job){
										foreach($show_employee_apply_job_list as $apply_job){
											if( $job->job_id == $apply_job->jobs_id){
							?>
                                <tr>
                                <?php  
                                       
                                        echo '<td>'.$n.'</td>';
                                        echo '<td>'.$job->job_name;'</td>';

  
                                  ?>
                                  <td>
                                  	<?php
//									  foreach($show_all_employee_cv as $all_cv){
//										  if($apply_job->employee_cv_id == $all_cv->ecv_id){
//											   foreach($show_all_employee as $emp){
//												   if($emp->emp_id == $all_cv->empl_id){
//														echo $emp->emp_name;
//												   }
//												}
										foreach($show_all_employee as $emp){
												   if($emp->emp_id == $apply_job->employee_id){
														echo $emp->emp_name;
												   }
												}
									?>
                                  </td>
                                  
                                   
                                  
                                  
                                   <td>       
                                  	    <?php echo $apply_job->app_date; ?>
                                  </td>
                            <?php /*?>      <td> 
                                  <?php
									  foreach($show_all_employee_cv as $all_cv){
										  if($apply_job->employee_cv_id == $all_cv->ecv_id){
                                   ?>    
                                  	<a target="_blank" href="<?php echo base_url(); ?>image/image_cv_register/<?php echo $all_cv->ecv_image;?>">click to open</a>
                                    
                                    <?php
										   } 
										}
									  ?>
                                  </td>
                                  
                                      
                                      
                     
                                 <td>
                                    <?php
									  foreach($show_all_employee_cover_letter as $all_cover_letter){
										  if($apply_job->employee_cover_letter_id == $all_cover_letter->cov_id){
									?>
                                 	<a target="_blank" href="<?php echo base_url(); ?>image/image_cover_letter/<?php echo $all_cover_letter->cov_image;?>">click to open</a>
                                     <?php
										 } 
									  }
									?>
                                 </td><?php */?>
                     
                                  
                                  <td>
                                  
                                <a onClick="return confirm('Are you sure you want to delete this applied job!');" href="<?=site_url("Companys/delete_apply_job/".$apply_job->app_id);?>" style="color:red;" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
                                  </td>      
                   
                                        
                                     <?php
									  $n++;
											}
										 }
                                        
                                       
										
                                    }
                                  ?>
                                  </tr>
                              </tbody>
                            </table>
                        </div>

    
        

    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });

    </script>      

                        
                        
                       




   

    </div><!-- End Contianer -->

