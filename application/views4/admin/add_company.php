<?php /*?><?php 
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?><?php */?>

<div class="col-md-12 box-1">
    <!-- general form elements disabled -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">Add New Company</h3>
            <span style="color:red; font-size:16px;"><?=$this->session->flashdata('error_name');?></span>
        </div><!-- /.box-header -->
        <div class="box-body">
        	<?php if($this->session->flashdata('errors')){ echo $this->session->flashdata('errors'); }?>
            <form role="form" method="post" action="<?=site_url("admin_controller/set_company");?>" enctype="multipart/form-data">
            	<div class="row">
                	<div class="col-lg-12">
   
                    	<div class="col-lg-6">
                        	<div class="form-group">
                                <label>Name</label>
                                <input name="name" type="text" class="form-control"  required />
                            </div>
                            <div class="form-group">
                                <label>Employee Number</label>
                                <input name="com_employee_num" type="text" class="form-control"  required />
                            </div>
                            <div class="form-group">
                                <label>Contact Person</label>
                                <input name="com_contact_person" type="text" class="form-control"  required />
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input name="com_phone" type="text" class="form-control"  required />
                            </div>
                            <div class="form-group">
                                <label>Fax (Optional)</label>
                                <input name="com_fax" type="text" class="form-control"   />
                            </div>
                             <div class="form-group">
                                <label>Email</label>
                                <input name="com_email" type="email" class="form-control"  required />
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input name="userfile[]" type="file"  />
                            </div>
                            
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>New Password</label>
                                <input name="com_password" type="password" class="form-control"  required />
                            </div>
                            <div class="form-group">
                                <label>Industry:</label>
                                <select name="indu_id" class="form-control">
								<?php
                                    foreach($show_industry as $ind):
                                    echo '<option value="'.$ind->ind_id.'">'.$ind->ind_name.'</option>';	
                                    endforeach;
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Type:</label>
                                <select name="type_id" class="form-control">
								<?php
                                    foreach($show_type as $type):
                                    echo '<option value="'.$type->typ_id.'">'.$type->typ_name.'</option>';	
                                    endforeach;
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Location:</label>
                                <select name="loca_id" class="form-control">
								<?php
                                    foreach($show_location as $loc):
                                    echo '<option value="'.$loc->loc_id.'">'.$loc->loc_name.'</option>';	
                                    endforeach;
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Website (Optional)</label>
                                <input name="com_website" type="text" class="form-control"  />
                             </div>
                              <div class="form-group">
                                <label>Address</label>
                                <input name="com_address" type="text" class="form-control"  required />
                            </div>
                            
                            
                        </div> <!--end col-6-->
                    </div><!--end col-12-->
                 </div>
                 <div class="row">
                    <div class="col-lg-12" style="padding-left:33px; padding-right:33px;">
                         <div class="form-group">
                                <label>Map (Optional)</label>
                                <input name="com_map" type="text" class="form-control" />
                         </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                                <label for="editor1">Description (Optional)</label>
                                <textarea id="editor1" class="form-control" name="editor1" rows="10" cols="80">
                                    
                                </textarea>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                        <input type="submit" value="Add Company" name="add" class="btn btn-primary" />
                         </div>
                    </div>
                </div> <!--end row-->
  
                
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</div>
<?php /*?><?php
else:
	redirect("login_controller/login");
endif;
?><?php */?>