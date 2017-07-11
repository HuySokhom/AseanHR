<?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?>
<div class="col-md-12 box-1">
    <!-- general form elements disabled -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">System Setting</h3>
            <span style="color:red; font-size:16px;"><?=$this->session->flashdata('error_name');?></span>
        </div><!-- /.box-header -->
        <div class="box-body">
        	<?php
							 
						foreach($show_setting as $set){
						 	
						?>
               		  <form action="<?=site_url('admin_controller/edit_setting/');?>" method="post" enctype="multipart/form-data"> 
                	


                <div class="form-group">
                    <label>Images Banner : Width 1920 Pixel - Height 384 Pixel</label>
                    <input name="userfile[]" type="file" />
                </div>
           
                <div class="form-group">
						<label for="editor1">Login Employee Text</label>
						<textarea id="editor1" class="form-control" name="login_employee_text" rows="10" cols="80">
                        	<?=$set->login_employee_text;?>
                        </textarea>
				</div>
                 <div class="form-group">
						<label for="editor1">Login Employer Text</label>
						<textarea id="editor2" class="form-control" name="login_employer_text" rows="10" cols="80">
                        	<?=$set->login_employer_text;?>
                        </textarea>
				</div>
                <div class="form-group">
						<label for="editor1">How to apply job</label>
						<textarea id="editor3" class="form-control" name="apply_job_text" rows="10" cols="80">
                        	<?=$set->apply_job_text;?>
                        </textarea>
				</div>
                              
                <div class="form-group">
                    <input type="submit" value="Update Setting" name="add" class="btn btn-primary" />
              
                </div>
            </form>
        <?php } ?>

        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</div>

<?php
else:
	redirect("view_controller/login");
endif;
?>