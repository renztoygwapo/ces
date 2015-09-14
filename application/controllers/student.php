<?php
class Student extends Admin_Controller {

    
    public function __construct(){
        parent::__construct();
        $this->load->model('teacher_m');
        $this->load->model('custom_m');
        $this->load->model('admin_m');
        $this->load->model('student_m');
        $this->load->model('section_m');
        $this->load->model('profile_m');
        $this->load->model('familybg_m');
         $this->load->model('grade_m');
        $this->load->model('personalinfo_m');
        $this->load->model('pds');
    }


   




    public function getdata(){
      $id = $this->session->userdata('id');
      return $this->student_m->get($id);
    }

    public function index() {

      
      $id = $this->session->userdata('id');
      $data['student'] = $this->student_m->get($id);
      $this->load->view('admin/student/index', $data);

    }

  public function profile() {
      
      $id = $this->session->userdata('id');
      $data['student'] = $this->student_m->get($id);
      $this->load->view('admin/student/myprofile',$data);
    }

    public function classmates() {
      //for header important//
      $id = $this->session->userdata('id');
      $data['student'] = $this->student_m->get($id);
      ////////////////////////////////////////
      //var_dump($data['student']->aboutme);
    $query = $this->db->query('SELECT * FROM students where section_id = '.$data['student']->section_id.'' );
     $data['student_list'] = $query->result();

     // $query = $this->db->query('SELECT * FROM section where id = '.$data['student']->section_id.'' );
     // $data['student_section'] = $query->result();

     $data['student_section'] = $this->section_m->get($data['student']->section_id);

     //var_dump($data['student_section']->id);


      $this->load->view('admin/student/classmates',$data);
    }

     public function subjects() {
      //for header important//
      $id = $this->session->userdata('id');
       $data['student'] = $this->student_m->get($id);
    //   ////////////////////////////////////////
    //   //var_dump($data['student']->aboutme);
    //   $data['student_section'] = $this->section_m->get($data['student']->section_id);
    //   // $data['subject'] = $this->subject_m->get($data['student']->id);

    // $query = $this->db->query('SELECT * FROM students where section_id = '.$data['student']->section_id.'' );
    //  $data['student_list'] = $query->result();

    // $query = $this->db->query("SELECT users.*,students.*,section.*,subject.* FROM `users`,`subject`,`students`,`section` WHERE students.section_id = section.id and section.id = subject.section_id and section.teacher_id = users.id and students.id = ".$id." ");
       $query = $this->db->query("SELECT students.section_id,students.id,subject.*,users.id,users.firstname,users.lastname from students,subject,users where students.id= ".$id." and students.section_id = subject.section_id and users.id = students.teacher_id");
     $data['subjects'] = $query->result();

   // var_dump($data);

      $this->load->view('admin/student/myteachers',$data);
    
    }

      public function update_profile(){

      $id = $this->session->userdata('id');
      $rules = $this->profile_m->rules_admin;
    $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == TRUE) {
       $data = array(
              'gender' => $this->input->post('gender'),
              'address' => $this->input->post('address'),
              'birthday' => $this->input->post('birthday'),
              'aboutme' => $this->input->post('aboutme'),
              'firstname' => $this->input->post('firstname'),
              'lastname' => $this->input->post('lastname')
              );
            $this->profile_m->save($data,$id);
            $this->session->set_flashdata('result', 'Profile Successfully Updated!');
            redirect('student/profile','refresh');
      }

    }
    public function grades(){

      $id = $this->session->userdata('id');
      $data['student'] = $this->student_m->get($id);
       $query = $this->db->query('SELECT * FROM grade where student_id = '.$id.'' );
     $data['grades'] = $query->result();




      //var_dump($data['grades']);







     $this->load->view('admin/student/grades',$data);

    }






    public function change_pass(){

    $pass = $this->input->post('current_password');

    $password = $this->student_m->hash($pass);
    $id = $this->session->userdata('id');
    $this->db->where('password', $password);
    $this->db->where('id', $id);
    $query = $this->student_m->get();
    //var_dump($query);
    if (count($query)) {

      $new_pass = $this->input->post('new_pass');
      $retype_pass = $this->input->post('retype_pass');

      if($new_pass == $retype_pass){

      $new_password = $this->student_m->hash($new_pass);
      $data = array(
              'password' => $new_password
              );
      $this->student_m->save($data,$id);
      $this->session->set_flashdata('result', 'Password Successfully Updated!');
      redirect('student/profile','refresh');

      }else{
        var_dump('Password should Match!');
      }

      


    }


    }



       public function myfiles() {
     
      $this->load->view('admin/student/myfiles');

    }

       public function request() {
     
      $this->load->view('admin/student/request');

    }

       public function rankings() {
  
      $this->load->view('admin/student/rankings');

    }

       public function reports() {
   
      $this->load->view('admin/student/reports');

    }

     public function forum() {
     
      $this->load->view('admin/student/forum_db');

    }

        public function events() {
     
      $this->load->view('admin/student/events');

    }

      




    public function logout(){
    	$this->user_m->logout();
    	redirect('/login/');
    }
}