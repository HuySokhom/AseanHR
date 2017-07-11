<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Companys extends CI_Controller {


	
	public function login_employer(){
		$data['title'] = 'Log in';
		$data['show_setting']=$this->Admin_model->show_setting();
		$data['show_maincategory'] = $this->View_model->show_maincategory();
		$data['show_category'] = $this->View_model->show_category();
		$data['show_sub_category'] = $this->View_model->show_sub_category();
		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
		$data['show_job_all'] = $this->View_model->show_job_all();
		$keys = random_multi(6);
		$this->code = $keys;
		$this->session->set_userdata(array(
			"check_access"=>$keys
		));
		$data['show_setting']=$this->Admin_model->show_setting();
	
		$this->load->view('cview/header', $data);
		$this->load->view('company/login_employer', $data);
		$this->load->view('cview/footer');
		
	}
	
		//<=================     Profile       =======>
		function profile(){
		$data['title'] = 'Profile';
		$data['show_setting']=$this->Admin_model->show_setting();
		$data['show_maincategory'] = $this->View_model->show_maincategory();
		$data['show_category'] = $this->View_model->show_category();
		$data['show_sub_category'] = $this->View_model->show_sub_category();
		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
		
		$data['show_job_all'] = $this->View_model->show_job_all();
		$data['select_profile']=$this->Company_model->select_profile_employer();
	
		
		$this->load->view('cview/header', $data);
		
		$this->load->view('company/profile_employer',$data);
		
		$this->load->view('cview/footer');
		
	
		}
			//add img==================>

	function uploadimg(){
	if($this->input->post('add')){
		$this->load->library('upload');
		$config = array(
					'upload_path'=>'./image/image_company',
					'allowed_types' => 'png|jpg|gif|jpeg|PNG|JPG|GIF|JPEG',
					'encrypt_name' => true,
					'overwrite' => false
		);
		$this->upload->initialize($config);
			
				//if($this->upload->do_upload()==""){
//					$this->session->set_flashdata(array("already"=>"Please browse your image...!"));
//					$data=$this->upload->data();
//				redirect('Login_controller/profile');	
//				
//				}
//				else{
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$remove_img=$this->Company_model->remove_image_profile_employer();
					foreach($remove_img as $remove){
						@unlink('./image/image_company/'.$remove->com_image);	
					}
					
					$this->Company_model->insert_img_profile_employer($data);
					redirect('Companys/account_setting');	
				
					
				//}
				}
	  }
	}
		
		
				//end img ==================>
				
				
				
				
		function edit_profile_employer(){
			$data['title'] = 'Profile';
			$data['show_setting']=$this->Admin_model->show_setting();
			$data['show_maincategory'] = $this->View_model->show_maincategory();
			$data['show_category'] = $this->View_model->show_category();
			$data['show_sub_category'] = $this->View_model->show_sub_category();
			$data['show_job_all'] = $this->View_model->show_job_all();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			$data['select_profile']=$this->Company_model->select_profile_employer();
			$data['show_company']=$this->Admin_model->show_company();
			$data['show_industry']=$this->Admin_model->show_industry();
			$data['show_type']=$this->Admin_model->show_type();
			$data['show_location']=$this->Admin_model->show_location();
				
			$this->load->view('cview/header', $data);
			$this->load->view('company/edit_profile_employer',$data);	
			$this->load->view('cview/footer');
	
		}
		
		function update_profile(){
	
				
			$this->Company_model->update_personal_info_employer();
			redirect('Companys/account_setting');
		
	
		}
		

		function register_employer(){
			$data['title'] = 'Register';
			$data['show_setting']=$this->Admin_model->show_setting();
			$data['show_maincategory'] = $this->View_model->show_maincategory();
			$data['show_category'] = $this->View_model->show_category();
			$data['show_sub_category'] = $this->View_model->show_sub_category();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			$data['show_job_all'] = $this->View_model->show_job_all();
			$data['show_company']=$this->Admin_model->show_company();
			$data['show_industry']=$this->Admin_model->show_industry();
			$data['show_type']=$this->Admin_model->show_type();
			$data['show_location']=$this->Admin_model->show_location();

			$this->load->view('cview/header', $data);
			$this->load->view('company/register_employer', $data);	
			$this->load->view('cview/footer');
	
		}
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function employer_center(){
			$data['title'] = 'Employer Center';
			$data['show_setting']=$this->Admin_model->show_setting();
			$data['show_maincategory'] = $this->View_model->show_maincategory();
			$data['show_category'] = $this->View_model->show_category();
			$data['show_sub_category'] = $this->View_model->show_sub_category();
			$data['show_job_all'] = $this->View_model->show_job_all();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			$data['show_job_list']=$this->Company_model->show_job_list();
			$data['show_job_all'] = $this->View_model->show_job_all();
			$this->load->view('cview/header', $data);	
			$this->load->view('company/employer_center', $data);	
			$this->load->view('cview/footer');
	
		}
		
