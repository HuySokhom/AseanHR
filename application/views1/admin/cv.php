<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?><?php */?>

<!-- Content Header (Page header) -->
     

        <!-- Main content -->
        <section class="content">

            <!-- Small boxes (Stat box) -->
            <div class="row">	
                <div class="col-lg-12">
                <span style="font-size:20px">All CV Manager </span>
                	<?php /*?><a style="margin-bottom:10px; margin-left:10px;background:red;border:1px solid white;" class="btn btn-primary" href="<?=site_url("admin_controller/job_delete/");?>"><i class="glyphicon glyphicon-off"></i> Deleted Jobs </a>
                    
                    <a style="margin-bottom:10px; background:orange; border:1px solid white;" class="btn btn-primary" href="<?=site_url("admin_controller/job_disable/");?>"><i class="glyphicon glyphicon-ban-circle"></i> Inactived Jobs </a>
                    
                    <a style="margin-bottom:10px; background:green; border:1px solid white;" class="btn btn-primary" href="<?=site_url("admin_controller/job_active/");?>"><i class="glyphicon glyphicon-ok"></i> Actived Jobs </a>
                    
                    <a style="margin-bottom:10px; background:blue; border:1px solid white;" class="btn btn-primary" href="<?=site_url("admin_controller/job/");?>"><i class="glyphicon glyphicon-list-alt"></i> All Jobs </a>
                    
                    <a style="margin-bottom:10px;" class="pull-right btn btn-primary" href="<?=site_url("admin_controller/add_job/");?>"><i class="glyphicon glyphicon-pencil"></i> New Job </a><?php */?>
                    <?php 
						foreach($select_status_cvadmin as $rows){ 
						  if($rows->cv_status_name == 1){
					?>
                    		<a style="margin-bottom:10px; background:#4FCB85; border:1px solid white;" class="btn btn-primary" href="<?=site_url("admin_controller/admin_cvpublic");?>"><i class="glyphicon glyphicon-list-alt"></i> Publice </a>
                    <?php }else{ ?>
                    		<a style="margin-bottom:10px; background:red; border:1px solid white;" class="btn btn-primary" href="<?=site_url("admin_controller/admin_un_cvpublic");?>"><i class="glyphicon glyphicon-list-alt"></i> Un-Publice </a>
                    <?php 
							}
						}
					?>
                </div>
                <div class="col-lg-12">
                
                <div class="box">
                <div class="box-header">
              <!--    <h3 class="box-title">Manage Your Main Category</h3>-->
                </div><!-- /.box-header -->
                <div class="box-body">
                
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>CV ID</th>
                          <th>CV Apply For</th>
                         
                          <th>Function</th>
                          
                          <th>Status</th>
                          
                         <!-- <th>Experience</th>
                          <th>Qualification</th>
                          <th>Language</th>-->
                          <th>View</th>
                        
                          <th>Edit / Delete </th>
                     
                        </tr>
                      </thead>
                      <tbody>
                        
                          <?php
                            $n = 1;
                            foreach($show_employee_cv as $values):
							?>
                            <tr>
                            <?php
                                
                                echo '<td>'.$n.'</td>';
								echo '<td>'.$values->cv_reference.'</td>';
								echo '<td>'.$values->apply_for.'</td>';
							?>
                           		 <td>
                                  <?php	foreach($show_function as $fun){
											if( $values->func_id == $fun->fun_id){
											  echo $fun->fun_name;	
											}
									    }
                                
								?>
                                  </td>
                                  
                            
                                  
                                
                                  <?php
                                if($values->status_admin_cv==1)
								{
                                  echo'<td align="center">'.anchor("admin_controller/set_cv_disable/".$values->cv_id.'/1',img("library/images/enable.jpg"),'title="Click to Close CV "').'</td>';
                                } 
                                else
								{
									echo'<td align="center">'.anchor("admin_controller/set_cv_disable/".$values->cv_id.'/0',img("library/images/disable.jpg"),'title="Click to Post CV"').'</td>';
                                }
                                            
                            ?>
                           
                            
                            	<td>
                                  <a target="_blank" href="<?=site_url("Pages/cv/".$values->cv_id);?>">Click to View CV</a>
                                  </td>
                                  
                                  
                                
                            <?php
								
								
						
							  	
							  
								echo '<td>';
								
								
								
								
								
                              //  echo anchor("admin_controller/show_edit_job/".$values->cv_id,'<i class="glyphicon glyphicon-edit"></i>','title="Edit"').nbs(2);
						  ?>
                          
                                
                                <a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("admin_controller/delete_cv/".$values->cv_id);?>" style="color:red;" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
                                            </tr>
                             <?php
                                echo '</td>';
                              
                                $n++;
                            endforeach;
                          ?>
                      </tbody>                   
                    </table>
                  <?php /*?>  <?=$page_link;?><?php */?>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
                </div><!-- /.box -->                            
            </div><!-- /.row (main row) -->
            

        </section><!-- /.content -->
 <script src="<?php echo base_url();?>ad_library/js/jquery-2.1.4.min.js"></script>
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
<?php /*?><?php
else:
	redirect("view_controller/login");
endif;
?><?php */?>