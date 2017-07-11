            
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
						
						echo $set->login_employer_text;
						}
				   
				    ?>
        </div>
    </div>
    <!----------------End Content Left------------------>
    
    <!-------------Recruitment Right------------------->
    <div class="panel-left-login" style="margin:15px 0px;">
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

<style>
	/* The Modal (background) */
	.modal {
		display: none;
		position: fixed;
		z-index: 1;
		padding-top: 100px;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: auto;
		background-color: rgb(0,0,0);
		background-color: rgba(0,0,0,0.4);
	}
	
	/* Modal Content */
	.modal-content {
		background-color: #fff;
		margin: auto;
		width: 540px;
		overflow:hidden;
	}
	
	/* The Close Button */
	.close {
		color: #aaaaaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
		padding-right: 10px;
    	padding-top: 3px;
	}
	
	.close:hover,
	.close:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}
	.brows{ display:none; }
</style>

<div id="myModals" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div style="background:#E6062B;">
        <span class="close" id="des">&times;</span>
        <h3 style="color:#fff; font-size:18px; padding:10px 0px 10px 10px; margin-top:0px;">Successful Register</h3>
    </div>
    <div style="height:50px;">
    	<h4 style="text-align:center;"><?=$this->session->flashdata('success-register');?></h4>
    </div>
  </div>

</div>
<script>
	$(document).ready(function(e) {
        $("#abc").click(function(){
			modal.style.display = "none";
		});
		$("#des").click(function(){
			modals.style.display = "none";
		});
    });
	// Get the modal
	var modal = document.getElementById('myModal');
	var modals = document.getElementById('myModals');
	
	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");
	
	// Get the button that opens the modal
	var btnOne = document.getElementById("myBtnOne");
	
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];
	
	// When the user clicks the button, open the modal 
	btn.onclick = function() {
		modal.style.display = "block";
	}
	
	// When the user clicks the button, open the modal 
	btnOne.onclick = function() {
		modals.style.display = "block";
	}
	
	$("#turn_off").click(function(){
		modal.style.display = "none";
	});
	
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}
</script>
<?php
	if($this->session->flashdata('success-register')){
?>
	<script>
	    
		modals.style.display = "block";
      
    </script>
<?php
	}
?>