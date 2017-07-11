<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_controller extends CI_controller{

	
	function dashboard(){
		$this->load->view('admin/index',array(
			'title'=>'Dashborad'
		));	
	}

	
//user ==================>
	
	function user(){
		$this->load->view('admin/index',array(
			'title'=>'User',
			'show_user'=>$this->Admin_model->show_user()		
		));
		
	}
//	function add_user(){
//			$this->load->view('admin/index',array(
//				'title'=>'Add_user'
//			));
//		}
			//add use====================>
	function insert_user(){
			$this->Admin_model->insert_user();
			redirect('admin_controller/user');
		
	}
	
//	function show_edit_user($id){
//			$this->load->view('admin/index',array(
//				'title'=>'Edit user',
//				'edit_user'=>$this->Admin_model->where_select_user($id)
//			));
//		}
	function edit_user($id){
			$this->Admin_model->edit_user($id);
			redirect('admin_controller/user');
			
		}
		
	function delete_user($id){
				$this->Admin_model->delete_user($id);
				redirect('admin_controller/user');	
		}
	
//end user ==================>



	
// item==================>
	
//	function item(){
//		$this->load->view('admin/index',array(
//			'title'=>'Item',
//			'show_item'=>$this->Admin_model->show_item(),		
//		));
//		
//	}
//
//	function insert_item(){
//			$this->Admin_model->insert_item();
//			redirect('admin_controller/item');
//		
//	}
//	
//	function edit_item($id){
//			$this->Admin_model->edit_item($id);
//			redirect('admin_controller/item');
//			
//		}
//		
//	function delete_item($id){
//				$this->Admin_model->delete_item($id);
//				redirect('admin_controller/item');	
//		}
	
//end item ==================>	

	
// salary==================>
	
	function salary(){
		$this->load->view('admin/index',array(
			'title'=>'Salary',
			'show_salary'=>$this->Admin_model->show_salary(),		
		));
		
	}

	function insert_salary(){
			$this->Admin_model->insert_salary();
			redirect('admin_controller/salary');
		
	}
	
	function edit_salary($id){
			$this->Admin_model->edit_salary($id);
			redirect('admin_controller/salary');
			
		}
		
	function delete_salary($id){
				$this->Admin_model->delete_salary($id);
				redirect('admin_controller/salary');	
		}
	
//end salary ==================>

// type==================>
	
	function type(){
		$this->load->view('admin/index',array(
			'title'=>'Type',
			'show_type'=>$this->Admin_model->show_type(),		
		));
	}

	function insert_type(){
			$this->Admin_model->insert_type();
			redirect('admin_controller/type');
	}
	
	function edit_type($id){
			$this->Admin_model->edit_type($id);
			redirect('admin_controller/type');		
	}
		
	function delete_type($id){
				$this->Admin_model->delete_type($id);
				redirect('admin_controller/type');	
	}
	
//end type ==================>

// term==================>
	
	function term(){
		$this->load->view('admin/index',array(
			'title'=>'Term',
			'show_term'=>$this->Admin_model->show_term(),		
		));
	}

	function insert_term(){
			$this->Admin_model->insert_term();
			redirect('admin_controller/term');
	}
	
	function edit_term($id){
			$this->Admin_model->edit_term($id);
			redirect('admin_controller/term');		
	}
		
	function delete_term($id){
				$this->Admin_model->delete_term($id);
				redirect('admin_controller/term');	
	}
	
//end term ==================>

// level==================>
	
	function level(){
		$this->load->view('admin/index',array(
			'title'=>'Level',
			'show_level'=>$this->Admin_model->show_level(),		
		));
	}

	function insert_level(){
			$this->Admin_model->insert_level();
			redirect('admin_controller/level');
	}
	
	function edit_level($id){
			$this->Admin_model->edit_level($id);
			redirect('admin_controller/level');		
	}
		
	function delete_level($id){
				$this->Admin_model->delete_level($id);
				redirect('admin_controller/level');	
	}
	
//end level ==================>


// location==================>
	
	function location(){
		$this->load->view('admin/index',array(
			'title'=>'Location',
			'show_location'=>$this->Admin_model->show_location(),		
		));
	}

	function insert_location(){
			$this->Admin_model->insert_location();
			redirect('admin_controller/location');
	}
	
	function edit_location($id){
			$this->Admin_model->edit_location($id);
			redirect('admin_controller/location');		
	}
		
	function delete_location($id){
				$this->Admin_model->delete_location($id);
				redirect('admin_controller/location');	
	}
	
//end location ==================>


// function==================>
	
	function function_job(){
		$this->load->view('admin/index',array(
			'title'=>'Function',
			'show_function'=>$this->Admin_model->show_function(),		
		));
	}

	function insert_function(){
			$this->Admin_model->insert_function();
			redirect('admin_controller/function_job');
	}
	
	function edit_function($id){
			$this->Admin_model->edit_function($id);
			redirect('admin_controller/function_job');		
	}
		
	function delete_function($id){
				$this->Admin_model->delete_function($id);
				redirect('admin_controller/function_job');	
	}
	
//end function ==================>

// industry==================>
	
	function industry(){
		$this->load->view('admin/index',array(
			'title'=>'Industry',
			'show_industry'=>$this->Admin_model->show_industry(),		
		));
	}

	function insert_industry(){
			$this->Admin_model->insert_industry();
			redirect('admin_controller/industry');
	}
	
	function edit_industry($id){
			$this->Admin_model->edit_industry($id);
			redirect('admin_controller/industry');		
	}
		
	function delete_industry($id){
				$this->Admin_model->delete_industry($id);
				redirect('admin_controller/industry');	
	}
	
//end industry ==================>

//slide==================>
	function slideshow(){
		$this->load->view('admin/index',array(
			'title'=>'slideshow',
			'show_slideshow'=>$this->Admin_model->show_slideshow()
			
		));	
	}
	function add_slideshow(){
			$this->load->view('admin/index',array(
				'title'=>'add_slideshow'
			));
		}
//	function show_edit_slideshow($id){
//			$this->load->view('admin/index',array(
//				'title'=>'edit_slideshow',
//				'show_slideshow_edit'=>$this->Admin_model->remove_image_slideshow($id)
//			));
//		}
	function delete_slideshow($id){
				$remove_img=$this->Admin_model->remove_image_slideshow($id);
					foreach($remove_img as $remove){
						@unlink('image/image_slide/'.$remove->image);	
					}
				$this->Admin_model->delete_slideshow($id);
				redirect('admin_controller/slideshow');	
		}
	//add slide==================>
	function set_slideshow($id=false){
		$this->load->library('upload');
		$config = array(
					'upload_path'=>'./image/image_slide',
					'allowed_types' => 'png|jpg|gif|jpeg|PNG|JPG|GIF|JPEG',
					'encrypt_name' => true,
					'overwrite' => false
		);
		$this->upload->initialize($config);
			if($id==false){
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$this->Admin_model->set_slideshow($data);
				redirect('admin_controller/slideshow');	
				}
			}
			else{
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$remove_img=$this->Admin_model->remove_image_slideshow($id);
					foreach($remove_img as $remove){
						@unlink('image/image_slide/'.$remove->image);	
					}
					$this->Admin_model->set_slideshow($data);
					redirect('admin_controller/slideshow');	
				}
				else{	
					$this->Admin_model->set_slideshow();
					redirect('admin_controller/slideshow');
				}
				
			}
		
		
		
		
	}
	
