<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends MY_Model
{
	public $table = "categories";
	
	function __construct(){
		parent::__construct();
	}
	
}
