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
                <span style="font-size:20px"> Employee Manager </span>
                
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
                              <th>Employee Name</th>
                              <th>Image</th>
                              <th>Sex</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th>Address</th>
    
                              <th>Delete </th>
                         
                            </tr>
                          </thead>
                          <tbody>
                            
                              <?php
                                $n = 1;
                                foreach($show_employee as $values):
                                ?>
                                <tr>
                                <?php
                                    
                                    echo '<td>'.$n.'</td>';
                                    echo '<td>'.$values->emp_name.'</td>';
								?>
									<td><img class="my_table_image" src="<?php echo base_url();?>image/image_employee/<?php echo $values->emp_image;?>"></td>
                              
                                 <?php
                                    if($values->emp_sex==0)
									{
										echo '<td>Male</td>';
									}
									elseif($values->emp_sex==1)
									{
										echo '<td>Female</td>';	
									}
									else
									{
										echo '<td>Unlimited</td>';
									}
									
									//echo '<td>'.$values->emp_name.'</td>';
                                    echo '<td>'.$values->emp_phone.'</td>';
                                    echo '<td>'.$values->emp_email.'</td>';
                                    echo '<td>'.$values->emp_address.'</td>';
                                    
                                  
                                    echo '<td>';
                                    
                                    
                                    
                                    //echo anchor("admin_controller/show_edit_job/".$values->emp_id,'<i class="glyphicon glyphicon-edit"></i>','title="Edit"').nbs(2);
                              ?>
                              
                                    
                                    <a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("admin_controller/delete_employee/".$values->emp_id);?>" style="color:red;" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
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