//end slide==================>

//company==================>
	function company(){
		$this->load->view('admin/index',array(
			'title'=>'company',
			'show_company'=>$this->Admin_model->show_company(),
			'show_industry'=>$this->Admin_model->show_industry(),
			'show_type'=>$this->Admin_model->show_type(),
			'show_location'=>$this->Admin_model->show_location(),	
		));	
	}
	function add_company(){
			$this->load->view('admin/index',array(
				'title'=>'add_company',
				
			'show_industry'=>$this->Admin_model->show_industry(),	
			'show_type'=>$this->Admin_model->show_type(),
			'show_location'=>$this->Admin_model->show_location(),	
				
			));
		}
	function show_edit_company($id){
			$this->load->view('admin/index',array(
				'title'=>'edit_company',
				'show_edit_company'=>$this->Admin_model->remove_image_company($id),
				
				'show_industry'=>$this->Admin_model->show_industry(),
				'show_type'=>$this->Admin_model->show_type(),
				'show_location'=>$this->Admin_model->show_location(),	
			));
		}
	function delete_company($id){
				$remove_img=$this->Admin_model->remove_image_company($id);
					foreach($remove_img as $remove){
						@unlink('image/image_company/'.$remove->com_image);	
					}
				$this->Admin_model->delete_company($id);
				redirect('admin_controller/company');	
		}
	//add company==================>
	function set_company($id=false){
		$this->load->library('upload');
		$config = array(
					'upload_path'=>'./image/image_company',
					'allowed_types' => 'png|jpg|gif|jpeg|PNG|JPG|GIF|JPEG',
					'encrypt_name' => true,
					'overwrite' => false
		);
		$this->upload->initialize($config);
			if($id==false){
				
				if($this->upload->do_upload('userfile')){
					$data = $this->upload->data();
					$this->Admin_model->set_company($data);
					redirect('admin_controller/company');
				}else{
					$this->Admin_model->set_company();
					redirect('admin_controller/company');
				}
			
			
			}
			else{
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$remove_img=$this->Admin_model->remove_image_company($id);
					foreach($remove_img as $remove){
						@unlink('image/image_company/'.$remove->com_image);	
					}
					$this->Admin_model->set_company($data);
					redirect('admin_controller/company');	
				}
				else{	
					$this->Admin_model->set_company();
					redirect('admin_controller/company');
				}
				
			}

	}

	
