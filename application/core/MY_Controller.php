<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $data = array();
	protected $langs = array();
	protected $default_lang;
	protected $current_lang;
	

	function __construct(){

		parent::__construct();

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


class Admin_Controller extends MY_Controller{
	var $main_menu;

	function __construct(){

		parent:: __construct();
		$this->load->library('Ion_auth');

		//$this->__checkpermissions();
		$this->data['page_tite'] = "Admin";
		/*Load Global Menu*/

		if(! $admin_menu = $this->cache->get('admin_menu')){

			$admin_menu = parent::__getMenus('admin');

			$this->cache->save('admin_menu',$admin_menu);
		}

		$this->data['admin_menu'] = $admin_menu;

		/* End load Menu */

		//var_dump(!preg_match('/login/',$this->uri->uri_string()));
		//var_dump(!$this->session->userdata('logged_in'));exit();
		if (!$this->ion_auth->logged_in()){
			//if (!preg_match('/login/',$this->uri->uri_string()) && !$this->session->userdata('logged_in')){
				//redirect them to the login page
				//redirect('admin/user/login', 'refresh');
			//}
			if(!preg_match('/login/',$this->uri->uri_string()) && !$this->session->userdata('logged_in')){
				redirect('admin/user/login','refresh');
			}
		}

		//echo preg_match('/login/',$this->uri->uri_string());exit();
		$this->data['current_user'] = $this->ion_auth->user()->row();
		$this->data['current_user_menu'] = '';

		if($this->ion_auth->in_group('admin')){
			$this->data['current_user_menu'] = $this->load->view('templates/_parts/user_menu_admin_view.php', NULL, TRUE);
		}

		$this->data['Settings'] = parent::__getGlobalSettings();
		$this->data['action'] = $this->router->fetch_method();
		/*Insert Jquery Validate*/
		$this->data['before_head'] .=$this->__before_head_script();

		$log_threshold = $this->config->item('log_threshold');

		//clear cache if in debug or localhost
		if($log_threshold > 0){
			parent::__clearcache();
		}

		/*Css for Interface*/
		$this->data['css_for_elements'] .= assets("select2/dist/css/select2.min.css");
		$this->data['css_for_elements'] .= assets('datatables.net-bs/css/dataTables.bootstrap.min.css');
		$this->data['css_for_elements'] .= assets('plugins/iCheck/all.css');


		/*Script for Interface*/
		$this->data['script_for_layout'] .= assets('datatables.net/js/jquery.dataTables.min.js');
		$this->data['script_for_layout'] .= assets('datatables.net-bs/js/dataTables.bootstrap.min.js');
		$this->data['script_for_layout'] .= assets('select2/dist/js/select2.full.min.js');
		$this->data['script_for_layout'] .= assets('plugins/iCheck/icheck.min.js');
		$this->data['script_for_layout'] .= assets('plugins/input-mask/jquery.inputmask.js');
		$this->data['script_for_layout'] .= assets('plugins/input-mask/jquery.inputmask.date.extensions.js');
		$this->data['script_for_layout'] .= assets('plugins/input-mask/jquery.inputmask.extensions.js');

		$this->data['script_for_layout'] .= assets('fastclick/lib/fastclick.js');
		
		/**/

	}

	protected function render($the_view = null, $template = "admin_master"){
		if($this->input->is_ajax_request()){
			$template = "admin_ajax";
		}
		parent::render($the_view, $template);
	}

	function __loadScriptUpload(){

		if(!$this->config->item('uploadFileScript_loaded')){

			$this->data['css_for_elements'] .='
			<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
			'.assets("css/jquery-file-upload/jquery.fileupload.css").'
			'.assets("css/jquery-file-upload/jquery.fileupload-ui.css");
			
			
			$script = '
				<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
				'.assets("js/jquery-file-upload/load-image.all.min.js").' '
				.assets("js/jquery-file-upload/jquery.iframe-transport.js").'
				<!-- The basic File Upload plugin -->
				'.assets("js/jquery-file-upload/jquery.fileupload.js").'
				<!-- The File Upload processing plugin -->
				'.assets("js/jquery-file-upload/jquery.fileupload-process.js").'
				<!-- The File Upload image preview & resize plugin -->
				'.assets("js/jquery-file-upload/jquery.fileupload-image.js").'
				<!-- The File Upload audio preview plugin -->
				'.assets("js/jquery-file-upload/jquery.fileupload-audio.js").'
				<!-- The File Upload video preview plugin -->
				'.assets("js/jquery-file-upload/jquery.fileupload-video.js").'
				<!-- The File Upload validation plugin -->
				'.assets("js/jquery-file-upload/jquery.fileupload-validate.js");
				
			if($this->input->is_ajax_request()){
				$this->data['script_for_page'] .= "<!--- script for page --->". $script . "<!---./script for page -->";
			}else{
				$this->data['script_for_layout'] .= "<!--- script for layout --->".
				$script . "<!---./script for layout -->";;
			}
			$this->config->set_item('uploadFileScript_loaded',true);
		}
	}

	function __getDropdownList($object,$key,$value){
		if(is_array($object)){
			$val = array();
			foreach($object as $k => $v){

				$val[$v->$key] = $v->$value;
			}

			return $val;
		}
	}

	static public function __slugify($text)
	{
	  // replace non letter or digits by -
	  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

	  // transliterate
	  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

	  // remove unwanted characters
	  $text = preg_replace('~[^-\w]+~', '', $text);

	  // trim
	  $text = trim($text, '-');

	  // remove duplicate -
	  $text = preg_replace('~-+~', '-', $text);

	  // lowercase
	  $text = strtolower($text);

	  if (empty($text)) {
	    return 'n-a';
	  }

	  return $text;
	}

	function __watermark_image($target, $wtrmrk_file, $newcopy) {
	    $watermark = imagecreatefrompng($wtrmrk_file);
	    imagealphablending($watermark, false);
	    imagesavealpha($watermark, true);
	    $img = imagecreatefromjpeg($target);
	    $img_w = imagesx($img);
	    $img_h = imagesy($img);
	    $wtrmrk_w = imagesx($watermark);
	    $wtrmrk_h = imagesy($watermark);
	    $dst_x = ($img_w / 2) - ($wtrmrk_w / 2); // For centering the watermark on any image
	    $dst_y = ($img_h / 2) - ($wtrmrk_h / 2); // For centering the watermark on any image
	    imagecopy($img, $watermark, $dst_x, $dst_y, 0, 0, $wtrmrk_w, $wtrmrk_h);
	    imagejpeg($img, $newcopy, 100);
	    imagedestroy($img);
	    imagedestroy($watermark);


	}

	function __checkpermissions(){

		if(!$this->ion_auth->logged_in()){
			echo "chưa login";
		}else{

			$this->load->model('group_permission_model');

			$controller 	= 	$this->router->fetch_class();
			$action 		=	$this->router->fetch_method();

			$group_permission = $this->group_permission_model->with_group('fields:name,redirect_controller,redirect_action')->where(array('controller'=>$controller,'action'=>$action))->get_all();

			$groups;
			if(!empty($group_permission)){
				foreach($group_permission as $k=>$v){
					$groups[] = $v->group->name;
				}
				if(!$this->ion_auth->in_group('admin') && !$this->ion_auth->in_group($groups)){
					$this->session->set_flashdata('message','You are not allowed to visit the Pages page');
					redirect('admin','refresh');
				}
			}else if(!$this->ion_auth->in_group('admin')){
				redirect('admin','refresh');
			}else{
				//echo 'passed';
			}
		}

	}

	function __main_script(){
		return "$(function () {
			    $('#data').DataTable({
				    'language': {'url':'//cdn.datatables.net/plug-ins/1.10.16/i18n/Vietnamese.json'}
			    });
			  })
			  console.log($('#data tr:first th').length);
			  $('td.no-data').attr('colspan',$('#data tr:first th').length);

			  //Date picker
			    $('#doc').datepicker({
				  language: 'vi',
				  format: 'yyyy-mm-dd',
			      autoclose: true,
			    });

			    $('#dob').datepicker({
				    defaultViewDate: '1990-01-01',
				    language: 'vi',
					  format: 'yyyy-mm-dd',
				      autoclose: true,
			    });

			    //Initialize Select2 Elements
			    $('.select2').select2()

			    //Datemask dd/mm/yyyy
			   // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
			    //Datemask2 mm/dd/yyyy
			    //$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
			    //Money Euro
			   // $('[data-mask]').inputmask()

			    //Date range picker
			    $('#reservation').daterangepicker()
			    //Date range picker with time picker
			    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
			    //Date range as a button
			    $('#daterange-btn').daterangepicker(
			      {
			        ranges   : {
			          'Today'       : [moment(), moment()],
			          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
			          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
			          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
			          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			        },
			        startDate: moment().subtract(29, 'days'),
			        endDate  : moment()
			      },
			      function (start, end) {
			        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
			      }
			    )


			    //iCheck for checkbox and radio inputs
			   /* $('input[type=\"checkbox\"].minimal, input[type=\"radio\"].minimal').iCheck({
			      checkboxClass: 'icheckbox_minimal-blue',
			      radioClass   : 'iradio_minimal-blue'
			    })
			    //Red color scheme for iCheck
			    $('input[type=\"checkbox\"].minimal-red, input[type=\"radio\"].minimal-red').iCheck({
			      checkboxClass: 'icheckbox_minimal-red',
			      radioClass   : 'iradio_minimal-red'
			    })


			    //Colorpicker
			    $('.my-colorpicker1').colorpicker()
			    //color picker with addon
			    $('.my-colorpicker2').colorpicker()

			    //Timepicker
			    $('.timepicker').timepicker({
			      showInputs: false
			    })*/
			    $('input[type=\"checkbox\"].minimal-red, input[type=\"radio\"].minimal-red').iCheck({
			      checkboxClass: 'icheckbox_minimal-red',
			      radioClass   : 'iradio_minimal-red'
			    })

			    $('input[type=\"checkbox\"].minimal-blue, input[type=\"radio\"].minimal-red').iCheck({
			      checkboxClass: 'icheckbox_minimal-blue',
			      radioClass   : 'iradio_minimal-blue'
			    })

			    total_tuition_fee = 0;
			    $('#courses').change(function(){
				    course_id = $(this).val();
				    //console.log(courses[course_id]);
				    option_html  = '';
				    for(i = 0; i<courses[course_id].length;i++){
						//option_html += '<option value=\"'+courses[course_id][i].id+'\">' + courses[course_id][i]->name + '</option>';
						option_html += '<option value=\"'+ courses[course_id][i].id+'\">'+ courses[course_id][i].name+'</option>';
					}

					$('#classes').html(option_html);
					$('#classes').removeAttr('disabled');

					console.log(courses_info[course_id][0]);

					$('#tuition').text(currency(courses_info[course_id][0].tuition_fee));
					$('#chemical_fee').text(currency(courses_info[course_id][0].chemicals_fee));
					$('#tool_fee').text(currency(courses_info[course_id][0].tool_fee));

					total_tuition_fee = Number(courses_info[course_id][0].tuition_fee) + Number(courses_info[course_id][0].chemicals_fee) + Number(courses_info[course_id][0].tool_fee);

					$('#total_tuition_fee').text(currency(total_tuition_fee));


			    });

			    // Pay Fee

			    tuition_student_pay = '';

			    $('#tuition_student_pay').on('keyup change',function(){
				    if($(this).val() > total_tuition_fee){
					    return;
					}
				    tuition_student_pay = $(this).val();

				    indebtedness = total_tuition_fee - tuition_student_pay;
				    $('#debt').text(currency(indebtedness));
				    $('input[name=indebtedness]').val(indebtedness);
				});

				$('#tuition_student_pay').on('focus',function(){
					$(this).val(tuition_student_pay);
				});

				$('#tuition_student_pay').on('blur',function(){
					$(this).val(currency(tuition_student_pay,''));
				});


				$('[data-mask]').inputmask();

				$('dd.currency').html(function(){
					return $(this).html().toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,')+ ' đ';
				});";
	}

	function __before_head_script(){
		return "<script>
			function currency(n, currency) {

				if (typeof(currency) == 'undefined'){
					currency = 'VNĐ';
				}

			    return Number(n).toFixed(0).replace(/./g, function(c, i, a) {
			        return (i > 0 && c !== '.' && (a.length - i) % 3 === 0 ? ',' + c : c);
			    }) + ' ' + currency;

			}
		</script>";
	}

	/*
		Functions for settle database
	*/

	function __submit($data,$model){
		$model = $model.'_model';

		$this->load->model(strval($model));

		if($this->$model->insert($data)){
			return true;
		}else{
			return false;
		}


	}

	//=== Delete Table with Translation

	function __delete($id,$table_name='',$has_translation = false){

		$table = $table_name.'_model';

		$this->load->model(strval($table));

		if($has_translation){

			$table_translation = $table_name.'_translation_model';
			$this->load->model(strval($table_translation));

			$this->$table_translation->delete(array($table_name.'_id'=>$id));
		}

		if($this->$table->delete(array('id'=>$id))){
			return true;
		}else{
			return false;
		}

	}

}

