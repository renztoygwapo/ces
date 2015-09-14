<?php
class Home_admin extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('teacher_m');
        $this->load->model('profile_m');
        $this->load->model('familybg_m');
        $this->load->model('personalinfo_m');
        $this->load->model('admin_m');
        $this->load->model('event_m');
        $this->load->model('section_m');
        $this->load->model('pds');
    }

    public function getdata(){
      $id = $this->session->userdata('id');
      return $this->admin_m->get($id);
    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
     	$query = $this->db->query('SELECT * FROM users where role = "Teacher" ');
		$data['teachers'] = $query->num_rows();

		$query = $this->db->query('SELECT * FROM users where role = "Student" ');
		$data['students'] = $query->num_rows();
    // $query = $this->db->query('SELECT * FROM users where role = "Admin" ');
    // $data['admin'] = $query;

      $id = $this->session->userdata('id');
     // update query
     //
     $data['admin'] = $this->admin_m->get($id);
		$query = $this->db->query('SELECT * FROM users where role = "alumni" ');
		$data['alumni'] = $query->num_rows();

   // UPDATE MyGuests SET lastname='Doe' WHERE id=2
    $data['event_tb'] = $this->event_m->get();
		$query = $this->db->query('SELECT * FROM section');
		$data['section'] = $query->num_rows();

     	$this->load->view('admin/admin_layout_main', $data);

    }

     public function teacher_list(){
      $data['admin'] = $this->getdata();
      $this->db->where('role', 'Teacher');
       $data['rows'] = $this->teacher_m->get();

     	//$data['rows'] = $this->db->query('SELECT * FROM users where role = "Teacher" ');
      $this->load->view('admin/teacher_list_admin', $data);
    }

    public function student_list(){
      $data['admin'] = $this->getdata();
      $this->db->where('role', 'student');
       $data['rows'] = $this->teacher_m->get();
     	//$data['rows'] = $this->db->query('SELECT * FROM users where role = "Teacher" ');
      $this->load->view('admin/student/student_list', $data);
    }

    public function alumni_list(){
      $data['admin'] = $this->getdata();
      $this->db->where('role', 'Alumni');
       $data['rows'] = $this->user_m->get();
     	//$data['rows'] = $this->db->query('SELECT * FROM users where role = "Teacher" ');
      $this->load->view('admin/alumni/alumni_list', $data);
    }

    public function section_list(){
      $data['admin'] = $this->getdata();
     // $this->db->where('role', 'advisory');
     // $data['rows'] = $this->section_m->get();

       $query = $this->db->query('SELECT section.*,users.* FROM section,users where section.role = "advisory" and section.teacher_id = users.id');
       $data['rows'] = $query->result();
       
     	//$data['rows'] = $this->db->query('SELECT * FROM users where role = "Teacher" ');
      $this->load->view('admin/section/section_list', $data);

    }

}