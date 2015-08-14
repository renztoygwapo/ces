<?php
class Teacher extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('teacher_m');
    }

    public function index() {

       $this->load->view('admin/teacher/index');

    }


     public function profile() {
    
      $this->load->view('admin/teacher/myprofile');

    }

       public function myfiles() {
     
      $this->load->view('admin/teacher/myfiles');

    }

       public function request() {
     
      $this->load->view('admin/teacher/request');

    }

       public function rankings() {
  
      $this->load->view('admin/teacher/rankings');

    }

       public function reports() {
   
      $this->load->view('admin/teacher/reports');

    }

     public function forum() {
     
      $this->load->view('admin/teacher/forum_db');

    }

        public function events() {
     
      $this->load->view('admin/teacher/events');

    }
         public function section() {

      $data['sections'] = $this->teacher_m->get();
      $this->load->view('admin/teacher/section',$data);

    }
    public function add_section(){
     
        $rules = $this->teacher_m->rules_admin;
        $this->form_validation->set_rules($rules);
          if ($this->form_validation->run() == TRUE) {
            $data = array(
              'section_name' => $this->input->post('section_name'),
               'subject_name' => $this->input->post('subject'),
                'school_yr' => $this->input->post('school_yr'),

              );
            $this->teacher_m->save($data);
            $this->session->set_flashdata('result', 'Section Successfully Added!');
            redirect('teacher/section','refresh');
          }else{
            echo 'false';
          }
    
      // $this->load->teacher_m();
      // $this->teacher_m->save($data);
    }


     public function studentList() {
     
      $this->load->view('admin/teacher/studentList');

    }




     public function logout(){
    	$this->user_m->logout();
    	redirect('/login/');
    }
}