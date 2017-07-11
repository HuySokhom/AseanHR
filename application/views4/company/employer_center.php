<?php
if($this->session->userdata("companyID")):
?>

<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet" />
<style>
.table th { background:#2980B9; color:#FFF; padding:15px 5px !important; text-align:center !important; border:1px solid #FFF !important;}
.table td { padding-top:12px !important; padding-bottom:2px !important; }
.left-company-profile-content a:hover{
	text-decoration:none;
}

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
                        <li class="selected"><a class="profile" href="<?=site_url("Companys/employer_center/");?>"><i class="fa fa-briefcase"></i>Job posted</a></li>
                        <li><a class="messages" href="<?=site_url("Companys/employee_apply_job/");?>"><i class="fa fa-list"></i>List of Applicant</a></li>
                        <?php /*?><li><a class="messages" href="<?=site_url("Companys/browse_employee_cv/");?>"><i class="fa fa-search-plus"></i>Browse Applicant CV</a></li><?php */?>
                        <li><a class="settings" href="<?=site_url("Companys/account_setting/");?>"><i class="icon-cog"></i>Account Settings</a></li>
                        <li><a class="logout" href="<?php echo base_url(); ?>index.php/login_controller/logout"><i class="icon-signout"></i>Logout</a></li>
                    </ul> 
            </div>
        </div>
        <!----------------End Content Left------------------>
        
        
        	
                <div class="left-company-profile-content">
                <br />
                	<h2>Employer Center</h2>
                    
                   <!-- <div class="alert alert-success">
                      <strong>Success!</strong> Indicates a successful or positive action.
                    </div>-->

                    
                   		
                        <a style="margin-bottom:10px; background:#0066FF; padding:10px 15px; color:#fff;" class="pull-right btn btn-primary" href="<?=site_url("Companys/add_job/");?>"><i class="glyphicon glyphicon-pencil"></i>  Post New Job</a>
					
                    
                 <div class="list-table-job">
                
					<table class="table table-striped table-bordered" cellspacing="0" width="100%">
                       
                              <thead>
                                <tr>
                                  
                                  
                                  <th>Job Title</th>
                                  <th>Number Of Hire</th>
                                  <th>Closing Date</th>
                                 <th>Status</th>
                                 <th>Renew</th>
                                 <th>Renew Date</th>
                                 <th>Expired Date</th>
                                  <th>Edit / Delete </th>
                             
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                                    $n = 1;
                                     foreach($show_job_list as $ecv): ?>
                                <tr>
                                <?php  
                                       
										
										if($ecv->job_image == ""){
											echo '<td>'.$ecv->job_name.'</td>';
										}else{
											echo '<td>'.$ecv->job_name.'<img src="'.base_url('image/alert_img/'.$ecv->job_image).'"</td>';
										}
										echo '<td  style="text-align:center;">'.$ecv->job_hire.'</td>';
										echo '<td>'.$ecv->job_closing_date.'</td>';
  
                                  ?>
                                  <td>
                                  	<?php	if($ecv->job_role==0){ ?>
                                        <span style="color:green;">Active</span>
                                    <?php }elseif($ecv->job_role==1) { ?>
                                        <span style="color:red;">Inactive</span>
                                    <?php } ?>
                                  </td>
                               
                                  <td>       
                                  	<?php	echo anchor("Companys/set_job_renew/".$ecv->job_id,img("library/css/renew.png"),'title="Click to Renew Job"'); ?>
                                  </td>
                                  <td>
                                  	<?php echo $ecv->job_posted_date; ?>
                                  </td>
                           <?php       
                             $var_one = strtotime(date('Y-m-d', strtotime($ecv->job_expire_day)));
							 $var_two = strtotime(date('Y-m-d'));
							    if($var_two > $var_one){
							?>
								  <td style="color:red;">
                                  
                                  	<?php echo $ecv->job_expire_day; ?>
                                  </td>
							<?php	} else { ?>
									<td>
                                  
                                  	<?php echo $ecv->job_expire_day; ?>
                                  </td>	  
							<?php	}  ?>
                           
                                  
                                  <td style="font-size:20px;">
                                  
                                  
                                  
                                <?php	echo anchor("Companys/show_copy_job/".$ecv->job_id,'<i class="icon-copy"></i>','title="Edit"').nbs(2);
								
								
								echo anchor("Companys/show_edit_job/".$ecv->job_id,'<i class="icon-edit"></i>','title="Edit"').nbs(2);
						  ?>
                          
                                
                                <a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("Companys/set_delete_job/".$ecv->job_id);?>" style="color:red;" title="Delete"><i class="icon-remove-sign"></i></a>
                                  </td>      
                   
                                        
                                     <?php
                                      
                                        
                                        $n++;
                                    endforeach;
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
    
    
<?php
if($this->session->flashdata('success_renew')){
?>
	<script>
    	 $(window).load(function(){
        $('#myModal_Success_Renewjob').modal('show');
    });
    </script>
<?php	
	}    
?>  
    
<!--Load Success Reset Password-->


<?php /*?>
<div id="myModal_Success_Renewjob" class="modal fade" role="dialog">
  <div class="modal-dialog" style="color:#000;">

    		
                <div class="modal-content">
                  <div class="modal-header" style="background:#3C8DBC;">
                    <button type="button" class="close"  data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:#fff;">Renew Job Alert</h4>
               
                    
                  </div>
                  <div class="modal-body"> 
                  
                         <?php echo $this->session->flashdata('success_renew');?>    

                    
                  </div>
                  <div class="modal-footer custom-default">

        			<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                  </div>
                </div>
                   

  </div>
</div>
<!--End Load Success Reset Password-->
<?php */?>    

<?php
else:
	redirect("Companys/login_employer");
endif;
?>