<?php /*?><?php
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?><?php */?>
<script type="text/javascript">
            $(document).ready(function() { 
                $("#country").change(function(){
                     /*dropdown post */
                    $.ajax({
                    url:"<?=site_url('admin_controller/buildDropmenu'); ?>",    
                    data: {id: $(this).val()},
                    type: "POST",
					  success: function(data){
	
							$("#location").html(data); 
						  
					  }  
                    });
                });
            });
</script>



<div class="col-md-12 box-1">
    <!-- general form elements disabled -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">Edit Product</h3>
            <span style="color:red; font-size:16px;"><?=$this->session->flashdata('error_name');?></span>
        </div><!-- /.box-header -->
        <div class="box-body">
        	<?php if($this->session->flashdata('errors')){ echo $this->session->flashdata('errors'); }?>
            <?php foreach($show_sub_category_for_edit as $product){
				
				?>
            <form role="form" method="post" action="<?=site_url("admin_controller/set_sub_category/".$product->sub_cat_id);?>" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label>Main Category Name:</label>
                    
                    <select name="main_id"  id='country' class="form-control">
                    	<option value="null">-- Select Main Category --</option>
                        <?php foreach($select_all_maincategory as $main) {
                        
				echo '<option value="'.$main->mai_id.'">'.$main->name.'</option>';	
						}?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Category Name:</label>
                    <select name="cate_id" id='location' class="form-control">
                    	<option value="">-- Select Category --</option>
                    </select>
                </div>
             
                <div class="form-group">
                    <label>Name</label>
                    <input name="sub_cat_name" type="text" class="form-control" value="<?=$product->sub_cat_name;?>" required />
                </div>
                

        
                
                <div class="form-group">
                    <input type="submit" value="Update Post" name="add" class="btn btn-primary" />
              
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