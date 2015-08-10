<?php
class Login extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
 
    	//$check = $this->user_m->checkrole();
    	//	var_dump($check);
    	
    	$dashboard = 'admin/student';
    	$this->user_m->loggedin() == FALSE || redirect($dashboard);
    	
    	$rules = $this->user_m->rules;
    	$this->form_validation->set_rules($rules);
    	if ($this->form_validation->run() == TRUE) {
    		// We can login and redirect
    		if ($this->user_m->login() == TRUE) {
    			redirect($dashboard);
    		}
    		else {
    			 $this->session->set_flashdata('error', 'Username/Password Combination does not exist.');
    			redirect('login/');
    		}
    	}
        $this->load->view('admin/login');
    }

 

}