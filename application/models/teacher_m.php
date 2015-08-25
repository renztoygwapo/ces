<?php
class Teacher_m extends MY_Model
{
	
	protected $_table_name = 'users';
	protected $_order_by = 'id';

  public $rules_admin = array(
    'section_name' => array(
      'field' => 'section_name', 
      'rules' => 'trim|required|xss_clean'
        ), 
      'subject_name' => array(
      'field' => 'subject', 
      'rules' => 'trim|required|xss_clean'
    ),
     'school_yr' => array(
      'field' => 'school_yr',  
      'rules' => 'trim|required|xss_clean'
    ), 
      
  );



}