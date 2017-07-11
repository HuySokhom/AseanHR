
​​​​​​<section class="content">
    <div class="row">
        <div class="col-md-12">
        	 <div class="box box-primary">
             	<?php foreach($get_contactus as $contact){ ?>
                <form role="form" action="<?=site_url('admin_controller/set_contact_us/'.$contact->cu_id);?>" method="post" enctype="multipart/form-data">
                   	<div class="box-body">
                       <div class="form-group">
                           <label for="exampleInputFile">Contact Us</label>
                           <textarea id="editor1" class="form-control" name="text" rows="10" cols="80" required><?=$contact->cu_text;?></textarea>
                       </div>
                        <div class="form-group">
                           <label for="exampleInputFile">Map</label>
                           <input type="text" name="map" class="form-control" value="<?=$contact->map;?>"/>
                       </div>
                   </div>
                    <div class="box-footer">
                       <button class="btn btn-primary" type="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href="<?=site_url('admin_controller/contact_us');?>">
                            <button class="btn btn-warning">Back</button>
                       </a>
                    </div>
                </form>
                <?php } ?>
            </div>
	   </div>
	</div>
</section>							
