<?php
class Login_model extends CI_Model{
	
	//check admin login
	public function check_login(){
		return $this->db
		->where("email",$this->input->post("email"))
		->where("password",md5($this->input->post("password")))
		->get("tbl_user");	
	}
	
	//check employee login
	public function check_login_employee(){
		return $this->db
		->where("emp_email",$this->input->post("email"))
		->where("emp_password",md5($this->input->post("password")))
		->get("tbl_employee");	
	}
	
	//set last login
	function set_last_login($id){
		$this->db
		->where("use_id",$id)
		->update("tbl_user",array("date_login"=>date("Y-m-d H:i:s")));
	}
	
	// check email for new account (not duplicated)
	function check_user($email = false){
		return $this->db
		->where("emp_email",$email)	
		->get("tbl_employee");
	}
	
	//register new employee
	function insert_user_re($code){
		return $this->db
		->insert("tbl_employee",array(
			"emp_name"=>$this->input->post("name"),
			"emp_sex"=>$this->input->post("sex"),
			"emp_email"=>$this->input->post("email"),
			"emp_password"=>md5($this->input->post("password")),
			"emp_date"=>date("Y-m-d H:i:s"),
			'emp_phone'=>$this->input->post("phone"),
			"emp_image"=>'user.png',
			"emp_keys"=>$code,
			"emp_status"=>"1",
			"emp_address"=>$this->input->post("address")
			));
	}
	
	//check key for confirm email (for click from email inbox)
	function check_keys($keys){
		return $this->db
		->where("valid_keys",$keys)
		->get("tbl_employee");	
	}
	
	// set key null after confirm email
	function delete_keys_code($keys){
		$this->db
		->where("emp_keys",$keys)
		->update("tbl_employee",array("emp_keys"=>"null"));	
	}
	
	// check exist email for forget password
	function check_val($email){
		return $this->db
		->where('emp_email',$email)
		->get('tbl_employee');	
	}
	
	//set key code for confirm email (in forget password process)
	function set_keys($keys,$email){
		$data = array(
			'valid_keys'=>$keys
		);	
		
		$this->db->where('emp_email',$email)->update('tbl_employee',$data);
	}
	
	//set new password
	function set_validation($id){
		$data = array('emp_password'=>md5($this->input->post("con")),'emp_keys'=>'null');
		return $this->db->where('valid_keys',$id)->update('tbl_employee',$data);
	}
	
	//check register key for new password
	public function check_register_keys($id){
		return $this->db
		->where("emp_keys",$id)
		->get("tbl_employee");	
	}
	
	public function check_forget_keys($id){
		return $this->db
		->where("valid_keys",$id)
		->get("tbl_employee");	
	}

//////////////////////////////////////////////// Employer /////////////////////////////////////////////////////////////////////
		
// register
		
	// check email for new account (not duplicated)
	function check_user_employer($email = false){
		return $this->db
		->where("com_email",$email)	
		->get("tbl_company");
	}
	
	//register new employee
	function insert_user_employer($code){
		return $this->db
		->insert("tbl_company",array(
			'com_name'=>$this->input->post('name'),
			'com_password'=>md5($this->input->post("com_password")),
			'com_employee_num'=>$this->input->post('com_employee_num'),
			'com_contact_person'=>$this->input->post('com_contact_person'),
			'com_phone'=>$this->input->post('com_phone'),
			'com_fax'=>$this->input->post('com_fax'),
			'com_email'=>$this->input->post('com_email'),
			'industry_id'=>$this->input->post('indu_id'),
			'type_id'=>$this->input->post('type_id'),
			'loca_id'=>$this->input->post('loca_id'),
			'com_website'=>$this->input->post('com_website'),
			'com_address'=>$this->input->post('com_address'),
			'com_description'=>$this->input->post('editor1'),
			'com_map'=>$this->input->post('com_map'),
			"com_keys"=>$code,
			'com_image'=>'user.png',
			));
	}
	
// end register

////////////////////////////////////////////////////////////////////////////////////////////////////

//check key for confirm email (for click from email inbox)
	function employer_check_keys($keys){
		return $this->db
		->where("valid_keys",$keys) //com_keys
		->get("tbl_company");	
	}
	
	// set key null after confirm email
	function employer_delete_keys_code($keys){
		$this->db
		->where("com_keys",$keys)
		->update("tbl_company",array("com_keys"=>"null"));	
	}
	
	// check exist email for forget password
	function employer_check_val($email){
		return $this->db
		->where('com_email',$email)
		->get('tbl_company');	
	}
	
	//set key code for confirm email (in forget password process)
	function employer_set_keys($keys,$email){
		$data = array(
			'valid_keys'=>$keys //com_keys
		);	
		
		$this->db->where('com_email',$email)->update('tbl_company',$data);
	}
	
	//set new password
	function employer_set_validation($id){
		$data = array('com_password'=>md5($this->input->post("con")),'com_keys'=>'null');
		return $this->db->where('valid_keys',$id)->update('tbl_company',$data); //com_keys
	}
	
	//check register key for new password ( now not use cos replace by employer_check_forget_keys )
	public function employer_check_register_keys($id){
		return $this->db
		->where("com_keys",$id)
		->get("tbl_company");	
	}
// click forget password but all can login with old password before confirm email 	
	public function employer_check_forget_keys($id){
		return $this->db
		->where("valid_keys",$id)
		->get("tbl_company");	
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// login

	//check employer login
	public function check_login_employer(){
		return $this->db
		->where("com_email",$this->input->post("email"))
		->where("com_password",md5($this->input->post("password")))
		->get("tbl_company");	
	}
		
	
	
function compate_api_id($api_id = false){
			return $this->db->where('api_id',$api_id)
						->get('tbl_employee');
		}
		
		function select_all_users(){
			return $this->db->get('tbl_employee')
						->result();
		}
		
		function phone_update(){
			$this->db->where('api_id',$this->input->post('p_id'))
					->update('tbl_employee',array(
						'emp_phone'=>$this->input->post('phone')
					));
		}
	
	
	
	
	
	
	
	
	
}
?>