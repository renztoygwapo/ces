<?php
class Login extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
    
            $rules = $this->user_m->rules;
            $this->form_validation->set_rules($rules);
            //var_dump($this->form_validation->run());
            if($this->form_validation->run() == true){
               
                   //if($this->user_m->login() != NULL){
                     $check = $this->user_m->checkrole();
                      var_dump($check);
                    if($check != NULL){

                        $this->user_m->login();
                        if($this->user_m->loggedin() == true){
                                    if($check == 'Student'){
                                    redirect('student/');
                                }else if($check == 'Teacher'){
                                    redirect('teacher/');
                                }else if($check == 'Alumni'){
                                    redirect('alumni/');
                                }else{
                                    redirect('login','refresh');
                                }
                            
                        }
                    }else{
                        $this->session->set_flashdata('error', 'Username/Password Combination does not exist.');
                        redirect('login/');
                    }
                  // }
                    // else {
                    //             $this->session->set_flashdata('error', 'Username/Password Combination does not exist.');
                    //             redirect('login/');
                    //     }
              
            }


        
    	// $dashboard = 'admin/student';
    	// $this->user_m->loggedin() == FALSE || redirect($dashboard);
    	
    	// $rules = $this->user_m->rules;
    	// $this->form_validation->set_rules($rules);
    	// if ($this->form_validation->run() == TRUE) {
    	// 	// We can login and redirect
    	// 	if ($this->user_m->login() == TRUE) {
    	// 		redirect($dashboard);
    	// 	}
    	// 	else {
    	// 		 $this->session->set_flashdata('error', 'Username/Password Combination does not exist.');
    	// 		redirect('login/');
    	// 	}
    	// }
        $this->load->view('admin/login');
    }

 

}