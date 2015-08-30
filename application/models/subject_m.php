<?php
class Subject_m extends MY_Model
{
	
	protected $_table_name = 'subject';
	protected $_order_by = 'id';

  public $rules_admin = array(
    'subject_name' => array(
      'field' => 'subject_name', 
      'rules' => 'trim|required|xss_clean'
        ), 
      'section_id' => array(
      'field' => 'section_id', 
      'rules' => 'trim|required|xss_clean'
    ),
     
      
  );

}
