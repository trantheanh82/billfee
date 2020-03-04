<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends MY_Model
{
	public $table = "products";
	
    public function __construct()
    {
	    
		$this->has_one['images'] = array('foreign_model'=>'Image_model','foreign_table'=>'images','foreign_key'=>'model_id','local_key'=>'id'); 
		
		parent::__construct();
    }
    
    
    
    public function get_products($conditions=array(),$order=""){
	    
	    if(!empty($conditions)){
		    
	    }
	    
	    return $this->with_images('fields:name','where:`model`=\'product\'')->where($conditions)->order_by($order)->get_all();
    }
    
    public function get_product($id,$conditions=array()){
	    $item = $this->with_images('fields:id,image,model','where:`model`=\'product\'')->where(array('id'=>$id))->get();
	    
	    if(!empty($item->images->image)){
	    	$item->images = unserialize($item->images->image);
	    }
	    
	    return $item;
    }

}