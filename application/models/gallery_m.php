<?php
class Gallery_m extends MY_Model
{
	
	protected $_table_name = 'gallery';
	protected $_order_by = 'id';

      public $rules_admin = array(
    'title' => array(
      'field' => 'title', 
      'label' => 'Gallery Title', 
      'rules' => 'trim|required|xss_clean'
    ), 
      'description' => array(
      'field' => 'description', 
      'label' => 'GAllery Description', 
      'rules' => 'trim|required|xss_clean'
    ) 
      
  );



}