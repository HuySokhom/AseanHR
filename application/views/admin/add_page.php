
​​​​​​<section class="content">
	
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

    <div class="row">
        <div class="col-md-12">
        	 <div class="box box-primary">
            <form role="form" action="<?=site_url('admin_controller/set_page');?>" method="post" enctype="multipart/form-data">
               <div class="box-body">
               	
                <div class="form-group">
                    <label>Main Category Name:</label>
                    
                    <select required name="main_id"  id='country' class="form-control">
                    	<option value="">-- Select Main Category --</option>
                        <?php foreach($show_maincategory as $main) {
                        
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
                   <label for="exampleInputFile">Name</label>
                   <input type="text" id="exampleInputFile"  class="form-control" name="pag_name" required>
               </div> 
               


               <div class="form-group">
                   <label for="exampleInputFile">Description</label>
                   <textarea id="editor1" class="form-control" name="pag_description" rows="10" cols="80" required></textarea>
               </div>
               
               <div class="form-group">
                   <input type="checkbox" id="select" name="pdf"> Click check box to upload image.
               </div>
               <div id="pdf">
                   <div class="form-group">
                       <label for="exampleInputFile">Image</label>
                       <input type="file" id="exampleInputFile" name="userfile[]" size="20">
                   </div>
                   
                   <!--<div class="form-group">
                       <label for="exampleInputFile">PDF FILE</label>
                       <input type="file" id="exampleInputFile" name="userfile[]">
                   </div>-->
               </div>
                </div>
            
                <div class="box-footer">
                   <button class="btn btn-primary" type="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="<?=site_url('admin_controller/page');?>">
                   		<button class="btn btn-warning">Back</button>
                   </a>
                </div>
            </form>
            </div>
	   </div>
	</div>
</section>	

<script>
	$(document).ready(function(e) {
		$("#pdf").hide();
        $("#select").change(function(){
			if(this.checked){
				$("#pdf").fadeIn('slow');
			}else{
				$("#pdf").fadeOut('slow');	
			}
		});
    });
	
</script>	
								
