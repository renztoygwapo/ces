<?php
class Myfiles extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
      $this->load->view('admin/myfiles');

    }
}

?>