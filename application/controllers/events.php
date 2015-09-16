<?php
class Events extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('event_m');
    }

    public function index() {


      $this->db->order_by('events.id', 'desc'); // or 'DESC'
      $data['display_events'] = $this->event_m->get();
     

      $this->db->order_by('events.id', 'desc'); // or 'DESC'
      $this->db->limit(1);

      $q = $this->db->get('events');
      $data['latest'] = $q->row();
      //$data['latest'] = $this->event_m->get_latest();

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