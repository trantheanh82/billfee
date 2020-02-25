<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Admin_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('product_model');
		
		$this->load->library('ion_auth');
		$this->data['page_name'] = 'Products';
		
		$this->data['before_body'] .= assets("js/simple.money.format.js");
		
		$this->data['script_for_layout'] .= "<script>
			$(document).ready(function(){
				$('.currency').simpleMoneyFormat();
			
			});
				
		</script>";
	}
	
	function index(){
		
		$this->data['items']  = $this->product_model->order_by('created_at','DESC')->get_all();
		$this->render('admin/products/products_view');
	}
	
	function create(){
		$this->__loadScriptUpload();
				
		$this->render('admin/products/product_create_view');


	}
	
	function edit($id){
		$this->__loadScriptUpload();
		
		
		$this->data['for_sells'] = $this->config->item('for_sell');;
		
		$this->data['item'] = $this->product_model->get_product($id);
		
		$this->render('admin/products/product_edit_view');
	}
	
	function delete($id){
		if(!empty($id)){
			if($this->product_model->delete($id)){
				$this->session->set_flashdata('message','Product has been deleted');
			}else{
				$this->session->set_flashdata('error','Error occures. Please try again');
			}
			redirect('admin/products','refresh');
		}
		$this->session->set_flashdata('error','Error occures. Please try again');
		redirect('admin/products','refresh');
	}
	
	function submit(){
		if(!empty($this->input->post())){
			$data = $this->input->post();
			
			$data_id = 0;
			
			
			if(isset($data['id'])){
				$data_id = $data['id'];
			}
			
			$slug = $this->product_model->where(array('slug'=>$data['slug'],'id <> ' => $data_id))->get();
			
			if(!empty($slug)){
				$data['slug'] .= "-".date('Ymdhis');		
			}
			
			if(isset($data['has_many'])){
				$images = $data['product_image'];	
				unset($data['product_image']);
			}
			
			if(!empty($data['id'])){
				if($this->product_model->update($data,$data['id'])){
					$this->_insert_images($images,$data);
					$this->session->set_flashdata('message','Product has been updated');
				}else{
					$this->session->set_flashdata('error','Error occures. Please try again');
				}
				
			}else{
				if(!isset($data['page_title'])){
					$data['page_title'] = $data['name'];
				}
								
				if($this->product_model->insert($images,$data)){
					
					$this->_insert_images($data);
					
					$this->session->set_flashdata('message','Product has been created');
				}else{
					$this->session->set_flashdata('error','Error occures. Please try again');
				}
			}
			
			redirect('admin/products','refresh');
		}
	}
	
	function _insert_images($images,$data){
		if(!empty($images)){
			$this->load->model('image_model');
			if(is_array($images[0])){
				// do something update multi product image
			}else{
				foreach($images as $k => $v){
					
					$image['model'] = 'product';
					$image['model_id'] = $data['id'];
					$image['image'] = $v;
					$image['alt'] = $data['name'];
					
					if(!$this->image_model->insert($image)){
						$this->session->set_flashdata('error','Error occures. Please try again');
						redirect('admin/products','refresh');
					}
					
				}
			}
			
		}
	}

}