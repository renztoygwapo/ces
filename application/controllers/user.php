<?php
class User extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function login(){
    	$this->load->view('admin/login');
    }

    public function register(){
    	$this->load->view('admin/register');

    }

    public function insert(){
		
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$username = $this->input->post('username');
		$password = sha1("".$this->input->post('password'));
		$email = $this->input->post('email');
		$role = $this->input->post('role');
		$this->load->model('user_m');
		$data = array(
		   'firstname' => $firstname ,
		   'lastname' => $lastname ,
		   'username' => $username ,
		   'password' => $password ,
		   'email' => $email ,
		   'role' => $role
		);
		$this->user_m->register_user($data);
		redirect('/register/');

	}

}