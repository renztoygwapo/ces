<?php
class Gallery extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('gallery_m');
    }

    public function index() {

      $data['galleries'] = $this->gallery_m->get();
      $this->load->view('admin/gallery', $data);

    }
}