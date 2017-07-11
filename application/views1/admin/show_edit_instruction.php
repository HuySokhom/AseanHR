
​​​​​​<section class="content">
    <div class="row">
        <div class="col-md-12">
        	 <div class="box box-primary">
             	<?php foreach($get_instruction as $contact){ ?>
                <form role="form" action="<?=site_url('admin_controller/set_instruction/'.$contact->ins_id);?>" method="post" enctype="multipart/form-data">
                   	<div class="box-body">
                       <div class="form-group">
                           <label for="exampleInputFile">Instruction</label>
                           <textarea id="editor1" class="form-control" name="ins_description" rows="10" cols="80" required><?=$contact->ins_description;?></textarea>
                       </div>
                        
                   </div>
                    <div class="box-footer">
                       <button class="btn btn-primary" type="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href="<?=site_url('admin_controller/instruction');?>">
                            <button class="btn btn-warning">Back</button>
                       </a>
                    </div>
                </form>
                <?php } ?>
            </div>
	   </div>
	</div>
</section>							
