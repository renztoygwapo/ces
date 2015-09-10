<?php
class Teacher extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('teacher_m');
        $this->load->model('student_m');
        $this->load->model('section_m');
        $this->load->model('profile_m');
        $this->load->model('familybg_m');
        $this->load->model('personalinfo_m');
        $this->load->model('pds');
       
    }

    public function index() {
      $this->header();
      $this->load->model('teacher_m');
      $query = $this->db->query('SELECT * FROM users where role = "Teacher" ');
      $data['teachers'] = $query->num_rows();

      $id = $this->session->userdata('id');
      $query = $this->db->query('SELECT * FROM students where teacher_id = '.$id.' ');
      $data['students'] = $query->num_rows();
      // $query = $this->db->query('SELECT * FROM users where role = "Admin" ');
      // $data['admin'] = $query;

      $id = $this->session->userdata('id');
      // update query
      $data['admin'] = $this->user_m->get($id);
      $query = $this->db->query('SELECT * FROM users where role = "alumni" ');
      $data['alumni'] = $query->num_rows();

    // UPDATE MyGuests SET lastname='Doe' WHERE id=2
    //$data['sections'] = $this->section_m->get();
    $query = $this->db->query('SELECT * FROM section');
    $data['sections'] = $query->num_rows();
       $this->load->view('admin/teacher/index', $data);

    }

    public function teacher_list(){
     $this->header();
      $data['teachers'] = $this->teacher_m->get();
      //var_dump($data);
      $this->load->view('admin/teacher/teacher_list', $data);

    }

    public function insert_pds() {
     $this->get_personal_info();
     $this->get_family_bacground();
     $this->get_educ_background();
     $this->get_civil_service();
     $this->get_work_experience();
     $this->get_voluntary_work();
     $this->get_training_program();
     $this->get_other_information();
     $this->session->set_flashdata('result', 'Profile Successfully Updated!');
    redirect('/teacher/pds/','refresh');
    }

    public function get_family_bacground() 
    {
    $spouse_sn = $this->input->post('spouse_sn');
    $spouse_fn = $this->input->post('spouse_fn');
    $spouse_mn = $this->input->post('spouse_mn');
    $occupation = $this->input->post('occupation');
    $employer_name = $this->input->post('employer_name');
    $bus_address = $this->input->post('bus_address');
    $telephone = $this->input->post('telephone');
    $father_sn = $this->input->post('father_sn');
    $father_fn = $this->input->post('father_fn');
    $father_mn = $this->input->post('father_mn');
    $mother_sn = $this->input->post('mother_sn');
    $mother_fn = $this->input->post('mother_fn');
    $mother_mn = $this->input->post('mother_mn');

    $data = array(
      'spouse_sn' => $spouse_sn,
      'spouse_fn' => $spouse_fn,
      'spouse_mn' => $spouse_mn,
      'spouse_occupation' => $occupation,
      'spouse_emp_bus_name' => $employer_name,
      'spouse_bus_add' => $bus_address,
      'spouse_tel_number' => $telephone,
      'father_sn' => $father_sn,
      'father_fn' => $father_fn,
      'father_mn' => $father_mn,
      'mother_sn' => $mother_sn,
      'mother_fn' => $mother_fn,
      'mother_mn' => $mother_mn,
      'user_id' => $this->input->post('user_id')
    );
    $this->get_children();
    $this->familybg_m->save($data); // model for family background
    }

    public function get_children(){
      $data = array(
             array(
                'full_name' => $this->input->post('fn1') ,
                'bday' => $this->input->post('bd1') ,
                'user_id' => $this->input->post('user_id'),
                
             ),
             array(
                'full_name' => $this->input->post('fn2') ,
                'bday' => $this->input->post('bd2') ,
                'user_id' => $this->input->post('user_id'),
                
             ),
              array(
                'full_name' => $this->input->post('fn3') ,
                'bday' => $this->input->post('bd3') ,
                'user_id' => $this->input->post('user_id'),
                
             ),
               array(
                'full_name' => $this->input->post('fn4') ,
                'bday' => $this->input->post('bd4') ,
                'user_id' => $this->input->post('user_id'),
                
             ),
                array(
                'full_name' => $this->input->post('fn5') ,
                'bday' => $this->input->post('bd5') ,
                'user_id' => $this->input->post('user_id'),
                
             ),
                 array(
                'full_name' => $this->input->post('fn6') ,
                'bday' => $this->input->post('bd6') ,
                'user_id' => $this->input->post('user_id'),
                
             ),
             array(
                'full_name' => $this->input->post('fn7') ,
                'bday' => $this->input->post('bd7') ,
                'user_id' => $this->input->post('user_id'),
                
             ),
              
              array(
                'full_name' => $this->input->post('fn8') ,
                'bday' => $this->input->post('bd8') ,
                'user_id' => $this->input->post('user_id'),
                
             ),
              
            array(
                'full_name' => $this->input->post('fn9') ,
                'bday' => $this->input->post('bd9') ,
                'user_id' => $this->input->post('user_id'),
                
             ),
              
              array(
                'full_name' => $this->input->post('fn10') ,
                'bday' => $this->input->post('bd10') ,
                'user_id' => $this->input->post('user_id'),
                
             )
              );
      $this->pds->dbinsert_data('child', $data);
    }


    public function get_educ_background() {
   
    $data = array(
             array(
                'level' => $this->input->post('elementary') ,
                'school_nm' => $this->input->post('elem_school_name') ,
                'course_degree' => $this->input->post('elem_degree_course'),
                'year_grad' => $this->input->post('elem_yr_grad') ,
                'high_level' => $this->input->post('elem_high_grade') ,
                'inclusive_from' => $this->input->post('elem_inclusive_from'),
                'inclusive_to' => $this->input->post('elem_inclusive_to') ,
                'honors_receive' => $this->input->post('elem_honor_recieve') ,
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'level' => $this->input->post('vocational') ,
                'school_nm' => $this->input->post('vocational_school_name') ,
                'course_degree' => $this->input->post('vocational_degree_course'),
                'year_grad' => $this->input->post('vocational_yr_grad') ,
                'high_level' => $this->input->post('vocational_high_grade') ,
                'inclusive_from' => $this->input->post('vocational_inclusive_from'),
                'inclusive_to' => $this->input->post('vocational_inclusive_to') ,
                'honors_receive' => $this->input->post('vocational_honor_recieve') ,
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'level' => $this->input->post('college') ,
                'school_nm' => $this->input->post('college_school_name') ,
                'course_degree' => $this->input->post('college_degree_course'),
                'year_grad' => $this->input->post('college_yr_grad') ,
                'high_level' => $this->input->post('college_high_grade') ,
                'inclusive_from' => $this->input->post('college_inclusive_from'),
                'inclusive_to' => $this->input->post('college_inclusive_to') ,
                'honors_receive' => $this->input->post('college_honor_recieve') ,
                'user_id' => $this->input->post('user_id'),
                
             ),
              
              array(
                'level' => $this->input->post('graduate_studies') ,
                'school_nm' => $this->input->post('graduate_studies_school_name') ,
                'course_degree' => $this->input->post('graduate_studies_degree_course'),
                'year_grad' => $this->input->post('graduate_studies_yr_grad') ,
                'high_level' => $this->input->post('graduate_studies_high_grade') ,
                'inclusive_from' => $this->input->post('graduate_studies_inclusive_from'),
                'inclusive_to' => $this->input->post('graduate_studies_inclusive_to') ,
                'honors_receive' => $this->input->post('graduate_studies_honor_recieve') ,
                'user_id' => $this->input->post('user_id'),
                
             )
              );
      $this->pds->dbinsert_data('educ_bg', $data);

    }

    public function get_civil_service(){
    $data = array(
             array(
                'career_srvc' => $this->input->post('career_service1') ,
                'rating' => $this->input->post('rating1') ,
                'date_of_exam' => $this->input->post('date_of_examination1'),
                'conferment' => $this->input->post('place_of_examination1') ,
                'license_number' => $this->input->post('license_number1') ,
                'license_release' => $this->input->post('date_release1'),
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'career_srvc' => $this->input->post('career_service2') ,
                'rating' => $this->input->post('rating2') ,
                'date_of_exam' => $this->input->post('date_of_examination2'),
                'conferment' => $this->input->post('place_of_examination2') ,
                'license_number' => $this->input->post('license_number2') ,
                'license_release' => $this->input->post('date_release2'),
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'career_srvc' => $this->input->post('career_service3') ,
                'rating' => $this->input->post('rating3') ,
                'date_of_exam' => $this->input->post('date_of_examination3'),
                'conferment' => $this->input->post('place_of_examination3') ,
                'license_number' => $this->input->post('license_number3') ,
                'license_release' => $this->input->post('date_release3'),
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'career_srvc' => $this->input->post('career_service4') ,
                'rating' => $this->input->post('rating4') ,
                'date_of_exam' => $this->input->post('date_of_examination4'),
                'conferment' => $this->input->post('place_of_examination4') ,
                'license_number' => $this->input->post('license_number4') ,
                'license_release' => $this->input->post('date_release4'),
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'career_srvc' => $this->input->post('career_service5') ,
                'rating' => $this->input->post('rating5') ,
                'date_of_exam' => $this->input->post('date_of_examination5'),
                'conferment' => $this->input->post('place_of_examination5') ,
                'license_number' => $this->input->post('license_number5') ,
                'license_release' => $this->input->post('date_release5'),
                'user_id' => $this->input->post('user_id'),
                
             ),
              
              array(
                'career_srvc' => $this->input->post('career_service6') ,
                'rating' => $this->input->post('rating6') ,
                'date_of_exam' => $this->input->post('date_of_examination6'),
                'conferment' => $this->input->post('place_of_examination6') ,
                'license_number' => $this->input->post('license_number6') ,
                'license_release' => $this->input->post('date_release6'),
                'user_id' => $this->input->post('user_id'),
                
             )
              );
      $this->pds->dbinsert_data('civil_srvc_elig', $data);

    }



    public function get_work_experience() {
    $data = array(

             array(
                'inclusive_dates_from' => $this->input->post('inclusive_from1') ,
                'inclusive_dates_to' => $this->input->post('inclusive_to1') ,
                'position_title' => $this->input->post('position_title1'),
                'department' => $this->input->post('department1') ,
                'mothly_salary' => $this->input->post('monthly_salary1') ,
                'salary_grade' => $this->input->post('salary_grade1'),
                'status_of_appointment' => $this->input->post('status_of_appointment1'),
                'gov_service' => $this->input->post('gov_service1'),
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'inclusive_dates_from' => $this->input->post('inclusive_from2') ,
                'inclusive_dates_to' => $this->input->post('inclusive_to2') ,
                'position_title' => $this->input->post('position_title2'),
                'department' => $this->input->post('department2') ,
                'mothly_salary' => $this->input->post('monthly_salary2') ,
                'salary_grade' => $this->input->post('salary_grade2'),
                'status_of_appointment' => $this->input->post('status_of_appointment2'),
                'gov_service' => $this->input->post('gov_service2'),
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'inclusive_dates_from' => $this->input->post('inclusive_from3') ,
                'inclusive_dates_to' => $this->input->post('inclusive_to3') ,
                'position_title' => $this->input->post('position_title3'),
                'department' => $this->input->post('department3') ,
                'mothly_salary' => $this->input->post('monthly_salary3') ,
                'salary_grade' => $this->input->post('salary_grade3'),
                'status_of_appointment' => $this->input->post('status_of_appointment3'),
                'gov_service' => $this->input->post('gov_service3'),
                'user_id' => $this->input->post('user_id'),
                
             )

              );
      $this->pds->dbinsert_data('work_experience', $data);

    }
    public function get_voluntary_work() {

      $data = array(

             array(
                'name_of_organization' => $this->input->post('name_organization1') ,
                'inclusive_form' => $this->input->post('inclusive_date_from1') ,
                'inclusive_to' => $this->input->post('inclusive_date_to1'),
                'number_of_hours' => $this->input->post('numbers_of_hours1') ,
                'position' => $this->input->post('nature_of_work1') ,
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'name_of_organization' => $this->input->post('name_organization2') ,
                'inclusive_form' => $this->input->post('inclusive_date_from2') ,
                'inclusive_to' => $this->input->post('inclusive_date_to2'),
                'number_of_hours' => $this->input->post('numbers_of_hours2') ,
                'position' => $this->input->post('nature_of_work2') ,
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'name_of_organization' => $this->input->post('name_organization3') ,
                'inclusive_form' => $this->input->post('inclusive_date_from3') ,
                'inclusive_to' => $this->input->post('inclusive_date_to3'),
                'number_of_hours' => $this->input->post('numbers_of_hours3') ,
                'position' => $this->input->post('nature_of_work3') ,
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'name_of_organization' => $this->input->post('name_organization4') ,
                'inclusive_form' => $this->input->post('inclusive_date_from4') ,
                'inclusive_to' => $this->input->post('inclusive_date_to4'),
                'number_of_hours' => $this->input->post('numbers_of_hours4') ,
                'position' => $this->input->post('nature_of_work4') ,
                'user_id' => $this->input->post('user_id'),
                
             )

              );
      $this->pds->dbinsert_data('voluntary_work', $data);

    }
    public function get_training_program() {

      $data = array(

             array(
                'title' => $this->input->post('title_of_seminar1') ,
                'inclusive_from' => $this->input->post('inclusive_date_from1') ,
                'inclusive_to' => $this->input->post('inclusive_date_to1'),
                'num_of_hours' => $this->input->post('number_of_hours1') ,
                'conducted_sponsored_by' => $this->input->post('conducted1') ,
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'title' => $this->input->post('title_of_seminar2') ,
                'inclusive_from' => $this->input->post('inclusive_date_from2') ,
                'inclusive_to' => $this->input->post('inclusive_date_to2'),
                'num_of_hours' => $this->input->post('number_of_hours2') ,
                'conducted_sponsored_by' => $this->input->post('conducted2') ,
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'title' => $this->input->post('title_of_seminar3') ,
                'inclusive_from' => $this->input->post('inclusive_date_from3') ,
                'inclusive_to' => $this->input->post('inclusive_date_to3'),
                'num_of_hours' => $this->input->post('number_of_hours3') ,
                'conducted_sponsored_by' => $this->input->post('conducted3') ,
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'title' => $this->input->post('title_of_seminar4') ,
                'inclusive_from' => $this->input->post('inclusive_date_from4') ,
                'inclusive_to' => $this->input->post('inclusive_date_to4'),
                'num_of_hours' => $this->input->post('number_of_hours4') ,
                'conducted_sponsored_by' => $this->input->post('conducted4') ,
                'user_id' => $this->input->post('user_id'),
                
             )

              );
      $this->pds->dbinsert_data('training_programs', $data);

    }

    public function get_other_information() {
       $data = array(

             array(
                'special_skills' => $this->input->post('special_skills1') ,
                'non_academic' => $this->input->post('non_academic1') ,
                'membership' => $this->input->post('membership1'),
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'special_skills' => $this->input->post('special_skills2') ,
                'non_academic' => $this->input->post('non_academic2') ,
                'membership' => $this->input->post('membership2'),
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'special_skills' => $this->input->post('special_skills3') ,
                'non_academic' => $this->input->post('non_academic3') ,
                'membership' => $this->input->post('membership3'),
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'special_skills' => $this->input->post('special_skills4') ,
                'non_academic' => $this->input->post('non_academic4') ,
                'membership' => $this->input->post('membership4'),
                'user_id' => $this->input->post('user_id'),
                
             ),

             array(
                'special_skills' => $this->input->post('special_skills5') ,
                'non_academic' => $this->input->post('non_academic5') ,
                'membership' => $this->input->post('membership5'),
                'user_id' => $this->input->post('user_id'),
                
             )

              );

      $this->pds->dbinsert_data('other_information', $data);
    }


    public function get_personal_info() {


    $surename = $this->input->post('surename');
    $firstname = $this->input->post('firstname');
    $middlename = $this->input->post('middlename');
    $extend = $this->input->post('extend');
    $place_of_birth = $this->input->post('place_of_birth');
    if($this->input->post('gender') == "Male"){
      $sex = 'Male';
    } else {
      $sex = 'Female';
    }

    if($this->input->post('status') == 'Single'){
      $status = 'Single';
    }

    if($this->input->post('status') == 'Widowed'){
      $status = 'Widowed';
    }

    if($this->input->post('status') == 'Married'){
      $status = 'Married';
    }

    if($this->input->post('status') == 'Separated'){
      $status = 'Separated';
    }

    if($this->input->post('status') == 'Annulled'){
      $status = 'Annulled';
    }

    if($this->input->post('status') == 'Others'){
      $status = 'Others';
    }
    $citizenship = $this->input->post('citizenship');
    $height = $this->input->post('height');
    $weight = $this->input->post('weight');
    $blood_type = $this->input->post('blood_type');
    $gsis = $this->input->post('gsis');
    $pagibig = $this->input->post('pagibig');
    $philhealth = $this->input->post('philhealth');
    $sss = $this->input->post('sss');
    $residential_address = $this->input->post('residential_address');
    $zip_code = $this->input->post('zip_code');
    
    $email = $this->input->post('email');
    $cellphone = $this->input->post('cellphone');
    $agency = $this->input->post('agency');
    $tin = $this->input->post('tin');

    $data = array(
      'surename' => $surename,
      'firstname' => $firstname,
      'mname' => $middlename,
      'exname' => $extend,
      'birthdate' => $citizenship,
      'birthplace' => $citizenship,
      'sex' => $sex,
      'civilstatus' => $status,
      'citizenship' => $citizenship,
      'height' => $height,
      'weight' => $weight,
      'bloodtype' => $blood_type,
      'gsis' => $gsis,
      'pagibig' => $pagibig,
      'philhealth' => $philhealth,
      'sss' => $sss,
      'residential_adress' => $residential_address,
      'zip_code' => $zip_code,
      'telephone' => $this->input->post('tel'),
      'email' => $email,
      'cellphone' => $cellphone,
      'Agency_employee_no' => $agency,
      'tin' => $tin,
      'user_id' => $this->input->post('user_id')

    );


    //$role = $this->input->post('user_id'); // wala pa ni sya field sa pds form 
    $this->personalinfo_m->save($data); // model for personal info

  
    }

     public function profile() {
      $this->header();
      
      $id = $this->session->userdata('id');
      $data['teachers'] = $this->teacher_m->get($id);

      $this->load->view('admin/teacher/myprofile',$data);
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
            redirect('teacher/profile','refresh');
      }

    }

       public function myfiles() {
      $this->header(); // header of page
      $this->load->view('admin/teacher/myfiles');

    }

    public function pds() {
      $this->header(); // header of page
     
      $this->load->view('admin/teacher/pds');

    }

       public function request() {
     
      $this->load->view('admin/teacher/request');

    }

       public function rankings() {
      $this->header(); // header of page
      $this->load->view('admin/teacher/rankings');

    }

       public function reports() {
   
      $this->load->view('admin/teacher/reports');

    }

     public function forum() {
     
      $this->load->view('admin/teacher/forum_db');

    }

    public function onethreeeight() {
      $this->header(); // header of page
      $this->load->view('admin/teacher/138');

    }

        public function events() {
     
      $this->load->view('admin/teacher/events');

    }
         public function section() {
       $this->header(); // header of page

      $data['sections'] = $this->teacher_m->get();
      $this->load->view('admin/teacher/section',$data);

    }
        public function header() {
      $this->load->model('section_m');
      $data['rows'] = $this->section_m->get();
       $this->load->view('admin/components/page_head_teacher', $data); 

    }
    public function mysubject() {
      $id = $this->uri->segment(4);
      $data['section'] = $this->uri->segment(3);
        $data['section_id'] = $this->uri->segment(4);
      $this->header(); // header of page
      $this->load->model('custom_m');
      $data['rows'] = $this->custom_m->getAll($id);
      $this->load->view('admin/teacher/newSubject', $data);


    }

   

    public function add_section(){
     
        $rules = $this->teacher_m->rules_admin;
        $this->form_validation->set_rules($rules);
          if ($this->form_validation->run() == TRUE) {
            $data = array(
              'section_name' => $this->input->post('section_name'),
               'subject_name' => $this->input->post('subject'),
                'school_yr' => $this->input->post('school_yr'),

              );
            $this->teacher_m->save($data);
            $this->session->set_flashdata('result', 'Section Successfully Added!');
            redirect('teacher/section','refresh');
          }else{
            echo 'false';
          }
    
      // $this->load->teacher_m();
      // $this->teacher_m->save($data);
    }

    public function addnew(){

      echo "test";

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
      redirect('teacher/profile','refresh');

      }else{
        var_dump('Password should Match!');
      } 
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
      redirect('teacher/profile','refresh');

      }else{
        var_dump('Password should Match!');
      } 
    }
    }


     public function studentList() {
      $this->header();
      $this->load->view('admin/teacher/studentList');

    }

   

  public function insertSubject(){
    $rl = $this->input->post('mysubjectname');
    $ml = $this->input->post('timein');
    $scn = $this->input->post('timeout');
    $id = $this->input->post('section_id'); 
    $this->load->model('subject_m'); 

      
  }



  public function insertSection(){
    
    $rl = $this->input->post('myrole');
    $ml = $this->input->post('myLevel');
    $scn = $this->input->post('mysection');
    $id = $this->input->post('teacher_id'); 

    $this->load->model('section_m');
    $data = array(
       'role' => $rl ,
       'grade_level' => $ml ,
       'section_name' => $scn ,
       'teacher_id' => $id
    );
    $this->section_m->save($data);
    $this->session->set_flashdata('result', 'Section Successfully Added!');
    redirect('/teacher/section','refresh');

  }

    

     public function logout(){
    	$this->user_m->logout();
    	redirect('/login/');
    }
}

