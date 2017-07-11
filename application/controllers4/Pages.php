<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pages extends CI_Controller {



//	

//	public function index()

//	{

//		$this->home();

//	}



	public function index()

	{

		$this->home();

	}

	

		

	public function login(){

			

		$this->load->view('admin/login');

	

	}

	

	

	public function home(){

		$data['title'] = 'Home';

		

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();

		

		$data['get_slider'] = $this->Admin_model->show_slideshow();

		$data['show_highlight'] = $this->View_model->show_highlight();

		

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		$data['show_company'] = $this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();

		$data['show_company_logo'] = $this->View_model->show_company_logo();


		//$data['show_job'] = $this->View_model->show_job();
		$data['show_job_limit_urgent'] = $this->View_model->show_job_limit_urgent();
		$data['show_job_limit_new'] = $this->View_model->show_job_limit_new();
		

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_advertising']=$this->Admin_model->show_advertising();
		
		$data['show_type']=$this->View_model->show_type();
		$data['show_term'] = $this->View_model->show_term();
		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			

		$this->load->view('cview/header', $data);	

	//	$this->load->view('cview/slide', $data);

		$this->load->view('cview/body');

		$this->load->view('cview/footer');

	

	}

	
	public function candidate_cv(){

		$data['title'] = 'Home';

		

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();

		

		$data['get_slider'] = $this->Admin_model->show_slideshow();

		$data['show_highlight'] = $this->View_model->show_highlight();

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		$data['show_company'] = $this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_cv'] = $this->View_model->show_cv();

		

		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

		$data['show_advertising']=$this->Admin_model->show_advertising();
		
		$data['show_type']=$this->View_model->show_type();
		$data['show_term'] = $this->View_model->show_term();
			

		$this->load->view('cview/header', $data);	

	//	$this->load->view('cview/slide', $data);

		$this->load->view('cview/candidate_cv');

		$this->load->view('cview/footer');

	

	}

	function page(){

		$data['title'] = 'Page';

		

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();

		

		$data['show_page'] = $this->View_model->show_page();

		

		$data['get_slider'] = $this->Admin_model->show_slideshow();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		$data['show_company'] = $this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_job'] = $this->View_model->show_job();

		

		$data['show_job_all'] = $this->View_model->show_job_all();

		

		$data['show_setting']=$this->Admin_model->show_setting();

		

		$data['show_advertising_maincategory']=$this->Admin_model->show_advertising_maincategory();
		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
		

			

		$this->load->view('cview/header', $data);	

		//$this->load->view('cview/search', $data);

		$this->load->view('cview/page', $data);

		$this->load->view('cview/footer');

	

	}

		function page_show(){

		$data['title'] = 'Pages';

		

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();

		

		$data['show_page'] = $this->View_model->show_page();

		

		$data['get_slider'] = $this->Admin_model->show_slideshow();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		$data['show_company'] = $this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_job'] = $this->View_model->show_job();

		

		$data['show_job_all'] = $this->View_model->show_job_all();

		

		$data['show_setting']=$this->Admin_model->show_setting();

		

		$data['show_advertising_maincategory']=$this->Admin_model->show_advertising_maincategory();
		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
		

			

		$this->load->view('cview/header', $data);	

		//$this->load->view('cview/search', $data);

		$this->load->view('cview/page_show', $data);

		$this->load->view('cview/footer');

	

	}

	

	function contactus(){

		$data['title'] = 'Contact Us';

		

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();

		$data['show_page'] = $this->View_model->show_page();

		

		$data['get_contact'] = $this->View_model->sele_contact();



		

		$data['get_slider'] = $this->Admin_model->show_slideshow();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		$data['show_company'] = $this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_job'] = $this->View_model->show_job();

		

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_setting']=$this->Admin_model->show_setting();
		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			

		$this->load->view('cview/header', $data);	

		//$this->load->view('cview/search', $data);

		$this->load->view('cview/contactus', $data);

		$this->load->view('cview/footer');

	

	}
	
	
		function instruction(){

		$data['title'] = 'Instruction';

		

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();

		$data['show_page'] = $this->View_model->show_page();

		

		$data['get_instruction'] = $this->View_model->sele_instruction();



		

		$data['get_slider'] = $this->Admin_model->show_slideshow();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		$data['show_company'] = $this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_job'] = $this->View_model->show_job();
		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
		

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_setting']=$this->Admin_model->show_setting();

			

		$this->load->view('cview/header', $data);	

		//$this->load->view('cview/search', $data);

		$this->load->view('cview/instruction', $data);

		$this->load->view('cview/footer');

	

	}


	
	public function login_employee(){
		$data['title'] = 'Log in';
		$data['show_maincategory'] = $this->View_model->show_maincategory();
		$data['show_category'] = $this->View_model->show_category();
		$data['show_sub_category'] = $this->View_model->show_sub_category();
		$data['show_job_all'] = $this->View_model->show_job_all();
		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
		
		$keys = random_multi(6);
		$this->code = $keys;
		$this->session->set_userdata(array(
			"check_access"=>$keys
		));
		
		$data['show_setting']=$this->Admin_model->show_setting();
	
		$this->load->view('cview/header', $data);
		$this->load->view('cview/login', $data);
		$this->load->view('cview/footer');
		
	}
	
		public function login_both(){
		$data['title'] = 'Log in';
		$data['show_maincategory'] = $this->View_model->show_maincategory();
		$data['show_category'] = $this->View_model->show_category();
		$data['show_sub_category'] = $this->View_model->show_sub_category();
		$data['show_job_all'] = $this->View_model->show_job_all();
		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
		
		$keys = random_multi(6);
		$this->code = $keys;
		$this->session->set_userdata(array(
			"check_access"=>$keys
		));
		
		$data['show_setting']=$this->Admin_model->show_setting();
	
		$this->load->view('cview/header', $data);
		$this->load->view('cview/login_both', $data);
		$this->load->view('cview/footer');
		
	}	

		//<=================     Profile       =======>

		function profile(){

		$data['title'] = 'Profile';

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();

		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

		$data['select_profile']=$this->View_model->select_profile();

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_job_all'] = $this->View_model->show_job_all();

		$this->load->view('cview/header', $data);

		

		$this->load->view('cview/profile',$data);

		

		$this->load->view('cview/footer');

		

	

		}

			//add img==================>



	function uploadimg(){

	if($this->input->post('add')){

		$this->load->library('upload');

		$config = array(

					'upload_path'=>'./image/img_profile',

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

					$remove_img=$this->View_model->remove_image_profile();

					foreach($remove_img as $remove){

						@unlink('./image/img_profile/'.$remove->user_img);	

					}

					

					$this->View_model->insert_img_profile($data);

					redirect('Pages/account_setting');	

				

					

				//}

				}

	  }

	}

		

		

				//end img ==================>

				

				

				

				

		function edit_profile(){

			$data['title'] = 'Profile';

			$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
		

			$data['select_profile']=$this->View_model->select_profile();

			$data['show_setting']=$this->Admin_model->show_setting();

			$data['show_job_all'] = $this->View_model->show_job_all();	

			$this->load->view('cview/header', $data);

			$this->load->view('cview/edit_profile',$data);	

			$this->load->view('cview/footer');

	

		}

		

		function update_profile(){

	

				

			$this->View_model->update_personal_info();

		

			

			redirect('Pages/account_setting');



	

		}

		

		

		

		function register(){

			$data['title'] = 'Register';

			$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

			$data['show_setting']=$this->Admin_model->show_setting();

			$data['show_job_all'] = $this->View_model->show_job_all();

			$data['show_location']=$this->Admin_model->show_location();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();


			$this->load->view('cview/header', $data);

			$this->load->view('cview/register', $data);	

			$this->load->view('cview/footer');

	

		}

		

////////////////////////////////////////////////////////////////////////////////////////////////////////



		

function user_center(){

			$data['title'] = 'Applicant Center';

			$data['show_setting']=$this->Admin_model->show_setting();

			$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

			$data['show_job_all'] = $this->View_model->show_job_all();

			$data['show_employee_cv']=$this->View_model->show_employee_cv();

			$data['show_function']=$this->View_model->show_function();
			
			$data['show_company_all']=$this->View_model->show_company_all();
			
			$data['show_company_logo'] = $this->View_model->show_company_logo();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();


			$this->load->view('cview/header', $data);

			$this->load->view('cview/user_center', $data);	

			$this->load->view('cview/footer');

	

		}

		



		

function cv_register(){

			$data['title'] = 'Applicant Center';

			$data['show_setting']=$this->Admin_model->show_setting();

			$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

			

			$data['get_slider'] = $this->Admin_model->show_slideshow();

			

			$data['select_profile']=$this->View_model->select_profile();

			$data['show_function'] = $this->View_model->show_function();

			$data['show_industry'] = $this->View_model->show_industry();

			$data['show_location'] = $this->View_model->show_location();

			$data['show_level'] = $this->View_model->show_level();

			$data['show_salary'] = $this->View_model->show_salary();

			$data['show_term'] = $this->View_model->show_term();

			$data['show_job_all'] = $this->View_model->show_job_all();
			$data['show_company_all'] = $this->View_model->show_company_all();
			
			$data['show_company_logo'] = $this->View_model->show_company_logo();
			
			$data['select_status_cvadmin'] = $this->View_model->select_status_cvadmin();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

			$this->load->view('cview/header', $data);

			//$this->load->view('cview/slide', $data);

			$this->load->view('cview/cv_register', $data);	

			$this->load->view('cview/footer');

	

		}

		

//function set_cv_register($id=false){
//
//
//			if($id==false){
//
//				if($this->upload->do_upload()){
//
//					$data=$this->upload->data();
//
//					$this->View_model->set_cv_register($data);
//
//				redirect('Pages/user_center');	
//
//				}
//
//			}
//
//			else{
//
//				if($this->upload->do_upload()){
//
//					$data=$this->upload->data();
//
//					$remove_img=$this->View_model->remove_image_cv_register($id);
//
//					foreach($remove_img as $remove){
//
//						@unlink('image/image_cv_register/'.$remove->ecv_image);	
//
//					}
//
//					$this->View_model->set_cv_register($data);
//
//					redirect('Pages/user_center');	
//
//				}
//
//				else{	
//
//					$this->View_model->set_cv_register();
//
//					redirect('Pages/user_center');
//
//				}
//
//				
//
//			}
//
//		
//
//	}

function set_cv_register($id = false){

			if($id == false){
					$this->View_model->set_cv_register();
					redirect('Pages/user_center');
				
			}else{
					$this->View_model->set_cv_register();
					redirect('Pages/user_center');
				
			}
		
	}



//function delete_employee_cv($id){
//
//				$remove_img=$this->View_model->remove_image_cv_register($id);
//
//					foreach($remove_img as $remove){
//
//						@unlink('image/image_cv_register/'.$remove->ecv_image);	
//
//					}
//
//				$this->View_model->delete_employee_cv($id);
//
//				redirect('Pages/user_center');	
//
//		}

		

		

		

		


//
//function show_edit_employee_cv($id){
//
//			$data['title'] = 'Applicant Center';
//
//			$data['show_setting']=$this->Admin_model->show_setting();
//
//			$data['show_maincategory'] = $this->View_model->show_maincategory();
//
//			$data['show_category'] = $this->View_model->show_category();
//
//			$data['show_sub_category'] = $this->View_model->show_sub_category();
//
//			
//
//			$data['get_slider'] = $this->Admin_model->show_slideshow();
//
//			
//
//			$data['select_profile']=$this->View_model->select_profile();
//
//		
//
//			$data['show_function'] = $this->View_model->show_function();
//
//			
//
//			$data['show_edit_employee_cv'] =$this->View_model->where_select_employee_cv($id);
//
//			
//
//			
//
//
//
//			$this->load->view('cview/header', $data);
//
//		//	$this->load->view('cview/slide', $data);
//
//			$this->load->view('cview/show_edit_employee_cv', $data);	
//
//			$this->load->view('cview/footer');
//
//	
//
//		}		



function show_edit_cv($id){

			$data['title'] = 'Applicant Center';

			$data['show_setting']=$this->Admin_model->show_setting();

			$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

			$data['show_job_all'] = $this->View_model->show_job_all();

			$data['get_slider'] = $this->Admin_model->show_slideshow();

			

			$data['select_profile']=$this->View_model->select_profile();

		

			$data['show_function'] = $this->View_model->show_function();

			

			$data['show_edit_employee_cv'] =$this->View_model->where_select_employee_cv($id);

;

			$data['show_industry'] = $this->View_model->show_industry();

			$data['show_location'] = $this->View_model->show_location();

			$data['show_level'] = $this->View_model->show_level();

			$data['show_salary'] = $this->View_model->show_salary();

			$data['show_term'] = $this->View_model->show_term();

			
			$data['show_company_all'] = $this->View_model->show_company_all();
			
			$data['show_company_logo'] = $this->View_model->show_company_logo();

			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();



			$this->load->view('cview/header', $data);

			$this->load->view('cview/show_edit_cv', $data);	

			$this->load->view('cview/footer');

	

		}

	

//end employee cv ==================>



//end cover letter ==================>



function cover_letter(){

			$data['title'] = 'Applicant Center';

			$data['show_setting']=$this->Admin_model->show_setting();

			$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

			$data['show_job_all'] = $this->View_model->show_job_all();

			$data['show_cover_letter']=$this->View_model->show_cover_letter();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();


			$this->load->view('cview/header', $data);

			$this->load->view('cview/cover_letter', $data);	

			$this->load->view('cview/footer');

	

		}

		



		

function add_cover_letter(){

			$data['title'] = 'Applicant Center';

			$data['show_setting']=$this->Admin_model->show_setting();

			$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

			$data['show_job_all'] = $this->View_model->show_job_all();

			$data['get_slider'] = $this->Admin_model->show_slideshow();

			

			$data['select_profile']=$this->View_model->select_profile();

			$data['show_function'] = $this->View_model->show_function();

			$data['show_industry'] = $this->View_model->show_industry();

			$data['show_location'] = $this->View_model->show_location();

			$data['show_level'] = $this->View_model->show_level();

			$data['show_salary'] = $this->View_model->show_salary();

			$data['show_term'] = $this->View_model->show_term();

			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();



			$this->load->view('cview/header', $data);	

	//		$this->load->view('cview/slide', $data);

			$this->load->view('cview/add_cover_letter', $data);	

			$this->load->view('cview/footer');

	

		}

		

function set_cover_letter($id=false){

		$this->load->library('upload');

		$config = array(

					'upload_path'=>'./image/image_cover_letter',

					'allowed_types' => '*',

					'encrypt_name' => true,

					'overwrite' => false

		);

		$this->upload->initialize($config);

			if($id==false){

				if($this->upload->do_upload()){

					$data=$this->upload->data();

					$this->View_model->set_cover_letter($data);

				redirect('Pages/cover_letter');	

				}

			}

			else{

				if($this->upload->do_upload()){

					$data=$this->upload->data();

					$remove_img=$this->View_model->remove_image_cover_letter($id);

					foreach($remove_img as $remove){

						@unlink('image/image_cover_letter/'.$remove->cov_image);	

					}

					$this->View_model->set_cover_letter($data);

					redirect('Pages/cover_letter');	

				}

				else{	

					$this->View_model->set_cover_letter();

					redirect('Pages/cover_letter');

				}

				

			}

		

	}



function delete_cover_letter($id){

				$remove_img=$this->View_model->remove_image_cover_letter($id);

					foreach($remove_img as $remove){

						@unlink('image/image_cover_letter/'.$remove->cov_image);	

					}

				$this->View_model->delete_cover_letter($id);

				redirect('Pages/cover_letter');	

		}

		

		

		

		



function show_edit_cover_letter($id){

			$data['title'] = 'Applicant Center';

			$data['show_setting']=$this->Admin_model->show_setting();

			$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

			$data['show_job_all'] = $this->View_model->show_job_all();

			$data['get_slider'] = $this->Admin_model->show_slideshow();

			

			$data['select_profile']=$this->View_model->select_profile();

		

			$data['show_salary'] = $this->View_model->show_salary();

			

			$data['show_edit_cover_letter'] =$this->View_model->where_select_cover_letter($id);
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			

			



			$this->load->view('cview/header', $data);	

	//		$this->load->view('cview/slide', $data);

			$this->load->view('cview/show_edit_cover_letter', $data);	

			$this->load->view('cview/footer');

	

		}		



	

//end cover letter ==================>



//account setting==================>



function account_setting(){

			$data['title'] = 'Applicant Center';

			$data['show_setting']=$this->Admin_model->show_setting();

			$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

			
			$data['show_job_all'] = $this->View_model->show_job_all();
		

			$data['select_profile']=$this->View_model->select_profile();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();


			$this->load->view('cview/header', $data);	

			$this->load->view('cview/account_setting', $data);	

			$this->load->view('cview/footer');

	

		}

function job_list_all(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

			

		$data['title'] = 'Home';

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_company']=$this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_advertising']=$this->Admin_model->show_advertising();

		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

		$this->load->view('cview/header', $data);
		
	//	$this->load->view('cview/search', $data);

		$this->load->view('cview/job_list_all', $data);

		$this->load->view('cview/footer');

	

	}

