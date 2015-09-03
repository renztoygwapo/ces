<?php
class Forum extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
      $this->load->view('admin/forum');

    }
    public function topic() {
      $this->load->view('admin/components/frontpage_head');

      $data['topic'] = $this->uri->segment(3);
      $this->load->view('admin/topic_frontpage' , $data);
      $this->load->view('admin/components/frontpage_tail');

    }

    public function topic_page() {
      $this->load->view('admin/frontpage_forum_page');

      // $data['topic'] = $this->uri->segment(3);
      // $this->load->view('admin/topic_frontpage' , $data);
      // $this->load->view('admin/components/frontpage_tail');

    }


}