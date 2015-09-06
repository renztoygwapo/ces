<?php
class Forum_m extends MY_Model
{
	
	protected $_table_name = 'topics';
	protected $_order_by = 'id';

      public $rules_admin = array(
    'title' => array(
      'field' => 'title', 
      'label' => 'Title', 
      'rules' => 'trim|required|xss_clean'
    ), 
      'location' => array(
      'field' => 'description', 
      'label' => 'Description', 
      'rules' => 'trim|required|xss_clean'
    ) 
      
  );


}