function job_by_salary(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		
		$data['show_job_all'] = $this->View_model->show_job_all();
		$data['job_by_salary'] = $this->View_model->job_by_salary();

		$data['show_company']=$this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
		$data['show_advertising']=$this->Admin_model->show_advertising();

		$this->load->view('cview/header', $data);

	//	$this->load->view('cview/search', $data);

		$this->load->view('cview/job_by_salary', $data);

		$this->load->view('cview/footer');

	

	}

function job_by_function(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		

		$data['job_by_function'] = $this->View_model->job_by_function();

		$data['show_company']=$this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_advertising']=$this->Admin_model->show_advertising();

			

		$this->load->view('cview/header', $data);
		
	//	$this->load->view('cview/search', $data);

		$this->load->view('cview/job_by_function', $data);

		$this->load->view('cview/footer');

	

	}



function job_by_location(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		

		$data['job_by_location'] = $this->View_model->job_by_location();

		$data['show_company']=$this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_advertising']=$this->Admin_model->show_advertising();

			

		$this->load->view('cview/header', $data);

	//	$this->load->view('cview/search', $data);

		$this->load->view('cview/job_by_location', $data);

		$this->load->view('cview/footer');

	

	}

	

function job_by_industry(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();

			
		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

		$data['job_by_industy'] = $this->View_model->job_by_industy();

		$data['show_company']=$this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_advertising']=$this->Admin_model->show_advertising();

			

		$this->load->view('cview/header', $data);

	//	$this->load->view('cview/search', $data);

		$this->load->view('cview/job_by_industry', $data);

		$this->load->view('cview/footer');

	

	}
	
