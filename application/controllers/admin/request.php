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
       $query= $this->db->query('SELECT request_tb.id as request_id, request_tb.req_title as title , request_tb.req_description as description, request_tb.req_date as request_date,
request_tb.req_file as files, users.id as user_id, users.firstname as firstname, users.lastname as lastname, users.photo as users_photo, request_tb.year_graduated as year_grad 
FROM request_tb JOIN users
ON request_tb.user_id=users.id order by req_date DESC');
       $data['rows'] = $query->result();
       //var_dump($data['rows']);
      $this->load->view('admin/request', $data);

    }

    //updateRequest

     public function updateRequest() {

     $id = $this->input->post('req');

        $this->custom_m->updateRequest($id);

         //  var_dump($id);

           $this->session->set_flashdata('result', 'Request Successfully Updated!');
          redirect('admin/request','refresh');
      





    }
}

?>