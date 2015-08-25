<?php
class Profile_m extends MY_Model
{
  
  protected $_table_name = 'profile';
  protected $_order_by = 'id';

  public $rules_admin = array(
    'gender' => array(
      'field' => 'gender', 
      'rules' => 'trim|required|xss_clean'
        ), 
      'address' => array(
      'field' => 'address', 
      'rules' => 'trim|required|xss_clean'
    ),
     'birthday' => array(
      'field' => 'birthday',  
      'rules' => 'trim|required|xss_clean'
    ), 
      
  );


}