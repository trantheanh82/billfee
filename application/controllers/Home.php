<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {


	public function __construct(){
		parent::__construct();

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function index()
	{
		redirect('/admin/');
		exit();
		$this->load->model('product_model');
		$this->load->model('article_model');

		$this->data['products'] = $this->product_model->where(array('active'=>'Y'))->with_province()->with_district()->with_ward()->order_by('sort','ASC')->get_all();
		$this->data['articles'] = $this->article_model->where(array('active'=>'Y'))->get_all();
		//redirect('/admin/','true');exit();
		 $this->render('default/home/index_view');

	}

	function language($slug = null){
		$this->load->library('user_agent');

		redirect($this->agent->referrer());
		if($this->agent->is_referral()){

		}

	}

	public function clearcache(){
		$this->output->delete_cache();
		redirect('/', 'location');
	}
}