function add_job(){
			$data['title'] = 'Add Job';
			$data['show_setting']=$this->Admin_model->show_setting();
			$data['show_maincategory'] = $this->View_model->show_maincategory();
			$data['show_category'] = $this->View_model->show_category();
			$data['show_sub_category'] = $this->View_model->show_sub_category();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			$data['show_job_all'] = $this->View_model->show_job_all();
			$data['get_slider'] = $this->Admin_model->show_slideshow();
			
			$data['select_profile']=$this->Company_model->select_profile_employer();
			
			$data['show_function'] = $this->View_model->show_function();
			$data['show_industry'] = $this->View_model->show_industry();
			$data['show_location'] = $this->View_model->show_location();
			$data['show_level'] = $this->View_model->show_level();
			$data['show_salary'] = $this->View_model->show_salary();
			$data['show_term'] = $this->View_model->show_term();
			$data['show_company'] = $this->Admin_model->show_company();
			$data['show_type'] = $this->Admin_model->show_type();
			$data['select_status_admin'] = $this->Admin_model->select_status_admin();
			

			$this->load->view('cview/header', $data);
			//$this->load->view('cview/slide', $data);
			$this->load->view('company/add_job', $data);	
			$this->load->view('cview/footer');
	
		}

	function insert_job(){
		$this->load->library('upload');
		$config = array(
			'upload_path'=>"./image/alert_img",
			'allowed_types'=>"jpg|png|gif|jpeg|JPG|PNG|GIF|JPEG",
			'encrypt_name'=>true,
			'overwrite'=>false
		);
		$this->upload->initialize($config);
		if($this->upload->do_upload()){
			$data = $this->upload->data();
			$this->Admin_model->insert_job($data);
			redirect('Companys/employer_center');
		}else{
			$this->Admin_model->insert_job();
			redirect('Companys/employer_center');
		}
		
	}

function show_edit_job($id){
			$data['title'] = 'Edit Job';
			$data['show_setting']=$this->Admin_model->show_setting();
			$data['show_maincategory'] = $this->View_model->show_maincategory();
			$data['show_category'] = $this->View_model->show_category();
			$data['show_sub_category'] = $this->View_model->show_sub_category();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			$data['show_job_all'] = $this->View_model->show_job_all();
			$data['select_profile']=$this->Company_model->select_profile_employer();
			$data['get_slider'] = $this->Admin_model->show_slideshow();
			$data['show_function'] = $this->View_model->show_function();
			$data['show_industry'] = $this->View_model->show_industry();
			$data['show_location'] = $this->View_model->show_location();
			$data['show_level'] = $this->View_model->show_level();
			$data['show_salary'] = $this->View_model->show_salary();
			$data['show_term'] = $this->View_model->show_term();
			$data['show_company'] = $this->Admin_model->show_company();
			
			$data['show_edit_job'] =$this->Company_model->where_select_job($id);
			
			$data['show_type'] = $this->Admin_model->show_type();
			
			

			$this->load->view('cview/header', $data);	
			//$this->load->view('cview/slide', $data);
			$this->load->view('company/show_edit_job', $data);	
			$this->load->view('cview/footer');
	
		}		
	function show_copy_job($id){
			$data['title'] = 'Copy Job';
			$data['show_setting']=$this->Admin_model->show_setting();
			$data['show_maincategory'] = $this->View_model->show_maincategory();
			$data['show_category'] = $this->View_model->show_category();
			$data['show_sub_category'] = $this->View_model->show_sub_category();
			$data['show_job_all'] = $this->View_model->show_job_all();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			$data['select_profile']=$this->Company_model->select_profile_employer();
			$data['get_slider'] = $this->Admin_model->show_slideshow();
			$data['show_function'] = $this->View_model->show_function();
			$data['show_industry'] = $this->View_model->show_industry();
			$data['show_location'] = $this->View_model->show_location();
			$data['show_level'] = $this->View_model->show_level();
			$data['show_salary'] = $this->View_model->show_salary();
			$data['show_term'] = $this->View_model->show_term();
			$data['show_company'] = $this->Admin_model->show_company();
			
			$data['show_edit_job'] =$this->Company_model->where_select_job($id);
			
			$data['show_type'] = $this->Admin_model->show_type();
			$data['select_status_admin'] = $this->Admin_model->select_status_admin();
			

			$this->load->view('cview/header', $data);	
			//$this->load->view('cview/slide', $data);
			$this->load->view('company/show_copy_job', $data);	
			$this->load->view('cview/footer');
	
		}
		
		
	function edit_job($id){
		$this->load->library('upload');
		$config = array(
			'upload_path'=>"./image/alert_img",
			'allowed_types'=>"jpg|png|gif|jpeg|JPG|PNG|GIF|JPEG",
			'encrypt_name'=>true,
			'overwrite'=>false
		);
		$this->upload->initialize($config);
		if($this->upload->do_upload()){
			$data = $this->upload->data();
			$data['show_edit_job'] =$this->Company_model->where_select_job($id);
			foreach($data['show_edit_job'] as $row){
				@unlink('image/alert_img/'.$row->job_image);
			}
			$this->Admin_model->edit_job($data);
			redirect('Companys/employer_center');
		}else{
			$this->Admin_model->edit_job($data);
			redirect('Companys/employer_center');
		}
	}		


