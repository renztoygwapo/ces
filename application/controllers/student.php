<?php
class Student extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
     
      $this->load->view('admin/student/index');

    }

     public function profile() {
    
      $this->load->view('admin/student/myprofile');

    }

       public function myfiles() {
     
      $this->load->view('admin/student/myfiles');

    }

       public function request() {
     
      $this->load->view('admin/student/request');

    }

       public function rankings() {
  
      $this->load->view('admin/student/rankings');

    }

       public function reports() {
   
      $this->load->view('admin/student/reports');

    }

     public function forum() {
     
      $this->load->view('admin/student/forum_db');

    }

        public function events() {
     
      $this->load->view('admin/student/events');

    }




    public function logout(){
    	$this->user_m->logout();
    	redirect('/login/');
    }
}