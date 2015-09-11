<?php
class Request_m extends MY_Model
{
	
	protected $_table_name = 'request_tb';
	protected $_order_by = 'id';

  public $rules_admin = array(
    'req_title' => array(
      'field' => 'req_title', 
      'rules' => 'trim|required|xss_clean'
        ), 
      'req_description' => array(
      'field' => 'req_description', 
      'rules' => 'trim|required|xss_clean'
    ),
     
      
  );

}