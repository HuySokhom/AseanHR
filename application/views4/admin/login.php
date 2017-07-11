    <link rel="stylesheet" href="<?php echo base_url();?>library/bootstrap/css/fonts-googleapis.css">
    <link rel="stylesheet" href="<?php echo base_url();?>library/css/style.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>library/css/login.css"/>
<div class="login-block">
    <h1>Login Admin</h1>
    <?php if($this->session->flashdata('error')){
			echo $this->session->flashdata('error');
	}?>
    
    <form action="<?php echo site_url('login_controller/login_admin'); ?>" method="post" enctype="multipart/form-data">
    <input type="email" value="" placeholder="Username" id="username" name="email"/>
    <input type="password" value="" placeholder="Password" id="password" name="password" />
<!--    <button type="submit" name="login_admin">Submit</button>-->
    <input type="submit" name="login_admin" value="Login" id="login"> 
<!--    <a href="<?=site_url();?>">Back</a>-->
    </form>
</div>