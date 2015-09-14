<?php
class Request extends Admin_Controller {

    public function __construct(){
        parent::__construct();

         $this->load->model('teacher_m');
        $this->load->model('profile_m');
        $this->load->model('familybg_m');
        $this->load->model('personalinfo_m');
        $this->load->model('admin_m');
        $this->load->model('event_m');
        $this->load->model('pds');
        $this->load->model('custom_m');
        $this->load->model('request_m');
    }

    public function index() {
     // SELECT * FROM request_tb,users WHERE request_tb.user_id = users.id
     // $this->data['subview'] = 'admin/dashboard/index';
      $id = $this->session->userdata('id');
      $data['admin'] = $this->admin_m->get($id);
     // $data['rows'] = $this->custom_m->view_request();
       $query= $this->db->query('SELECT users.*,request_tb.* FROM users,request_tb WHERE request_tb.approved=0 and users.id = request_tb.user_id');
       $data['rows'] = $query->result();
       //var_dump($data['rows']);
      $this->load->view('admin/request', $data);

    }
}

?>