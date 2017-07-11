<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?><?php */?>
<!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">

            <!-- Small boxes (Stat box) -->
            <div class="row">	
                <div class="col-lg-12">
               		<span style="font-size:20px"> Sub Category Manager </span>
            	
                    <a style="margin-bottom:10px;" class="pull-right btn btn-primary" href="<?=site_url("Admin_controller/add_sub_category/");?>"><i class="glyphicon glyphicon-pencil"></i> New Sub-Category</a>
                </div>
                <div class="col-lg-12">
                    
                    <div class="box">
                    <div class="box-header">
<!--                      <h3 class="box-title">Manage Your Top Menu</h3>-->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                    
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Main Category</th>
                          <th>Category Name</th>
                          <th>Sub Category Name</th>

                           <th>Edit / Delete</th>
                     
                        </tr>
                      </thead>
                      <tbody>
                       <?php
                            $n = 1;
                            foreach($show_sub_category as $values):	
						?>
                        <tr>
                       
                            <?php 
							 echo '<td>'.$n.'</td>';
							?>
                            	
								   <?php
							 
						foreach($select_all_maincategory as $main){
						 		foreach($select_where_category as $value):
									if($value->main_id==$main->mai_id){
										if($value->cat_id==$values->cate_id){
                        	
                        	echo '<td>'.$main->name.'</td>';
										}
									}
							endforeach;
						}

						  ?>
                          		   <?php
							 
						foreach($select_all_maincategory as $main){
						 		foreach($select_where_category as $value):
									if($value->main_id==$main->mai_id){
										if($value->cat_id==$values->cate_id){
                        	
                        	echo '<td>'.$value->cat_name.'</td>';
										}
									}
							endforeach;
						}

						  ?>

								

							
							<?php	
								echo '<td>'.$values->sub_cat_name.'</td>';

								echo '<td>';
								
				
								echo anchor("Admin_controller/show_edit_sub_category/".$values->sub_cat_id,'<i class="glyphicon glyphicon-edit"></i>','title="Edit"').nbs(2);
								
					
						  ?>
                            
                                
                                <a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("Admin_controller/delete_sub_category/".$values->sub_cat_id);?>" style="color:red;" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
                           
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


<script src="<?php echo base_url();?>ad_library/js/jQuery-2.1.4.min.js"></script>
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