//end company==================>


// job ==================>
	
	function job(){
		$this->load->view('admin/index',array(
			'title'=>'job',
			'show_job'=>$this->Admin_model->show_job(),
			'select_status_admin' => $this->Admin_model->select_status_admin()		
		));
		
	}
	function job_disable(){
		$this->load->view('admin/index',array(
			'title'=>'job',
			'show_job'=>$this->Admin_model->show_job_disable(),
					
		));
		
	}
	function job_active(){
		$this->load->view('admin/index',array(
			'title'=>'job',
			'show_job'=>$this->Admin_model->show_job_active(),
					
		));
		
	}
	function job_delete(){
		$this->load->view('admin/index',array(
			'title'=>'job',
			'show_job'=>$this->Admin_model->show_job_delete(),
					
		));
		
	}
	
	function add_job(){
			$this->load->view('admin/index',array(
				'title'=>'add_job',
				
			'show_company'=>$this->Admin_model->show_company(),	
			'show_industry'=>$this->Admin_model->show_industry(),
			'show_function'=>$this->Admin_model->show_function(),
			'show_location'=>$this->Admin_model->show_location(),
			'show_term'=>$this->Admin_model->show_term(),
			'show_level'=>$this->Admin_model->show_level(),
			'show_salary'=>$this->Admin_model->show_salary(),
			'show_type'=>$this->Admin_model->show_type(),
			'select_status_admin' => $this->Admin_model->select_status_admin()
				
			));
		}
			//add job==================>
	function insert_job(){
			$this->Admin_model->insert_job();
			redirect('admin_controller/job');
		
	}
	
	function show_edit_job($id){
			$this->load->view('admin/index',array(
				'title'=>'edit_job',
				
				'show_edit_job'=>$this->Admin_model->where_select_job($id),
				'show_company'=>$this->Admin_model->show_company(),
				'show_industry'=>$this->Admin_model->show_industry(),
				'show_function'=>$this->Admin_model->show_function(),
				'show_location'=>$this->Admin_model->show_location(),
				'show_term'=>$this->Admin_model->show_term(),
				'show_level'=>$this->Admin_model->show_level(),
				'show_salary'=>$this->Admin_model->show_salary(),
				'show_type'=>$this->Admin_model->show_type(),
				
				
			));
		}
	function show_copy_job($id){
			$this->load->view('admin/index',array(
				'title'=>'edit_job',
				
				'show_edit_job'=>$this->Admin_model->where_select_job($id),
				'show_company'=>$this->Admin_model->show_company(),
				'show_industry'=>$this->Admin_model->show_industry(),
				'show_function'=>$this->Admin_model->show_function(),
				'show_location'=>$this->Admin_model->show_location(),
				'show_term'=>$this->Admin_model->show_term(),
				'show_level'=>$this->Admin_model->show_level(),
				'show_salary'=>$this->Admin_model->show_salary(),
				'show_type'=>$this->Admin_model->show_type(),
				'select_status_admin'=>$this->Admin_model->select_status_admin()
				
			));
		}
		
	function edit_job($id){
			$this->Admin_model->edit_job($id);
			redirect('admin_controller/job');
			
		}
		
	function delete_job($id){
				$this->Admin_model->delete_job($id);
				redirect('admin_controller/job');	
		}
		
		
		
