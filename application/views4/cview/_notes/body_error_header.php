<?php
if($this->session->userdata("userID")):
?>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper-custome"><!--wrapper-->

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>index.php/view_controller/home" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>P</b>OS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>POS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
         <nav class="navbar navbar-static-top" role="navigation">
        
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

     	<?php
		if($this->session->userdata("userID")&&$this->session->userdata("role")==0):?> 
        
        		  <!-- Control Sidebar Toggle Button -->
              <li>
               <a data-toggle="modal" data-target="#openHold">Open Hold</a>
              </li>     
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url();?>image/img_profile/<?php  echo $this->session->userdata("pic"); ?>" class="user-image" alt="User Image">
                  
                  <span class="hidden-xs"><?php  echo $this->session->userdata("fullname"); ?></span>
                </a>
                <ul class="dropdown-menu">
                        
       			  <li class="user-header">
                    <img src="<?php echo base_url();?>image/img_profile/<?php  echo $this->session->userdata("pic"); ?>" class="img-circle" alt="User Image">
                    <p>
                      <?php  echo $this->session->userdata("phone"); ?>
                      <small><?php  echo $this->session->userdata("email"); ?></small>
                    </p>
                  </li>
                  
                  <!-- Menu Body -->
               <?php /*?>   <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li><?php */?>
                  
                  <li class="user-footer custom-default">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>index.php/view_controller/profile" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>index.php/login_controller/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            
              <!-- Control Sidebar Toggle Button -->
              <li>
              
                <a href="<?php echo base_url(); ?>index.php/admin_controller/dashboard" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
       <?php    
	    elseif($this->session->userdata("userID")&&$this->session->userdata("role")==1): ?>
		     <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url();?>image/img_profile/<?php  echo $this->session->userdata("pic"); ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php  echo $this->session->userdata("fullname"); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="<?php echo base_url();?>image/img_profile/<?php  echo $this->session->userdata("pic"); ?>" class="img-circle" alt="User Image">
                    <p>
                      <?php  echo $this->session->userdata("phone"); ?>
                      <small><?php  echo $this->session->userdata("email"); ?></small>
                    </p>
                  </li>
                  <li class="user-footer custom-default">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>index.php/view_controller/profile" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>index.php/login_controller/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>

		<?php		
		endif;
		 ?>
                      
          </div>
        </nav>
      </header>


<!-- Modal Cancel -->
<div id="openHold" class="modal fade" role="dialog">
  <div class="modal-dialog" style="color:#000;">
 
    <!-- Modal content-->
<?php /*?>    <form action="<?=site_url('view_controller/add/'.$product->pro_id)?>" method="post"><?php */?>

    <div class="modal-content">
      <div class="modal-header" style="background:#376f6f;">
        <button type="button" class="close"  data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#fff;">Open Hold</h4>
   
        
      </div>
      <div class="modal-body">   
      	  
   
          <div class="form-group">
            <label for="paid">Click to bring on current sale(s)?</label>
            <div>
            <?php
          foreach($show_hold as $hold){
          ?>
          	<a href="<?=site_url('view_controller/add_hold/'.$hold->h_invo_id)?>" class="my_add_hold">
             <button type="submit" class="btn btn-default" data-dismiss="modal" style="margin:3px;">
             	<p>Reference No: <?php echo $hold->h_reference; ?></p>
                <p>Total: <?php echo $hold->h_total_amount; ?></p>
             </button>
             </a>
         <?php } ?>  
      
             	
            </div>
            
          </div>
         
   
      </div>
      <div class="modal-footer custom-default">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
<?php /*?></form>
<?php */?>
  </div>
