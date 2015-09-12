<?php
class Post_m extends MY_Model
{
	
	protected $_table_name = 'forum_post';
	protected $_order_by = 'id';

  public $rules_admin = array(
    'name' => array(
      'field' => 'name', 
      'rules' => 'trim|required|xss_clean'
        ), 
      'id' => array(
      'field' => 'id', 
      'rules' => 'trim|required|xss_clean'
    ),
     
      
  );

}
