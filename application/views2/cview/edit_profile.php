
		<div id="contain">
        
        	<div class="re_header">
            	Edit your Account
            </div>
            <div class="re_message">
				<?php
                    if($this->session->flashdata("error-form")){
                        echo $this->session->flashdata("error-form");
                    }elseif($this->session->flashdata("success-register")){
                        echo $this->session->flashdata("success-register");
                    }
                ?> 
            </div>
        	<div class="re_content">
            	<form action="<?php echo site_url('Pages/update_profile'); ?>" method="post" enctype="multipart/form-data">
                <?php foreach($select_profile as $profile): ?>
            	<div class="re_input">
                	<span class="fa fa-user" id="re_name"></span>
                	<input type="text" onBlur="this.placeholder = 'Enter your name'" onFocus="this.placeholder = ''" name="name" value="<?=$profile->emp_name;?>" />
                </div>
                
                 <div class="re_input">
                      <div class="form-group">
                          <select name="sex" class="form-control">
                                     
                                    <?php
                        	
									if($profile->emp_sex == 0){
										echo '<option selected value="0">'.Male. '</option>';
										echo '<option value="1">'.Female.'</option>';
										echo '<option value="2">'.Unlimited.'</option>';
				
									}
									elseif ($profile->emp_sex == 1)
									{
											
										echo '<option selected value="1">'.Female.'</option>';	
										echo '<option value="0">'.Male.'</option>';
										echo '<option  value="2">'.Unlimited. '</option>';
									}
									else
									{
										echo '<option selected value="2">'.Unlimited. '</option>';
										echo '<option value="0">'.Male.'</option>';
										echo '<option value="1">'.Female.'</option>';
									}
										
									?>
                          </select>
                      </div>
                  </div>
                  
                <div class="re_input">
                	<span class="fa fa-envelope-o" id="re_name"></span>
                	<input type="email" onBlur="this.placeholder = 'E-mail'" onFocus="this.placeholder = ''" name="email" value="<?=$profile->emp_email;?>"/>
                </div>
                <div class="re_input">
                	<span class="fa fa-unlock-alt" id="re_name"></span>
                	<input type="password" onBlur="this.placeholder = 'Password'" onFocus="this.placeholder = ''" name="password"/>
                </div>
                <div class="re_input">
                	<span class="fa fa-phone" id="re_name"></span>
                	<input type="text" onBlur="this.placeholder = 'Phone number'" onFocus="this.placeholder = ''" name="phone" value="<?=$profile->emp_phone;?>"/>
                </div>
                <div class="re_input">
                	<span class="fa fa-home" id="re_name"></span>
                	<textarea onBlur="this.placeholder = 'Address'" onFocus="this.placeholder = ''" name="address" rows="10" ><?=$profile->emp_address;?> </textarea>
                </div>
                <div class="re_submit">
                	<input type="submit" value="Update" name="info"/>
                    <a href="<?=site_url("Pages/account_setting");?>">Back</a>
                </div>
                <?php endforeach; ?>
                </form>
            </div>
		</div><!--contain-->