class Public_Controller extends MY_Controller{
	function __construct(){

		parent:: __construct();


		$this->data['page_title'] = "";

		$this->data['Settings'] = $this->__getGlobalSettings();

		$this->data['main_menu'] = $this->__getGlobalMenu("front");

		$this->data['langs'] = $this->__getLanguages();

		$this->data['css_for_elements'] .= "";

		$this->data['before_body'] .=
		'';
	}

	/**
	* Get Global Menu
	*
	**/
	function __getGlobalMenu(){

		/*if(! $main_menu = $this->cache->get('main_menu')){
			$this->load->model('menu_model');

			$main_menu = $this->menu_model->get_all(array('active'=>1,'menu_side'=>'front'));

			$this->cache->save('main_menu',$main_menu);
		}*/

		$admin_menu = parent::__getMenus('admin');
		if(! $admin_menu = $this->cache->get('admin_menu')){

			$this->load->model('menu_model');
			$admin_menu = parent::__getMenus('admin');
		}
		$this->config->load('menu');
		$menu = $this->config->item('public');
		return $menu;

	}

	function __getLanguages(){
		if(! $langs = $this->cache->get('languages')){
			$this->load->model('language_model');

			$langs = $this->language_model->get_all(array('active'=>1));

			$this->cache->save('languages',$langs);
		}

		return $langs;
	}

	protected function render($the_view = null, $template = "master" ){
		parent::render($the_view, $template);
	}

}


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
