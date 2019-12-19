<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends MY_Model
{

	public $table = "pages";
    public function __construct()
    {
    	$this->has_many['translations'] = array('Page_translation_model','page_id','id');
        parent::__construct();
    }

}