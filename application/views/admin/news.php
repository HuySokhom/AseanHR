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
                <span style="font-size:20px"> News Manager </span>
                    <a style="margin-bottom:10px;" class="pull-right btn btn-primary" href="<?=site_url("admin_controller/add_news/");?>"><i class="glyphicon glyphicon-pencil"></i> New News</a>
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
                          <th>News Name</th>
                          <th>Image</th>
                          <th>Date</th>
                          <th>Edit / Delete</th>
                     
                        </tr>
                      </thead>
                   
                      <tbody>
                         <?php
                            $n = 1;
                            foreach($show_news as $values):
						?>
                        <tr>
                         <?php 
                               
                                echo '<td>'.$n.'</td>';
                                echo '<td>'.$values->new_name.'</td>';
							?>
                            
								
                                <td><img class="my_table_image" src="<?php echo base_url();?>image/image_news/<?php echo $values->new_image;?>"></td>
                                <?php
								echo '<td>'.$values->new_date.'</td>';
								
								echo '<td>';
                                echo anchor("admin_controller/show_edit_news/".$values->new_id,'<i class="glyphicon glyphicon-edit"></i>','title="Edit"').nbs(2);
						  ?>
                          
                                
                                <a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("admin_controller/delete_news/".$values->new_id);?>" style="color:red;" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
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