function set_job_disable($id=false, $act=false){
	if($act==0){
			$this->Admin_model->enable_job($id);
			redirect('admin_controller/job');
	}else{
			$this->Admin_model->disable_job($id);
			redirect('admin_controller/job');
	}
}

//end job==================>
	

// employee ==================>
	
	function employee(){
		$this->load->view('admin/index',array(
			'title'=>'Employee',
			'show_employee'=>$this->Admin_model->show_employee(),
					
		));
		
	}
	function delete_employee($id){
				$this->Admin_model->delete_employee($id);
				redirect('admin_controller/employee');	
		}
//end employee ==================>

//event ==================>
	function event(){
		$this->load->view('admin/index',array(
			'title'=>'event',
			'show_event'=>$this->Admin_model->show_event()
		));	
	}
	function add_event(){
			$this->load->view('admin/index',array(
				'title'=>'add_event'
			));
		}
	function show_edit_event($id){
			$this->load->view('admin/index',array(
				'title'=>'edit_event',
				'show_edit_event'=>$this->Admin_model->remove_image_event($id)
			));
		}
	function delete_event($id){
				$remove_img=$this->Admin_model->remove_image_event($id);
					foreach($remove_img as $remove){
						@unlink('image/image_event/'.$remove->eve_image);	
					}
				$this->Admin_model->delete_event($id);
				redirect('admin_controller/event');	
		}
	//add event==================>
	function set_event($id=false){
		$this->load->library('upload');
		$config = array(
					'upload_path'=>'./image/image_event',
					'allowed_types' => 'png|jpg|gif|jpeg|PNG|JPG|GIF|JPEG',
					'encrypt_name' => true,
					'overwrite' => false
		);
		$this->upload->initialize($config);
			if($id==false){
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$this->Admin_model->set_event($data);
				redirect('admin_controller/event');	
				}
			}
			else{
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$remove_img=$this->Admin_model->remove_image_event($id);
					foreach($remove_img as $remove){
						@unlink('image/image_event/'.$remove->eve_image);	
					}
					$this->Admin_model->set_event($data);
					redirect('admin_controller/event');	
				}
				else{	
					$this->Admin_model->set_event();
					redirect('admin_controller/event');
				}
				
			}
		
		
		
		
	}
	
//end event==================>

//news==================>
	function news(){
		$this->load->view('admin/index',array(
			'title'=>'news',
			'show_news'=>$this->Admin_model->show_news()
		));	
	}
	function add_news(){
			$this->load->view('admin/index',array(
				'title'=>'add_news'
			));
		}
	function show_edit_news($id){
			$this->load->view('admin/index',array(
				'title'=>'edit_news',
				'show_edit_news'=>$this->Admin_model->remove_image_news($id)
			));
		}
	function delete_news($id){
				$remove_img=$this->Admin_model->remove_image_news($id);
					foreach($remove_img as $remove){
						@unlink('image/image_news/'.$remove->new_image);	
					}
				$this->Admin_model->delete_news($id);
				redirect('admin_controller/news');	
		}
	//add news==================>
	function set_news($id=false){
		$this->load->library('upload');
		$config = array(
					'upload_path'=>'./image/image_news',
					'allowed_types' => 'png|jpg|gif|jpeg|PNG|JPG|GIF|JPEG',
					'encrypt_name' => true,
					'overwrite' => false
		);
		$this->upload->initialize($config);
			if($id==false){
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$this->Admin_model->set_news($data);
				redirect('admin_controller/news');	
				}
			}
			else{
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$remove_img=$this->Admin_model->remove_image_news($id);
					foreach($remove_img as $remove){
						@unlink('image/image_news/'.$remove->new_image);	
					}
					$this->Admin_model->set_news($data);
					redirect('admin_controller/news');	
				}
				else{	
					$this->Admin_model->set_news();
					redirect('admin_controller/news');
				}
				
			}
		
		
		
		
	}
	
//end news==================>

// setting ==================>
	

	
	function show_edit_setting(){
			$this->load->view('admin/index',array(
				'title'=>'edit_setting',
				'show_setting'=>$this->Admin_model->show_setting(),
					
				
			));
		}

	function edit_setting(){
		$this->load->library('upload');
		$config = array(
					'upload_path'=>'./image/image_logo',
					'allowed_types' => 'png|jpg|gif|jpeg|PNG|JPG|GIF|JPEG',
					'encrypt_name' => true,
					'overwrite' => false
		);
		$this->upload->initialize($config);
		
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$remove_img=$this->Admin_model->remove_image_logo();
					foreach($remove_img as $remove){
						@unlink('image/image_logo/'.$remove->image);	
					}
					$this->Admin_model->edit_setting($data);
					redirect('admin_controller/show_edit_setting');	
				}
				else{	
					$this->Admin_model->edit_setting();
					redirect('admin_controller/show_edit_setting');
				}
		
			
		}
