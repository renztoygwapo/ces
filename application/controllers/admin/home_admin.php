<?php
class Home_admin extends Admin_Controller {

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
    	$this->load->model('teacher_m');
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
    
		$query = $this->db->query('SELECT * FROM events');
		$data['events'] = $query->num_rows();

     	$this->load->view('admin/admin_layout_main', $data);

    }

     public function teacher_list(){

      $this->db->where('role', 'Teacher');
       $data['rows'] = $this->teacher_m->get();
     	//$data['rows'] = $this->db->query('SELECT * FROM users where role = "Teacher" ');
      $this->load->view('admin/teacher/teacher_list', $data);
    }

    public function student_list(){

      $this->db->where('role', 'student');
       $data['rows'] = $this->teacher_m->get();
     	//$data['rows'] = $this->db->query('SELECT * FROM users where role = "Teacher" ');
      $this->load->view('admin/student/student_list', $data);
    }

    public function alumni_list(){

      $this->db->where('role', 'alumni');
       $data['rows'] = $this->teacher_m->get();
     	//$data['rows'] = $this->db->query('SELECT * FROM users where role = "Teacher" ');
      $this->load->view('admin/alumni/alumni_list', $data);
    }

    public function event_list(){

      $this->db->where('role', 'events');
       $data['rows'] = $this->teacher_m->get();
     	//$data['rows'] = $this->db->query('SELECT * FROM users where role = "Teacher" ');
      $this->load->view('admin/events/event_list', $data);
    }

}