<?php

  class Custom_m extends CI_Model {

  //  function getAll() {
  //    $q = $this->db->query("SELECT * FROM data");
  //    if ($q->num_rows() > 0 ) {
  //      foreach ($q->result() as $row) {
  //        $data[] = $row;
  //    }
  //    return $data;
  //  }
  // }

  // } 
   // function getAll() {
   //   $q = $this->db->get('data');
   //   if($q->num_rows() > 0) {
   //     foreach ($q->result() as $row) {
   //       $data[] = $row;
   //     }
   //     return $data;
   //   }

   // }

    // function getAll(){
    //  $this->db->select('title, contents');
    //  $q = $this->db->get('data');
    //  if($q->num_rows() > 0) {
   //     foreach ($q->result() as $row) {
   //       $data[] = $row;
   //     }
   //     return $data;
   //   }


    // }

    // function getAll(){
    //  $sql = "SELECT title, author, contents FROM data WHERE id = ? AND author = ?";
    //  $q = $this->db->query($sql, array(2, 'mark'));
    //    if($q->num_rows() > 0) {
   //     foreach ($q->result() as $row) {
   //       $data[] = $row;
   //     }
   //     return $data;
   //   }

    // }
    //SELECT * FROM `subject` JOIN section ON section.id = subject.section_id WHERE section.id = 2
    function getAll($id){
      $this->db->select('*');
      $this->db->from('subject');
      $this->db->join('section', 'section.id = subject.section_id');
      $this->db->where('section.id', $id);
      $q = $this->db->get();
        if($q->num_rows() > 0) {
        foreach ($q->result() as $row) {
          $data[] = $row;
        }
        return $data;
      }

    }

     function view_subject(){
      $this->db->select('*');
      $this->db->from('subject');
      $this->db->where('id');

      $q = $this->db->get();
        if($q->num_rows() > 0) {
        foreach ($q->result() as $row) {
          $data[] = $row;
        }
        return $data;
      }


  }

}

?>