//end setting ==================>

//main category==================>
	
	function maincategory(){
		$this->load->view('admin/index',array(
			'title'=>'maincategory',
			'show_maincategory'=>$this->Admin_model->show_maincategory()		
		));
		
	}
	function add_maincategory(){
			$this->load->view('admin/index',array(
				'title'=>'add_maincategory'
			));
		}
			//add main category==================>
	function insert_maincategory(){
			$this->Admin_model->insert_maincategory();
			redirect('admin_controller/maincategory');
		
	}
	
	function show_edit_maincategory($id){
			$this->load->view('admin/index',array(
				'title'=>'edit_maincategory',
				'edit_maincategory'=>$this->Admin_model->where_select_maincategory($id)
			));
		}
	function edit_maincategory($id){
			$this->Admin_model->edit_maincategory($id);
			redirect('admin_controller/maincategory');
			
		}
		
	function delete_maincategory($id){
				$this->Admin_model->delete_maincategory($id);
				redirect('admin_controller/maincategory');	
		}
	
//end main category==================>


//category==================>
	
	function category(){
		$this->load->view('admin/index',array(
			'title'=>'category',
			'show_category'=>$this->Admin_model->show_category()		
		));
		
	}
	function add_category(){
			$this->load->view('admin/index',array(
				'title'=>'add_category',
			'show_maincategory'=>$this->Admin_model->show_main_for_textbox()
			));
			
		}
			//add category==================>
	function insert_category(){
			$this->Admin_model->insert_category();
			redirect('admin_controller/category');
		
	}
	
	function show_edit_category($id){
			$this->load->view('admin/index',array(
				'title'=>'edit_category',
				'edit_category'=>$this->Admin_model->where_select_category($id),
				'show_maincategory'=>$this->Admin_model->show_maincategory()
			));
		}
	function edit_category($id){
			$this->Admin_model->edit_category($id);
			redirect('admin_controller/category');
			
		}
		
	function delete_category($id){
				$this->Admin_model->delete_category($id);
				redirect('admin_controller/category');	
		}
	
//end category==================>

	
// sub_category ===================>
	function sub_category(){
		$this->load->view('admin/index',array(
			'title'=>'sub_category',
			'show_sub_category'=>$this->Admin_model->show_sub_category(),
			'select_all_maincategory'=>$this->Admin_model->select_where_maincategory(),
			'select_where_category'=>$this->Admin_model->select_where_category(),
		));	
	}
	function add_sub_category(){
			$this->load->view('admin/index',array(
				'title'=>'add_sub_category',
				//'show_product'=>$this->Admin_model->show_sub_for_textbox(),
			    'select_all_maincategory'=>$this->Admin_model->select_where_maincategory(),
				
			));
	}
	
	function set_sub_category(){

				$this->Admin_model->set_sub_category();
				redirect('admin_controller/sub_category');

	}

		
//	public function buildDropmenu()
//    {
//         //set selected country id from POST
//        $id_menu = $this->input->post('id',TRUE);
//		//$main_category = $this->Admin_model->show_maincategory();
//		$category = $this->Admin_model->show_category_pro($id_menu);
//		$output = null;
//				foreach($category as $cate){
//						$output .= "<option value='".$cate->cat_id."'>".$cate->cat_name."</option>";
//					
//			}
//        echo  $output;
//    }
	
	function show_edit_sub_category($id){
			$this->load->view('admin/index',array(
				'title'=>'edit_sub_category',
				'show_sub_category_for_edit'=>$this->Admin_model->where_select_sub_category($id),
			    'select_all_maincategory'=>$this->Admin_model->select_where_maincategory(),
				
				
			));
		}
	
	function delete_sub_category($id){
				$this->Admin_model->delete_sub_category($id);
				redirect('admin_controller/sub_category');	
		}

