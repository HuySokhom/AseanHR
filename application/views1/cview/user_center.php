<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet" />

	<!--Data Table-->
	<script src="<?php echo base_url();?>ad_library/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>ad_library/js/dataTables.bootstrap.min.js"></script>
    <!--End Data Table-->
<style>
.table th { background:#2980B9; color:#FFF; padding:15px 5px !important; text-align:center !important; border:1px solid #FFF !important;}
.table td { padding-top:12px !important; padding-bottom:12px !important; }


</style>
    
    <div class="container">
    			    <!-----------content left------------------->
        <div class="left-company-profile">
        	<div class="company-profile">
            
                    <ul class="form">
                        <li class="selected"><a class="profile" href="<?=site_url("Pages/user_center/");?>"><i class="icon-paste"></i>CV Register</a></li>
                        <?php /*?><li><a class="messages" href="<?=site_url("Pages/cover_letter/");?>"><i class="icon-envelope-alt"></i>Cover Letters</a></li><?php */?>
                        <li><a class="messages" href="<?=site_url("Pages/employee_apply_job/");?>"><i class="icon-circle-arrow-down"></i>Applied Job</a></li>
                        <li><a class="settings" href="<?=site_url("Pages/account_setting/");?>"><i class="icon-cog"></i>Account Settings</a></li>
                        <li><a class="logout" href="<?php echo base_url(); ?>index.php/login_controller/logout"><i class="icon-signout"></i>Logout</a></li>
                    </ul>         
                
                
             </div>
         </div>
         
         
          <div class="left-company-profile-content">
                <br />
                	<h2>Employee Center</h2>
                   
                   		
                        <a style="margin-bottom:10px;" class="pull-right btn btn-primary" href="<?=site_url("Pages/cv_register/");?>"><i class="glyphicon glyphicon-pencil"></i> New CV Register</a>
                    
                        
                        <div class="list-table-job">
							<table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>CV Apply For</th>
                                 <!--<th>Company</th>-->
                                 <th>Function</th>
                                 <th>Status</th>
                                 <th>Refresh</th>
                                 <th>View</th>
                                  <th>Edit / Delete </th>
                             
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                                    $n = 1;
                                     foreach($show_employee_cv as $ecv): ?>
                                <tr>
                                <?php  
                                       
                                        echo '<td>'.$n.'</td>';
                                        echo '<td>'.$ecv->apply_for.'</td>';
                                         
                                        
                                       
        
                                   
                                  ?>
                              <?php /*?>    <td>
                                  <?php	foreach($show_company_all as $company){
											if( $ecv->comp_id == $company->com_id){
											  echo $company->com_name;	
											}
									    }
                                
								?>
                                  </td><?php */?>
                             
                                  <td>
                                  <?php	foreach($show_function as $fun){
											if( $ecv->func_id == $fun->fun_id){
											  echo $fun->fun_name;	
											}
									    }
                                
								?>
                                  </td>
                                  
                                
                                  <?php
                                if($ecv->status==0)
								{
                                  echo'<td align="center">'.anchor("Pages/set_cv_disable/".$ecv->cv_id.'/1',img("library/images/enable.jpg"),'title="Click to Close CV "').'</td>';
                                } 
                                else
								{
									echo'<td align="center">'.anchor("Pages/set_cv_disable/".$ecv->cv_id.'/0',img("library/images/disable.jpg"),'title="Click to Post CV"').'</td>';
                                }
                                            
                            ?>
                                  
                                  
                                   <td>       
                                  	<?php	echo anchor("Pages/set_cv_renew/".$ecv->cv_id,img("library/css/renew.png"),'title="Click to Refresh CV"'); ?>
                                  </td>
                                  
                                  
                                  
                                  
                                  
                                  <td>
                                  <a target="_blank" href="<?=site_url("Pages/cv/".$ecv->cv_id);?>">Click to View CV</a>
                                  </td>
                                  
                                  
                                  
                                  <td>
                                  
      <?php	echo anchor("Pages/show_edit_cv/".$ecv->cv_id,'<i class="icon-edit"></i>','title="Edit"').nbs(2);
						  ?>
                          
                                
                                <a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("Pages/delete_cv/".$ecv->cv_id);?>" style="color:red;" title="Delete"><i class="icon-remove-sign"></i></a>
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
 

   

    </div><!-- End Contianer -->

