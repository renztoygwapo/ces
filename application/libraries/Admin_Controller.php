<?php
class Admin_Controller extends MY_Controller
{

	function __construct ()
	{
		parent::__construct();
      $this->data['meta_title'] = 'Carmen Elementary School';
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('user_m');
      
      
    // Login check
    $exception_uris = array(
      'admin/index/login', 
      'admin/index/logout'
    );
    if (in_array(uri_string(), $exception_uris) == FALSE) {
      if ($this->user_m->loggedin() == FALSE) {
        redirect('login');
      }
    }
	}
}