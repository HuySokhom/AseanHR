<?php
	class View_model extends CI_Model
	{


		//<================== employee profile ===============>
	

		
	function remove_image_profile(){
			return $this->db->where('emp_id',$this->session->userdata("uid"))
							->get('tbl_employee')
							->result();
		}
	function select_profile(){
		return $this->db
				->where("emp_id",$this->session->userdata("uid"))
				->get("tbl_employee")
				->result();	
	}
	function insert_img_profile($img = false){
			if($img){
				foreach($img as $key){
					$this->db
						->where("emp_id",$this->session->userdata("uid"))
						->update("tbl_employee",array(
						"emp_image"=>$img['file_name']
					));
				}
			}
		}
		
		
		
	function update_personal_info(){
		if($this->input->post('password')==""):
			$this->db
			 		->where("emp_id",$this->session->userdata("uid"))
			 		->update("tbl_employee",array(
						"emp_name"=>$this->input->post("name"),
						"emp_sex"=>$this->input->post("sex"),
						"emp_email"=>$this->input->post("email"),
						//"emp_password"=>md5($this->input->post("password")),
						'emp_phone'=>$this->input->post("phone"),
						"emp_address"=>$this->input->post("address")
					));
		   else:
		   	 $this->db
			 		->where("emp_id",$this->session->userdata("uid"))
			 		->update("tbl_employee",array(
						"emp_name"=>$this->input->post("name"),
						"emp_sex"=>$this->input->post("sex"),
						"emp_email"=>$this->input->post("email"),
						"emp_password"=>md5($this->input->post("password")),
						"emp_phone"=>$this->input->post("phone"),
						"emp_address"=>$this->input->post("address")
					));
		   endif;
		}


	
		
//////////////////////////////////////////////home page////////////////////////////////////////

function show_maincategory() {
			return $this->db->order_by('mai_id','ASC')
							->get('tbl_maincategory')
							->result();	
			
		}
function show_category() {
			return $this->db//->join('tbl_maincategory','tbl_maincategory.mai_id=tbl_category.main_id')
							->order_by('cat_id','ASC')
							->get('tbl_category')
							->result();	
			
		}
function show_sub_category(){							
			return $this->db->order_by('sub_cat_id','ASC')
				->get('tbl_sub_category')
				->result();	
		}


function show_function() {
			return $this->db->order_by('fun_name','ASC')
							->get('tbl_function')
							->result();	
			
		}

function show_industry() {
			return $this->db->order_by('ind_name','ASC')
							->get('tbl_industry')
							->result();	
			
		}

function show_location() {
			return $this->db->order_by('loc_name','ASC')
							->get('tbl_location')
							->result();	
			
		}
		
function show_salary() {
			return $this->db->order_by('sal_id','ASC')
							->get('tbl_salary')
							//->num_row()
							->result();	
			
		}
function show_level() {
			return $this->db->order_by('lev_id','DESC')
							->get('tbl_level')
							->result();	
			
		}
function show_term() {
			return $this->db->order_by('ter_id','ASC')
							->get('tbl_term')
							->result();	
			
		}
function show_type() {
			return $this->db->order_by('typ_id','ASC')
							->get('tbl_type')
							->result();	
			
		}


//function show_employee_cv() {
//			return $this->db->order_by('ecv_id','DESC')
//							->where('empl_id',$this->session->userdata("uid"))
//							->get('tbl_employee_cv')
//							->result();	
//			
//		}	

function show_employee_cover_letter() {
			return $this->db->order_by('cov_id','DESC')
							->where('empl_id',$this->session->userdata("uid"))
							->get('tbl_cover_letter')
							->result();	
			
		}	
		
		//add cv_register========================>
//function set_cv_register($img=false){
//			$id=$this->uri->segment(3);
//			if($id==false){
//					if($img){
//						foreach($img as $key){
//							$this->db->insert('tbl_employee_cv', array(
//								'empl_id'=>$this->session->userdata("uid"),
//								'ecv_current_position'=>$this->input->post('current_position'),
//								'ecv_apply_for'=>$this->input->post('apply_for'),
//								'func_id'=>$this->input->post('func_id'),
//								'ecv_image'=>$img['file_name'],
//								
//							));
//							break;
//						}
//					}
//				}
//			else{
//				if($img){
//					$this->db->where('ecv_id',$id)
//							->update('tbl_employee_cv',array(
//								'ecv_current_position'=>$this->input->post('current_position'),
//								'ecv_apply_for'=>$this->input->post('apply_for'),
//								'func_id'=>$this->input->post('func_id'),
//								'ecv_image'=>$img['file_name'],
//					));
//					}
//				else{
//					$this->db->where('ecv_id',$id)
//							->update('tbl_employee_cv',array(
//								'ecv_current_position'=>$this->input->post('current_position'),
//								'ecv_apply_for'=>$this->input->post('apply_for'),
//								'func_id'=>$this->input->post('func_id'),
//								
//					));
//					
//					}
//				
//				}
//			
//			
//		}
		
function remove_image_cv_register($id){
			return $this->db->where('ecv_id',$id)
							->get('tbl_employee_cv')
							->result();
		}
		

//function delete_employee_cv($id){
//		$this->db->where('ecv_id',$id)
//				->delete('tbl_employee_cv');
//		}


function delete_employee_cv($id){
		$this->db->where('cv_id',$id)
				->delete('tbl_cv');
		}

function where_select_employee_cv($id){
			return $this->db->join('tbl_employee',' tbl_employee.emp_id=tbl_cv.empl_id')
							//->join('tbl_company','tbl_company.com_id=tbl_cv.comp_id')
							->join('tbl_function','tbl_function.fun_id=tbl_cv.func_id')
							->join('tbl_location','tbl_location.loc_id=tbl_cv.loca_id')
							->join('tbl_salary','tbl_salary.sal_id=tbl_cv.sala_id')
							->where('cv_id',$id)
							->get('tbl_cv')
							->result();
		}
		

//Content==============================>
	function set_cv_register(){
		$id = $this->uri->segment(3);
		if($id == false){
				$this->db->insert('tbl_cv',array(
					'empl_id'=>$this->input->post('empl_id'),
					'cv_posted_date'=>$this->input->post('cv_posted_date'),
					'apply_for'=>$this->input->post('apply_for'),
					'date_of_birth'=>$this->input->post('date_of_birth'),
					'age'=>$this->input->post('age'),
					'nationality'=>$this->input->post('nationality'),
					'religion'=>$this->input->post('religion'),
					'health'=>$this->input->post('health'),
					'marital_status'=>$this->input->post('marital_status'),
					'qualification'=>$this->input->post('qualification'),
					
					'history'=>$this->input->post('history'),
					'education'=>$this->input->post('education'),
					'training_skill'=>$this->input->post('training_skill'),
					'computer_skill'=>$this->input->post('computer_skill'),
					'language'=>$this->input->post('language'),
					'hobby'=>$this->input->post('hobby'),
					'name1'=>$this->input->post('name1'),
					'position1'=>$this->input->post('position1'),
					
					'phone1'=>$this->input->post('phone1'),
					'email1'=>$this->input->post('email1'),
					'name2'=>$this->input->post('name2'),
					'position2'=>$this->input->post('position2'),
					'phone2'=>$this->input->post('phone2'),
					'email2'=>$this->input->post('email2'),
					'name3'=>$this->input->post('name3'),
					'position3'=>$this->input->post('position3'),
					
					'phone3'=>$this->input->post('phone3'),
					'email3'=>$this->input->post('email3'),
					'date'=>$this->input->post('date'),
					//'comp_id'=>$this->input->post('comp_id'),
					'sala_id'=>$this->input->post('sala_id'),
					'func_id'=>$this->input->post('func_id'),
					'loca_id'=>$this->input->post('loca_id'),
					'indu_id'=>$this->input->post('indu_id'),
					'detail_cover'=>$this->input->post('detail_cover'),
					'status_admin_cv'=>$this->input->post('status_cv')
				));
			
		}else{
	
				$this->db->where('cv_id',$id)
					 ->update('tbl_cv',array(
					'apply_for'=>$this->input->post('apply_for'),
					'date_of_birth'=>$this->input->post('date_of_birth'),
					'age'=>$this->input->post('age'),
					'nationality'=>$this->input->post('nationality'),
					'religion'=>$this->input->post('religion'),
					'health'=>$this->input->post('health'),
					'marital_status'=>$this->input->post('marital_status'),
					'qualification'=>$this->input->post('qualification'),
					
					'history'=>$this->input->post('history'),
					'education'=>$this->input->post('education'),
					'training_skill'=>$this->input->post('training_skill'),
					'computer_skill'=>$this->input->post('computer_skill'),
					'language'=>$this->input->post('language'),
					'hobby'=>$this->input->post('hobby'),
					'name1'=>$this->input->post('name1'),
					'position1'=>$this->input->post('position1'),
					
					'phone1'=>$this->input->post('phone1'),
					'email1'=>$this->input->post('email1'),
					'name2'=>$this->input->post('name2'),
					'position2'=>$this->input->post('position2'),
					'phone2'=>$this->input->post('phone2'),
					'email2'=>$this->input->post('email2'),
					'name3'=>$this->input->post('name3'),
					'position3'=>$this->input->post('position3'),
					
					'phone3'=>$this->input->post('phone3'),
					'email3'=>$this->input->post('email3'),
					'date'=>$this->input->post('date'),
				//	'comp_id'=>$this->input->post('comp_id'),
					'sala_id'=>$this->input->post('sala_id'),
					'func_id'=>$this->input->post('func_id'),
					'loca_id'=>$this->input->post('loca_id'),
					'indu_id'=>$this->input->post('indu_id'),
					'detail_cover'=>$this->input->post('detail_cover'),
					
				));
			
		}
	}
		
/////////////////////////////////////////////////////////////////////////////////////

function show_cover_letter() {
			return $this->db->order_by('cov_id','DESC')
							->where('empl_id',$this->session->userdata("uid"))
							->get('tbl_cover_letter')
							->result();	
			
		}		
		
		//add cv_register========================>
function set_cover_letter($img=false){
			$id=$this->uri->segment(3);
			if($id==false){
					if($img){
						foreach($img as $key){
							$this->db->insert('tbl_cover_letter', array(
								'empl_id'=>$this->session->userdata("uid"),
								//'ecv_current_position'=>$this->input->post('current_position'),
								'cov_apply_for'=>$this->input->post('apply_for'),
								//'sala_id'=>$this->input->post('sale_id'),
								'cov_image'=>$img['file_name'],
								
							));
							break;
						}
					}
				}
			else{
				if($img){
					$this->db->where('cov_id',$id)
							->update('tbl_cover_letter',array(
								//'ecv_current_position'=>$this->input->post('current_position'),
								'cov_apply_for'=>$this->input->post('apply_for'),
								//'sala_id'=>$this->input->post('sale_id'),
								'cov_image'=>$img['file_name'],
					));
					}
				else{
					$this->db->where('cov_id',$id)
							->update('tbl_cover_letter',array(
								//'ecv_current_position'=>$this->input->post('current_position'),
								'cov_apply_for'=>$this->input->post('apply_for'),
								//'sala_id'=>$this->input->post('sale_id'),
								
								
					));
					
					}
				
				}
			
			
		}
		
function remove_image_cover_letter($id){
			return $this->db->where('cov_id',$id)
							->get('tbl_cover_letter')
							->result();
		}
		

function delete_cover_letter($id){
		$this->db->where('cov_id',$id)
				->delete('tbl_cover_letter');
		}

function where_select_cover_letter($id){
			return $this->db->join('tbl_employee',' tbl_employee.emp_id=tbl_cover_letter.empl_id')
							->where('cov_id',$id)
							->get('tbl_cover_letter')
							->result();
		}



function job_by_salary()
		{
			$id = $this->uri->segment(3);
			return $this->db
							
							->where('sala_id', $id)
							->where('job_role', 0)
							->where('job_status_admin',1)
							->order_by('job_new_urgent','DESC')
							//->group_by('pro_id')
							//->limit(20)
							->get('tbl_job')
							->result();
		}

function job_by_function()
		{
			$id = $this->uri->segment(3);
			return $this->db
							
							->where('func_id', $id)
							->where('job_role', 0)
							->where('job_status_admin',1)
							->order_by('job_new_urgent','DESC')
							//->group_by('pro_id')
							//->limit(20)
							->get('tbl_job')
							->result();
		}

function job_by_location()
		{
			$id = $this->uri->segment(3);
			return $this->db
							
							->where('loca_id', $id)
							->where('job_role', 0)
							->where('job_status_admin',1)
							->order_by('job_new_urgent','DESC')
							//->group_by('pro_id')
							//->limit(20)
							->get('tbl_job')
							->result();
		}
		
function job_by_industy()
		{
			$id = $this->uri->segment(3);
			return $this->db
							
							->where('indu_id', $id)
							->where('job_role', 0)
							->where('job_status_admin',1)
							->order_by('job_new_urgent','DESC')
							//->group_by('pro_id')
							//->limit(20)
							->get('tbl_job')
							->result();
		}
		
function job_by_term()
		{
			$id = $this->uri->segment(3);
			return $this->db
							
							->where('term_id', $id)
							->where('job_role', 0)
							->where('job_status_admin',1)
							->order_by('job_new_urgent','DESC')
							//->group_by('pro_id')
							//->limit(20)
							->get('tbl_job')
							->result();
		}

function job_by_organization()
		{
			$id = $this->uri->segment(3);
			return $this->db
							
							->where('type_id', $id)
							->where('job_role', 0)
							->where('job_status_admin',1)
							->order_by('job_new_urgent','DESC')
							//->group_by('pro_id')
							//->limit(20)
							->get('tbl_job')
							->result();
		}
		
function show_job_detail()
		{
			$id = $this->uri->segment(3);
			return $this->db
							
							->where('job_id', $id)
							->order_by('job_new_urgent','DESC')
							//->group_by('pro_id')
							//->limit(20)
							->get('tbl_job')
							->result();
		}
	


function show_job() {
			return $this->db->join('tbl_company','tbl_company.com_id=tbl_job.comp_id')
							->join('tbl_function','tbl_function.fun_id=tbl_job.func_id')
							->join('tbl_location','tbl_location.loc_id=tbl_job.loca_id')
							->order_by('job_new_urgent','DESC')
							->where('job_role', 0)
							->where('job_status_admin',1)
							->limit(20)
							->get('tbl_job')
							->result();	
			
}

function search_by() {
	if($this->input->post('search') ){
		return $this->db->order_by('job_new_urgent','DESC')
				->where('job_role',0)
		         ->where('job_status_admin',1)
				  ->like('job_name', $this->input->post('search')) 
				  ->or_like('com_name', $this->input->post('search'))
				  ->join('tbl_company','tbl_company.com_id=tbl_job.comp_id')
				   ->join('tbl_location','tbl_location.loc_id=tbl_job.loca_id')
				  //->join('tbl_function','tbl_function.fun_id=tbl_job.func_id')
				  //->join('tbl_location','tbl_location.loc_id=tbl_job.loca_id')
				  //->join('tbl_industry','tbl_industry.ind_id=tbl_job.indu_id')
				  
				  ->get('tbl_job')
				  ->result();
	}
	
	else{
		return $this->db->order_by('job_new_urgent','DESC')
				  ->where('job_role',0)
				  ->where('job_status_admin',1)
				  ->join('tbl_company','tbl_company.com_id=tbl_job.comp_id')
				   ->join('tbl_location','tbl_location.loc_id=tbl_job.loca_id')
				  //->join('tbl_function','tbl_function.fun_id=tbl_job.func_id')
				  //->join('tbl_location','tbl_location.loc_id=tbl_job.loca_id')
				  //->join('tbl_industry','tbl_industry.ind_id=tbl_job.indu_id')
				

				  ->get('tbl_job')
				  ->result();
	}			
	
		
}




////////////////////////////////////////////////////////////////////////////////////////////////////
function show_company(){
		$id = $this->uri->segment(3);
							
			return $this->db->order_by('com_id','DESC')
							->where('com_id', $id)
							//->group_buy('com_id')
							//->limit(1)
							->get('tbl_company')
							->result();
		}	
			
function show_company_all(){
							
			return $this->db->order_by('com_id','DESC')
							//->group_buy('com_id')
							//->limit(18) // limit company logo buttom
							->get('tbl_company')
							->result();
		}
		
function show_company_logo(){
							
			return $this->db->order_by('com_id','DESC')
							//->group_buy('com_id')
							->where('com_status', 0)
							->limit(12) // limit company logo buttom
							->get('tbl_company')
							->result();
		}	
		
function show_job_list() {
		$id = $this->uri->segment(3);
		return $this->db->order_by('job_new_urgent','DESC')
							->where('comp_id',$id)
							->where('job_role',0)
							->where('job_status_admin',1)
							->get('tbl_job')
							->result();	
			
		}
			
function show_job_list_num_row() {
		$id = $this->uri->segment(3);
		return $this->db->order_by('job_new_urgent','DESC')
							->where('comp_id',$id)
							->where('job_role',0)
							->where('job_status_admin',1)
							->get('tbl_job');
	
		}
		
		
function show_job_all(){
							
			return $this->db->order_by('job_new_urgent','DESC')
							//->group_by('job_id')
							//->limit(1)
							->where('job_role',0)
							->where('job_status_admin',1)
							->get('tbl_job')
							->result();
		}

	//Autosearch customer===========================================>
	function get_search_job($q){
		$this->db->select('*');
		
		$this->db->like('job_name', $q);
		
		$this->db->where('job_role',0);
		$this->db->where('job_status_admin',1);
		
		$query = $this->db->get('tbl_job');
		if($query->num_rows() > 0)
		{
			foreach ($query->result_array() as $row)
			{
				$new_row['label'] = htmlentities(stripslashes($row['job_name'])); //build an array
				
				$new_row['id'] = htmlentities(stripslashes($row['job_id']));
				$row_set[] = $new_row;
			}
			echo json_encode($row_set); //format the array into json data
		}
	}
	
	
// insert cv & job	
//	function apply_job(){
//			
//			$this->db->insert('tbl_apply_job', array(
//				'jobs_id'=>$this->input->post('jobs_id'),
//				'employee_id'=>$this->input->post('employee_id'),
//				'employee_cv_id'=>$this->input->post('employee_cv_id'),
//				'employee_cover_letter_id'=>$this->input->post('employee_cover_letter_id'),
//				'app_date'=>$this->input->post('app_date')
//			));
//		}
		

//view_model
function apply_job($img = false){
		if($img){
			$this->db->insert('tbl_apply_job', array(
				'jobs_id'=>$this->input->post('jobs_id'),
				'employee_id'=>$this->input->post('employee_id'),
				//'employee_cv_id'=> 0,//$this->input->post('employee_cv_id'),
				//'employee_cover_letter_id'=>$this->input->post('employee_cover_letter_id'),
				'app_date'=>$this->input->post('app_date'),
				'cv_files'=>$img['file_name'],
				'cv_description'=>$this->input->post('descripiton')
			));
		}else{
			$this->db->insert('tbl_apply_job', array(
				'jobs_id'=>$this->input->post('jobs_id'),
				'employee_id'=>$this->input->post('employee_id'),
				'employee_cv_id'=>$this->input->post('employee_cv_id'),
				//'employee_cover_letter_id'=>$this->input->post('employee_cover_letter_id'),
				'app_date'=>$this->input->post('app_date'),
				'cv_description'=>$this->input->post('descripiton')
			));
		}
	}

		
		
		
	function show_page() {
		$id = $this->uri->segment(3);
			return $this->db//->join('tbl_company','tbl_company.com_id=tbl_job.comp_id')
							//->join('tbl_function','tbl_function.fun_id=tbl_job.func_id')
							//->join('tbl_location','tbl_location.loc_id=tbl_job.loca_id')
							//->order_by('job_posted_date','DESC')
							->where('cate_or_random_id', $id)
							//->where('job_delete',0)
							//->limit(20)
							->get('tbl_page')
							->result();	
			
	}
	
	function show_highlight(){
		return $this->db->order_by('hig_id','ASC')
						->get('tbl_highlight')
						->result();
	}
	
	function sele_contact(){
		return $this->db->limit(1)
					->order_by('cu_id','DESC')
					->get('tbl_contact_us')
					->result();
	}
	
	function sele_instruction(){
		return $this->db->limit(1)
					->order_by('ins_id','DESC')
					->get('tbl_instruction')
					->result();
	}
	
	
	
// employee applied job ////////////////////////////////////////////////////////////////////////



function show_employee_apply_job_list() {
			return $this->db->order_by('app_id','DESC')
							->limit(1)
							->get('tbl_apply_job')
							->result();	
			
		}

function show_all_job(){
			return $this->db//->order_by('job_id','DESC')
							->get('tbl_job')
							->result();
		}

function show_all_employee(){
		return $this->db
				//->where("emp_id",$this->session->userdata("uid"))
				->get("tbl_employee")
				->result();	
	}

function show_all_company(){
			return $this->db//->order_by('com_id','DESC')
							->get('tbl_company')
							->result();
		}
		
//end  employee applied job ///////////////////////////////////////////////

function show_job_list_by_employee() {
			return $this->db//->order_by('job_posted_date','DESC')
							//->where('employee_id',$this->session->userdata("uid"))
							->where('job_role',0)
							->where('job_status_admin',1) 
							->get('tbl_job')
							->result();	
			
		}
		

function show_employee_apply_job_list_by_employee() {
			return $this->db->order_by('app_date','DESC')
							->where('employee_id',$this->session->userdata("uid"))
							->get('tbl_apply_job')
							->result();	
			
		}


function show_all_employee_cv() {
			return $this->db//->order_by('ecv_id','DESC')
							//->where('empl_id',$this->session->userdata("uid"))
							->get('tbl_employee_cv')
							->result();	
			
		}

function show_all_employee_cover_letter() {
			return $this->db//->order_by('cov_id','DESC')
							//->where('empl_id',$this->session->userdata("uid"))
							->get('tbl_cover_letter')
							->result();	
			
		}
		
function show_candidate_cv_all(){
							
			return $this->db->order_by('cv_id','DESC')
							//->group_by('job_id')
							//->limit(1)
							//->where('job_role',0)
							->get('tbl_cv')
							->result();
		}
function show_cv() {
			return $this->db//->join('tbl_company','tbl_company.com_id=tbl_cv.comp_id')
							->join('tbl_function','tbl_function.fun_id=tbl_cv.func_id')
							->join('tbl_location','tbl_location.loc_id=tbl_cv.loca_id')
							->join('tbl_employee','tbl_employee.emp_id=tbl_cv.empl_id')
							->join('tbl_salary','tbl_salary.sal_id=tbl_cv.sala_id')
							//->order_by('job_posted_date','DESC')
							->where('status', 0)
							->where('status_admin_cv', 1)
							//->where('job_delete',0)
							//->limit(20)
							->get('tbl_cv')
							->result();	
			
}

function show_employee_cv() {
			return $this->db->order_by('cv_posted_date','DESC')
							->where('empl_id',$this->session->userdata("uid"))
							->get('tbl_cv')
							->result();	
			
		}




function c_job_by_salary()
		{
			$id = $this->uri->segment(3);
			return $this->db
							
							->where('sala_id', $id)
							->where('status', 0)
							->order_by('cv_id','DESC')
							//->group_by('pro_id')
							//->limit(20)
							->get('tbl_cv')
							->result();
		}

function c_job_by_function()
		{
			$id = $this->uri->segment(3);
			return $this->db
							
							->where('func_id', $id)
							->where('status', 0)
							->order_by('cv_id','DESC')
							//->group_by('pro_id')
							//->limit(20)
							->get('tbl_cv')
							->result();
		}

function c_job_by_location()
		{
			$id = $this->uri->segment(3);
			return $this->db
							
							->where('loca_id', $id)
							->where('status', 0)
							->order_by('cv_id','DESC')
							//->group_by('pro_id')
							//->limit(20)
							->get('tbl_cv')
							->result();
		}
		
function c_job_by_industy()
		{
			$id = $this->uri->segment(3);
			return $this->db
							
							->where('indu_id', $id)
							->where('status', 0)
							->order_by('cv_id','DESC')
							//->group_by('pro_id')
							//->limit(20)
							->get('tbl_cv')
							->result();
		}
		
function disable_cv($id){
			$this->db->where('cv_id', $id)
				->update('tbl_cv', array(
					'status'=>0
				));		
		}
function enable_cv($id){
			$this->db->where('cv_id', $id)
				->update('tbl_cv', array(
					'status'=>1
				));		
		}	

function set_cv_renew($id){
		date_default_timezone_set('Asia/Phnom_Penh');
			$this->db->where('cv_id', $id)
				->update('tbl_cv', array(
					'cv_posted_date'=>Date('Y-m-d H:i:s')
				));		
		}	

function select_status_cvadmin(){
	return $this->db->get('tbl_status_cv_admin')->result();
}

		

}
	
?>