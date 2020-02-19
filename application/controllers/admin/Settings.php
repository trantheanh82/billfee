<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends Admin_Controller
{
	function __construct(){
		parent::__construct();
		if(!$this->ion_auth->in_group('admin'))
		{
			$this->session->set_flashdata('message','You are not allowed to visit the Groups page');
			redirect('admin','refresh');
		}
		
		$this->lang->load('settings',strtolower($this->data['current_lang']['name']));
		
		$this->load->model('setting_model');
		$this->load->helper('ext_form');
		$this->load->library('user_agent');
		$this->data['page_name'] = 'Settings';
		//parent::setEditor();
	}
	
	function index($section = 1){
		redirect('/admin/settings/general','refresh');
	}
	
	function general(){
		$this->data['page_title'] = "Settings: General";
		$this->data['form_settings'] = $this->getSettings(1);
		
		$this->render('admin/settings/settings_view','admin_master');
	}
	
	function information(){
		parent::__loadScriptUpload();
		$this->data['page_title'] = "Settings: Information";
		$this->data['form_settings'] = $this->getSettings(2);
		
		$this->render('admin/settings/settings_view');
	}
	
	function email(){
		$this->data['page_title'] = "Settings: Email Setting";
		$this->data['form_settings'] = $this->getSettings(3);
		
		$this->render('admin/settings/settings_view','admin_master');
	}
	
	function contact(){
		$this->data['page_title'] = "Settings: Contact Information";
		$this->data['form_settings'] = $this->getSettings(4);
		
		$this->render('admin/settings/settings_view','admin_master');
	}
	
	function seo(){
		
	}
	
	function system(){
		$this->data['page_title'] = "Settings: Systems";
		$this->data['form_settings'] = $this->getSettings(5);
		
		$this->render('admin/settings/settings_view','admin_master');
	}
	
	function submit(){
		if(!empty($this->input->post())){
			foreach($this->input->post() as $k => $v){
				$value = array('value'=>$v);
				$column_where = array('form_name'=>$k);
					
				$this->setting_model->update($value,$column_where);
			}
			
			$this->session->set_flashdata('message','Your Settings has been updated.');
			redirect($this->agent->referrer(),'refresh');
		}
	}
	
	protected function getSettings($section = ''){
		$this->load->model('setting_model');
		$value = $this->setting_model->get_all(array('groups'=>$section));
		return $value;
	}
	
	function clearcache(){
		$this->cache->clean();
		
		redirect('/admin/','refresh');
		
		return;
	}
	
}