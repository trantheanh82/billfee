<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends MY_Model
{
	public $table = "products";
	
    public function __construct()
    {
	    $this->has_one['province'] = array('Province_model','id','province_id');
        //$this->has_one['city'] = array('foreign_model'=>'City_model', 'foreign_table'=>'city ','foreign_id'=>'id', 'local_id'=>'city_id');
        $this->has_one['district'] = array('District_model','id', 'district_id');
        $this->has_one['ward'] = array('Ward_model', 'id', 'ward_id');
		$this->has_many['images'] = array('Image_model','model_id','id'); 
		 
        parent::__construct();
        
    }
    
    public function get_all_products($conditions=array(),$order=""){
	    
	    if(!empty($conditions)){
		    
	    }
	    
	    return $this->width_images('fields:`name`','where:`model`=\'product\'')->where($conditions)->order_by($order)->get_all();
    }

}