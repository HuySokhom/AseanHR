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
            <h3 class="box-title">Add New Sub Category</h3>
            <span style="color:red; font-size:16px;"><?=$this->session->flashdata('error_name');?></span>
        </div><!-- /.box-header -->
        <div class="box-body">
        	<?php if($this->session->flashdata('errors')){ echo $this->session->flashdata('errors'); }?>
            <form role="form" method="post" action="<?=site_url("admin_controller/set_sub_category");?>" enctype="multipart/form-data">
               <?php /*?> <label>Main Category & Category Name:</label>
                <select name="cate_id" class="form-control">
                        <?php
							foreach($select_all_maincategory as $main){
						 		foreach($show_category_pro as $value):
									if($value->main_id==$main->mai_id){
		
                        	echo '<option value="'.$value->cat_id.'">'.$main->mai_name.'-->'.$value->cat_name.'</option>';	
										
									}
							endforeach;
						
							}
								?>
                 </select><?php */?>
         
                <div class="form-group">
                    <label>Main Category Name:</label>
                    
                    <select required name="main_id"  id='country' class="form-control">
                    	<option value="">-- Select Main Category --</option>
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
            <?php /*?>     <div class="form-group">
                    <label>Name Khmer</label>
                    <input name="name_k" type="text" class="form-control" placeholder="Enter product name khmer..." required />
                </div><?php */?>
                <div class="form-group">
                    <label>Sub-Category Name</label>
                    <input name="sub_cat_name" type="text" class="form-control" placeholder="Enter Sub Category Title..." required />
                </div>
                

                

             
             
                
                <div class="form-group">
                    <input type="submit" value="Add Sub Category" name="add" class="btn btn-primary" />
              
                </div>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</div>
<?php /*?>
<?php
else:
	redirect("view_controller/login");
endif;
?><?php */?>