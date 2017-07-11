<?php /*?><?php 
if($this->session->userdata("userID")&&$this->session->userdata("role")==0):
?><?php */?>

<div class="col-md-12 box-1">
    <!-- general form elements disabled -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">Add New Thumbnail</h3>
            <span style="color:red; font-size:16px;"><?=$this->session->flashdata('error_name');?></span>
        </div><!-- /.box-header -->
        <div class="box-body">
        	<?php if($this->session->flashdata('errors')){ echo $this->session->flashdata('errors'); }?>
            <form role="form" method="post" action="<?=site_url("admin_controller/set_highlight");?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Thumbnail Name</label>
                    <input name="name" type="text" class="form-control"  required />
                </div>
                
                <div class="form-group">
                    <label>Highlight Link</label>
                    <input name="link" type="text" class="form-control"  required />
                </div>
                
                <div class="form-group">
                    <label>Images</label>
                    <input name="userfile[]" type="file" required />
                </div>
                
                
                <div class="form-group">
                        <label for="editor1">Description</label>
                        <textarea id="editor1" class="form-control" name="editor1" rows="10" cols="80">
                            
                        </textarea>
                </div>
                
                <div class="form-group">
                    <input type="submit" value="Add Event" name="add" class="btn btn-primary" />
              
                </div>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</div>

<script>
	  $(function() {
		$( "#datepicker" ).datepicker({ format: 'yyyy/mm/dd' });
	  });
	  $(function() {
		$( "#datepicker2" ).datepicker({ format: 'yyyy/mm/dd' });
	  });
	   $(function() {
		$( "#datepicker3" ).datepicker({ format: 'yyyy/mm/dd' });
	  });
</script>  
<?php /*?><?php
else:
	redirect("login_controller/login");
endif;
?><?php */?>