function job_by_term(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		

		$data['job_by_term'] = $this->View_model->job_by_term();

		$data['show_company']=$this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

			

		$this->load->view('cview/header', $data);

	//	$this->load->view('cview/search', $data);

		$this->load->view('cview/job_by_term', $data);

		$this->load->view('cview/footer');

	

	}
	

function job_by_organization(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		

		$data['job_by_organization'] = $this->View_model->job_by_organization();

		$data['show_company']=$this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

			

		$this->load->view('cview/header', $data);

	//	$this->load->view('cview/search', $data);

		$this->load->view('cview/job_by_organization', $data);

		$this->load->view('cview/footer');

	

	}


	

function job(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();
		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();


		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		

		$data['job_by_salary'] = $this->View_model->job_by_salary();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_company']=$this->Admin_model->show_company();

		$data['show_job_detail']=$this->View_model->show_job_detail();

		$data['show_type']=$this->View_model->show_type();

		$data['show_term'] = $this->View_model->show_term();

		$data['show_level'] = $this->View_model->show_level();

		

		$data['show_employee_cv']=$this->View_model->show_employee_cv();

		$data['show_employee_cover_letter']=$this->View_model->show_employee_cover_letter();

		

		$data['show_advertising']=$this->Admin_model->show_advertising();

//session for redirect page job		

		$this->session->set_userdata(array('session_job_url'=>$this->uri->segment(3)));

			

		$this->load->view('cview/header', $data);

		//$this->load->view('cview/slide', $data);

		$this->load->view('cview/job', $data);

		$this->load->view('cview/footer');

	

	}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function search_by(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_company'] = $this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_advertising']=$this->Admin_model->show_advertising();


		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
		$this->session->set_flashdata(array('session_search_all'=>$this->input->post('search_all')));

		$this->session->set_flashdata(array('session_func_id'=>$this->input->post('func_id')));

		$this->session->set_flashdata(array('session_indu_id'=>$this->input->post('indu_id')));
		
		$this->session->set_userdata(array('get_search_input'=>$this->input->post('search')));

	

		//$data['show_job_all']=$this->View_model->show_job_all();

		//$data['search_indu']=$this->View_model->search_indu();

	    $data['search_by']=$this->View_model->search_by();

		//$data['search_function']=$this->View_model->search_function();

		

		

