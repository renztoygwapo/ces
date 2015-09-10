

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
    	
		$this->load->model('user_m');
		$this->user_m->register_user();
		redirect('/register');

	}

}