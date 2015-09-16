<?php
class Grade_m extends MY_Model
{
	
	protected $_table_name = 'grade';
	protected $_order_by = 'id';

  public $rules_admin = array(
    'student_id' => array(
      'field' => 'student_id', 
      'rules' => 'trim|required|xss_clean'
        ), 
      'grading_period' => array(
      'field' => 'grading_period', 
      'rules' => 'trim|required|xss_clean'
    ),
     
      
  );



}

?>