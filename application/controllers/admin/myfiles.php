<?php
class Myfiles extends Admin_Controller {

     public function __construct(){
        parent::__construct();
        $this->load->model('teacher_m');
        $this->load->model('profile_m');
        $this->load->model('admin_m');

    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
      $id = $this->session->userdata('id');
      $data['admin'] = $this->admin_m->get($id);
      $this->load->view('admin/myfiles', $data);

    }
}

?>