function set_delete_job($id){
				$this->Company_model->set_delete_job($id);
				redirect('Companys/employer_center');	
		}
	
function set_job_disable($id=false, $act=false){
	if($act==0){
			$this->Company_model->disable_job($id);
			redirect('Companys/employer_center');
	}else{
	
			$this->Company_model->enable_job($id);
			redirect('Companys/employer_center');
	}
}

function set_job_renew($id){
			$this->Company_model->set_job_renew($id);
			
			$this->session->set_flashdata(array('success_renew'=>'<p>You have successfully renewed job posted. </p>'));
			
			redirect('Companys/employer_center');
			
		}
	

//account setting==================>

function account_setting(){
			$data['title'] = 'Profile';
			$data['show_setting']=$this->Admin_model->show_setting();
			$data['show_maincategory'] = $this->View_model->show_maincategory();
			$data['show_category'] = $this->View_model->show_category();
			$data['show_sub_category'] = $this->View_model->show_sub_category();
			$data['show_job_all'] = $this->View_model->show_job_all();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			$data['select_profile']=$this->Company_model->select_profile_employer();

			$this->load->view('cview/header', $data);
			$this->load->view('company/account_setting', $data);	
			$this->load->view('cview/footer');
	
		}
		
function employee_apply_job(){
			$data['title'] = 'Applicant Job';
			$data['show_setting']=$this->Admin_model->show_setting();
			$data['show_maincategory'] = $this->View_model->show_maincategory();
			$data['show_category'] = $this->View_model->show_category();
			$data['show_sub_category'] = $this->View_model->show_sub_category();
			$data['show_job_all'] = $this->View_model->show_job_all();
			$data['show_job_list']=$this->Company_model->show_job_list();
			$data['show_employee_apply_job_list']=$this->Company_model->show_employee_apply_job_list();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			$data['show_all_employee']=$this->Company_model->show_all_employee();
			$data['show_all_employee_cv']=$this->Company_model->show_all_employee_cv();
			
			$data['show_all_employee_cover_letter']=$this->Company_model->show_all_employee_cover_letter();
			
			$this->load->view('cview/header', $data);	
			$this->load->view('company/employee_apply_job', $data);	
			$this->load->view('cview/footer');
	
		}
		
function delete_apply_job($id){
				$this->Company_model->delete_apply_job($id);
				redirect('Companys/employee_apply_job');	
		}		

function browse_employee_cv(){
			$data['title'] = 'Applicant CV';
			$data['show_setting']=$this->Admin_model->show_setting();
			$data['show_maincategory'] = $this->View_model->show_maincategory();
			$data['show_category'] = $this->View_model->show_category();
			$data['show_sub_category'] = $this->View_model->show_sub_category();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			$data['show_job_all'] = $this->View_model->show_job_all();
			$data['show_all_employee_cv']=$this->Company_model->show_all_employee_cv();
			$data['show_all_employee']=$this->Company_model->show_all_employee();
			$data['show_function'] = $this->View_model->show_function();
			

			

			$this->load->view('cview/header', $data);
			$this->load->view('company/browse_employee_cv', $data);	
			$this->load->view('cview/footer');
	
		}	
function browse_employee_cv_by(){
			$data['title'] = 'Browse Applicant';
			$data['show_setting']=$this->Admin_model->show_setting();
			$data['show_maincategory'] = $this->View_model->show_maincategory();
			$data['show_category'] = $this->View_model->show_category();
			$data['show_sub_category'] = $this->View_model->show_sub_category();
			$data['show_job_all'] = $this->View_model->show_job_all();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			$data['show_all_employee_cv_where']=$this->Company_model->show_all_employee_cv_where();
			$data['show_all_employee']=$this->Company_model->show_all_employee();
			$data['show_function'] = $this->View_model->show_function();
			
			$this->session->set_flashdata(array('session_employee_cv'=>$this->input->post('func_id')));

			$this->load->view('cview/header', $data);
			$this->load->view('company/browse_employee_cv_by', $data);	
			$this->load->view('cview/footer');
	
		}		
		
		
		
		


}
