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
       function form138() {
        $this->load->helper('pdf_helper');
        /*
          ---- ---- ---- ----
          your code here
          ---- ---- ---- ----
         */
        $data['id'] = $this->uri->segment(4);
        $id = $this->uri->segment(4);
        $query = $this->db->query('SELECT * FROM students where id = '.$id.' ');
        $data['students'] = $query->result();

        $query = $this->db->query("SELECT * FROM grade where student_id = '".$id."' and subject_name = 'Mathematics' ");
        $data['math'] = $query->result();
        
        //var_dump($data['first_grading']);
        $this->load->view('/admin/reports/form138', $data);
    }

        function form137() {
        $this->load->helper('pdf_helper');
        /*
          ---- ---- ---- ----
          your code here
          ---- ---- ---- ----
         */
        $data['id'] = $this->uri->segment(4);
        $id = $this->uri->segment(4);
        $query = $this->db->query('SELECT * FROM students where id = '.$id.' ');
        $data['students'] = $query->result();
        

        $this->load->view('/admin/reports/form137', $data);
    }

    function form137_alumni() {
        $this->load->helper('pdf_helper');
        /*
          ---- ---- ---- ----
          your code here
          ---- ---- ---- ----
         */
        $data['id'] = $this->uri->segment(4);
        $id = $this->uri->segment(4);
        $query = $this->db->query('SELECT * FROM users where id = '.$id.' ');
        $data['students'] = $query->result();
        

        $this->load->view('/admin/reports/form137', $data);
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

      function studentgoodmoral() {
        $this->load->helper('pdf_helper');
        /*
          ---- ---- ---- ----
          your code here
          ---- ---- ---- ----
         */
        $data['id'] = $this->uri->segment(4);
        $id = $this->uri->segment(4);
        $query = $this->db->query('SELECT * FROM students where id = '.$id.' ');
        $data['user'] = $query->result();
        

        $this->load->view('/admin/reports/goodmoral_view', $data);
    }

    function teachers_pds() {
        $id = $this->session->userdata('id');
        $data['admin'] = $this->getdata();
        $query = $this->db->query('SELECT * FROM request_tb where req_file = "none" ');
        $data['count_request'] = $query->num_rows();
        
        $data['alumni'] = $this->custom_m->getAllalumni();
        $id = $this->uri->segment(4);
        $data['personal'] = $this->custom_m->get_personalinfo_m($id);
        $data['family_bg'] = $this->custom_m->get_family_background($id);
        $data['educ_bg'] = $this->custom_m->get_education_background($id);
        $data['civil_srvc'] = $this->custom_m->get_civil_srvc_elig($id);
        $data['work_exp'] = $this->custom_m->get_work_experience($id);
        $data['voluntary'] = $this->custom_m->get_voluntary_work($id);
        $data['training'] = $this->custom_m->get_training_programs($id);
        $data['other_information'] = $this->custom_m->get_other_information($id);
        $data['child'] = $this->custom_m->get_child($id);

        //var_dump($id);
       // var_dump($data['personal']);
       
       $this->load->view('/admin/reports/teacher_pds', $data);
    }


    


}

?>