</div>
<script>
$(document).ready(function(e){
       $(".my_add_hold").click(function(){
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
	
      <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper custome-height" style="margin-left:21px;">
  	<div class="col-lg-8 col-md-7 col-xs-7">
     
        
        
       
		<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      height:100px;
      margin: auto;
  }
 .carousel-control.left { margin-left: -30px;}
 .carousel-control.right { margin-right: -28px;}
 .carousel-control {width:15%;}
 .carousel-control {
    color: #376F6F !important;
	}
.scrollable-menu {
    height: auto;
    max-height: 390px;
	width:auto;
    overflow-x: hidden;
}

  

</style>

  


		<div class="btn-row">
			<section class="content">
            
            
            
    <div id="demo5" class="scroll-img">  
      <ul>
      <?php foreach($show_category as $cat) {
		   ?>
      

                 <li>
                    <a href="<?=site_url('view_controller/product_view/'.$cat->cat_id);?>" class="links">	 
                 		<button type="submit" class="btn btn-primary"><?php echo $cat->cat_name; ?></button>
                    </a>
                 </li>
        

	<?php } ?>

      </ul>
    </div>
    <div id="demo5-btn" class="text-center">
      <button class="btn"  id="demo5-backward"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> </button>
      <button class="btn" id="demo5-forward"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
    </div>


<script>
<?php header('Content-type: text/html; charset=utf-8'); ?>
$(document).ready(function(e) {
	e.preventDefault;
    $(".links").click(function(){
		var href = $(this).attr("href");
		$.ajax({
			type: "POST",
			url: href,
			data: href,
			 success: function(data) {
				 
			  $('#content').html(data);
			  
			  
            }
		});
		return false;
	});
	
});
</script>
<script>
$(function () {
  
  $('#demo5').scrollbox({
    direction: 'h',
    distance: 134
  });
  $('#demo5-backward').click(function () {
    $('#demo5').trigger('backward');
  });
  $('#demo5-forward').click(function () {
    $('#demo5').trigger('forward');
  });
 
});
</script>

            
        


                
            </section>
         </div>
         
      <!--   <div id="for_home">
         	 <h1 style="font-size:50px; color:#3c8dbc;">Welcome to POS</h1>
            <h1 style="font-size:36px; color:#376F6F;"> Please select menu above to start selling.</h1>       
         </div>-->
        
        <div id="content">
        	<?php
				//$data['get_product_view']=$this->View_model->show_product_view();
            	$this->load->view('cview/product_view');
			?>
        </div>
 
        
  	</div><!-- /.content-wrapper -->
  
		<script>
$(function () {
  
  $('#demo5').scrollbox({
    direction: 'h',
    distance: 134
  });
  $('#demo5-backward').click(function () {
    $('#demo5').trigger('backward');
  });
  $('#demo5-forward').click(function () {
    $('#demo5').trigger('forward');
  });
 
});
</script>

          
  		<div class="col-lg-4 col-md-5 col-xs-5 custome-height" style="background:#376F6F; color:#fff;">
  	<section class="content">
  		<h1 class="right-side-h1">Current Sale</h1>
    <!--	<table class="gridtable table table-custome" style="margin-top:30px;">
              	<thead>
                     <tr class="success">
                        <th style="width: 5%" >N&deg;</th>
                         <th style="width: 45%">Name</th>
                        <th style="width: 5%">Qty</th>
                       
                        <th style="width: 25%">Price</th>
                        <th style="width: 20%; padding:0;">&nbsp;</th>
                      </tr>
                 </thead>
                 <tbody>
                    <tr style="background:white; width:100%">
                        <td style="text-align:center;"><strong>Total</strong></td>
                        <td style="text-align:center; font-weight:bold; color:#0d648d;">$ 0.00</td>
                        <td style="text-align:center;"><strong></strong></td>
                        <td style="text-align:center;"><strong></strong></td>
                        <td style="text-align:center;"><strong></strong></td>
                	</tr>
             	</tbody>             
             </table>
    -->
       		<div class="table">
				 <?php
                 $this->load->view('cview/cart');
                 ?>         
			</div>
    </section>
  </div>

  </div>
  	</div>
 </body>

  
<?php
else:
	redirect("view_controller/login");
endif;
?>
 