<?php
class User extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function login(){
    	$this->load->view('admin/login');
    }


}