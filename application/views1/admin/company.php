<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==3):
?><?php */?>

<style>

.my_table_image { width:50px; height:50px; border-radius:20%;}

</style>
<!-- Content Header (Page header) -->
       <section class="content">

            <!-- Small boxes (Stat box) -->
            <div class="row">	
                <div class="col-lg-12">
                <span style="font-size:20px"> Company Manager </span>
                    <a style="margin-bottom:10px;" class="pull-right btn btn-primary" href="<?=site_url("admin_controller/add_company/");?>"><i class="glyphicon glyphicon-pencil"></i> New Company</a>
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
                          <th>Image</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Industry</th>
                          <th>Type</th>
                          <th>Location</th>
                          <th>Status</th>
                          <th>Edit / Delete</th>
                     
                        </tr>
                      </thead>
                   
                      <tbody>
                         <?php
                            $n = 1;
                            foreach($show_company as $values):
						?>
                        <tr>
                         <?php 
                               
                                echo '<td>'.$n.'</td>';
                                echo '<td>'.$values->com_name.'</td>';
							?>
                            
								
								<td><img class="my_table_image" src="<?php echo base_url();?>image/image_company/<?php echo $values->com_image;?>"></td>
                                <?php
								echo '<td>'.$values->com_phone.'</td>';
								echo '<td>'.$values->com_email.'</td>';
								
								//echo industry
								foreach($show_industry as $ind){
									if($ind->ind_id == $values->industry_id){
										echo '<td>'.$ind->ind_name.'</td>';
									}
										
								}
								//end echo industry
								
								//echo type
								foreach($show_type as $typ){
									if($typ->typ_id == $values->type_id){
										echo '<td>'.$typ->typ_name.'</td>';
									}
									
								}
								//end echo type
								
								//echo location
								foreach($show_location as $loc){
									if($loc->loc_id == $values->loca_id){
										echo '<td>'.$loc->loc_name.'</td>';
									}
								}
								//end echo location
								
								
                                if($values->com_status==0)
								{
                                  echo'<td align="center">'.anchor("admin_controller/set_company_hide/".$values->com_id.'/1',img("library/images/enable.jpg"),'title="Click to Hide Company Logo "').'</td>';
                                } 
                                else
								{
									echo'<td align="center">'.anchor("admin_controller/set_company_hide/".$values->com_id.'/0',img("library/images/disable.jpg"),'title="Click to Show Company Logo"').'</td>';
                                }
                                            
                           
								
								
								echo '<td>';
                                echo anchor("admin_controller/show_edit_company/".$values->com_id,'<i class="glyphicon glyphicon-edit"></i>','title="Edit"').nbs(2);
						  ?>
                          
                                
                                <a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("admin_controller/delete_company/".$values->com_id);?>" style="color:red;" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
                        
                                <?php
                                echo '</td>';
                              
                                $n++;
                            endforeach;
                          ?>
                        </tr>
                      </tbody>
                    </table>
                  <?php /*?>  <?=$page_link;?><?php */?>
                </div><!-- /.box -->                            
           		 </div><!-- /.row (main row) -->
           		 </div>
            </div>

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
	redirect("login_controller/login");
endif;
?><?php */?>