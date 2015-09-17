<?php
class Rankings extends Admin_Controller {

    public function __construct(){
        parent::__construct();
         $this->load->model('teacher_m');
        $this->load->model('profile_m');
        $this->load->model('familybg_m');
        $this->load->model('personalinfo_m');
        $this->load->model('admin_m');
        $this->load->model('pds');
    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
      $id = $this->session->userdata('id');
      $data['admin'] = $this->admin_m->get($id);

      $query = $this->db->query('SELECT * FROM request_tb where req_file = "none" ');
      $data['count_request'] = $query->num_rows();

      $year = $this->input->post('year_level'); 

      $query = $this->db->query("SELECT students.*,grade.student_id,grade.grade_rating,section.teacher_id,section.grade_level FROM students,grade,section where students.id = grade.student_id and section.teacher_id = students.teacher_id and section.grade_level = '".$year."' order by grade.grade_rating DESC limit 10");
      $data['students'] = $query->result();
      $data['count'] = array('1','2','3','4','5','6','7','8','9','10');

      $this->load->view('admin/rankings', $data);

    }

    public function select_year(){

        $id = $this->session->userdata('id');
      $data['admin'] = $this->admin_m->get($id);

      $query = $this->db->query('SELECT * FROM request_tb where req_file = "none" ');
      $data['count_request'] = $query->num_rows();

      $this->load->view('admin/select_yearlevel', $data);

    }

}

?>