<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?><?php */?>
<!-- Content Header (Page header) -->
     

        <!-- Main content -->
        <section class="content">

            <!-- Small boxes (Stat box) -->
            <div class="row">	
                <div class="col-lg-12">
                <span style="font-size:20px"> User Manager </span>
                
                     <div style="margin-bottom:10px; float:right;">
                        <input type="button" class="btn btn-primary"  data-toggle="modal" data-target="#newUser" value="New User" />
                      </div>
                
                  <?php /*?>  <a style="margin-bottom:10px;" class="pull-right btn btn-primary" href="<?=site_url("admin_controller/add_user/");?>"><i class="glyphicon glyphicon-pencil"></i> New Admin User</a><?php */?>
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
                          <th>User Name</th>
                          <th>Role</th>
                          <th>Email</th>
                          <th>Phone</th>
                          
                          <th>Edit </th>
                     
                        </tr>
                      </thead>
                      <tbody>
                       
                          <?php
                            $n = 1;
                            foreach($show_user as $values): 
						  ?>
                               <tr>
                           <?php
                                echo '<td>'.$n.'</td>';
                                echo '<td>'.$values->name.'</td>';
								if($values->role==0){
								echo '<td>Admin</td>';
								}else{
								echo '<td>User</td>';	
								}
								echo '<td>'.$values->email.'</td>';
								echo '<td>'.$values->phone.'</td>';
								echo '<td>';
								
								
						
				
							
								
								
                                //echo anchor("admin_controller/show_edit_user/".$values->use_id,'<i class="glyphicon glyphicon-edit"></i>','title="Edit"').nbs(2);
						  ?>
                          
                          		<a  data-toggle="modal" href="#<?php echo''.$values->use_id.''; ?>" title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
                                
                                <a onClick="return confirm('Are you sure you want to delete this!');" href="<?=site_url("admin_controller/delete_user/".$values->use_id);?>" style="color:red;" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
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
<!--add salary modal-->
<div id="newUser" class="modal fade" role="dialog">
  <div class="modal-dialog" style="color:#000;">

    		<form role="form" method="post" action="<?=site_url("admin_controller/insert_user");?>" enctype="multipart/form-data">
                <div class="modal-content">
                  <div class="modal-header" style="background:#3C8DBC;">
                    <button type="button" class="close"  data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:#fff;">New User</h4>
               
                    
                  </div>
                  <div class="modal-body">   
           	
                        <div class="form-group">
                            <label>User Name:</label>
                            <input value="" name="name" type="text" class="form-control form-req" required>
                        </div>
                    
                        <div class="form-group">
                            <label>Email:</label>
                            <input value="" name="email" type="email" class="form-control form-req"  required>
                        </div>
                         <div class="form-group">
                            <label>Password:</label>
                            <input value="" name="password" type="password" class="form-control form-req"  required>
                        </div>
                         <div class="form-group">
                            <label>Phone:</label>
                            <input value="" name="phone" type="text" class="form-control form-req"  required>
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input value="" name="address" type="text" class="form-control form-req"  required>
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
<!--end  salary modal-->

<!--edit  salary modal-->
<?php foreach($show_user as $edit):?>           

<div id="<?php echo''.$edit->use_id.''; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog" style="color:#000;">
  
  			   <form role="form" method="post" action="<?=site_url("admin_controller/edit_user/".$edit->use_id);?>" enctype="multipart/form-data">
                <div class="modal-content">
                  <div class="modal-header" style="background:#3C8DBC ;">
                    <button type="button" class="close"  data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:#fff;">Edit User</h4>
                  </div>
                  <div class="modal-body">   
                        <div class="form-group">
                            <label>User Name:</label>
                            <input value="<?=$edit->name;?>" name="name" type="text" class="form-control form-req"  />
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input value="<?=$edit->email;?>" name="email" type="email" class="form-control form-req"  required>
                        </div>
                         <div class="form-group">
                            <label>Password:</label>
                            <input value="" name="password" type="password" class="form-control form-req"  />
                        </div>
                         <div class="form-group">
                            <label>Phone:</label>
                            <input value="<?=$edit->phone;?>" name="phone" type="text" class="form-control form-req"  required>
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input value="<?=$edit->address;?>" name="address" type="text" class="form-control form-req"  required>
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
 <!--end edit edit modal--> 

       
        
        
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