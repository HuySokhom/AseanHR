<style>

.my_table_image { width:50px; height:50px; border-radius:20%;}

</style>
        <!-- Main content -->
        <section class="content">
          <div class="row">
          
          	<div class="col-lg-12">
                <span style="font-size:20px"> Page Manager </span>
                    <a style="margin-bottom:10px;" class="pull-right btn btn-primary" href="<?=site_url("admin_controller/add_page/");?>"><i class="glyphicon glyphicon-pencil"></i> New Page</a>
            </div>
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!--<h3 class="box-title">Data Table of Products</h3>-->
                </div><!-- /.box-header -->
                <div class="box-body">


                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Page Name</th>
                        <th>Main & Category</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					    $n=1; 
					  	foreach($show_page as $row){
				      ?>
                      <tr>
                        <td><?=$n;?></td>
                        <td><?=$row->pag_name;?></td>
                       	<?php
							foreach($show_maincategory as $main_cate){
                        		foreach($show_category as $cate){
									if($main_cate->mai_id == $cate->main_id){
										if($cate->cat_id==$row->cate_or_random_id){
						?>
                        	<td><span style="color:rgb(0,166,90);"><?=$main_cate->name;?></span> => <span style="color:rgb(221,75,57);"><?=$cate->cat_name;?></span></td>
                        <?php
										}
									}
								}	
							}
							
		
						?>
                        <?php
                        	if($row->pag_image==""){
								echo "<td>Null</td>";
							}else{
						?> 
                        <td><img class="my_table_image" src="<?php echo base_url();?>image/image_page/<?php echo $row->pag_image;?>"></td>
                        <?php
							}
						?>

                     <?php
                        //if($row->slide_status == 1){
//									echo '<td align="center">'.anchor("admin_page/set_slide_status/".pen($row->slide_id).'/1',img("images/enable.png"),'title="Click to Disable Slideshow"').'</td>';
//								}else{
//									echo '<td align="center">'.anchor("admin_page/set_slide_status/".pen($row->slide_id).'/0',img("images/disable.png"),'title="Click to enable Slideshow"').'</td>';
//								}
						echo '<td>';
							  echo anchor("admin_controller/show_edit_page/".$row->pag_id,'<i class="glyphicon glyphicon-edit"></i>','title="Edit"').nbs(2);
                     ?>
                     	<a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("admin_controller/delete_page/".$row->pag_id);?>" style="color:red;" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
                      </tr>
                      <?php 
					  		echo '</td>';
					  			$n++;
							}
					  ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        
        <!-- jQuery 2.1.4 -->
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
    