//		$config['base_url'] = site_url().'Pages/search_by';

//		$config['total_rows'] = $this->db->count_all('tbl_job');

//		$config['per_page'] = '5';

//		$config['num_links'] = '10';

//		$config['full_tag_open'] = '<ul  class="pagination">';

//		$config['full_tag_close'] = '</ul>';

//		$config['prev_link'] = "<li>Pre";

//		$config['num_tag_open'] = "<li>";

//		$config['num_tag_close'] = "</li>";

//		$config['cur_tag_open'] = "<li><a style='background:rgb(17,69,117);color:#fff;'>";

//		$config['cur_tag_close'] = "</a></li>";

//		$config['next_link'] = "<li>Next";

//		$this->pagination->initialize($config);

//		$data['searchs_by']=$this->View_model->search_by_count($config['per_page'], $this->uri->segment(3));

//		$data["page_link"] = $this->pagination->create_links();

				

				$this->load->view('cview/header', $data);

				//$this->load->view('cview/search', $data);

				$this->load->view('cview/search_by',$data);

				$this->load->view('cview/footer');

			

			

}	

	

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





function company(){

		$data['title'] = 'Company';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();



		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['job_by_salary'] = $this->View_model->job_by_salary();

		$data['show_company']=$this->View_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_job_detail']=$this->View_model->show_job_detail();

		$data['show_type']=$this->View_model->show_type();

		$data['show_term'] = $this->View_model->show_term();

		$data['show_level'] = $this->View_model->show_level();

		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

		$data['show_job_list'] = $this->View_model->show_job_list();

		$data['show_job_list_num_row'] = $this->View_model->show_job_list_num_row();

		$data['show_advertising']=$this->Admin_model->show_advertising();

			

		$this->load->view('cview/header', $data);	

		//$this->load->view('cview/slide', $data);

		$this->load->view('cview/company', $data);

		$this->load->view('cview/footer');

	

	}



