<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?><?php */?>

<!-- Content Header (Page header) -->
     

        <!-- Main content -->
        <section class="content">

            <!-- Small boxes (Stat box) -->
            <div class="row">	
                <div class="col-lg-12">
                <span style="font-size:20px">All Job Manager </span>
                	<a style="margin-bottom:10px; margin-left:10px;background:red;border:1px solid white;" class="btn btn-primary" href="<?=site_url("admin_controller/job_delete/");?>"><i class="glyphicon glyphicon-off"></i> Deleted Jobs </a>
                    
                    <a style="margin-bottom:10px; background:orange; border:1px solid white;" class="btn btn-primary" href="<?=site_url("admin_controller/job_disable/");?>"><i class="glyphicon glyphicon-ban-circle"></i> Inactived Jobs </a>
                    
                    <a style="margin-bottom:10px; background:green; border:1px solid white;" class="btn btn-primary" href="<?=site_url("admin_controller/job_active/");?>"><i class="glyphicon glyphicon-ok"></i> Actived Jobs </a>
                    
                    <a style="margin-bottom:10px; background:blue; border:1px solid white;" class="btn btn-primary" href="<?=site_url("admin_controller/job/");?>"><i class="glyphicon glyphicon-list-alt"></i> All Jobs </a>
                    <?php 
						foreach($select_status_admin as $rows){ 
						  if($rows->status == 1){
					?>
                    		<a style="margin-bottom:10px; background:#4FCB85; border:1px solid white;" class="btn btn-primary" href="<?=site_url("admin_controller/admin_public");?>"><i class="glyphicon glyphicon-list-alt"></i> Publice </a>
                    <?php }else{ ?>
                    		<a style="margin-bottom:10px; background:red; border:1px solid white;" class="btn btn-primary" href="<?=site_url("admin_controller/admin_un_public");?>"><i class="glyphicon glyphicon-list-alt"></i> Un-Publice </a>
                    <?php 
							}
						}
					?>
                    
                    <a style="margin-bottom:10px;" class="pull-right btn btn-primary" href="<?=site_url("admin_controller/add_job/");?>"><i class="glyphicon glyphicon-pencil"></i> New Job </a>
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
                          <th>Job ID</th>
                          <th>Job Title</th>
                          <th>Company</th>
                          <!--<th>Function</th>
                          <th>Location</th>-->
                         <!-- <th>Experience</th>
                          <th>Qualification</th>
                          <th>Language</th>-->
                          <th>Status</th>
                          <th>Action </th>
                          <th>Closing Date</th>
                        <th>Expired Date</th>
                         
                     
                        </tr>
                      </thead>
                      <tbody>
                        
                          <?php
                            $n = 1;
                            foreach($show_job as $values):
							?>
                            <tr>
                            <?php
                                
                                echo '<td>'.$n.'</td>';
								echo '<td>'.$values->job_reference.'</td>';
								echo '<td>'.$values->job_name.'</td>';
								echo '<td>'.$values->com_name.'</td>';
								//echo '<td>'.$values->fun_name.'</td>';
								//echo '<td>'.$values->loc_name.'</td>';          
                            
								//echo '<td>'.$values->job_experience.'</td>';
								//echo '<td>'.$values->job_qualification.'</td>';
								//echo '<td>'.$values->job_language.'</td>';
							  if($values->job_status_admin==0)
								{
								  echo'<td align="center">'.anchor("admin_controller/set_job_disable/".$values->job_id.'/0',img("library/images/disable.jpg"),'title="Click to Active Job"').'</td>';
                                } 
                                elseif($values->job_status_admin==1)
								{
								  echo'<td align="center">'.anchor("admin_controller/set_job_disable/".$values->job_id.'/1',img("library/images/enable.jpg"),'title="Click to Disable Job"').'</td>';
                                }
								echo '<td>';
							?>
                            	<a href="<?=site_url("pages/job/".$values->job_id);?>" style="color:blue;" title="View" target="_blank"><i class="glyphicon glyphicon-eye-open"></i></a>
								
                                <?php
								
								echo anchor("admin_controller/show_copy_job/".$values->job_id,'<i class="glyphicon glyphicon-file"></i>','title="Copy"').nbs(2);
								
                                echo anchor("admin_controller/show_edit_job/".$values->job_id,'<i class="glyphicon glyphicon-edit"></i>','title="Edit"').nbs(2);
						?>
							 <a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("admin_controller/delete_job/".$values->job_id);?>" style="color:red;" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
                             	</td>
                        <?php	
								echo '<td>'.$values->job_closing_date.'</td>';
								
							 $var_one = strtotime(date('Y-m-d', strtotime($values->job_expire_day)));
							 $var_two = strtotime(date('Y-m-d'));
							    if($var_two > $var_one){
								    echo '<td style="color:red;">'.$values->job_expire_day.'</td>';
								} else {
									echo '<td>'.$values->job_expire_day.'</td>';	  
								}
							  	
						  ?>
                                            </tr>
                             <?php
                              
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