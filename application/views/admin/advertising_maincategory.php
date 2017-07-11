<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==3):
?><?php */?>
<!-- Content Header (Page header) -->
        <section class="content">

            <!-- Small boxes (Stat box) -->
            <div class="row">	
                <div class="col-lg-12">
                <span style="font-size:20px"> Advertising Manager </span>
                     <div style="margin-bottom:10px; float:right;">
                        <input type="button" class="btn btn-primary"  data-toggle="modal" data-target="#newContact" value="New Advertising Main Category" />
                      </div>
                 </div>
                 <div class="col-lg-12">
                
                <div class="box">
              
                    <div class="box-body">
                    
                        <table id="example1" class="table table-bordered table-striped">
                    
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Advertising For </th>
                              <th>Image</th>
								<th>Link</th>
                               <th>Edit / Delete</th>
                         
                            </tr>
                          </thead>
                       
                          <tbody>
                             <?php
                                $n = 1;
                                foreach($show_advertising_maincategory as $values):
                            ?>
                            <tr>
                            	 <?php 
                                   
                                    echo '<td>'.$n.'</td>';
                           
                                 ?>
                                 <td>
                                 <?php
                                 	 foreach($show_maincategory as $main){
										if($values->adv_maincategory_id  == $main->mai_id){
											echo $main->name;
										}	 
									 }
                                 ?>
                                 </td>
                                
                                
                                    
                                 <td><img  style="width:100px; height:100px;" src="<?php echo base_url();?>image/image_advertising_maincategory/<?php echo $values->adv_main_image;?>">
                                 </td>
                                    
                                 <td>
                                 	<?php echo $values->adv_main_url;?>
                                 </td>
                                 
                                 <?php

                                    
                                    echo '<td>';
                                
                                 ?>
                                    <a  data-toggle="modal" href="#<?php echo''.$values->adv_main_id.''; ?>" title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
                                    
                                    <a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("admin_controller/delete_advertising_maincategory/".$values->adv_main_id);?>" style="color:red;" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
                                   
                                  <?php
                                    echo '</td>';
                                  
                                    $n++;
                                endforeach;
                             	 ?>
                            </tr>
                          </tbody>
                        </table>
                        
                     </div>
               
                </div><!-- /.box -->                            
            </div><!-- /.row (main row) -->

        </section><!-- /.content -->
 
 
 <style>

.custom-default .btn-default {
    background-color: #3C8DBC !important;
	color:#fff !important;
	padding: 8px 30px !important;
}

.custom-default .btn-default:hover {
    background-color: #163445 !important;
}




</style>        
        
 <!--------------------------------------------------------add slide show modal----------------------------------------------->
<div id="newContact" class="modal fade" role="dialog">
  <div class="modal-dialog" style="color:#000;">

    		<form role="form" method="post" action="<?=site_url("admin_controller/set_advertising_maincategory");?>" enctype="multipart/form-data">
                <div class="modal-content">
                  <div class="modal-header" style="background:#3C8DBC;">
                    <button type="button" class="close"  data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:#fff;">New Advertising</h4>
               
                    
                  </div>
                  <div class="modal-body"> 
                  
                    		<div class="form-group">
                                    <label>Advertising For</label>
                                    <select name="adv_maincategory_id" class="form-control">
                                       <?php
											foreach($show_maincategory as $values):
											echo '<option value="'.$values->mai_id.'">'.$values->name.'</option>';	
											endforeach;
										?>
                                    </select>
                            </div>
                            
                            <div class="form-group">
                                <label>URL</label>
                                <input name="adv_url" type="text" class="form-control"  required />
                            </div>
                            
                            <div class="form-group">
                                <label>Images</label>
                                <input name="userfile[]" type="file" required />
                            </div>
                            

                            
                    
                  </div>
                  <div class="modal-footer custom-default">
                              
                     <button type="submit" class="btn btn-default" <?php /*?>data-toggle="modal" data-target="#openHold"  data-dismiss="modal"<?php */?> >Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                  </div>
                </div>
            </form>         

  </div>
</div>
<!------------------------------------------------end  slide show modal------------------------------------------------------>
       
<!------------------------------------------------edit  slide show modal----------------------------------------------------->
<?php foreach($show_advertising_maincategory as $slide):?>           

<div id="<?php echo''.$slide->adv_main_id.''; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog" style="color:#000;">
  
  			   <form role="form" method="post" action="<?=site_url("admin_controller/set_advertising_maincategory/".$slide->adv_main_id);?>" enctype="multipart/form-data">
                <div class="modal-content">
                  <div class="modal-header" style="background:#3C8DBC ;">
                    <button type="button" class="close"  data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:#fff;">Edit Advertising</h4>
                  </div>
                  <div class="modal-body">   

					   <div class="form-group">
                            <label>Job Status</label>
                            <select name="adv_maincategory_id" class="form-control">

                       <?php
                        	foreach($show_maincategory as $main):
								if($main->mai_id==$slide->adv_maincategory_id){
                        	echo '<option selected value="'.$main->mai_id.'">'.$main->name.'</option>';	
								}
								else{
								
                        	echo '<option value="'.$main->mai_id.'">'.$main->name.'</option>';	
								}
							endforeach;
						?>
							</select>
                            
                        </div>

                        <div class="form-group">
                            <label>URL</label>
                            <input name="adv_url" type="text" class="form-control" value="<?=$slide->adv_main_url;?>" required />
                        </div>
                            
                        <div class="form-group">
                            <label>Images</label>
                            <input name="userfile[]" type="file" />
                        </div>

                      
                  </div>
                  <div class="modal-footer custom-default">
                              
                     <button type="submit" class="btn btn-default" <?php /*?>data-toggle="modal" data-target="#openHold"  data-dismiss="modal"<?php */?> >Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                  </div>
                </div>
            </form>

  </div>
</div>     
   <?php endforeach; ?>
 <!---------------------------------------------------end edit slide show modal---------------------------------------------> 
        
        
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