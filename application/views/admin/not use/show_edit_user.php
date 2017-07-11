<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?><?php */?>
<br />
<div class="col-md-12 box-1">
    <!-- general form elements disabled -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">Edit User</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
        <?php foreach($edit_user as $edeit){
				
		?>
				<?php echo form_open("admin_controller/edit_user/".$edeit->use_id);?>
					<!-- text input -->
					<div class="form-group">
						<label>User Name:</label>
						<input value="<?=$edeit->name;?>" name="name" type="text" class="form-control form-req"  />
					</div>
                    <div class="form-group">
						<label>Email:</label>
						<input value="<?=$edeit->email;?>" name="email" type="email" class="form-control form-req"  required>
					</div>
                     <div class="form-group">
						<label>Password:</label>
						<input value="" name="password" type="password" class="form-control form-req"  />
					</div>
                     <div class="form-group">
						<label>Phone:</label>
						<input value="<?=$edeit->phone;?>" name="phone" type="text" class="form-control form-req"  required>
					</div>
                    <div class="form-group">
						<label>Address:</label>
						<input value="<?=$edeit->address;?>" name="address" type="text" class="form-control form-req"  required>
					</div>
										
					
					
					<div class="form-group">
						<input type="submit" value="Submit" name="add" class="btn btn-primary" />
					</div>
				</form>
           <?php } ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</div>
<?php /*?><?php
else:
	redirect("view_controller/login");
endif;
?><?php */?>