//end sub_category  ==================>

	//Start Product=========================>
	function page(){
		$this->load->view('admin/index',array(
			'title'=>'Product',
			'show_page'=>$this->Admin_model->show_page(),
			'show_maincategory'=>$this->Admin_model->show_maincategory(),
			'show_category'=>$this->Admin_model->show_category(),
			//'show_sub_category'=>$this->Admin_model->show_sub_category(),

		));
	}
	
	function add_page(){
		$this->load->view('admin/index',array(
			'title'=>'Add Item',
			'show_maincategory'=>$this->Admin_model->show_maincategory(),
		));
	}
	
	function show_edit_page($id){
		$this->load->view('admin/index',array(
			'title'=>'Add Item',
			'show_edit_page'=>$this->Admin_model->where_select_page($id),
			//'get_research_fellow'=>$this->Admin_model->select_research_fellow()
			'show_maincategory'=>$this->Admin_model->show_maincategory(),
			'show_category'=>$this->Admin_model->show_category(),
		));
	}
	
	function set_page($id = false){
		$config = array(
			'upload_path'=>'./image/image_page',
			'allowed_types' => '*',
			'max_size'	=> '1000000KB',
			'encrypt_name' => TRUE,
			'overwrite' => FALSE
		);
		$this->upload->initialize($config);
		if($id == false){
			if($this->upload->do_upload('userfile')){
				$data = $this->upload->data();
				$this->Admin_model->set_page($data);
				redirect('admin_controller/page');
			}else{
				$this->Admin_model->set_page();
				redirect('admin_controller/page');
			}
		}else{
			if($this->upload->do_upload()){
				$data =  $this->upload->data();
				$remove_img = $this->Admin_model->remove_image_page($id);
				foreach($remove_img as $remove){
					@unlink('image/image_page/'.$remove->pag_image);
					//@unlink('images/item/'.$remove->pdf);
				}
				$this->Admin_model->set_page($data);
				redirect('admin_controller/page');
			}else{
				$this->Admin_model->set_page();
				redirect('admin_controller/page');
			}
		}
	}

	public function buildDropmenu()
    {
         //set selected country id from POST
        $id_menu = $this->input->post('id',TRUE);
		//$main_category = $this->Admin_model->show_maincategory();
		$category = $this->Admin_model->show_category_pro($id_menu);
		$output = null;
				foreach($category as $cate){
						$output .= "<option value='".$cate->cat_id."'>".$cate->cat_name."</option>";
					
			}
        echo  $output;
    }
	
	function delete_page($id){
		$remove_img = $this->Admin_model->remove_image_page($id);
		foreach($remove_img as $remove){
			@unlink('image/image_page/'.$remove->pag_image);
			//@unlink('images/item/'.$remove->pdf);
		}
		$this->Admin_model->delete_page($id);
		redirect('admin_controller/page');
	}
	

	
	//End Page=========================>

//highlight ==================>
	function highlight(){
		$this->load->view('admin/index',array(
			'title'=>'highlight',
			'show_highlight'=>$this->Admin_model->show_highlight()
		));	
	}
	function add_highlight(){
			$this->load->view('admin/index',array(
				'title'=>'add_highlight'
			));
		}
	function show_edit_highlight($id){
			$this->load->view('admin/index',array(
				'title'=>'edit_highlight',
				'show_edit_highlight'=>$this->Admin_model->remove_image_highlight($id)
			));
		}
	function delete_highlight($id){
				$remove_img=$this->Admin_model->remove_image_highlight($id);
					foreach($remove_img as $remove){
						@unlink('image/image_highlight/'.$remove->hig_image);	
					}
				$this->Admin_model->delete_highlight($id);
				redirect('admin_controller/highlight');	
		}
	//add highlight==================>
	function set_highlight($id=false){
		$this->load->library('upload');
		$config = array(
					'upload_path'=>'./image/image_highlight',
					'allowed_types' => 'png|jpg|gif|jpeg|PNG|JPG|GIF|JPEG',
					'encrypt_name' => true,
					'overwrite' => false
		);
		$this->upload->initialize($config);
			if($id==false){
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$this->Admin_model->set_highlight($data);
				redirect('admin_controller/highlight');	
				}
			}
			else{
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$remove_img=$this->Admin_model->remove_image_highlight($id);
					foreach($remove_img as $remove){
						@unlink('image/image_highlight/'.$remove->hig_image);	
					}
					$this->Admin_model->set_highlight($data);
					redirect('admin_controller/highlight');	
				}
				else{	
					$this->Admin_model->set_highlight();
					redirect('admin_controller/highlight');
				}
				
			}
		
		
		
		
	}
	
