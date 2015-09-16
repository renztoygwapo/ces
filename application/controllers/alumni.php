<?php
class Alumni extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('teacher_m');
        $this->load->model('admin_m');
        $this->load->model('student_m');
        $this->load->model('section_m');
        $this->load->model('profile_m');
        $this->load->model('familybg_m');
        $this->load->model('personalinfo_m');
        $this->load->model('grade_m');
        $this->load->model('request_m');
        $this->load->model('custom_m');
        $this->load->model('pds');
    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
      $id = $this->session->userdata('id');
       $data['alumni'] = $this->user_m->get($id);
       $query = $this->db->query('SELECT * FROM request_tb where user_id = '.$id.' and req_file = "approved" ');
       $data['approved'] = $query->num_rows();

      $this->load->view('admin/alumni/index', $data);

    }

    
     public function profile() {
       $id = $this->session->userdata('id');
       $data['alumni'] = $this->user_m->get($id);
      $this->load->view('admin/alumni/myprofile', $data);

    }

       public function myfiles() {
     
      $this->load->view('admin/alumni/myfiles');

    }

       public function request() {
          $id = $this->session->userdata('id');
       $data['alumni'] = $this->user_m->get($id);
      // $data['request'] = $this->custom_m->getRequest($id);
       //$query = $this->db->where('req_file','approved');
       $query = $this->db->where('user_id',$id);
       $data['request'] = $this->request_m->get();
       //var_dump($data['request']);
     $this->load->view('admin/alumni/request', $data);

    }

    public function alumni_request(){

       $id = $this->session->userdata('id');
       $data['alumni'] = $this->user_m->get($id);
       $this->load->view('admin/alumni/new_request', $data);

    }

       public function rankings() {
  
      $this->load->view('admin/alumni/rankings');

    }
    public function requested_approved(){


       $id = $this->session->userdata('id');
       $data['alumni'] = $this->user_m->get($id);
       $query = $this->db->where('user_id',$id);
       $query = $this->db->where('req_file','approved');
       $data['alumnis'] = $this->request_m->get();
       $this->load->view('admin/alumni/requested_list',$data);

    }


    public function events() {
     
      $this->load->view('admin/alumni/events');

    }

       // insertRequest
      public function insertRequest() {
     
     // $this->load->view('admin/alumni/events');
        $data = array(
              'year_graduated' => $this->input->post('year_graduated'),
              'req_title' => $this->input->post('title'),
              'req_description' => $this->input->post('request_description'),
              'req_date' => $this->input->post('date_now'),
              'req_file' => $this->input->post('request_file'),
              'user_id' => $this->input->post('user_id')
              );
           $this->request_m->save($data);
            $this->session->set_flashdata('result', 'Request Successfully Sent to Admin!');
            redirect('alumni/alumni_request','refresh');

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
            $this->session->set_flashdata('result', 'Personal Data Sheet Successfully Updated!');
            redirect('alumni/profile','refresh');
      }

    }

    public function change_pic(){

    $pass = $this->input->post('profilepic');
    $id = $this->session->userdata('id');
    $this->db->where('id', $id);
    $query = $this->profile_m->get();
    //var_dump($query);
    if (count($query)) {
      if($new_pass == $retype_pass){
      $new_password = $this->user_m->hash($new_pass);
      $data = array(
              'password' => $new_password
              );
      $this->profile_m->save($data,$id);
      $this->session->set_flashdata('result', 'Password Successfully Updated!');
      redirect('alumni/profile','refresh');

      }else{
        var_dump('Password should Match!');
      } 
    }
    }


    public function change_pass(){

    $pass = $this->input->post('current_password');
    $password = $this->user_m->hash($pass);
    $id = $this->session->userdata('id');
    $this->db->where('password', $password);
    $this->db->where('id', $id);
    $query = $this->profile_m->get();
    //var_dump($query);
    if (count($query)) {
      $new_pass = $this->input->post('new_pass');
      $retype_pass = $this->input->post('retype_pass');
      if($new_pass == $retype_pass){
      $new_password = $this->user_m->hash($new_pass);
      $data = array(
              'password' => $new_password
              );
      $this->profile_m->save($data,$id);
      $this->session->set_flashdata('result', 'Password Successfully Updated!');
      redirect('alumni/profile','refresh');

      }else{
        var_dump('Password should Match!');
      } 
    }


    }







    
     public function logout(){
    	$this->user_m->logout();
    	redirect('/login/');
    }
}