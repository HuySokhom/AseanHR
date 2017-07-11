<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?><?php */?>
<br />
<div class="col-md-12 box-1">
    <!-- general form elements disabled -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">Edit Main Category</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
        <?php foreach($edit_maincategory as $edeit){
				
		?>
				<?php echo form_open("admin_controller/edit_maincategory/".$edeit->mai_id);?>
					<!-- text input -->
					<div class="form-group">
						<label>Main Category Name:</label>
						<input value="<?=$edeit->name;?>" name="name" type="text" class="form-control form-req" placeholder="Enter Page Name..." required>
					</div>
                    <!-- text input -->
					<!--<div class="form-group">
						<label>Categories:</label>
						<select name="cate" class="form-control">
                        	<option value="">How to sell and buy</option>
                            <option value="">Customer Service</option>
                        </select>
					</div>-->
					<!-- text input -->
					
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