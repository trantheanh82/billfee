<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";

class MY_Controller extends MX_Controller {

	protected $data = array();
	protected $langs = array();
	protected $default_lang;
	protected $current_lang;
	

	function __construct(){
		
		parent::__construct();
		
		if (version_compare(CI_VERSION, '2.1.0', '<')) {
            $this->load->library('security');
        }
        
        $this->load->library('session');

		$this->load->driver('cache',array('adapter'=>'file','backup'=>'file'));
		$this->load->helpers(array('form'));

		$this->data['location'] = $this->config->item('location');

		/* Get Language */
		$this->load->model('language_model');
		$this->load->helper(array('url','html'));

		$available_languages = $this->language_model->get_all();

		if(isset($available_languages))
		{
			foreach($available_languages as $lang)
			{
				$this->langs[$lang->slug] = array('id'=>$lang->id,'slug'=>$lang->slug,'language_directory'=>$lang->language_directory,'language_code'=>$lang->language_code,'default'=>$lang->default,'name'=>$lang->language_name);
				if($lang->default == '1') $this->default_language = $lang->slug;
			}
		}


		// Verify if we have a language set in the URL;
		$lang_slug = $this->uri->segment(1);
		// If we do, and we have that languages in our set of languages we store the language slug in the session
		if(isset($lang_slug) && array_key_exists($lang_slug, $this->langs))
		{

			$this->current_lang = $lang_slug;
			$_SESSION['set_language'] = $lang_slug;

			$this->load->library('user_agent');

			if($this->agent->referrer()){
				redirect($this->agent->referrer(),'refresh');
			}
		}
		elseif(isset($_SESSION['set_language'])){

			$this->current_lang = $_SESSION['set_language'];
		}
		else
		{
			$this->current_lang = $this->default_language;
			$_SESSION['set_language'] = $this->default_lang;
		}


		$this->data['langs'] = $this->langs;
		$this->data['current_lang'] = $this->langs[$this->current_lang];


		if($this->current_lang != $this->default_lang)
		{
			$this->data['lang_slug'] = $this->current_lang.'/';
		}
		else
		{
			$this->data['lang_slug'] = '';
		}

		$this->data['lang'] = $this->lang->load('global',strtolower($this->data['current_lang']['name']));

		$this->data['page_title'] = $this->config->item('company_name');
		$this->data['page_description'] = 'Bee Platform';
		$this->data['before_head'] = '';
		$this->data['before_body'] = '';

		$this->data['script_for_layout'] = '';
		$this->data['script_for_page'] = '';
		$this->data['css_for_elements'] = '';

		$this->data['before_head'] .= assets('js/vendor/jquery-1.12.4.min.js',false);
	
	}

	protected function render($the_view = NULL, $template = 'master'){
		if($template == 'json'){
			header("Content-Type: application/json");
			echo json_encode($this->data);
		}
		
		if($this->input->is_ajax_request()){
			header("Content-Type: text/html");
			$this->load->view($the_view,$this->data);
		}
		
		elseif(is_null($template))
		{
			$this->load->view($the_view,$this->data);
		}
		else{
			$this->data['the_view_content'] = (is_null($the_view))? '':$this->load->view($the_view,$this->data, TRUE);
			$this->load->view('templates/'.$template.'_view',$this->data);
		}
	}

	protected function __getGlobalSettings($section = ""){

		if( ! $value = $this->cache->get('GlobalSettings')){
			$this->load->model('setting_model');
			$settings = $this->setting_model->get_all();
			foreach($settings as $k => $v){
				$value[$v->form_name] = $v->value;
			}

			$this->cache->save('GlobalSettings',$value);
		}

		return $value;
	}

	/**
	*  Get Menu in Database
	*  $side is Menu in Admin or Public
	**/

	protected function __getMenus($side = 'admin'){

		$this->load->model('menu_model');

		$menus = $this->menu_model->getTreeMenus($side,'1',true);
		$this->lang->load('menu',$this->data['current_lang']['language_directory']);

		return $menus;

	}

	protected function __clearcache(){

		$CI =& get_instance();
		$path = $CI->config->item('cache_path');

		$cache_path = ($path == '') ? APPPATH.'cache/' : $path;

		$handle = opendir($cache_path);
	    while (($file = readdir($handle))!== FALSE)
	    {
	        //Leave the directory protection alone
	        if ($file != '.htaccess' && $file != 'index.html')
	        {
	           @unlink($cache_path.'/'.$file);
	        }
	    }
	    closedir($handle);

		return 0;

	}

}


require_once(APPPATH.'core/Admin_Controller.php');

require_once(APPPATH.'core/Public_Controller.php');


/** Customer functions **/
	function pr($data){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}

	function __($label,$obj){

		$lang = $obj->lang->line($label);

		if($lang){
			return $lang;
		}else{

			return $label;
		}
	}

	function assets($file,$admin = true){
		$link = base_url().'assets/';

		if($admin){
			$link .= 'admin/';
		}

		$ext  = getfileext($link.$file);

		switch($ext){
			case "css":
				return "<link href='".$link.$file."' rel='stylesheet' type='text/css' />";
			break;
			case "js":
				return "<script type='text/javascript' src='".$link.$file."'></script>";
			break;

		}
	}

	function getfileext($file){
		$path = FCPATH.$file;
		return pathinfo($path, PATHINFO_EXTENSION);
	}


	function getSnippet( $str, $wordCount = 10 ) {
	  return implode(
	    '',
	    array_slice(
	      preg_split(
	        '/([\s,\.;\?\!]+)/',
	        $str,
	        $wordCount*2+1,
	        PREG_SPLIT_DELIM_CAPTURE
	      ),
	      0,
	      $wordCount*2-1
	    )
	  );
	}
