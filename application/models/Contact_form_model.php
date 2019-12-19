<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_form_model extends MY_Model
{
  
  public $table = 'contact_forms';
  
  public function __construct()
  {
    parent::__construct();
    $this->timestamps = false;
  }
  
  
}
