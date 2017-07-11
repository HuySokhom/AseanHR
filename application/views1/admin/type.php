<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?><?php */?>
<!-- Content Header (Page header) -->
     

        <!-- Main content -->
        <section class="content">

            <!-- Small boxes (Stat box) -->
            <div class="row">	
                <div class="col-lg-12">
                <span style="font-size:20px"> Type Manager </span>
                	
                 
                    
                     <div style="margin-bottom:10px; float:right;">
                        <input type="button" class="btn btn-primary"  data-toggle="modal" data-target="#newType" value="New Type" />
                      </div>
           
                </div>
                
                <div class="col-lg-12">
                
                    <div class="box">
    
                        <div class="box-body">
                        
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Type Name</th>
                                 
                                  <th>Edit / Delete </th>
                             
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                                    $n = 1;
                                    foreach($show_type as $values): ?>
                                <tr>
                                <?php  
                                       
                                        echo '<td>'.$n.'</td>';
                                        echo '<td>'.$values->typ_name.'</td>';
                                        
                                        
                                        echo '<td>';
        
                                   
                                  ?>
                                  
                                        <a  data-toggle="modal" href="#<?php echo''.$values->typ_id.''; ?>" title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
                                        
                                        <a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("admin_controller/delete_type/".$values->typ_id);?>" style="color:red;" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
                                        
                                     <?php
                                        echo '</td>';
                                        
                                        $n++;
                                    endforeach;
                                  ?>
                                  </tr>
                              </tbody>
                            </table>
                           
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
            	</div><!-- /.col -->
          	</div><!-- /.row -->
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
<!--add type modal-->
<div id="newType" class="modal fade" role="dialog">
  <div class="modal-dialog" style="color:#000;">

    		<form role="form" method="post" action="<?=site_url("admin_controller/insert_type");?>" enctype="multipart/form-data">
                <div class="modal-content">
                  <div class="modal-header" style="background:#3C8DBC;">
                    <button type="button" class="close"  data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:#fff;">New Type</h4>
               
                    
                  </div>
                  <div class="modal-body">   
           	
                       <div class="row">
        					<div class="col-md-12">
                            		<div class="form-group">
                                        <label>Type Name</label>
                                        <input name="name" type="text" class="form-control" required />
                                   </div>  
                            </div>
                            
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
<!--end  type modal-->

<!--edit  type modal-->
<?php foreach($show_type as $type):?>           

<div id="<?php echo''.$type->typ_id.''; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog" style="color:#000;">
  
  			   <form role="form" method="post" action="<?=site_url("admin_controller/edit_type/".$type->typ_id);?>" enctype="multipart/form-data">
                <div class="modal-content">
                  <div class="modal-header" style="background:#3C8DBC ;">
                    <button type="button" class="close"  data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:#fff;">Edit Type</h4>
                  </div>
                  <div class="modal-body">   
                       <div class="row">
        					<div class="col-md-12">
                            		<div class="form-group">
                                        <label>Type Name</label>
                                        <input value="<?=$type->typ_name;?>" name="name" type="text" class="form-control" required />
                                   </div>  
                            </div>
                            
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
 <!--end edit type modal--> 



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