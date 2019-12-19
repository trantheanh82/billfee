<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends MY_Model
{
	public $table = "articles";
    public function __construct()
    {
	    $this->has_many['article_category'] = array('Article_category_model','article_id','id');
        parent::__construct();
    }

}