<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends Admin_Controller {
	
	
	function __construct(){
		
		parent::__construct();
		$this->load->model('article_model');
		
		if(!$this->ion_auth->in_group('admin'))
		{
			$this->session->set_flashdata('message','You are not allowed to visit the Groups page');
			redirect('admin','refresh');
		}
		
		$this->data['page_name'] = 'Articles';
	}
	
	function index(){
		$this->data['items'] = $this->article_model->order_by('created_at','ASC')->get_all();
		$this->render('admin/articles/index_article_view');
	}
	
	function create(){
		$this->load->model('category_model');
		$this->data['list_cats'] = $this->category_model->as_dropdown('name')->get_all();
		
		$this->__loadScriptUpload();
		$this->render('admin/articles/article_create_edit_view');
	}
	
	function edit($id){
		if(!empty($id)){
			$this->load->model('category_model');
			$this->data['list_cats'] = $this->category_model->as_dropdown('name')->get_all();
			
			$this->data['item'] = $this->article_model->with_article_category()->where('id',$id)->get();
			
		}
		
		$this->__loadScriptUpload();
		$this->render('admin/articles/article_create_edit_view');
	}
	
	function delete($id){
		if(!empty($id)){
			if($this->article_model->delete($id)){
				$this->load->model('article_category_model');
				if($this->article_category_model->delete(array('article_id'=>$id))){
					$this->session->set_flashdata('message','Article has been deleted.');
				}else{
					$this->session->set_flashdata('error','Error occures, please try again');
				}
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
			}
		}else{
			$this->session->set_flashdata('error','Error occures, please try again');
		}
		
		redirect('admin/articles','refresh');
	}
	
	function submit(){
		
		$data = $this->input->post();
		$cat_ids = $data['category_ids'];
		unset($data['category_ids']);
		$this->load->model('article_category_model');
		
		if(!empty($data['id'])){
			
			
			if($this->article_model->update($data,$data['id'])){
								
				$this->article_category_model->delete(array('article_id'=>$data['id']));
				foreach($cat_ids as $k => $v){
					$acat['article_id'] = $data['id'];
					$acat['category_id'] = $k;
					$this->article_category_model->insert($acat);
				}
				$this->session->set_flashdata('message','Article has been updated.');
				
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
			}
		}else{
			if($id = $this->article_model->insert($data)){
				foreach($cat_ids as $k => $v){
					$acat['article_id'] = $id;
					$acat['category_id'] = $k;
					$this->article_category_model->insert($acat);
				}
				$this->session->set_flashdata('message','Article has been updated.');
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
			}
		}
		
		redirect('admin/articles','refresh');
	}

}