function preview_job(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();
		$data['show_job_all'] = $this->View_model->show_job_all();
		//$data['get_slider'] = $this->Admin_model->show_slideshow();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

		$data['job_by_salary'] = $this->View_model->job_by_salary();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_company']=$this->Admin_model->show_company();

		$data['show_job_detail']=$this->View_model->show_job_detail();

		$data['show_type']=$this->View_model->show_type();

		$data['show_term'] = $this->View_model->show_term();

		$data['show_level'] = $this->View_model->show_level();

		

		

			

		//$this->load->view('cview/header');	

		//$this->load->view('cview/slide', $data);

		$this->load->view('cview/preview_job', $data);

		//$this->load->view('cview/footer');

	

	}



//Auto search customer=================================>

function get_search_item(){ 

		if (isset($_GET['term'])){

		  $q = strtolower($_GET['term']);

		  $this->View_model->get_search_job($q);

		}

}

	

	
function apply_job(){
		$this->load->library('upload');
		$config = array(

					'upload_path'=>'./image/apply_cv',
					'allowed_types' => '*',
					'encrypt_name' => true,
					'overwrite' => false

		);

		$this->upload->initialize($config);
		if($this->upload->do_upload()){
			$data = $this->upload->data();
			$this->View_model->apply_job($data);
			$apply_job_all = $this->View_model->show_employee_apply_job_list();
			$job_all = $this->View_model->show_all_job();
			$employee_all = $this->View_model->show_all_employee();
			$company_all = $this->View_model->show_all_company();
			foreach($apply_job_all as $apply_job ) {
				foreach($job_all as $job ) {
					 if($apply_job->jobs_id==$job->job_id){
						 foreach($employee_all as $employee ) { 
							 foreach($company_all as $company) {
								if($job->comp_id==$company->com_id){
									if($apply_job->employee_id==$employee->emp_id){
										$this->load->library('email');
										$config['protocol'] = 'sendmail';
										$config['charset'] = 'iso-8859-1';
										$config['wordwrap'] = TRUE;
										$config['mailtype'] = 'html';
										$this->email->initialize($config);
										$this->email->from('jobs@aseanhr.com', '  Applying for ' .$job->job_name);
										$this->email->to($company->com_email);
										$this->email->cc($employee->emp_email, 'jobs@aseanhr.com');
										$this->email->subject($employee->emp_name. ' Applying for ' .$job->job_name);
										$this->email->message('
										<p>'.$apply_job->cv_description.'</p><br/>
										<p>Pleack click on Word or PDF file below to view or download CV.</p>
										<a href="'.base_url('image/apply_cv/'.$apply_job->cv_files).'">
											<img src="'.base_url('image/attach.png').'" width="150px" height="100px"/>
										</a>
										<p> Name:  '.$employee->emp_name.' </p>
										<p>Email: '.$employee->emp_email.' </p>
										<p> Tel: '.$employee->emp_phone.' </p>
										<img src="'.base_url('image/s_nature.jpg').'" width="350px" height="150px"/>
										');
										$this->session->set_flashdata(array('success_apply'=>'<p style="color:000;">You has success fuccessful applied job as '.$job->job_name.' . </p>'));
										$this->email->send();	
										redirect('Pages/home');
									}
		
								}
							 }
						 }
					 }
				 }
			}	
		}else{
			$this->View_model->apply_job();
			$apply_job_all = $this->View_model->show_employee_apply_job_list();
			$job_all = $this->View_model->show_all_job();
			$employee_all = $this->View_model->show_all_employee();
			$company_all = $this->View_model->show_all_company();
			foreach($apply_job_all as $apply_job ) {
				foreach($job_all as $job ) {
					 if($apply_job->jobs_id==$job->job_id){
						 foreach($employee_all as $employee ) { 
							 foreach($company_all as $company) {
								if($job->comp_id==$company->com_id){
									if($apply_job->employee_id==$employee->emp_id){
										$this->load->library('email');
										$config['protocol'] = 'sendmail';
										$config['charset'] = 'iso-8859-1';
										$config['wordwrap'] = TRUE;
										$config['mailtype'] = 'html';
										$this->email->initialize($config);
										$this->email->from('jobs@aseanhr.com', '  Applying for ' .$job->job_name);
										$this->email->to($company->com_email);
										$this->email->cc($employee->emp_email, 'jobs@aseanhr.com');
										$this->email->subject($employee->emp_name. ' Applying for ' .$job->job_name);
										$this->email->message('
										<p>'.$apply_job->cv_description.'</p>
										<p> Name:  '.$employee->emp_name.' </p>
										<p>Email: '.$employee->emp_email.' </p>
										<p> Tel: '.$employee->emp_phone.' </p>
										<img src="'.base_url('image/s_nature.jpg').'" width="130px" height="100px"/>
										');
										$this->session->set_flashdata(array('success_apply'=>'<p style="color:000;">You has success fuccessful applied job as '.$job->job_name.' . </p>'));
										$this->email->send();	
										redirect('Pages/home');
									}
		
								}
							 }
						 }
					 }
				 }
			}
		}
	}
	
	
	

//function apply_job(){
//
//		$this->View_model->apply_job();
//
//			
//
//		$apply_job_all = $this->View_model->show_employee_apply_job_list();
//
//		$job_all = $this->View_model->show_all_job();
//
//		$employee_all = $this->View_model->show_all_employee();
//
//		$company_all = $this->View_model->show_all_company();
//
//		
//
//		foreach($apply_job_all as $apply_job ) {
//
//			foreach($job_all as $job ) {
//
//				 if($apply_job->jobs_id==$job->job_id){
//
//					 foreach($employee_all as $employee ) { 
//
//					 foreach($company_all as $company) {
//
//					 	if($job->comp_id==$company->com_id){
//
//						if($apply_job->employee_id==$employee->emp_id){
//
//							
//
//							
//
//							$this->load->library('email');
//
//							$config['protocol'] = 'sendmail';
//
//							$config['charset'] = 'iso-8859-1';
//
//							$config['wordwrap'] = TRUE;
//
//							$config['mailtype'] = 'html';
//
//							
//
//							$this->email->initialize($config);
//
//
//
//							$this->email->from('info@ttibiz.com', '  Applying for ' .$job->job_name);
//
//							$this->email->to($employee->emp_email);
//
//							$this->email->cc($company->com_email);
//
//							$this->email->subject($employee->emp_name. ' Applying for ' .$job->job_name);
//
//							$this->email->message('
//
//							<img src=http://ttibiz.com/demo/image/image_company/'.$company->com_image.' width="130px" height="100px"/>
//
//							<p><b>'.$company->com_name.' </b></p>
//
//							<p>Dear , '.$company->com_contact_person.'</p>
//
//							
//
//							<br>
//
//							
//
//							<p>My name is '.$employee->emp_name.'.  </p>
//
//							<p> I would like to apply for a job as <b>'.$job->job_name.'</b>. </p>
//
//							
//
//							<br>
//
//							
//
//							<p>Yours sincerely, </p>
//
//							
//
//							 <br>
//
//							 
//
//							<p> Name:  '.$employee->emp_name.' </p>
//
//							<p>Email: '.$employee->emp_email.' </p>
//
//							<p> Tel: '.$employee->emp_phone.' </p>
//
//							
//
//							');
//
//							$this->session->set_flashdata(array('success_apply'=>'<p style="color:000;">You has success fuccessful applied job as '.$job->job_name.' . </p>'));
//
//							$this->email->send();	
//
//							//echo $job->job_name;
//
//							
//
//							
//
//							
//
//						}
//
//						}
//
//					 }
//
//					 }
//
//				 }
//
//			}
//
//	
//
//		}
//
//		redirect('Pages/home');		
//
//
//
//}



function employee_apply_job(){

			$data['title'] = 'Job';

			$data['show_setting']=$this->Admin_model->show_setting();

			$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();


			$data['show_job_all'] = $this->View_model->show_job_all();
			$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

			$data['show_job_list_by_employee']=$this->View_model->show_job_list_by_employee();

			$data['show_employee_apply_job_list']=$this->View_model->show_employee_apply_job_list_by_employee();

			

			$data['show_all_company']=$this->View_model->show_all_company();
			
			$data['show_company_logo'] = $this->View_model->show_company_logo();



			$data['show_all_employee_cv']=$this->View_model->show_all_employee_cv();

			

			$data['show_all_employee_cover_letter']=$this->View_model->show_all_employee_cover_letter();

			

			$this->load->view('cview/header', $data);	

			$this->load->view('cview/employee_apply_job', $data);	

			$this->load->view('cview/footer');

	

		}



	

	

	

	

	

	

	

	function postjob(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();
		$data['show_job_all'] = $this->View_model->show_job_all();
		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

		$this->load->view('cview/header', $data);	

		$this->load->view('cview/postjob', $data);	

		$this->load->view('cview/footer');

	}

	

//	function cv(){
//
//		$data['title'] = 'Job';
//
//		$data['show_setting']=$this->Admin_model->show_setting();
//
//		$data['show_maincategory'] = $this->View_model->show_maincategory();
//
//		$data['show_category'] = $this->View_model->show_category();
//
//		$data['show_sub_category'] = $this->View_model->show_sub_category();
//
//		
//
//		$this->load->view('cview/header', $data);	
//
//		$this->load->view('cview/cv', $data);	
//
//		$this->load->view('cview/footer');
//
//	}

	

	function companyprofile(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();
		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
		
		$data['show_job_all'] = $this->View_model->show_job_all();
		$this->load->view('cview/header', $data);	

		$this->load->view('cview/companyprofile', $data);	

		$this->load->view('cview/footer');

	}
	
	
	function c_job_by_salary(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();
		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		

		$data['c_job_by_salary'] = $this->View_model->c_job_by_salary();

		$data['show_company']=$this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

			

		$this->load->view('cview/header', $data);

	//	$this->load->view('cview/search', $data);

		$this->load->view('cview/c_job_by_salary', $data);

		$this->load->view('cview/footer');

	

	}

function c_job_by_function(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();
		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();
			

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		

		$data['c_job_by_function'] = $this->View_model->c_job_by_function();

		$data['show_company']=$this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_advertising']=$this->Admin_model->show_advertising();

			

		$this->load->view('cview/header', $data);
		
	//	$this->load->view('cview/search', $data);

		$this->load->view('cview/c_job_by_function', $data);

		$this->load->view('cview/footer');

	

	}



function c_job_by_location(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

			$data['show_category'] = $this->View_model->show_category();

			$data['show_sub_category'] = $this->View_model->show_sub_category();

		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		

		$data['c_job_by_location'] = $this->View_model->c_job_by_location();

		$data['show_company']=$this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_advertising']=$this->Admin_model->show_advertising();

			

		$this->load->view('cview/header', $data);

	//	$this->load->view('cview/search', $data);

		$this->load->view('cview/c_job_by_location', $data);

		$this->load->view('cview/footer');

	

	}

	

function c_job_by_industry(){

		$data['title'] = 'Job';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();

		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		

		$data['c_job_by_industy'] = $this->View_model->c_job_by_industy();

		$data['show_company']=$this->Admin_model->show_company();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_advertising']=$this->Admin_model->show_advertising();

			

		$this->load->view('cview/header', $data);

	//	$this->load->view('cview/search', $data);

		$this->load->view('cview/c_job_by_industry', $data);

		$this->load->view('cview/footer');

	

	}
	
	
function cv($id){

		$data['title'] = 'CV';

		$data['show_setting']=$this->Admin_model->show_setting();

		$data['show_maincategory'] = $this->View_model->show_maincategory();

		$data['show_category'] = $this->View_model->show_category();

		$data['show_sub_category'] = $this->View_model->show_sub_category();

		$data['show_candidate_cv_all'] = $this->View_model->show_candidate_cv_all();

		$data['show_function'] = $this->View_model->show_function();

		$data['show_industry'] = $this->View_model->show_industry();

		$data['show_location'] = $this->View_model->show_location();

		$data['show_salary'] = $this->View_model->show_salary();

		$data['show_job_all'] = $this->View_model->show_job_all();

		$data['job_by_salary'] = $this->View_model->job_by_salary();

		$data['show_company_all'] = $this->View_model->show_company_all();
		
		$data['show_company_logo'] = $this->View_model->show_company_logo();

		$data['show_company']=$this->Admin_model->show_company();

		$data['show_job_detail']=$this->View_model->show_job_detail();

		$data['show_type']=$this->View_model->show_type();

		$data['show_term'] = $this->View_model->show_term();

		$data['show_level'] = $this->View_model->show_level();

		

		$data['where_select_employee_cv']=$this->View_model->where_select_employee_cv($id);

		$data['show_employee_cover_letter']=$this->View_model->show_employee_cover_letter();

		

		$data['show_advertising']=$this->Admin_model->show_advertising();



			

		$this->load->view('cview/header', $data);

		//$this->load->view('cview/slide', $data);

		$this->load->view('cview/cv', $data);

		$this->load->view('cview/footer');

	

	}
	
	function delete_cv($id){


				$this->View_model->delete_employee_cv($id);

				redirect('Pages/user_center');	

		}


function set_cv_disable($id=false, $act=false){
	if($act==0){
			$this->View_model->disable_cv($id);
			redirect('Pages/user_center');
	}else{
	
			$this->View_model->enable_cv($id);
			redirect('Pages/user_center');
	}
}

function set_cv_renew($id){
			$this->View_model->set_cv_renew($id);
			
			//$this->session->set_flashdata(array('success_renew'=>'<p>You have successfully renewed job posted. </p>'));
			
			redirect('Pages/user_center');
			
		}





}

