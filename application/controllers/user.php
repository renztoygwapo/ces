<?php
class User extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function login(){
    	$this->load->view('admin/login');
    }

    public function register(){
    	$this->load->view('admin/register');

    }

}