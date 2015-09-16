<?php
class Forum extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('forum_m');
        $this->load->model('teacher_m');
        $this->load->model('profile_m');
        $this->load->model('familybg_m');
        $this->load->model('personalinfo_m');
        $this->load->model('admin_m');
        $this->load->model('pds');
        $this->load->model('post_m');
        $this->load->model('custom_m');
    }

    public function index() {
      $this->load->view('admin/forum');


    }
    public function topic() {

      
      $this->load->view('admin/components/frontpage_head');

      //$data['admin'] = $this->getdata();
      $data['section_name'] = $this->uri->segment(3);
      $data['insert_section'] = $this->uri->segment(4)."".$this->uri->segment(5)."".$this->uri->segment(6)."".$this->uri->segment(7);
      


      $data['topics'] = $this->custom_m->frontpage_topic($data['section_name']);





      $data['topic'] = $this->uri->segment(3);

     // var_dump($data['topics']);


     $this->load->view('admin/topic_frontpage' , $data);





     $this->load->view('admin/components/frontpage_tail');

    }

    public function topic_page() {
      $id = $this->uri->segment(3);

     //$data['admin'] = $this->getdata();
      $data['topic'] =  $this->custom_m->frontpage_single_topic($id);
     $data['post_tp'] =  $this->custom_m->post_topic($id);
     //var_dump($id);





     $this->load->view('admin/frontpage_forum_page' , $data);

      // $data['topic'] = $this->uri->segment(3);
      // $this->load->view('admin/topic_frontpage' , $data);
      // $this->load->view('admin/components/frontpage_tail');

    }


     public function insert_comment(){
    
   // $firstname = $this->input->post('firstname');
    

    $data = array(
       'name' => $this->input->post('name_post'),
       'message' => $this->input->post('message') ,
       'date_post' => $this->input->post('date_post') ,
       'propic' => $this->input->post('photo'),
       'topic_id' => $this->input->post('category') ,
   
    );
    $this->post_m->save($data);
    //$this->session->set_flashdata('result', 'Successfully Registered!');
    redirect('forum/topic_page/'.$this->input->post('category').'/'.$this->input->post('topic_id'),'refresh');

  }


}



