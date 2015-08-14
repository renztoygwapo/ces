<?php
class Teacher extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
      $this->load->view('admin/teacher/index');

    }


     public function profile() {
    
      $this->load->view('admin/teacher/myprofile');

    }

       public function myfiles() {
     
      $this->load->view('admin/teacher/myfiles');

    }

       public function request() {
     
      $this->load->view('admin/teacher/request');

    }

       public function rankings() {
  
      $this->load->view('admin/teacher/rankings');

    }

       public function reports() {
   
      $this->load->view('admin/teacher/reports');

    }

     public function forum() {
     
      $this->load->view('admin/teacher/forum_db');

    }

        public function events() {
     
      $this->load->view('admin/teacher/events');

    }
         public function section() {
     
      $this->load->view('admin/teacher/section');

    }

     public function studentList() {
     
      $this->load->view('admin/teacher/studentList');

    }




     public function logout(){
    	$this->user_m->logout();
    	redirect('/login/');
    }
}