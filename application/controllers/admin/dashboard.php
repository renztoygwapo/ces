<?php
class Dashboard extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
      $this->load->view('admin/_layout_main');

    }
    
    public function modal() {
      $this->load->view('admin/_layout_modal', $this->data);
    }
    public function home(){

    }
}