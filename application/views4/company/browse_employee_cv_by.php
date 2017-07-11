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
    	<div class="row">
        	<div class="col-lg-12">
            	<div class="col-lg-3">
                    <ul class="form">
                       <li><a class="profile" href="<?=site_url("Companys/employer_center/");?>"><i class="fa fa-briefcase"></i>Job posted</a></li>
                        <li><a class="messages" href="<?=site_url("Companys/employee_apply_job/");?>"><i class="fa fa-list"></i>List of employee</a></li>
                        <li class="selected"><a class="messages" href="<?=site_url("Companys/browse_employee_cv/");?>"><i class="fa fa-search-plus"></i>Browse Employee CV</a></li>
                        <li><a class="settings" href="<?=site_url("Companys/account_setting/");?>"><i class="icon-cog"></i>Account Settings</a></li>
                        <li><a class="logout" href="<?php echo base_url(); ?>index.php/login_controller/logout"><i class="icon-signout"></i>Logout</a></li>
                    </ul>         
                </div>
                <div class="col-lg-9">
                <br />
                	<div class="col-lg-12">
                    	<div class="col-lg-5">
                        	<h2>Browse Employee CV</h2> 
                            
                        </div>
                        <div class="col-lg-7">
                        	<form action="<?=site_url('Companys/browse_employee_cv_by');?>" method="post" enctype="multipart/form-data">
                              <div class="col-lg-7">
                                Function Name
                                <select class="form-control" name="func_id" required>
                                	
                                	<?php 
                                        foreach($show_function as $fun_search){
                                            if($fun_search->fun_id == $this->session->flashdata('session_employee_cv')){
                                                echo '<option selected value="'.$fun_search->fun_id.'">'.$fun_search->fun_name.'</option>';
                                            }else{
                                                echo '<option value="'.$fun_search->fun_id.'">'.$fun_search->fun_name.'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                              </div>
        
        
                              <div class="col-lg-5 " style="margin-top:15px;">
                                <label></label>
                                <input type="submit" class="btn btn-block btn-primary" value="Ok">
                              </div>
                              </form>
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
                        
                     
                  
                    <div class="col-lg-12 table-responsive my_custom_serach_box">
					<table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Employee Name</th>
                                  <th>Applying For</th>
                                  <th>Current Position</th>
                                  <th>Function</th>
                                  <th>View CV</th>

                             
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                                    $n = 1;
                                     foreach($show_all_employee_cv_where as $cv){
										foreach($show_all_employee as $employee){
											if( $cv->empl_id == $employee->emp_id){
							?>
                                <tr>
                                <?php  
                                       
                                        echo '<td>'.$n.'</td>';
                                        echo '<td>'.$employee->emp_name;'</td>';
										
										echo '<td>'.$cv->ecv_apply_for;'</td>';
										echo '<td>'.$cv->ecv_current_position 	;'</td>';
  
                                  ?>
    							<td>
                                <?php	foreach($show_function as $fun){
											if( $cv->func_id == $fun->fun_id){
											  echo $fun->fun_name;	
											}
									    }
                                
								?>
                                </td>


                                 <td>
                                 	<a target="_blank" href="<?php echo base_url(); ?>image/image_cv_register/<?php echo $cv->ecv_image;?>">click to open</a>
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

