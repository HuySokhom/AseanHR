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
                <span style="font-size:20px"> Highlight Manager </span>
                    <?php /*?><a style="margin-bottom:10px;" class="pull-right btn btn-primary" href="<?=site_url("admin_controller/add_highlight/");?>"><i class="glyphicon glyphicon-pencil"></i> New Highlight</a><?php */?>
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
                          <th>Highlight Name</th>
                          <th>Link</th>
                          <th>Image</th>
                          <th>Description</th>
                          <th>Edit</th>
                     
                        </tr>
                      </thead>
                   
                      <tbody>
                         <?php
                            $n = 1;
                            foreach($show_highlight as $values):
						?>
                        <tr>
                         <?php 
                               
                                echo '<td>'.$n.'</td>';
                                echo '<td>'.$values->hig_name.'</td>';
								 echo '<td>'.$values->hig_link.'</td>';
							?>
                            
								
                                <td><img class="my_table_image" src="<?php echo base_url();?>image/image_highlight/<?php echo $values->hig_image;?>"></td>
                                <?php
								echo '<td>'.$values->hig_description.'</td>';
								
								echo '<td>';
                                echo anchor("admin_controller/show_edit_highlight/".$values->hig_id,'<i class="glyphicon glyphicon-edit"></i>','title="Edit"').nbs(2);
						  ?>
                          
                                
                                <?php /*?><a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("admin_controller/delete_thumbnail/".$values->thu_id);?>" style="color:red;" title="Delete"><i class="glyphicon glyphicon-trash"></i></a><?php */?>
                                 </tr>
                                <?php
                                echo '</td>';
                              
                                $n++;
                            endforeach;
                          ?>
                        </tr>
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
	redirect("login_controller/login");
endif;
?><?php */?>