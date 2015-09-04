<?php
class Forum_db extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
      $this->load->view('admin/forum_db');

    }

     public function forum_topic() {
    
      $this->load->view('admin/forum_topics');


    }

    public function forum_page() {
    
      $this->load->view('admin/forum_page');


    }

}

?>