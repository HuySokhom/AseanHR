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
                        <li><a class="profile" href="<?=site_url("Pages/user_center/");?>"><i class="icon-paste"></i>CV Register</a></li>
                        <?php /*?><li><a class="messages" href="<?=site_url("Pages/cover_letter/");?>"><i class="icon-envelope-alt"></i>Cover Letters</a></li><?php */?>
                        <li class="selected"><a class="messages" href="<?=site_url("Pages/employee_apply_job/");?>"><i class="icon-circle-arrow-down"></i>Applied Job</a></li>
                        <li><a class="settings" href="<?=site_url("Pages/account_setting/");?>"><i class="icon-cog"></i>Account Settings</a></li>
                        <li><a class="logout" href="<?php echo base_url(); ?>index.php/login_controller/logout"><i class="icon-signout"></i>Logout</a></li>
                    </ul>         
           
           </div>
       </div>
                
                <div class="left-company-profile-content">
                <br />
                	<h2>List of Company Applied Job</h2>

                  
                    <div class="list-table-job">
					<table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Job Title</th>
                                  <th>Company Name</th>
                                  <th>Applied Date</th>
                                  <th>View CV</th>
                                 <th>View Cover Letter</th>

                             
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                                    $n = 1;
                                     foreach($show_employee_apply_job_list  as $apply_job){
										foreach($show_job_list_by_employee as $job ){
											if( $job->job_id == $apply_job->jobs_id){
							?>
                                <tr>
                                <?php  
                                       
                                        echo '<td>'.$n.'</td>';
                                        echo '<td>'.$job->job_name;'</td>';

  
                                  ?>
                                  <td>
                                  	<?php   foreach($show_all_company as $com){
										  if($com->com_id == $job->comp_id){
											   echo $com->com_name;
										  }
									}
											   
									?>
                                  </td>
                                  <td>       
                                  	    <?php echo $apply_job->app_date; ?>
                                  </td>
                                  
                                  <td> 
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

                        
                        
                       





                   
                </div>
            </div>
        </div>
 

   

    </div><!-- End Contianer -->

