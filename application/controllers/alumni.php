<?php
class Alumni extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
      $this->load->view('admin/alumni/index');

    }

    
     public function profile() {
    
      $this->load->view('admin/alumni/myprofile');

    }

       public function myfiles() {
     
      $this->load->view('admin/alumni/myfiles');

    }

       public function request() {
     
      $this->load->view('admin/alumni/request');

    }

       public function rankings() {
  
      $this->load->view('admin/alumni/rankings');

    }

       public function reports() {
   
      $this->load->view('admin/alumni/reports');

    }

     public function forum() {
     
      $this->load->view('admin/alumni/forum_db');

    }

        public function events() {
     
      $this->load->view('admin/alumni/events');

    }




    
     public function logout(){
    	$this->user_m->logout();
    	redirect('/login/');
    }
}