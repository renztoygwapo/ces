<?php
class Event_m extends MY_Model
{
	
	protected $_table_name = 'events';
	protected $_order_by = 'id';

      public $rules_admin = array(
    'event_title' => array(
      'field' => 'event_title', 
      'label' => 'Event Title', 
      'rules' => 'trim|required|xss_clean'
    ), 
      'location' => array(
      'field' => 'event_description', 
      'label' => 'Event Description', 
      'rules' => 'trim|required|xss_clean'
    ) 
      
  );


      function get_latest() {
     $q = $this->db->get('events');
     
     // $q = $this->db->order_by("id", "desc");

      if ($q->num_rows() > 0 ) {
        foreach ($q->result() as $row) {
          $data[] = $row;
      }
      return $data;
    }
  }


}