<?php
class Reports extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('teacher_m');
        $this->load->model('profile_m');
        $this->load->model('familybg_m');
        $this->load->model('personalinfo_m');
        $this->load->model('admin_m');
        $this->load->model('pds');
    }

     public function getdata(){
      $id = $this->session->userdata('id');
      return $this->admin_m->get($id);
    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
      
      $data['admin'] = $this->getdata();
      $this->load->view('admin/reports' ,$data);

    }
}

?>