<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article_category_model extends MY_Model
{
	public $table = 'articles_categories';
	
	function __construct(){
		
		$this->timestamps = FALSE;
		
		parent::__construct();
	}
}