//end highlight==================>


	//Contact Us================================>
		function contact_us(){
			$this->load->view('admin/index',array(
				'title'=>'Contact Us',
				'get_contactus'=>$this->Admin_model->select_contactus()
			));
		}
		
		//function add_contact_us(){
//			$this->load->view('admin/index',array(
//				'title'=>'Contact Us'
//			));
//		}
		
		function show_edit_contact_us($id){
			$this->load->view('admin/index',array(
				'title'=>'Contact Us',
				'get_contactus'=>$this->Admin_model->select_contactus($id)
			));
		}
		
		function set_contact_us($id = false){
			if($id){
				$this->Admin_model->action_contactus($id);
				redirect('admin_controller/contact_us');
			}//else{
//				$this->Admin_model->action_contactus();
//				redirect('page/contact_us');
//			}
		}
		
		//function del_contactus($id){
//			$this->Admin_model->delete_contactus($id);
//			redirect('page/contact_us');
//		}
	//End contact us============================>
	
	
//instruction ================================>
		function instruction(){
			$this->load->view('admin/index',array(
				'title'=>'Instruction',
				'get_instruction'=>$this->Admin_model->select_instruction()
			));
		}
		
		//function add_contact_us(){
//			$this->load->view('admin/index',array(
//				'title'=>'Contact Us'
//			));
//		}
		
		function show_edit_instruction($id){
			$this->load->view('admin/index',array(
				'title'=>'Instruction',
				'get_instruction'=>$this->Admin_model->select_instruction($id)
			));
		}
		
		function set_instruction($id = false){
			if($id){
				$this->Admin_model->action_instruction($id);
				redirect('admin_controller/instruction');
			}//else{
//				$this->Admin_model->action_contactus();
//				redirect('page/contact_us');
//			}
		}
		
		//function del_contactus($id){
//			$this->Admin_model->delete_contactus($id);
//			redirect('page/contact_us');
//		}
	//End instruction============================>



//advertising==================>
	function advertising(){
		$this->load->view('admin/index',array(
			'title'=>'advertising',
			'show_advertising'=>$this->Admin_model->show_advertising()
			
		));	
	}
	function add_advertising(){
			$this->load->view('admin/index',array(
				'title'=>'add_advertising'
			));
		}
//	function show_edit_advertising($id){
//			$this->load->view('admin/index',array(
//				'title'=>'edit_advertising',
//				'show_advertising_edit'=>$this->Admin_model->remove_image_advertising($id)
//			));
//		}
	function delete_advertising($id){
				$remove_img=$this->Admin_model->remove_image_advertising($id);
					foreach($remove_img as $remove){
						@unlink('image/image_advertising/'.$remove->adv_image);	
					}
				$this->Admin_model->delete_advertising($id);
				redirect('admin_controller/advertising');	
		}
	//add slide==================>
	function set_advertising($id=false){
		$this->load->library('upload');
		$config = array(
					'upload_path'=>'./image/image_advertising',
					'allowed_types' => 'png|jpg|gif|jpeg|PNG|JPG|GIF|JPEG',
					'encrypt_name' => true,
					'overwrite' => false
		);
		$this->upload->initialize($config);
			if($id==false){
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$this->Admin_model->set_advertising($data);
				redirect('admin_controller/advertising');	
				}
			}
			else{
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$remove_img=$this->Admin_model->remove_image_advertising($id);
					foreach($remove_img as $remove){
						@unlink('image/image_advertising/'.$remove->adv_image);	
					}
					$this->Admin_model->set_advertising($data);
					redirect('admin_controller/advertising');	
				}
				else{	
					$this->Admin_model->set_advertising();
					redirect('admin_controller/advertising');
				}
				
			}
		
		
		
		
	}
	
//end advertising==================>


//advertising maincategory==================>
	function advertising_maincategory(){
		$this->load->view('admin/index',array(
			'title'=>'advertising_maincategory',
			'show_advertising_maincategory'=>$this->Admin_model->show_advertising_maincategory(),
			'show_maincategory'=>$this->Admin_model->show_main_for_textbox()
			
		));	
	}
//	function add_advertising_maincategory(){
//			$this->load->view('admin/index',array(
//				'title'=>'add_advertising_maincategory',
//				'show_maincategory'=>$this->Admin_model->show_main_for_textbox()
//			));
//		}
		
