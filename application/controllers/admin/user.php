<?php
class User extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->view('index');
    }


}