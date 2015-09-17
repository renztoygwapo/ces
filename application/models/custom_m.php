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
    //    foreach ($q->result() as $row) {
    //      $data[] = $row;
    //    }
    //    return $data;
    //  }

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

        function getAllstudents() {
     $q = $this->db->query("SELECT * FROM students");
     if ($q->num_rows() > 0 ) {
       foreach ($q->result() as $row) {
         $data[] = $row;
     }
     return $data;
   }
  }


        function getAllteacher() {
     $q = $this->db->query("SELECT * FROM users where role ='Teacher'");
     if ($q->num_rows() > 0 ) {
       foreach ($q->result() as $row) {
         $data[] = $row;
     }
     return $data;
   }
  }

    function getAllalumni() {
     $q = $this->db->query("SELECT * FROM users where role ='Alumni'");
     if ($q->num_rows() > 0 ) {
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

    function view_topic($subject){
      $this->db->select('*');
      $this->db->from('topics');
      $this->db->where('topic_category', $subject);

      $q = $this->db->get();
        if($q->num_rows() > 0) {
        foreach ($q->result() as $row) {
          $data[] = $row;
        }
        return $data;
      }


  }

// SELECT *
// FROM topics
// INNER JOIN users
// ON topics.user_id=users.id;
//   SELECT t.id AS id, t.title AS title, t.description AS description, t.topic_picture as tpicture, t.date_post as post, t.topic_category as category, t.user_id as user_id
// , u.firstname as firstname, u.lastname as lastname , u.photo as user_photo
// FROM topics t JOIN users u
// ON t.user_id=u.id WHERE t.id = 7





  function frontpage_topic($subject){
      $this->db->select('t.id AS id, t.title AS title,
                         t.description AS description, 
                         t.topic_picture as tpicture, 
                         t.date_post as post, 
                         t.topic_category as category, 
                         t.user_id as user_id, 
                         u.firstname as firstname, 
                         u.lastname as lastname, 
                         u.photo as user_photo');
      $this->db->from('topics t');
      $this->db->join('users u', 't.user_id = u.id');
      $this->db->where('t.topic_category', $subject); 

      $q = $this->db->get();
        if($q->num_rows() > 0) {
        foreach ($q->result() as $row) {
          $data[] = $row;
        }
        return $data;
      }


  }

  function frontpage_forum_id($subject){
      $this->db->select('topics.id');
      $this->db->from('topics');
      $this->db->join('users', 'topics.user_id = users.id');
      $this->db->where('topics.topic_category', $subject); 

      $q = $this->db->get();
        if($q->num_rows() > 0) {
        foreach ($q->result() as $row) {
          $data[] = $row;
        }
        return $data;
      }


  }

   function frontpage_single_topic($id){
      $this->db->select('*');
      $this->db->from('topics');
      $this->db->join('users', 'topics.user_id = users.id');
      $this->db->where('topics.id', $id);
       $this->db->limit(1); 

      $q = $this->db->get();
        if($q->num_rows() > 0) {
        foreach ($q->result() as $row) {
          $data[] = $row;
        }
        return $data;
      }


  }



    function topics($id){
      $this->db->select('*');
      $this->db->from('topics');
      $this->db->where('id', $id);

      $q = $this->db->get();
        if($q->num_rows() > 0) {
        foreach ($q->result() as $row) {
          $data[] = $row;
        }
        return $data;
      }


  }




  function post_topic($id){
      $this->db->select('*');
      $this->db->from('forum_post');
      $this->db->where('topic_id', $id);

      $q = $this->db->get();
        if($q->num_rows() > 0) {
        foreach ($q->result() as $row) {
          $data[] = $row;
        }
        return $data;
      }


  }

  function view_request(){
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('request_tb', 'users.id = request_tb.user_id');
     // $this->db->where('request_tb.user_id', 'users.id');

      $q = $this->db->get();
        if($q->num_rows() > 0) {
        foreach ($q->result() as $row) {
          $data[] = $row;
        }
        return $data;
      }


  }


    function getRequest($id) {
      $q = $this->db->query("SELECT * FROM request_tb where user_id =".$id);
      if ($q->num_rows() > 0 ) {
        foreach ($q->result() as $row) {
          $data[] = $row;
      }
      return $data;
    }
  }

  function get_personalinfo_m($id){

       $q = $this->db->query("SELECT * FROM personal_information where user_id =".$id);
      if ($q->num_rows() > 0 ) {
        foreach ($q->result() as $row) {
          $data[] = $row;
      }
      return $data;
    }

  }


  function get_family_background($id){

       $q = $this->db->query("SELECT * FROM family_bg where user_id =".$id);
      if ($q->num_rows() > 0 ) {
        foreach ($q->result() as $row) {
          $data[] = $row;
      }
      return $data;
    }

  }




  function get_education_background($id){

       $q = $this->db->query("SELECT * FROM educ_bg where user_id =".$id);
      if ($q->num_rows() > 0 ) {
        foreach ($q->result() as $row) {
          $data[] = $row;
      }
      return $data;
    }

  }


  function get_civil_srvc_elig($id){

       $q = $this->db->query("SELECT * FROM civil_srvc_elig where user_id =".$id);
      if ($q->num_rows() > 0 ) {
        foreach ($q->result() as $row) {
          $data[] = $row;
      }
      return $data;
    }

  }

  function get_work_experience($id){

       $q = $this->db->query("SELECT * FROM work_experience where user_id =".$id);
      if ($q->num_rows() > 0 ) {
        foreach ($q->result() as $row) {
          $data[] = $row;
      }
      return $data;
    }

  }

  function get_voluntary_work($id){

       $q = $this->db->query("SELECT * FROM voluntary_work where user_id =".$id);
      if ($q->num_rows() > 0 ) {
        foreach ($q->result() as $row) {
          $data[] = $row;
      }
      return $data;
    }

  }

  function get_training_programs($id){

       $q = $this->db->query("SELECT * FROM training_programs where user_id =".$id);
      if ($q->num_rows() > 0 ) {
        foreach ($q->result() as $row) {
          $data[] = $row;
      }
      return $data;
    }

  }

  function get_other_information($id){

       $q = $this->db->query("SELECT * FROM other_information where user_id =".$id);
      if ($q->num_rows() > 0 ) {
        foreach ($q->result() as $row) {
          $data[] = $row;
      }
      return $data;
    }

  }

  function get_child($id){

       $q = $this->db->query("SELECT * FROM child where user_id =".$id);
      if ($q->num_rows() > 0 ) {
        foreach ($q->result() as $row) {
          $data[] = $row;
      }
      return $data;
    }

  }






  function updateRequest($id){

    $title = "approved";
    $data = array(
               'req_file' => $title,
               'msg_status' => $this->input->post('message')
            );
      $this->db->where('id', $id);
      $this->db->update('request_tb', $data); 

  }
  

  
  

}

?>