//	function show_edit_advertising_maincategory($id){
//			$this->load->view('admin/index',array(
//				'title'=>'edit_advertising_maincategory',
//				'show_advertising_maincategory_edit'=>$this->Admin_model->remove_image_advertising_maincategory($id)
//			));
//		}
	function delete_advertising_maincategory($id){
				$remove_img=$this->Admin_model->remove_image_advertising_maincategory($id);
					foreach($remove_img as $remove){
						@unlink('image/image_advertising_maincategory/'.$remove->adv_main_image);	
					}
				$this->Admin_model->delete_advertising_maincategory($id);
				redirect('admin_controller/advertising_maincategory');	
		}
	//add slide==================>
	function set_advertising_maincategory($id=false){
		$this->load->library('upload');
		$config = array(
					'upload_path'=>'./image/image_advertising_maincategory',
					'allowed_types' => 'png|jpg|gif|jpeg|PNG|JPG|GIF|JPEG',
					'encrypt_name' => true,
					'overwrite' => false
		);
		$this->upload->initialize($config);
			if($id==false){
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$this->Admin_model->set_advertising_maincategory($data);
				redirect('admin_controller/advertising_maincategory');	
				}
			}
			else{
				if($this->upload->do_upload()){
					$data=$this->upload->data();
					$remove_img=$this->Admin_model->remove_image_advertising_maincategory($id);
					foreach($remove_img as $remove){
						@unlink('image/image_advertising_maincategory/'.$remove->adv_main_image);	
					}
					$this->Admin_model->set_advertising_maincategory($data);
					redirect('admin_controller/advertising_maincategory');	
				}
				else{	
					$this->Admin_model->set_advertising_maincategory();
					redirect('admin_controller/advertising_maincategory');
				}
				
			}
		
		
		
		
	}
	
//end advertising_maincategory==================>



	function employee_apply_job(){
		$this->load->view('admin/index',array(
			'title'=>'employee_apply_job',
			'show_employee_apply_job_list'=>$this->Admin_model->show_employee_apply_job_list(),
			'show_all_employee'=>$this->Admin_model->show_all_employee(),
			'show_all_company'=>$this->Admin_model->show_all_company(),
			'show_all_job'=>$this->Admin_model->show_all_job(),
			
		));	
	}


	function set_company_hide($id=false, $act=false){
		if($act==0){
				$this->Admin_model->show_company_logo($id);
				redirect('admin_controller/company');
		}else{
		
				$this->Admin_model->hide_company_logo($id);
				redirect('admin_controller/company');
		}
	}
	
// cv ==================>
	
	function cv(){
		$this->load->view('admin/index',array(
			'title'=>'cv',
			'show_employee_cv'=>$this->Admin_model->show_employee_cv(),
			'show_function'=>$this->Admin_model->show_function(),
			'select_status_cvadmin' => $this->Admin_model->select_status_cvadmin()
					
		));
		
	}
	function set_cv_disable($id=false, $act=false){
		if($act==0){
				$this->Admin_model->enable_cv($id);
				redirect('admin_controller/cv');
		}else{
		
				$this->Admin_model->disable_cv($id);
				redirect('admin_controller/cv');
		}
	}
	
	function delete_cv($id){


				$this->View_model->delete_employee_cv($id);

				redirect('admin_controller/cv');	

		}





	function cv_disable(){
		$this->load->view('admin/index',array(
			'title'=>'job',
			'show_job'=>$this->Admin_model->show_job_disable(),
					
		));
		
	}
	function cv_active(){
		$this->load->view('admin/index',array(
			'title'=>'job',
			'show_job'=>$this->Admin_model->show_job_active(),
					
		));
		
	}
	function cv_delete(){
		$this->load->view('admin/index',array(
			'title'=>'job',
			'show_job'=>$this->Admin_model->show_job_delete(),
					
		));
		
	}

	function admin_public(){
		$this->Admin_model->update_un_public();
		redirect('admin_controller/job');
	}
	
	function admin_un_public(){
		$this->Admin_model->update_public();
		redirect('admin_controller/job');
	}
	
	function admin_cvpublic(){
		$this->Admin_model->update_un_cvpublic();
		redirect('admin_controller/cv');
	}
	
	function admin_un_cvpublic(){
		$this->Admin_model->update_cvpublic();
		redirect('admin_controller/cv');
	}


}