<?php
class Pds extends CI_Model
{
	
  //     public $rules_admin = array(
  //   'prod_code' => array(
  //     'field' => 'prod_code', 
  //     'label' => 'Product Code', 
  //     'rules' => 'trim|required|xss_clean'
  //   ), 
  //     'prod_name' => array(
  //     'field' => 'prod_name', 
  //     'label' => 'Product Name', 
  //     'rules' => 'trim|required|xss_clean'
  //   ), 
  //       'prod_desc' => array(
  //     'field' => 'prod_desc', 
  //     'label' => 'Product Description', 
  //     'rules' => 'trim|required|xss_clean'
  //   ), 
  // );

  function dbinsert_data ($tablename, $data) 
  {   
    if($tablename == 'child'){
     $this->db->insert_batch($tablename, $data); 
    }

    if($tablename == 'educ_bg'){
     $this->db->insert_batch($tablename, $data); 
    }

    if($tablename == 'civil_srvc_elig'){
     $this->db->insert_batch($tablename, $data); 
    }
    
    if($tablename == 'work_experience'){
     $this->db->insert_batch($tablename, $data); 
    }
     
    if($tablename == 'voluntary_work'){
    $this->db->insert_batch($tablename, $data); 
    }
    
    if($tablename == 'training_programs'){
    $this->db->insert_batch($tablename, $data); 
    }
    
    if($tablename == 'other_information'){
    $this->db->insert_batch($tablename, $data); 
    }

  }


}