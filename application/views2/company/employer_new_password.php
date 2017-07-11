<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>library/css/login-css.css"/>

<div class="container">
	<div class="row">
    	<div class="col-md-12">
            
            		<div class="login-block" style="margin:0 auto !important; margin-bottom:20px !important; margin-top:20px !important;">
    <h1>Please enter inter new password</h1>
    <?php 
		if($this->session->flashdata("error")){
			echo $this->session->flashdata("error");
		}
		if($this->session->flashdata("validation")){
			echo $this->session->flashdata("validation");
		}
	?>
     <form action="<?php echo site_url('login_controller/employer_new_pd/'.$this->uri->segment(3)); ?>" method="post" enctype="multipart/form-data">
    <input class="form-control" placeholder="Enter New Password..." name="news" type="password" autofocus>
    <input class="form-control"placeholder="Enter Confirm Password..." name="con" type="password" autofocus>
    <span style="color:#F00;">
		<?php echo validation_errors('<p class="error"></p>');?>
    </span>
    <input  class="login-block btn" type="submit" name="forget" value="Submit"> 
    </form>
</div>
        </div>
    
    
    
    </div>

</div>
