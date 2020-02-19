<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends Public_Controller {
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		
		error_reporting(E_ALL | E_STRICT);
		
		$type_file = $this->input->post('type_file');
		
		switch($type_file){
			case 'file':
				$folder = 'file/';
				break;
			case 'images':
				$folder = 'img/';
				break;
			case 'video':
				$folder = 'video/';
				break;
			case 'product':
				$folder = 'product/';
				break;
			default:
				$folder = 'img/';
		}
		
        $options = array(
        	'upload_dir'=> getcwd().$this->config->item('upload_dir').$folder,
        	'upload_url'=>$this->config->base_url().$this->config->item('upload_dir').$folder,
        	'mkdir_mode'=> 0777,
    		'user_dirs'=>false,
    		'medium'=> array(
        		'max_width'=> 1000,
        		'max_height'=>1000,
        		'crop'=>true
        		),
        		'thumbnail'=>array(
		        	'upload_dir'=> getcwd().$this->config->item('upload_dir').'img/thumbnails/',
		        	'upload_url'=>$this->config->base_url().$this->config->item('upload_dir').'img/thumbnails/',
		        	'crop'=>true
        		)
        );
        
		$this->load->library("UploadHandler",$options);
        
	}
	
	function delete(){
		
		$params = $this->input->get();
		if(!empty($params)){
			//$this->load->model('image_model');
			
			if(unlink(FCPATH.'assets/upload/product/'.$params['filename'])&& unlink(FCPATH.'assets/upload/product/thumbnail/'.$params['filename']) && unlink(FCPATH.'assets/upload/product/medium/'.$params['filename'])){
				echo 'done';
			}else{
				echo 'failed';
			}
		}
	}
	
		//watermark_image('image_name.jpg','watermark.png', 'new_image_name.jpg');
	
}