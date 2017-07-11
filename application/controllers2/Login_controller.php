<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_controller extends CI_controller{
	
	
public function __construct() {
        parent::__construct();
		parse_str($_SERVER['QUERY_STRING'],$REQUEST);
		$this->load->library('facebook',array("appId"=>'1250491488348163',"secret"=>'f6ad3c72940473dd80605f518c71dfe0'));
		$this->user = $this->facebook->getUser();
    }

// log in admin	
	function login_admin(){

		if($this->input->post("login_admin")){
			$check = $this->Login_model->check_login();
					if($check->num_rows()==true){
						foreach($check->result() as $val){
							if($val==true){
								
									$this->session->set_userdata(array("email"=>$val->email));	
									$this->session->set_userdata(array("uid"=>$val->use_id));
									$this->session->set_userdata(array("userID"=>$val->use_id));
									$this->session->set_userdata(array("fullname"=>$val->name));
									$this->session->set_userdata(array("phone"=>$val->phone));
									$this->session->set_userdata(array("role"=>$val->role));
									//$this->session->set_userdata(array("pic"=>$val->user_img));
									$data=array(
										'is_login'=>true
									);
									$this->session->set_userdata($data);
									
									redirect("admin_controller/dashboard");
								
					
							}
							
					}
					}else{  
								$this->session->set_flashdata(array("error"=>'<div style="background:red; color:#fff; text-align:center;padding: 8px;margin-bottom: 20px; border-radius: 5px;">Wrong Email or Password !!!</div>'));	
								redirect("Pages/login");
					}
		}
		
		
	}
	
// login employee	
	function login_employee(){
	
		if($this->input->post("login_employee")){
			$check = $this->Login_model->check_login_employee();
					if($check->num_rows()==true){
						foreach($check->result() as $val){
							if($val->emp_keys=="null" || $val->api_id == true){
								
									$this->session->set_userdata(array("email"=>$val->emp_email));	
									$this->session->set_userdata(array("uid"=>$val->emp_id));
									$this->session->set_userdata(array("employeeID"=>$val->emp_id));
									$this->session->set_userdata(array("fullname"=>$val->emp_name));
									$this->session->set_userdata(array("phone"=>$val->emp_phone));
									//$this->session->set_userdata(array("role"=>$val->role));
									//$this->session->set_userdata(array("pic"=>$val->user_img));
									$data=array(
										'is_login'=>true
									);
									$this->session->set_userdata($data);
									
									if($this->session->userdata("session_job_url")){
									redirect('Pages/job/'.$this->session->userdata("session_job_url"));	
									}else{
									redirect("Pages/user_center");
									}
					
							
							}else{

								$this->session->set_flashdata(array("validation"=>'<div style="background:#5CB85C; color:#fff; text-align:center;padding: 10px;">Please check your email to active your account!</div>'));	
								redirect("Pages/login_employee");	
							}
							
					}
					}else{  
								$this->session->set_flashdata(array("error"=>'<div style="background:red; color:#fff; text-align:center;padding: 8px;margin-bottom: 20px; border-radius: 5px;">Wrong Email or Password !!!</div>'));	
								redirect("Pages/login_employee");
					}
		
		}
	}
	

	
	// login employer	
	function login_employer(){
	
		if($this->input->post("login_employer")){
			$check = $this->Login_model->check_login_employer();
					if($check->num_rows()==true){
						foreach($check->result() as $val){
							if($val->com_keys=="null"){
								
									$this->session->set_userdata(array("email"=>$val->com_email));	
									$this->session->set_userdata(array("uid"=>$val->com_id));
									$this->session->set_userdata(array("companyID"=>$val->com_id));
									$this->session->set_userdata(array("fullname"=>$val->com_name));
									$this->session->set_userdata(array("phone"=>$val->com_phone));
									//$this->session->set_userdata(array("role"=>$val->role));
									//$this->session->set_userdata(array("pic"=>$val->user_img));
									$data=array(
										'is_login'=>true
									);
									$this->session->set_userdata($data);
									
									redirect("Companys/employer_center");
								
					
							
							}else{

								$this->session->set_flashdata(array("validation"=>'<div style="background:#5CB85C; color:#fff; text-align:center;padding: 10px;">Please check your email to active your account!</div>'));	
								redirect("Companys/login_employer");	
							}
							
					}
					}else{  
								$this->session->set_flashdata(array("error"=>'<div style="background:red; color:#fff; text-align:center;padding: 8px;margin-bottom: 20px; border-radius: 5px;">Wrong Email or Password !!!</div>'));	
								redirect("Companys/login_employer");
					}
		
		}
	}
		
			 
		 
// logout		 
	function logout(){
		$this->session->sess_destroy();
		redirect("");
	}	 
	
	
		
// /////////////////////////////////////////////////////////////////////////////


// register new empoyee
function act_register(){
		
			$code = random_str(20);

				$check_user = $this->Login_model->check_user($this->input->post("email"));
				if($check_user->num_rows()==false){
					$this->load->library('email');
					$config['protocol'] = 'sendmail';
					$config['charset'] = 'iso-8859-1';
					$config['wordwrap'] = TRUE;
					$config['mailtype'] = 'html';
			
					$this->email->initialize($config);
					
					$this->Login_model->insert_user_re($code);
				
					$message = 'Thank you for register with <b>www.aseanhr.com</b>.<br />Please '.anchor('login_controller/vali_keys/'.$code,'Click here').' to activate your account.';
					$this->email->from('jobs@aseanhr.com');
					$this->email->to($this->input->post('email'));  
					$this->email->subject('Validation account');
					$this->email->message($message);	
					$this->email->send();
					$this->session->set_flashdata(array("success-register"=>'<div style="padding:5px;margin-top: 10px;color:#55AC1A">You have successfully registered. Please check your email to active your account!</div>'));
					redirect("Pages/login_employee");
				}else{
					$this->session->set_flashdata(array("success-register"=>'<div style="border:1px solid #55AC1A;padding:5px;margin-top: 10px;color:#55AC1A">Your have register already. Please '.anchor("Pages/login_employee","Login").'</div>'));
					redirect("Pages/register");
				}
			
	}
	



	
	// check key (click form email inbox to active account)
	function vali_keys($id){
		$keys_check = $this->Login_model->check_register_keys($id); //check key for confirm email (for click from email inbox)
		if($keys_check->num_rows()==true){
			$this->Login_model->delete_keys_code($id); // set key null after confirm email
			redirect("Pages/login_employee");
		}
	}
	
	public function validation_re($id){
		$check = $this->Login_model->check_forget_keys($id);
		if($check->num_rows()==true){
			redirect("login_controller/new_password/".$id);
		}
	}
	
	function new_password($id = false){
		$data['title'] = 'Reset Password';
		$data['show_setting']=$this->Admin_model->show_setting();
		$data['show_maincategory'] = $this->View_model->show_maincategory();
		$data['show_category'] = $this->View_model->show_category();
		$data['show_sub_category'] = $this->View_model->show_sub_category();
		
		//$data['show_category']=$this->View_model->show_category();
		
		if($id){
			$this->load->view('cview/header',$data);
			$this->load->view('cview/new_password');
			$this->load->view('cview/footer');	
		}
	}
	
	// reset new password
	function new_pd($id){
		if($id){
			if($this->input->post("news")==$this->input->post("con")){
				$data = $this->Login_model->check_keys($id);
				if($data->num_rows() == TRUE){
					$this->Login_model->set_validation($id);
					redirect("Pages/login_employee");
				}
			}else{
				$this->session->set_flashdata(array("error"=>"<div class='alert alert-error error'>Incorrect new password and confirm password!</div>"));
				redirect("login_controller/new_password/".$id);
			}	
		}
	}

	
// forget empoyee account
	function act_forget(){
			if($this->input->post('forget')){  
				 $email = $this->input->post('email');
				 $check['select'] = $this->Login_model->check_val($email); // check exist email for forget password
				 if($check['select']->num_rows()==TRUE){
					$keys = random_multi(6);
					$this->Login_model->set_keys($keys,$email); //set key code for confirm email (in forget password process)
					$this->load->library('email');
					$config['protocol'] = 'sendmail';
					$config['wordwrap'] = TRUE;
					$config['mailtype'] = 'html';
					$this->email->initialize($config);
					$this->email->from('jobs@aseanhr.com');
					$this->email->to($email);
					$link = site_url('login_controller/validation_re/'.$keys);
					$this->email->subject('Reset your password');
					$this->email->message('Someone, hopefully you, has requested that your ASEANHR account password be

reset, or your password has expired and requires updating.  Please copy the
following url into your browser to complete the password reset process.:'.$link);	
					$this->email->send();
					$this->session->set_flashdata(array('success'=>'<p style="color:blue;">You reset password is successful. Please login your email account to reset password...!</p>'));
					redirect("login_controller/forget");
				}else{
					$this->session->set_flashdata(array('error'=>'<p style="color:red;">Your email does not exist in our database</p>'));	
					redirect("login_controller/forget");
					}
			}else{
				echo "no";
			}
	}
	
	
/////////////////////////////////////////// Employer ////////////////////////////////////////////////////////////////////////
		 
// register new empoyer
function act_register_employer(){
		
			$code = random_str(20);

				$check_user = $this->Login_model->check_user_employer($this->input->post("com_email"));
				if($check_user->num_rows()==false){
					$this->load->library('email');
					$config['protocol'] = 'sendmail';
					$config['charset'] = 'iso-8859-1';
					$config['wordwrap'] = TRUE;
					$config['mailtype'] = 'html';
			
					$this->email->initialize($config);
					
					$this->Login_model->insert_user_employer($code);
				
					$message = 'Thank you for register with <b>www.aseanhr.com</b>.<br />Please '.anchor('login_controller/employer_vali_keys/'.$code,'Click here').' to activate your account.';
					$this->email->from('jobs@aseanhr.com');
					$this->email->to($this->input->post('com_email'));  
					$this->email->subject('Validation account');
					$this->email->message($message);	
					$this->email->send();
					$this->session->set_flashdata(array("success-register"=>'<div style="padding:5px;margin-top: 10px;color:#55AC1A">You have successfully registered. Please check your email to activate your account.</div>'));
					redirect("Companys/login_employer");
				}else{
					$this->session->set_flashdata(array("success-register"=>'<div style="border:1px solid #55AC1A;padding:5px;margin-top: 10px;color:#55AC1A">Your have register already. Please '.anchor("Companys/login_employer","Login").'</div>'));
					redirect("Companys/register_employer");
				}
			
	}

// check key (click form email inbox to active account)
	function employer_vali_keys($id){
		$keys_check = $this->Login_model->employer_check_register_keys($id); //check key for confirm email (for click from email inbox)
		if($keys_check->num_rows()==true){
			$this->Login_model->employer_delete_keys_code($id); // set key null after confirm email
			redirect("Companys/login_employer");
		}
	}
	
	public function employer_validation_re($id){
		$check = $this->Login_model->employer_check_forget_keys($id);
		if($check->num_rows()==true){
			redirect("login_controller/employer_new_password/".$id);
		}
	}
	
	function employer_new_password($id = false){
		$data['title'] = 'New Password';
		$data['show_setting']=$this->Admin_model->show_setting();
		$data['show_maincategory'] = $this->View_model->show_maincategory();
		$data['show_category'] = $this->View_model->show_category();
		$data['show_sub_category'] = $this->View_model->show_sub_category();
		
		if($id){
			$this->load->view('cview/header',$data);
			$this->load->view('company/employer_new_password');
			$this->load->view('cview/footer');	
		}
	}
	
	// reset new password
	function employer_new_pd($id){
		if($id){
			if($this->input->post("news")==$this->input->post("con")){
				$data = $this->Login_model->employer_check_keys($id);
				if($data->num_rows() == TRUE){
					$this->Login_model->employer_set_validation($id);
					redirect("Companys/login_employer");
				}
			}else{
				$this->session->set_flashdata(array("error"=>"<div class='alert alert-error error'>Incorrect new password and confirm password!</div>"));
				redirect("login_controller/employer_new_password/".$id);
			}	
		}
	}

	
// forget empoyer account
	function employer_act_forget(){
			if($this->input->post('forget')){  
				 $email = $this->input->post('email');
				 $check['select'] = $this->Login_model->employer_check_val($email); // check exist email for forget password
				 if($check['select']->num_rows()==TRUE){
					$keys = random_multi(6);
					$this->Login_model->employer_set_keys($keys,$email); //set key code for confirm email (in forget password process)
					$this->load->library('email');
					$config['protocol'] = 'sendmail';
					$config['wordwrap'] = TRUE;
					$config['mailtype'] = 'html';
					$this->email->initialize($config);
					$this->email->from('job@aseanhr.com');
					$this->email->to($email);
					$link = site_url('login_controller/employer_validation_re/'.$keys);
					$this->email->subject('Reset your password');
					$this->email->message('Someone, hopefully you, has requested that your ASEANHR account password be

reset, or your password has expired and requires updating.  Please copy the
following url into your browser to complete the password reset process.:'.$link);	
					$this->email->send();
					$this->session->set_flashdata(array('success'=>'<p style="color:blue;">You reset password is successful. Please login your email account to reset password...!</p>'));
					redirect("login_controller/forget_employer");
				}else{
					$this->session->set_flashdata(array('error'=>'<p style="color:red;">Your email does not exist in our database</p>'));	
					redirect("login_controller/forget_employer");
					}
			}else{
				echo "no";
			}
	}

	
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	
// API



	public function facebook_request(){
		$data = array(
			'redirect_uri' => site_url('login_controller/handle_facebook_login'),
			'scope' => array('email, public_profile')
		);
		redirect($this->facebook->getLoginUrl($data));
	}
	
	public function handle_facebook_login(){
		if($this->user){
			try{
				$me = $this->facebook->api('/me?fields=id,name,email,gender');
				if(!empty($me['email'])){
					$check_api = $this->Login_model->compate_api_id($me['id']);
					if($check_api->num_rows() ==  TRUE){
						foreach($check_api->result() as $val){
							if($val->emp_phone == ""){
								$this->session->set_userdata(array('p_id'=>$val->api_id));
								redirect('login_controller/phone_require');
							}else{
									$this->session->set_userdata(array("email"=>$val->emp_email));	
									$this->session->set_userdata(array("uid"=>$val->emp_id));
									$this->session->set_userdata(array("employeeID"=>$val->emp_id));
									$this->session->set_userdata(array("fullname"=>$val->emp_name));
									$this->session->set_userdata(array("phone"=>$val->emp_phone));
									
									if($this->session->userdata("session_job_url")){
									redirect('Pages/job/'.$this->session->userdata("session_job_url"));	
									}else{
									redirect("Pages/user_center");
									}
							}
						}
					}else{
						$this->db->insert('tbl_employee',array(
							'emp_name'=>$me['name'],
							'emp_sex'=>$me['gender'],
							'emp_email'=>$me['email'],
							'emp_date'=>date('Y-m-d H:i:s'),
							"emp_image"=>'user.png',
							'emp_status'=>1,
							'api_id'=>$me['id']
						));
						$check_api = $this->Login_model->compate_api_id($me['id']);
						foreach($check_api->result() as $val){
							if($val->emp_phone == ""){
								$this->session->set_userdata(array('p_id'=>$val->api_id));
								redirect('login_controller/phone_require');
							}else{
									$this->session->set_userdata(array("email"=>$val->emp_email));	
									$this->session->set_userdata(array("uid"=>$val->emp_id));
									$this->session->set_userdata(array("employeeID"=>$val->emp_id));
									$this->session->set_userdata(array("fullname"=>$val->emp_name));
									$this->session->set_userdata(array("phone"=>$val->emp_phone));
									
									if($this->session->userdata("session_job_url")){
									redirect('Pages/job/'.$this->session->userdata("session_job_url"));	
									}else{
									redirect("Pages/user_center");
									}
							}
						}
					}
				}else{
					$check_api = $this->Login_model->compate_api_id($me['id']);
					if($check_api->num_rows() == true){
							$phone_check = $this->Login_model->compate_api_id($me['id']);
							foreach($phone_check->result() as $row){
								if($row->emp_phone == ""){
									$this->session->set_userdata(array('p_id'=>$row->api_id));
									redirect('login_controller/phone_require');
								}else{
									$phone_check = $this->Login_model->compate_api_id($me['id']);
									foreach($emp_phone_check->result() as $val){
										$this->session->set_userdata(array("email"=>$val->emp_email));	
										$this->session->set_userdata(array("uid"=>$val->emp_id));
										$this->session->set_userdata(array("employeeID"=>$val->emp_id));
										$this->session->set_userdata(array("fullname"=>$val->emp_name));
										$this->session->set_userdata(array("phone"=>$val->emp_phone));
									}
									if($this->session->userdata("session_job_url")){
									redirect('Pages/job/'.$this->session->userdata("session_job_url"));	
									}else{
									redirect("Pages/user_center");
									}
									
								}
							}

					}else{

							$this->db->insert('tbl_employee',array(
							'emp_name'=>$me['name'],
							'emp_sex'=>$me['gender'],
							//'emp_email'=>$me['email'],
							'emp_date'=>date('Y-m-d H:i:s'),
							"emp_image"=>'user.png',
							'emp_status'=>1,
							'api_id'=>$me['id']
						));
							
							$phone_check = $this->Login_model->compate_api_id($me['id']);
							foreach($phone_check->result() as $row){
								if($row->emp_phone == ""){
									$this->session->set_userdata(array('p_id'=>$row->api_id));
									redirect('login_controller/phone_require');
								}
							}
					}
				}
			}catch(FacebookApiException $e){
				show_error(print_r($e, TRUE), 500);
				$user = null;
			}
		}
	}
	
	function phone_require(){
		$data['title'] = 'Require Phone';
		$data['show_setting']=$this->Admin_model->show_setting();
		$data['show_maincategory'] = $this->View_model->show_maincategory();
		$data['show_category'] = $this->View_model->show_category();
		$data['show_sub_category'] = $this->View_model->show_sub_category();
	

			$this->load->view('cview/header', $data);
			$this->load->view('cview/phone_require');	
			$this->load->view('cview/footer');
	
	}

	
	function up_phone(){
		$my_check_phone = $this->Login_model->select_all_users();
		foreach($my_check_phone as $m_check){
			if($m_check->emp_phone == $this->input->post('phone')){
				$this->session->set_flashdata(array('phone_error'=>'<p style="color:red">This phone number is already exist....!</p>'));
				redirect('login_controller/phone_require');
			}
		}
		$this->Login_model->phone_update();
		$check_api = $this->Login_model->compate_api_id($this->input->post('p_id'));
		foreach($check_api->result() as $val){
			$this->session->set_userdata(array("email"=>$val->emp_email));	
			$this->session->set_userdata(array("uid"=>$val->emp_id));
			$this->session->set_userdata(array("employeeID"=>$val->emp_id));
			$this->session->set_userdata(array("fullname"=>$val->emp_name));
			$this->session->set_userdata(array("phone"=>$val->emp_phone));
		}
		if($this->session->userdata("session_job_url")){
		redirect('Pages/job/'.$this->session->userdata("session_job_url"));	
		}else{
		redirect("Pages/user_center");
		}
	}
//forget password=======================>
	function forget(){
		$data['title'] = 'Forget Password';
		$data['show_setting']=$this->Admin_model->show_setting();
		$data['show_maincategory'] = $this->View_model->show_maincategory();
		$data['show_category'] = $this->View_model->show_category();
		$data['show_sub_category'] = $this->View_model->show_sub_category();

		$this->load->view('cview/header', $data);
		$this->load->view('cview/forget');
		$this->load->view('cview/footer');
	}
//End forget password===================>
		 		

//forget employer password=======================>
	function forget_employer(){
		$data['title'] = 'Forget Password';
		$data['show_setting']=$this->Admin_model->show_setting();
		$data['show_maincategory'] = $this->View_model->show_maincategory();
		$data['show_category'] = $this->View_model->show_category();
		$data['show_sub_category'] = $this->View_model->show_sub_category();

		$this->load->view('cview/header', $data);
		$this->load->view('company/forget_employer');
		$this->load->view('cview/footer');
	}
//End employer forget password===================>	













	
}

?>