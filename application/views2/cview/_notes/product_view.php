
 
     <section class="align-center scrollable-menu-body">
          <!-- Small boxes (Stat box) -->
          <div class="row">
          <?php
		  $data = $this->View_model->show_product_view($this->session->userdata('id'));
          foreach($data as $product){
          ?>
            <div class="col-lg-3 col-md-4 col-xs-6">
              <!-- small box -->        
              <div class="small-box">
             
                <div class="inner">
                <a href="<?=site_url('view_controller/add/'.$product->pro_id)?>" class="my_add">
                <button type="submit" class="btn btn-default pic-box" id="love">
                  <img class="pic-box"  src="<?php echo base_url();?>image/image_product/<?php echo $product->pic; ?>">
    				<p><?php echo $product->pro_name_k; ?></p>
                    <p><?php echo $product->pro_name; ?></p>
                 </button> 
                 </a> 
                </div>
              </div>            
            
            </div><!-- ./col -->
            <?php } ?>      
          </div><!-- /.row -->
     </section>
        
<script>
$(document).ready(function(e){
       $(".my_add").click(function(){
		   var href = $(this).attr("href");
         $.ajax({
           type: "POST",
           url: href,
		   data: href,
		   success: function(result) {
              $('.table').html(result);
            }
 
         });
		 return false;
          //stop the actual form post !important!
 
      });
   });
</script> 
            
