<?php

	class Admin_model extends CI_Model{
		
		
//User ========================>
		function insert_user(){
			$this->db->insert('tbl_user', array(
				'name'=>$this->input->post('name'),
				'role'=>"0",
				'email'=>$this->input->post('email'),
				'password'=>MD5($this->input->post('password')),
				'phone'=>$this->input->post('phone'),
				'address'=>$this->input->post('address')
			));
		}
		function show_user() {
			return $this->db->order_by('use_id','DESC')
							->get('tbl_user')
							->result();	
			
		}
		function where_select_user($id){
			return $this->db->where('use_id',$id)
							->get('tbl_user')
							->result();
		}
		
		function edit_user($id){
		  if($this->input->post('password')==""):
			$this->db
			 		->where("use_id",$id)
			 		->update("tbl_user",array(
						//'role'=>$this->input->post('role'),
						'name'=>$this->input->post('name'),
						'email'=>$this->input->post('email'),
						'phone'=>$this->input->post('phone'),
						'address'=>$this->input->post('address')
					));
		   else:
		   	 $this->db
			 		->where("use_id",$id)
			 		->update("tbl_user",array(
						'role'=>$this->input->post('role'),
						'name'=>$this->input->post('name'),
						'email'=>$this->input->post('email'),
						'password'=>MD5($this->input->post('password')),
						'phone'=>$this->input->post('phone'),
						'address'=>$this->input->post('address')
					));
		   endif;
		
			
			
		}
		
		function delete_user($id){
		$this->db->where('use_id',$id)
				->delete('tbl_user');
		}
//end user========================>
		


// salary ========================>
		function insert_salary(){
			$this->db->insert('tbl_salary', array(
				'sal_name'=>$this->input->post('name'),
				
			));
		}
		function show_salary() {
			return $this->db->order_by('sal_id','DESC')
							->get('tbl_salary')
							->result();	
			
		}
		
		function edit_salary($id){
			$this->db->where('sal_id',$id)
				->update('tbl_salary',array(
				'sal_name'=>$this->input->post('name'),
				
			));
		}
		
		function delete_salary($id){
		$this->db->where('sal_id',$id)
				->delete('tbl_salary');
		}
//end salary ========================>		



// type ========================>
		function insert_type(){
			$this->db->insert('tbl_type', array(
				'typ_name'=>$this->input->post('name'),
				
			));
		}
		function show_type() {
			return $this->db->order_by('typ_id','ASC')
							->get('tbl_type')
							->result();	
			
		}
		
		function edit_type($id){
			$this->db->where('typ_id',$id)
				->update('tbl_type',array(
				'typ_name'=>$this->input->post('name'),
				
			));
		}
		
		function delete_type($id){
		$this->db->where('typ_id',$id)
				->delete('tbl_type');
		}
//end type ========================>	

// term ========================>
		function insert_term(){
			$this->db->insert('tbl_term', array(
				'ter_name'=>$this->input->post('name'),
				
			));
		}
		function show_term() {
			return $this->db->order_by('ter_id','DESC')
							->get('tbl_term')
							->result();	
			
		}
		
		function edit_term($id){
			$this->db->where('ter_id',$id)
				->update('tbl_term',array(
				'ter_name'=>$this->input->post('name'),
				
			));
		}
		
		function delete_term($id){
		$this->db->where('ter_id',$id)
				->delete('tbl_term');
		}
//end term ========================>	

// level ========================>
		function insert_level(){
			$this->db->insert('tbl_level', array(
				'lev_name'=>$this->input->post('name'),
				
			));
		}
		function show_level() {
			return $this->db->order_by('lev_id','DESC')
							->get('tbl_level')
							->result();	
			
		}
		
		function edit_level($id){
			$this->db->where('lev_id',$id)
				->update('tbl_level',array(
				'lev_name'=>$this->input->post('name'),
				
			));
		}
		
		function delete_level($id){
		$this->db->where('lev_id',$id)
				->delete('tbl_level');
		}
//end level ========================>		
		
// location ========================>
		function insert_location(){
			$this->db->insert('tbl_location', array(
				'loc_name'=>$this->input->post('name'),
				
			));
		}
		function show_location() {
			return $this->db->order_by('loc_id','DESC')
							->get('tbl_location')
							->result();	
			
		}
		
		function edit_location($id){
			$this->db->where('loc_id',$id)
				->update('tbl_location',array(
				'loc_name'=>$this->input->post('name'),
				
			));
		}
		
		function delete_location($id){
		$this->db->where('loc_id',$id)
				->delete('tbl_location');
		}
//end location ========================>	

// function ========================>
		function insert_function(){
			$this->db->insert('tbl_function', array(
				'fun_name'=>$this->input->post('name'),
				
			));
		}
		function show_function() {
			return $this->db->order_by('fun_id','DESC')
							->get('tbl_function')
							->result();	
			
		}
		
		function edit_function($id){
			$this->db->where('fun_id',$id)
				->update('tbl_function',array(
				'fun_name'=>$this->input->post('name'),
				
			));
		}
		
		function delete_function($id){
		$this->db->where('fun_id',$id)
				->delete('tbl_function');
		}
//end function ========================>		
		

// industry ========================>
		function insert_industry(){
			$this->db->insert('tbl_industry', array(
				'ind_name'=>$this->input->post('name'),
				
			));
		}
		function show_industry() {
			return $this->db->order_by('ind_id','DESC')
							->get('tbl_industry')
							->result();	
			
		}
		
		function edit_industry($id){
			$this->db->where('ind_id',$id)
				->update('tbl_industry',array(
				'ind_name'=>$this->input->post('name'),
				
			));
		}
		
		function delete_industry($id){
		$this->db->where('ind_id',$id)
				->delete('tbl_industry');
		}
//end industry ========================>

	
// slide show

		//add slideshow========================>
		function set_slideshow($img=false){
			$id=$this->uri->segment(3);
			if($id==false){
					if($img){
						foreach($img as $key){
							$this->db->insert('tbl_slideshow', array(
								'name'=>$this->input->post('name'),
								'image'=>$img['file_name'],
								'url'=>$this->input->post('url')
							));
							break;
						}
					}
				}
			else{
				if($img){
					$this->db->where('sli_id',$id)
							->update('tbl_slideshow',array(
							'name'=>$this->input->post('name'),
							'image'=>$img['file_name'],
							'url'=>$this->input->post('url')
					));
					}
				else{
					$this->db->where('sli_id',$id)
							->update('tbl_slideshow',array(
							'name'=>$this->input->post('name'),
							'url'=>$this->input->post('url')
					));
					
					}
				
				}
			
			
		}
		
		function show_slideshow(){
			return $this->db->order_by('sli_id','DESC')
							->get('tbl_slideshow')
							->result();
		}
		function remove_image_slideshow($id){
			return $this->db->where('sli_id',$id)
							->get('tbl_slideshow')
							->result();
		}
		function delete_slideshow($id){
		$this->db->where('sli_id',$id)
				->delete('tbl_slideshow');
		}
		
// end slide show
	
	
// company

		//add company========================>
		function set_company($img=false){
			$id=$this->uri->segment(3);
			if($id==false){
					if($img){
						foreach($img as $key){
							$this->db->insert('tbl_company', array(
								'com_name'=>$this->input->post('name'),
								'com_employee_num'=>$this->input->post('com_employee_num'),
								'com_contact_person'=>$this->input->post('com_contact_person'),
								'com_phone'=>$this->input->post('com_phone'),
								'com_fax'=>$this->input->post('com_fax'),
								'com_email'=>$this->input->post('com_email'),
									'com_password'=>md5($this->input->post("com_password")),//password
								'industry_id'=>$this->input->post('indu_id'),
								'type_id'=>$this->input->post('type_id'),
								'loca_id'=>$this->input->post('loca_id'),
								'com_website'=>$this->input->post('com_website'),
								'com_address'=>$this->input->post('com_address'),
								'com_description'=>$this->input->post('editor1'),
								'com_map'=>$this->input->post('com_map'),
								'com_image'=>$img['file_name'],
								'com_keys'=>"null"
							));
							break;
						}
					}
				}
			else{
				if($img){
					if($this->input->post('com_password')==""){
							$this->db->where('com_id',$id)
								->update('tbl_company',array(
								'com_name'=>$this->input->post('name'),
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
									'com_image'=>$img['file_name'],
									'com_keys'=>"null"
							));
						}
						else
						{
							$this->db->where('com_id',$id)
								->update('tbl_company',array(
								'com_name'=>$this->input->post('name'),
									'com_employee_num'=>$this->input->post('com_employee_num'),
									'com_contact_person'=>$this->input->post('com_contact_person'),
									'com_phone'=>$this->input->post('com_phone'),
									'com_fax'=>$this->input->post('com_fax'),
									'com_email'=>$this->input->post('com_email'),
										'com_password'=>md5($this->input->post("com_password")),//password
									'industry_id'=>$this->input->post('indu_id'),
									'type_id'=>$this->input->post('type_id'),
									'loca_id'=>$this->input->post('loca_id'),
									'com_website'=>$this->input->post('com_website'),
									'com_address'=>$this->input->post('com_address'),
									'com_description'=>$this->input->post('editor1'),
									'com_map'=>$this->input->post('com_map'),
									'com_image'=>$img['file_name'],
									'com_keys'=>"null"
							));	
						}
					}
				else{
					if($this->input->post('com_password')==""){
						$this->db->where('com_id',$id)
								->update('tbl_company',array(
								'com_name'=>$this->input->post('name'),
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
									//'com_image'=>$img['file_name']
									'com_keys'=>"null"
						));
					}
					else
					{
						$this->db->where('com_id',$id)
								->update('tbl_company',array(
								'com_name'=>$this->input->post('name'),
									'com_employee_num'=>$this->input->post('com_employee_num'),
									'com_contact_person'=>$this->input->post('com_contact_person'),
									'com_phone'=>$this->input->post('com_phone'),
									'com_fax'=>$this->input->post('com_fax'),
									'com_email'=>$this->input->post('com_email'),
										'com_password'=>md5($this->input->post("com_password")),//password
									'industry_id'=>$this->input->post('indu_id'),
									'type_id'=>$this->input->post('type_id'),
									'loca_id'=>$this->input->post('loca_id'),
									'com_website'=>$this->input->post('com_website'),
									'com_address'=>$this->input->post('com_address'),
									'com_description'=>$this->input->post('editor1'),
									'com_map'=>$this->input->post('com_map'),
									//'com_image'=>$img['file_name']
									'com_keys'=>"null"
						));
					}
					
				}
				
			}
			
			
		}
		
		function show_company(){
			return $this->db->order_by('com_id','DESC')
							->get('tbl_company')
							->result();
		}
		function remove_image_company($id){
			return $this->db->where('com_id',$id)
							->get('tbl_company')
							->result();
		}
		function delete_company($id){
		$this->db->where('com_id',$id)
				->delete('tbl_company');
		}
		
// end company


// job========================>
		
		function show_job() {
			return $this->db->join('tbl_company','tbl_company.com_id=tbl_job.comp_id')
							->join('tbl_function','tbl_function.fun_id=tbl_job.func_id')
							->join('tbl_location','tbl_location.loc_id=tbl_job.loca_id')
							->order_by('job_posted_date','DESC')
							->get('tbl_job')
							->result();	
			
		}
		function show_job_active() {
			return $this->db->join('tbl_company','tbl_company.com_id=tbl_job.comp_id')
							->join('tbl_function','tbl_function.fun_id=tbl_job.func_id')
							->join('tbl_location','tbl_location.loc_id=tbl_job.loca_id')
							//->order_by('job_id','DESC')
							->order_by('job_posted_date','DESC')
							->where('job_role',0)
							->get('tbl_job')
							->result();	
			
		}
		function show_job_disable() {
			return $this->db->join('tbl_company','tbl_company.com_id=tbl_job.comp_id')
							->join('tbl_function','tbl_function.fun_id=tbl_job.func_id')
							->join('tbl_location','tbl_location.loc_id=tbl_job.loca_id')
							//->order_by('job_id','DESC')
							->order_by('job_posted_date','DESC')
							->where('job_role',1)
							->get('tbl_job')
							->result();	
			
		}
		function show_job_delete() {
			return $this->db->join('tbl_company','tbl_company.com_id=tbl_job.comp_id')
							->join('tbl_function','tbl_function.fun_id=tbl_job.func_id')
							->join('tbl_location','tbl_location.loc_id=tbl_job.loca_id')
							//->order_by('job_id','DESC')
							->order_by('job_posted_date','DESC')
							->where('job_role',2)
							->get('tbl_job')
							->result();	
			
		}
		
		function show_reference_number() {
			return $this->db->order_by('job_id','DESC')
							//->MAX('inv_id' + 1)
							->limit(1)
							->get('tbl_job')
							->result();	
			
		}
		
		function insert_job($img = false){
			date_default_timezone_set('Asia/Phnom_Penh');
			$date_num = date('Y-m-d', strtotime(date('Y-m-d')."+".$this->input->post('job_expire_day')." days"));
			$this->db->insert('tbl_job', array(
				'comp_id'=>$this->input->post('comp_id'),
				'indu_id'=>$this->input->post('indu_id'),
				'func_id'=>$this->input->post('func_id'),
				'loca_id'=>$this->input->post('loca_id'),
				'term_id'=>$this->input->post('term_id'),
				'leve_id'=>$this->input->post('leve_id'),
				'sala_id'=>$this->input->post('sala_id'),
				
				'type_id'=>$this->input->post('type_id'),
				
				'job_description'=>$this->input->post('editor1'),
				'job_requirement'=>$this->input->post('editor2'),
				'job_other'=>$this->input->post('editor3'),
				'job_experience'=>$this->input->post('job_experience'),
				'job_name'=>$this->input->post('job_name'),
				'job_hire'=>$this->input->post('job_hire'),
				'job_sex_id'=>$this->input->post('sex_id'),
				'job_age'=>$this->input->post('job_age'),
				'job_qualification'=>$this->input->post('job_qualification'),
				'job_language'=>$this->input->post('job_language'),
				'job_closing_date'=>$this->input->post('job_closing_date'),
				'job_posted_date'=>$this->input->post('job_posted_date'),
				
				'job_expire_date'=>$this->input->post('job_posted_date'),
				'job_expire_day'=>$date_num,
				//'job_reference'=>random_num(8),
				'job_reference'=>$this->input->post('job_reference'),
				
				'job_contact_person'=>$this->input->post('job_contact_person'),
				'job_contact_email'=>$this->input->post('job_contact_email'),
				'job_contact_phone'=>$this->input->post('job_contact_phone'),
				'job_image'=>$img['file_name'],
				
				'job_new_urgent'=>$this->input->post('job_new_urgent'),
				'job_status_admin' => $this->input->post('admin_status')
			));
		}
		
		function where_select_job($id){
			return $this->db->where('job_id',$id)
							->get('tbl_job')
							->result();
		}
		
		function edit_job($img = false){
			date_default_timezone_set('Asia/Phnom_Penh');
			$id = $this->uri->segment(3);
			$num_date = date('Y-m-d', strtotime($this->input->post('job_expire_day')."+".$this->input->post('job_period')." days"));
			if($img){
				$this->db->where('job_id',$id)
					->update('tbl_job',array(
					'comp_id'=>$this->input->post('comp_id'),
					'indu_id'=>$this->input->post('indu_id'),
					'func_id'=>$this->input->post('func_id'),
					'loca_id'=>$this->input->post('loca_id'),
					'term_id'=>$this->input->post('term_id'),
					'leve_id'=>$this->input->post('leve_id'),
					'sala_id'=>$this->input->post('sala_id'),
					
					'type_id'=>$this->input->post('type_id'),
					
					'job_description'=>$this->input->post('editor1'),
					'job_requirement'=>$this->input->post('editor2'),
					'job_other'=>$this->input->post('editor3'),
					'job_experience'=>$this->input->post('job_experience'),
					'job_name'=>$this->input->post('job_name'),
					'job_hire'=>$this->input->post('job_hire'),
					'job_sex_id'=>$this->input->post('sex_id'),
					'job_age'=>$this->input->post('job_age'),
					'job_qualification'=>$this->input->post('job_qualification'),
					'job_language'=>$this->input->post('job_language'),
					'job_closing_date'=>$this->input->post('job_closing_date'),
					
					//'job_status'=>$this->input->post('job_status'),
					
					'job_expire_day'=>$num_date,
					
					'job_contact_person'=>$this->input->post('job_contact_person'),
					'job_contact_email'=>$this->input->post('job_contact_email'),
					'job_contact_phone'=>$this->input->post('job_contact_phone'),
					'job_image'=>$img['file_name'],
					'job_new_urgent'=>$this->input->post('job_new_urgent')
					
					
				));
			}else{
								$this->db->where('job_id',$id)
					->update('tbl_job',array(
					'comp_id'=>$this->input->post('comp_id'),
					'indu_id'=>$this->input->post('indu_id'),
					'func_id'=>$this->input->post('func_id'),
					'loca_id'=>$this->input->post('loca_id'),
					'term_id'=>$this->input->post('term_id'),
					'leve_id'=>$this->input->post('leve_id'),
					'sala_id'=>$this->input->post('sala_id'),
					
					'type_id'=>$this->input->post('type_id'),
					
					'job_description'=>$this->input->post('editor1'),
					'job_requirement'=>$this->input->post('editor2'),
					'job_other'=>$this->input->post('editor3'),
					'job_experience'=>$this->input->post('job_experience'),
					'job_name'=>$this->input->post('job_name'),
					'job_hire'=>$this->input->post('job_hire'),
					'job_sex_id'=>$this->input->post('sex_id'),
					'job_age'=>$this->input->post('job_age'),
					'job_qualification'=>$this->input->post('job_qualification'),
					'job_language'=>$this->input->post('job_language'),
					'job_closing_date'=>$this->input->post('job_closing_date'),
					
					//'job_status'=>$this->input->post('job_status'),
					
					'job_expire_day'=>$num_date,
					
					'job_contact_person'=>$this->input->post('job_contact_person'),
					'job_contact_email'=>$this->input->post('job_contact_email'),
					'job_contact_phone'=>$this->input->post('job_contact_phone'),
					'job_new_urgent'=>$this->input->post('job_new_urgent')
					
					
					
				));
			}
		}
		
		function delete_job($id){
		$this->db->where('job_id',$id)
				->delete('tbl_job');
		}
		

//end job========================>
	
//employee	
	function show_employee(){
			return $this->db->order_by('emp_id','DESC')
							->get('tbl_employee')
							->result();
		}
		
	function delete_employee($id){
		$this->db->where('emp_id',$id)
				->delete('tbl_employee');
		}
	
//end employee

// Event

		//add event========================>
		function set_event($img=false){
			$id=$this->uri->segment(3);
			if($id==false){
					if($img){
						foreach($img as $key){
							$this->db->insert('tbl_event', array(
								'eve_name'=>$this->input->post('name'),
								'eve_image'=>$img['file_name'],
								'eve_date'=>$this->input->post('date'),
								'eve_description'=>$this->input->post('editor1')
							));
							break;
						}
					}
				}
			else{
				if($img){
					$this->db->where('eve_id',$id)
							->update('tbl_event',array(
							'eve_name'=>$this->input->post('name'),
							'eve_image'=>$img['file_name'],
							'eve_date'=>$this->input->post('date'),
							'eve_description'=>$this->input->post('editor1')
					));
					}
				else{
					$this->db->where('eve_id',$id)
							->update('tbl_event',array(
							'eve_name'=>$this->input->post('name'),
							'eve_date'=>$this->input->post('date'),
							'eve_description'=>$this->input->post('editor1')
					));
					
					}
				
				}
			
			
		}
		
		function show_event(){
			return $this->db->order_by('eve_id','DESC')
							->get('tbl_event')
							->result();
		}
		function remove_image_event($id){
			return $this->db->where('eve_id',$id)
							->get('tbl_event')
							->result();
		}
		function delete_event($id){
		$this->db->where('eve_id',$id)
				->delete('tbl_event');
		}
		
// end event

// news

		//add news========================>
		function set_news($img=false){
			$id=$this->uri->segment(3);
			if($id==false){
					if($img){
						foreach($img as $key){
							$this->db->insert('tbl_news', array(
								'new_name'=>$this->input->post('name'),
								'new_image'=>$img['file_name'],
								'new_date'=>$this->input->post('date'),
								'new_description'=>$this->input->post('editor1')
							));
							break;
						}
					}
				}
			else{
				if($img){
					$this->db->where('new_id',$id)
							->update('tbl_news',array(
							'new_name'=>$this->input->post('name'),
							'new_image'=>$img['file_name'],
							'new_date'=>$this->input->post('date'),
							'new_description'=>$this->input->post('editor1')
					));
					}
				else{
					$this->db->where('new_id',$id)
							->update('tbl_news',array(
							'new_name'=>$this->input->post('name'),
							'new_date'=>$this->input->post('date'),
							'new_description'=>$this->input->post('editor1')
					));
					
					}
				
				}
			
			
		}
		
		function show_news(){
			return $this->db->order_by('new_id','DESC')
							->get('tbl_news')
							->result();
		}
		function remove_image_news($id){
			return $this->db->where('new_id',$id)
							->get('tbl_news')
							->result();
		}
		function delete_news($id){
		$this->db->where('new_id',$id)
				->delete('tbl_news');
		}
		
// end slide show


		//setting ========================>
	
		function show_setting() {
			return $this->db->order_by('set_id','DESC')
							->get('tbl_setting')
							->result();	
			
		}	
				
		function edit_setting($img=false){
			if($img){
			$this->db->update('tbl_setting',array(
				
				
				
				'image'=>$img['file_name'],
				'login_employee_text'=>$this->input->post('login_employee_text'),
				'login_employer_text'=>$this->input->post('login_employer_text'),
				'apply_job_text'=>$this->input->post('apply_job_text')
				));
			}
			else{
				$this->db->update('tbl_setting',array(
				
				
				'login_employee_text'=>$this->input->post('login_employee_text'),
				'login_employer_text'=>$this->input->post('login_employer_text'),
				'apply_job_text'=>$this->input->post('apply_job_text')
				));
					
					}
		}
		function remove_image_logo(){
			return $this->db->get('tbl_setting')
							->result();
		}
		

//end setting=======================>

//main category========================>
		function insert_maincategory(){
			$this->db->insert('tbl_maincategory', array(
				'name'=>$this->input->post('name')
			));
		}
		function show_maincategory() {
			return $this->db->order_by('mai_id','DESC')
							->get('tbl_maincategory')
							->result();	
			
		}
		function where_select_maincategory($id){
			return $this->db->where('mai_id',$id)
							->get('tbl_maincategory')
							->result();
		}
		
		function edit_maincategory($id){
			$this->db->where('mai_id',$id)
				->update('tbl_maincategory',array(
				'name'=>$this->input->post('name')
			));
		}
		
		function delete_maincategory($id){
		$this->db->where('mai_id',$id)
				->delete('tbl_maincategory');
		}
//main category========================>

// category========================>
		function insert_category(){
			$this->db->insert('tbl_category', array(
				'main_id'=>$this->input->post('main_id'),
				'cat_name'=>$this->input->post('name')
			));
		}
		
		function show_category() {
			return $this->db->join('tbl_maincategory','tbl_maincategory.mai_id=tbl_category.main_id')
							->order_by('cat_id','DESC')
							->get('tbl_category')
							->result();	
			
		}
		function show_main_for_textbox() {
			return $this->db->order_by('mai_id','DESC')
							->get('tbl_maincategory')
							->result();	
		}
		
		function where_select_category($id){
			return $this->db->where('cat_id',$id)
							->get('tbl_category')
							->result();
		}
		
		function edit_category($id){
			$this->db->where('cat_id',$id)
				->update('tbl_category',array(
				'cat_name'=>$this->input->post('name'),
				'main_id'=>$this->input->post('main_id')
			));
		}
		
		function delete_category($id){
		$this->db->where('cat_id',$id)
				->delete('tbl_category');
		}
//end category=======================>	


// sub_category ========================>		
		function show_sub_category(){							
			return $this->db
			//->join('tbl_category','tbl_category.cat_id=tbl_sub_category.cate_id')
			//->order_by('pro_id','DESC')
				->get('tbl_sub_category')
				->result();	
		}
		

		function select_where_maincategory() {
			return $this->db
							->order_by('mai_id','DESC')
							->get('tbl_maincategory')
							->result();
		}
		
		function select_where_category() {
			return $this->db
							->order_by('cat_id','DESC')
							->get('tbl_category')
							->result();	
			
		}
		
		function where_select_sub_category($id){
			return $this->db->where('sub_cat_id',$id)
							->get('tbl_sub_category')
							->result();
		}
		
		//add sub_category ========================>
		function set_sub_category(){
			
			$id=$this->uri->segment(3);
			if($id==false){
					
							$this->db->insert('tbl_sub_category', array(
								'main_id'=>$this->input->post('main_id'),
								'cate_id'=>$this->input->post('cate_id'),
								'sub_cat_name'=>$this->input->post('sub_cat_name'),
								'random_number'=>random_num(7)
								
							));
			}
			else{
				if($this->input->post('main_id')=="null"){

						$this->db->where('sub_cat_id',$id)
								->update('tbl_sub_category',array(
								'sub_cat_name'=>$this->input->post('sub_cat_name'),

						));
				
				
				}else{

						$this->db->where('sub_cat_id',$id)
								->update('tbl_sub_category',array(
								'main_id'=>$this->input->post('main_id'),
								'cate_id'=>$this->input->post('cate_id'),
								'sub_cat_name'=>$this->input->post('sub_cat_name')
								
						
						));
	
							
				}
				
			}
			
			
		}
		

		function delete_sub_category($id){
		$this->db->where('sub_cat_id',$id)
				->delete('tbl_sub_category');
		}
		
//
//		function show_category_pro($id_menu) {
//			return $this->db->where('main_id',$id_menu)
//						    ->order_by('cat_name','DESC')
//							->get('tbl_category')
//							->result();	
//			
//		}

// end sub_category ========================>


//Start Product===============================>
	function set_page($img = false){
		$id = $this->uri->segment(3);
		if($id == false){
			if($img){
				$this->db->insert('tbl_page',array(
					'pag_name'=>$this->input->post('pag_name'),
					'pag_description'=>$this->input->post('pag_description'),
					'pag_image'=>$img['file_name'],
					'cate_or_random_id'=>$this->input->post('cate_id'),
					'main_id'=>$this->input->post('main_id'),
					


				));
			}else{
				$this->db->insert('tbl_page',array(
					'pag_name'=>$this->input->post('pag_name'),
					'pag_description'=>$this->input->post('pag_description'),
					//'pag_image'=>$img['file_name'],
					'cate_or_random_id'=>$this->input->post('cate_id'),
					'main_id'=>$this->input->post('main_id'),
			
				));
			}
		}else{
			if($this->input->post('main_id')=="null"){
				if($img){
					$this->db->where('pag_id',$id)
						 ->update('tbl_page',array(
						'pag_name'=>$this->input->post('pag_name'),
						'pag_description'=>$this->input->post('pag_description'),
						'pag_image'=>$img['file_name'],
						//'cate_or_random_id'=>$get_main_id[0],
						//'main_id'=>$get_main_id[1],
			

					));
				}else{
					$this->db->where('pag_id',$id)
						 ->update('tbl_page',array(
						'pag_name'=>$this->input->post('pag_name'),
						'pag_description'=>$this->input->post('pag_description'),
						//'pag_image'=>$img['file_name'],
						//'cate_or_random_id'=>$get_main_id[0],
						//'main_id'=>$get_main_id[1],
		

					));
				}
			}else{
				if($img){
					$this->db->where('pag_id',$id)
						 ->update('tbl_page',array(
						'pag_name'=>$this->input->post('pag_name'),
						'pag_description'=>$this->input->post('pag_description'),
						'pag_image'=>$img['file_name'],
						'cate_or_random_id'=>$this->input->post('cate_id'),
						'main_id'=>$this->input->post('main_id'),
						


						//'pdf'=>$img['1']['file_name'],
					));
				}else{
					$this->db->where('pag_id',$id)
						 ->update('tbl_page',array(
						'pag_name'=>$this->input->post('pag_name'),
						'pag_description'=>$this->input->post('pag_description'),
						//'pag_image'=>$img['file_name'],
						'cate_or_random_id'=>$this->input->post('cate_id'),
						'main_id'=>$this->input->post('main_id'),


					));
				}
			}
		}
	}
	
	function show_page(){

			return $this->db->order_by('pag_id','DESC')
							->get('tbl_page')
							->result();

	}
	
	function where_select_page($id){
			return $this->db->where('pag_id',$id)
							->get('tbl_page')
							->result();
		}
	
	function remove_image_page($id){
			return $this->db->where('pag_id',$id)
							->get('tbl_page')
							->result();
		}
	
	function delete_page($id){
		$this->db->where('pag_id',$id)
				->delete('tbl_page');
	}
	
	function show_category_pro($id_menu) {
			return $this->db->where('main_id',$id_menu)
						    ->order_by('cat_name','DESC')
							->get('tbl_category')
							->result();	
			
		}
	


	
	//End Page===============================>
	
	
// highlight

		//add highlight========================>
		function set_highlight($img=false){
			$id=$this->uri->segment(3);
			if($id==false){
					if($img){
						foreach($img as $key){
							$this->db->insert('tbl_highlight', array(
								'hig_name'=>$this->input->post('name'),
								'hig_image'=>$img['file_name'],
								'hig_description'=>$this->input->post('editor1'),
								'hig_link'=>$this->input->post('link')
							));
							break;
						}
					}
				}
			else{
				if($img){
					$this->db->where('hig_id',$id)
							->update('tbl_highlight',array(
							'hig_name'=>$this->input->post('name'),
							'hig_image'=>$img['file_name'],
							'hig_description'=>$this->input->post('editor1'),
							'hig_link'=>$this->input->post('link')
					));
					}
				else{
					$this->db->where('hig_id',$id)
							->update('tbl_highlight',array(
							'hig_name'=>$this->input->post('name'),
							'hig_description'=>$this->input->post('editor1'),
							'hig_link'=>$this->input->post('link')
					));
					
					}
				
				}
			
			
		}
		
		function show_highlight(){
			return $this->db->order_by('hig_id','DESC')
							->get('tbl_highlight')
							->result();
		}
		function remove_image_highlight($id){
			return $this->db->where('hig_id',$id)
							->get('tbl_highlight')
							->result();
		}
		function delete_highlight($id){
		$this->db->where('hig_id',$id)
				->delete('tbl_highlight');
		}
		
// end highlight

	//Contact Us=============================>
	function select_contactus($id = false){
		if($id == false){
			return $this->db->get('tbl_contact_us')->result();
		}else{
			return $this->db->where('cu_id',$id)
						->get('tbl_contact_us')
						->result();
		}
	}	
	
	function action_contactus($id = false){
		if($id){
			$this->db->where('cu_id',$id)
				->update('tbl_contact_us',array(
				'map'=>$this->input->post('map'),
				'cu_text'=>$this->input->post('text')
			));
		}//else{
//			$this->db->insert('tbl_contact_us',array(
//				'cu_text'=>$this->input->post('text')
//			));
//		}
	}
	
	//function delete_contactus(){
//		$this->db->where('cu_id',pde($id))
//			->delete('tbl_contact_us');
//	}
	//End Contact Us=========================>
	
	
	//Contact Us=============================>
	function select_instruction($id = false){
		if($id == false){
			return $this->db->get('tbl_instruction')->result();
		}else{
			return $this->db->where('ins_id',$id)
						->get('tbl_instruction')
						->result();
		}
	}	
	
	function action_instruction($id = false){
		if($id){
			$this->db->where('ins_id',$id)
				->update('tbl_instruction',array(
				'ins_description'=>$this->input->post('ins_description')
			));
		}//else{
//			$this->db->insert('tbl_contact_us',array(
//				'cu_text'=>$this->input->post('text')
//			));
//		}
	}
	
	//function delete_instruction(){
//		$this->db->where('cu_id',pde($id))
//			->delete('tbl_contact_us');
//	}
	//End Contact Us=========================>
	
// advertising

		//add advertising========================>
function set_advertising($img=false){
			$id=$this->uri->segment(3);
			if($id==false){
					if($img){
						foreach($img as $key){
							$this->db->insert('tbl_advertising', array(
								'adv_status'=>$this->input->post('adv_status'),
								'adv_url'=>$this->input->post('adv_url'),
								'adv_image'=>$img['file_name'],
								
							));
							break;
						}
					}
				}
			else{
				if($img){
					$this->db->where('adv_id',$id)
							->update('tbl_advertising',array(
							'adv_status'=>$this->input->post('adv_status'),
							'adv_image'=>$img['file_name'],
							'adv_url'=>$this->input->post('adv_url'),
					));
					}
				else{
					$this->db->where('adv_id',$id)
							->update('tbl_advertising',array(
							'adv_status'=>$this->input->post('adv_status'),
							'adv_url'=>$this->input->post('adv_url'),
						//	'adv_image'=>$img['file_name'],
					));
					
					}
				
				}
			
			
		}
		
		function show_advertising(){
			return $this->db->order_by('adv_id','DESC')
							->get('tbl_advertising')
							->result();
		}
		function remove_image_advertising($id){
			return $this->db->where('adv_id',$id)
							->get('tbl_advertising')
							->result();
		}
		function delete_advertising($id){
		$this->db->where('adv_id',$id)
				->delete('tbl_advertising');
		}
		
// end advertising


// advertising_maincategory

		//add advertising_maincategory========================>
function set_advertising_maincategory($img=false){
			$id=$this->uri->segment(3);
			if($id==false){
					if($img){
						foreach($img as $key){
							$this->db->insert('tbl_advertising_maincategory', array(
								'adv_maincategory_id'=>$this->input->post('adv_maincategory_id'),
								'adv_main_image'=>$img['file_name'],
								'adv_main_url'=>$this->input->post('adv_url'),
								
							));
							break;
						}
					}
				}
			else{
				if($img){
					$this->db->where('adv_main_id',$id)
							->update('tbl_advertising_maincategory',array(
							'adv_maincategory_id'=>$this->input->post('adv_maincategory_id'),
							'adv_main_image'=>$img['file_name'],
							'adv_main_url'=>$this->input->post('adv_url'),
					));
					}
				else{
					$this->db->where('adv_main_id',$id)
							->update('tbl_advertising_maincategory',array(
							'adv_maincategory_id'=>$this->input->post('adv_maincategory_id'),
							//'adv_main_image'=>$img['file_name'],
							'adv_main_url'=>$this->input->post('adv_url'),
					));
					
					}
				
				}
			
			
		}
		
		function show_advertising_maincategory(){
			return $this->db->order_by('adv_main_id','DESC')
							->get('tbl_advertising_maincategory')
							->result();
		}
		function remove_image_advertising_maincategory($id){
			return $this->db->where('adv_main_id',$id)
							->get('tbl_advertising_maincategory')
							->result();
		}
		function delete_advertising_maincategory($id){
		$this->db->where('adv_main_id',$id)
				->delete('tbl_advertising_maincategory');
		}
		
// end advertising_maincategory


//////////////////////////////////////////////////////////////////////////////////
// employee applied jog
function show_employee_apply_job_list() {
			return $this->db->order_by('app_id','DESC')
							->get('tbl_apply_job')
							->result();	
			
		}
function show_all_employee(){
		return $this->db
				//->where("emp_id",$this->session->userdata("uid"))
				->get("tbl_employee")
				->result();	
	}

function show_all_company(){
			return $this->db->order_by('com_id','DESC')
							->get('tbl_company')
							->result();
		}
function show_all_job(){
			return $this->db->order_by('job_id','DESC')
							->get('tbl_job')
							->result();
		}

function show_all_employee_cv() {
			return $this->db->order_by('ecv_id','DESC')
							//->where('empl_id',$this->session->userdata("uid"))
							->get('tbl_employee_cv')
							->result();	
			
		}

function show_all_employee_cover_letter() {
			return $this->db->order_by('cov_id','DESC')
							//->where('empl_id',$this->session->userdata("uid"))
							->get('tbl_cover_letter')
							->result();	
			
		}





function show_company_logo($id){
			$this->db->where('com_id', $id)
				->update('tbl_company', array(
					'com_status'=>0
				));		
		}
function hide_company_logo($id){
			$this->db->where('com_id', $id)
				->update('tbl_company', array(
					'com_status'=>1
				));		
		}

function show_employee_cv() {
			return $this->db->order_by('cv_posted_date','DESC')
							//->where('empl_id',$this->session->userdata("uid"))
							->get('tbl_cv')
							->result();	
			
		}

function select_status_admin(){
	return $this->db->get('tbl_status_admin')->result();
}

function update_public(){
	$this->db->update('tbl_status_admin',array(
		'status' => 1
	));
}

function update_un_public(){
	$this->db->update('tbl_status_admin',array(
		'status' => 0
	));
}

function disable_job($id){
			$this->db->where('job_id', $id)
				->update('tbl_job', array(
					'job_status_admin'=>0
				));		
		}
function enable_job($id){
			$this->db->where('job_id', $id)
				->update('tbl_job', array(
					'job_status_admin'=>1
				));		
		}	
function select_status_cvadmin(){
	return $this->db->get('tbl_status_cv_admin')->result();
}

function update_cvpublic(){
	$this->db->update('tbl_status_cv_admin',array(
		'cv_status_name' => 1
	));
}

function update_un_cvpublic(){
	$this->db->update('tbl_status_cv_admin',array(
		'cv_status_name' => 0
	));
}

function disable_cv($id){
			$this->db->where('cv_id', $id)
				->update('tbl_cv', array(
					'status_admin_cv'=>0
				));		
		}
function enable_cv($id){
			$this->db->where('cv_id', $id)
				->update('tbl_cv', array(
					'status_admin_cv'=>1
				));		
		}	


	}
?>