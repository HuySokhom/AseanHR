


            
<style>

.myTextEditor img {display: block;
max-width: 100%;
height: auto;} 

</style>


<div class="container">
    <!-----------content left------------------->
    <div class="login-container myTextEditor">
    	<div style="padding-left:5px;">
            <?php
				    foreach($show_setting as $set){
						
						echo $set->login_employee_text;
						}
				   
				    ?>
        </div>
    </div>
    <!----------------End Content Left------------------>
    
    <!-------------Recruitment Right------------------->
    <div class="panel-left-login" style="margin:15px 0px;">
    
    
    	
      	  <input type="checkbox" id="employer" name="check" value="employer"/><span style="font-size:16px; color:red;"> If you want to login as employer, pleack select check box.</span>
      
    
    
    	<section id="content">
            <form action="<?php echo site_url('login_controller/login_employee'); ?>" method="post" enctype="multipart/form-data">
                <h1>Login Employee</h1>
                
    <?php if($this->session->flashdata('error')){
			echo $this->session->flashdata('error');
		}
		if($this->session->flashdata('validation')){
			echo $this->session->flashdata('validation');
		}
		if($this->session->flashdata("success-register")){
           echo $this->session->flashdata("success-register");
        }
	?>
                
                <div>
                	<input type="hidden" value="<?=$this->code;?>" name="check_access" />
                    <input placeholder="E-mail" name="email" type="text" id="username" autofocus>
                    
                </div>
                <div>
                   
                    <input placeholder="Password" name="password" type="password" id="password" >
                </div>
                <div>
                	<input type="submit" name="login_employee" value="Login">
                    
                    <a href="<?=site_url('login_controller/forget');?>">Lost your password?</a>
                    <a href="<?php echo site_url('Pages/register'); ?>">Register</a>
                </div>
            </form>
            <a href="<?=site_url('login_controller/facebook_request');?>">
            <img class="img-responsive" src="<?=base_url('image/fac1.png');?>" style="border-radius:5px; height:50px; width:80%; margin-bottom:15px;">
            </a>
        </section>
    </div>
    <!-------------End Recruitment Right------------------->
</div>


   <style>
   	 #contain{
		display:none;	
		width: 1100px;
		background: #fff;
		margin: 0 auto;
		overflow: hidden;
	 }
   </style>
<div id="contain">

    <!-----------content left------------------->
    <div class="login-container myTextEditor">
    	<div style="padding-left:5px;">
           <?php
				    foreach($show_setting as $set){
						
						echo $set->login_employer_text;
						}
				   
				    ?>
        </div>
    </div>
    <!----------------End Content Left------------------>
    
    <!-------------Recruitment Right------------------->
    <div class="panel-left-login" style="margin:15px 0px;">
    
    <input type="checkbox" id="employee" name="check" value="employee"/><span style="font-size:16px; color:red;"> If you want to login as employer, please select check box.</span>
    
    	<section id="content">
            <form action="<?php echo site_url('login_controller/login_employer'); ?>" method="post" enctype="multipart/form-data">
                <h1>Login Employer</h1>
                
       <?php if($this->session->flashdata('error')){
			echo $this->session->flashdata('error');
		}
		if($this->session->flashdata('validation')){
			echo $this->session->flashdata('validation');
		}
		if($this->session->flashdata("success-register")){
           echo $this->session->flashdata("success-register");
        }
	?>
                
                <div>
                	<input type="hidden" value="<?=$this->code;?>" name="check_access" />
                    <input placeholder="E-mail" name="email" type="text" id="username" autofocus>
                    
                </div>
                <div>
                   
                    <input placeholder="Password" name="password" type="password" id="password" >
                </div>
                <div>
                	<input type="submit" name="login_employer" value="Login">
                    
                    <a href="<?=site_url('login_controller/forget_employer');?>">Lost your password?</a>
                    <a href="<?php echo site_url('Companys/register_employer'); ?>">Register</a>
                </div>
            </form>
            
        </section>
    </div>
    <!-------------End Recruitment Right------------------->
</div>
</div><!--contain-->
<script>
	$(document).ready(function(){
		$('input[type="checkbox"]').click(function(){
			if($(this).attr("value")=="employer"){
				$(".container").hide();
				$("#contain").show();
				$('#employee').attr('checked', false);
			}
			if($(this).attr("value")=="employee"){
				$("#contain").hide();
				$(".container").show();
				$('#employer').attr('checked', false);
			}
		});
	});
</script>