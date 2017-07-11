<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?><?php */?>

<style>

.my_table_image { width:50px; height:50px; border-radius:20%;}

</style>
<!-- Content Header (Page header) -->
     

        <!-- Main content -->
        <section class="content">

            <!-- Small boxes (Stat box) -->
            <div class="row">	
                <div class="col-lg-12">
                <span style="font-size:20px"> Employee Applied Job Manager </span>
                
                    <?php /*?><a style="margin-bottom:10px;" class="pull-right btn btn-primary" href="<?=site_url("admin_controller/add_job/");?>"><i class="glyphicon glyphicon-pencil"></i> New Job </a><?php */?>
                    
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
                              <th>Company Name</th>
                              <th>Job Name</th>
                              <th>Employee Name</th>
                              <th>Closing Date</th>
                              <th>Applied Date</th>
  
                         
                            </tr>
                          </thead>
                          <tbody>
                            
                              <?php
                                $n = 1;
                                foreach($show_employee_apply_job_list as $values):
                                ?>
                                <tr>
                                <?php
                                    
                                    echo '<td>'.$n.'</td>';

								?>
                               
									<td>
                                   <?php 	
								   foreach($show_all_job as $all_job){
									   if($values->jobs_id==$all_job->job_id){
									      foreach($show_all_company as $all_com){
										     if($all_job->comp_id==$all_com->com_id){
											   echo $all_com->com_name;
										    }
									      }
									   }
								   }
								   ?> 
                                    </td>
  									<td>
                                   <?php 	
								   foreach($show_all_job as $all_job){
									   if($values->jobs_id==$all_job->job_id){
									     
											   echo $all_job->job_name;
										
									   }
								   }
								   ?>
                                    </td>
                                    <td>
                                   <?php 	
								   foreach($show_all_employee as $all_emp){
									   if($values->employee_id==$all_emp->emp_id){
									     
											   echo $all_emp->emp_name;
										
									   }
								   }
								   ?>
                                    </td>
                                
								     <td>
                                    <?php 	
								   foreach($show_all_job as $all_job){
									   if($values->jobs_id==$all_job->job_id){
									     
											   echo $all_job->job_closing_date;
										
									   }
								   }
								   ?>
                                    </td>
                                    <td>
                                    	<?php echo $values->app_date; ?>
                                    </td>
                              

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