<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==3):
?><?php */?>
<!-- Content Header (Page header) -->
        <section class="content">

            <!-- Small boxes (Stat box) -->
            <div class="row">	
                <div class="col-lg-12">
                <span style="font-size:20px"> Slide Show Manager </span>
                     <div style="margin-bottom:10px; float:right;">
                        <input type="button" class="btn btn-primary"  data-toggle="modal" data-target="#newContact" value="New Slide Show" />
                      </div>
                 </div>
                 <div class="col-lg-12">
                
                <div class="box">
              
                    <div class="box-body">
                    
                        <table id="example1" class="table table-bordered table-striped">
                    
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Slide Show Name</th>
                              <th>Image</th>
                              <th>URL</th>
                               <th>Edit / Delete</th>
                         
                            </tr>
                          </thead>
                       
                          <tbody>
                             <?php
                                $n = 1;
                                foreach($show_slideshow as $values):
                            ?>
                            <tr>
                            	 <?php 
                                   
                                    echo '<td>'.$n.'</td>';
                                    echo '<td>'.$values->name.'</td>';
                                 ?>
                                
                                    
                                    <td><img  style="width:100px; height:100px;" src="<?php echo base_url();?>image/image_slide/<?php echo $values->image;?>"></td>
                                 <?php
                                    echo '<td>'.$values->url.'</td>';
                                    
                                    echo '<td>';
                                
                                 ?>
                                    <a  data-toggle="modal" href="#<?php echo''.$values->sli_id.''; ?>" title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
                                    
                                    <a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("admin_controller/delete_slideshow/".$values->sli_id);?>" style="color:red;" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
                                   
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

    		<form role="form" method="post" action="<?=site_url("admin_controller/set_slideshow");?>" enctype="multipart/form-data">
                <div class="modal-content">
                  <div class="modal-header" style="background:#3C8DBC;">
                    <button type="button" class="close"  data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:#fff;">New Slide Show</h4>
               
                    
                  </div>
                  <div class="modal-body"> 
                  
                    		<div class="form-group">
                                <label>Name</label>
                                <input name="name" type="text" class="form-control"  required />
                            </div>
                            
                            <div class="form-group">
                                <label>Images</label>
                                <input name="userfile[]" type="file" required />
                            </div>
                            
                            <div class="form-group">
                                <label>URL</label>
                                <input name="url" type="text" class="form-control"  required />
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
<?php foreach($show_slideshow as $slide):?>           

<div id="<?php echo''.$slide->sli_id.''; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog" style="color:#000;">
  
  			   <form role="form" method="post" action="<?=site_url("admin_controller/set_slideshow/".$slide->sli_id);?>" enctype="multipart/form-data">
                <div class="modal-content">
                  <div class="modal-header" style="background:#3C8DBC ;">
                    <button type="button" class="close"  data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:#fff;">Edit Slide Show</h4>
                  </div>
                  <div class="modal-body">   

					   <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" value="<?=$slide->name;?>" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Images</label>
                            <input name="userfile[]" type="file" />
                        </div>
                        
                        <div class="form-group">
                            <label>URL</label>
                            <input name="url" type="text" class="form-control" value="<?=$slide->url;?>" required />
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