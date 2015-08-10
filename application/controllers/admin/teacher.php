<?php
class Teacher extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
      $this->load->view('admin/teacher/index');

    }
     public function logout(){
    	$this->user_m->logout();
    	redirect('/login/');
    }
}