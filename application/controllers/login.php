<?php
class Login extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('student_m');
    }
    
    public function index(){

    
            $rules = $this->student_m->rules;
            $this->form_validation->set_rules($rules);
            //var_dump($this->form_validation->run());
            if($this->form_validation->run() == true){


                        $this->student_m->login();
                        if($this->student_m->loggedin() == true){
                             
                              redirect('student/');
                            
                        }
                         else{
                        $this->session->set_flashdata('error', 'Username/Password Combination does not exist.');
                        redirect('login/');
                    }
                    
               
            }
           


      
        $this->load->view('admin/login');
    }

    public function teacher(){
    
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

                                if($check == 'Teacher'){
                                    redirect('teacher/');
                                }else if($check == 'Alumni'){
                                    redirect('alumni/');
                                }else{
                                    redirect('login/teacher','refresh');
                                }
                            
                        }
                    }else{
                        $this->session->set_flashdata('error', 'Username/Password Combination does not exist.');
                        redirect('login/teacher');
                    }
               
            }


      
        $this->load->view('admin/teacher_login');
    }

     public function alumni(){
    
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
                                   
                               if($check == 'Teacher'){
                                    redirect('teacher/');
                                }else if($check == 'Alumni'){
                                    redirect('alumni/');
                                }else{
                                    redirect('login/alumni','refresh');
                                }
                            
                        }
                    }else{
                        $this->session->set_flashdata('error', 'Username/Password Combination does not exist.');
                        redirect('login/alumni');
                    }
               
            }

      
        $this->load->view('admin/alumni_login');
    }

 

}