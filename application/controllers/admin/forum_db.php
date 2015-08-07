<?php
class Forum_db extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
      $this->load->view('admin/forum_db');

    }
}

?>