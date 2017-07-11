<?php
	class Company_model extends CI_Model
	{




		//<================== employer profile ===============>
	

		
	function remove_image_profile_employer(){
			return $this->db->where('com_id',$this->session->userdata("uid"))
							->get('tbl_company')
							->result();
		}
	function select_profile_employer(){
		return $this->db
				->where("com_id",$this->session->userdata("uid"))
				->get("tbl_company")
				->result();	
	}
	function insert_img_profile_employer($img = false){
			if($img){
				foreach($img as $key){
					$this->db
						->where("com_id",$this->session->userdata("uid"))
						->update("tbl_company",array(
						"com_image"=>$img['file_name']
					));
				}
			}
		}
		
		
		
	function update_personal_info_employer(){
		if($this->input->post('com_password')==""):
			$this->db
			 		->where("com_id",$this->session->userdata("uid"))
			 		->update("tbl_company",array(
						'com_name'=>$this->input->post('name'),
						//'com_password'=>md5($this->input->post("com_password")),
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
					));
		   else:
		   	 $this->db
			 		->where("com_id",$this->session->userdata("uid"))
			 		->update("tbl_company",array(
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
					));
		   endif;
		}
		
////////////////////////////////////////////////////////////////////////////////////////////////////////////


function show_job_list() {
			return $this->db->order_by('job_posted_date','DESC')
							->where('comp_id',$this->session->userdata("uid"))
							->where('job_role !=', 2) 
							->get('tbl_job')
							->result();	
			
		}

function where_select_job($id){
			return $this->db->where('job_id',$id)
							->get('tbl_job')
							->result();
		}
function set_delete_job($id){
		$this->db->where('job_id',$id)
				->update('tbl_job', array(
					'job_role'=>2
				));	
		}

function disable_job($id){
			$this->db->where('job_id', $id)
				->update('tbl_job', array(
					'job_role'=>0
				));		
		}
function enable_job($id){
			$this->db->where('job_id', $id)
				->update('tbl_job', array(
					'job_role'=>1
				));		
		}	

function set_job_renew($id){
		date_default_timezone_set('Asia/Phnom_Penh');
			$this->db->where('job_id', $id)
				->update('tbl_job', array(
					'job_posted_date'=>Date('Y-m-d H:i:s')
				));		
		}		


//////////////////////////////////////////////////////////////////////////////////

function show_employee_apply_job_list() {
			return $this->db->order_by('app_id','DESC')
							//->join('tbl_company','tbl_company.com_id=tbl_job.comp_id')
							//->join('tbl_job','tbl_job.job_id=tbl_apply_job.jobs_id')
							//->where('comp_id',$this->session->userdata("uid"))
							//->where('job_role !=', 2) 
							->get('tbl_apply_job')
							->result();	
			
		}
function show_all_employee(){
		return $this->db
				//->where("emp_id",$this->session->userdata("uid"))
				->get("tbl_employee")
				->result();	
	}


function show_all_employee_cv() {
			return $this->db->order_by('ecv_id','DESC')
							//->where('empl_id',$this->session->userdata("uid"))
							->get('tbl_employee_cv')
							->result();	
			
		}

function show_all_employee_cv_where() {
			return $this->db->order_by('ecv_id','DESC')
							->where('func_id',$this->input->post("func_id"))
							->get('tbl_employee_cv')
							->result();	
			
		}

function show_all_employee_cover_letter() {
			return $this->db->order_by('cov_id','DESC')
							//->where('empl_id',$this->session->userdata("uid"))
							->get('tbl_cover_letter')
							->result();	
			
		}

function delete_apply_job($id){
		$this->db->where('app_id',$id)
				->delete('tbl_apply_job');
		}
		
		
		

		
		
		


}
	
?>