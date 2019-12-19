<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends Admin_Controller {

	function __construct(){
		
		parent::__construct();
		$this->data['page_name'] = 'Cateogry';
		
		$this->load->model('category_model');
		
		if(!$this->ion_auth->in_group('admin'))
		{
			$this->session->set_flashdata('message','You are not allowed to visit the Groups page');
			redirect('admin','refresh');
		}
		
		$this->load->library('user_agent');
		
		
	}
	
	function index(){
		redirect('admin/category/listing','location');
		
	}
	
	function listing(){
		$this->data['page_name'] = 'Category listing';
		
		$this->data['items'] = $this->category_model->get_all();
		
		$this->render('admin/categories/category_view');
	}
	
	function create(){
		parent::__loadScriptUpload();
		$this->data['page_name'] = 'Cateogry::create';
		$this->render('admin/categories/category_create_edit_view');
	}
	
	function edit($id){
		parent::__loadScriptUpload();
		$this->data['page_name'] = 'Cateogry::create';
		
		$this->data['item'] = $this->category_model->where('id',$id)->get();
		
		$this->render('admin/categories/category_create_edit_view');
	}
	
	function submit($type = 'create'){
		switch($type){
			case 'create':
				if(parent::__submit($this->input->post(),'category')){
					$this->session->set_flashdata('message','New Category has been inserted.');
					
				}else{
					$this->session->set_flashdata('error','Error occurs. Try again late.');
				}
				break;
			case 'edit':
				$id = $this->input->post('id');
				if($this->category_model->update($this->input->post(),$id)){
					$this->session->set_flashdata('message','New Category has been updated.');
				}else{
					$this->session->set_flashdata('error','Error occurs. Try again late.');
				}
				break;
		}
		
		redirect($this->agent->referrer(),'refresh');
	}
	
	function delete($id){
		if(!empty($id)){
			if($this->category_model->delete($id)){
				$this->session->set_flashdata('message','Category has been deleted.');
			}
		}
		
		redirect($this->agent->referrer(),'refresh');
	}

}