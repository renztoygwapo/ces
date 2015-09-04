<?php
class Events extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('event_m');
    }

    public function index() {


      $data['rows'] = $this->event_m->get();
      $this->db->order_by('events.event_start', 'ASC'); // or 'DESC'
      $this->db->limit(1);
      $q = $this->db->get('events');
      $data['latest'] = $q->row();
      $this->load->view('admin/events', $data);

    }
    
     public function scpersonnel() {
      $this->load->view('admin/scpersonnel');

    }

     public function history() {
      $this->load->view('admin/history');

    }
}

?>