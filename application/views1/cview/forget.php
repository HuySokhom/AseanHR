<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>library/css/login-css.css"/>

<div class="container">
	<div class="row">
    	<div class="col-md-7 col-md-offset-2">
            
            		<div class="login-block" style="margin:0 auto !important; margin-bottom:20px !important; margin-top:20px !important;">
    <h1>Please enter your email</h1>
    <?php 
		if($this->session->flashdata("error")){
			echo $this->session->flashdata("error");
		}else{
			echo $this->session->flashdata("success");
			}
	?>
     <form action="<?php echo site_url('login_controller/act_forget'); ?>" method="post" enctype="multipart/form-data">
    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
    <input  class="login-block btn" type="submit" name="forget" value="Submit"> 
    </form>
</div>
        </div>
    
    
    
    </div>

</div>
