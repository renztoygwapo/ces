<?php
class Reports extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('teacher_m');
        $this->load->model('profile_m');
        $this->load->model('familybg_m');
        $this->load->model('personalinfo_m');
        $this->load->model('admin_m');
        $this->load->model('student_m');
        $this->load->model('custom_m');
        $this->load->model('pds');
    }

     public function getdata(){
      $id = $this->session->userdata('id');
      return $this->admin_m->get($id);
    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
      
      $data['admin'] = $this->getdata();
      $query = $this->db->query('SELECT * FROM request_tb where req_file = "none" ');
      $data['count_request'] = $query->num_rows();
     $this->load->view('admin/reports_students' ,$data);
        //var_dump('dfssd');

    }

    public function reports_students() {
     // $this->data['subview'] = 'admin/dashboard/index';
      
      $data['admin'] = $this->getdata();
      $query = $this->db->query('SELECT * FROM request_tb where req_file = "none" ');
     $data['count_request'] = $query->num_rows();
     // $data['stud'] = $this->db->query('SELECT * FROM students');
      //var_dump($data['students']);
      $data['stud'] = $this->custom_m->getAllstudents();


    
      $this->load->view('admin/reports_students' ,$data);
    
    }

    public function reports_teachers() {
     // $this->data['subview'] = 'admin/dashboard/index';
      
      $data['admin'] = $this->getdata();
      $query = $this->db->query('SELECT * FROM request_tb where req_file = "none" ');
      $data['count_request'] = $query->num_rows();
      $data['teacher'] = $this->custom_m->getAllteacher();
      $this->load->view('admin/reports_teacher' ,$data);
     // var_dump("sds");

    }

    public function reports_alumni() {
     // $this->data['subview'] = 'admin/dashboard/index';
      
      $data['admin'] = $this->getdata();
      $query = $this->db->query('SELECT * FROM request_tb where req_file = "none" ');
      $data['count_request'] = $query->num_rows();
      $data['alumni'] = $this->custom_m->getAllalumni();
      $this->load->view('admin/reports_alumni' ,$data);

    }

     function goodmoral() {
        $this->load->helper('pdf_helper');
        /*
          ---- ---- ---- ----
          your code here
          ---- ---- ---- ----
         */
        $data['id'] = $this->uri->segment(4);
        $id = $this->uri->segment(4);
        $query = $this->db->query('SELECT * FROM users where id = '.$id.' ');
        $data['user'] = $query->result();
        

        $this->load->view('/admin/reports/goodmoral_view', $data);
    }



}

?>