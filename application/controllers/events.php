<?php
class Events extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
      $this->load->view('admin/events');

    }
    
     public function scpersonnel() {
      $this->load->view('admin/scpersonnel');

    }
}

?>