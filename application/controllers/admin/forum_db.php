<?php
class Forum_db extends Admin_Controller {

    public function __construct(){
        parent::__construct();
         $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
        $this->load->model('forum_m');
        $this->load->model('teacher_m');
        $this->load->model('profile_m');
        $this->load->model('familybg_m');
        $this->load->model('personalinfo_m');
        $this->load->model('admin_m');
        $this->load->model('pds');
        $this->load->model('post_m');
    }

    public function getdata(){
      $id = $this->session->userdata('id');
      return $this->admin_m->get($id);
    }

    public function index() {
     // $this->data['subview'] = 'admin/dashboard/index';
      $data['admin'] = $this->getdata();
      $query = $this->db->query('SELECT * FROM request_tb where req_file = "none" ');
      $data['count_request'] = $query->num_rows();
      $this->load->view('admin/forum_db' ,$data);

    }

     public function forum_topic() {

      $data['admin'] = $this->getdata();

      $data['section_name'] = $this->uri->segment(4)." ".$this->uri->segment(5)." ".$this->uri->segment(6)." ".$this->uri->segment(7);
      $data['insert_section'] = $this->uri->segment(4)."".$this->uri->segment(5)."".$this->uri->segment(6)."".$this->uri->segment(7);
      $this->load->model('custom_m');
      $data['topics'] = $this->custom_m->view_topic($data['section_name']);
      
      $this->load->view('admin/forum_topics', $data);


    }

    public function gettopic($subject){
      $this->load->model('custom_m');
      $data['topics'] = $this->custom_m->view_topic($subject);
      $this->load->view('admin/forum_topics', $data);
    } 




     public function event_add(){
      $id = $this->session->userdata('id');

       $rules = $this->forum_m->rules_admin;
      $this->form_validation->set_rules($rules);
      //var_dump($this->form_validation->run());
        if ($this->form_validation->run() == TRUE) {
//------------------------------------->>>>>>>>>>>>addingTOdatabase
            $folder_name=date('Y-m-d_h_m_s');
            $file_name=$folder_name.'.jpg';
            $targetFolder = './topics/'.$folder_name.'/'; // Relative to the root
            if (!is_dir($targetFolder)) {
                mkdir($targetFolder, 0755);
            }
            $config['upload_path'] = $targetFolder;
            $config['file_name'] = $file_name;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '0';
            $config['max_width'] = '0';
            $config['max_height'] = '0';
            $this->load->library('upload', $config);
            //  var_dump($this->upload->do_upload());
            if(!$this->upload->do_upload()){
                 echo "sdsadsa";
                var_dump($this->upload->display_errors());

            }else{
              $data = array(

        'title' => $this->input->post('title'),
        'description' => $this->input->post('description'),
        'topic_picture' => $folder_name.'/'.$file_name,
        'date_post' => date("Y/m/d"),
        'topic_category' => $this->input->post('subject'),
        'user_id' => $id

        // 'date_post' => $this->input->post('event_start'),
        // 'user_id' => $this->input->post('event_end'),
        );
            $this->forum_m->save($data);
            $this->session->set_flashdata('result', 'New Topic Successfully Added!');
      $this->gettopic($this->input->post('subject'));
      redirect('admin/forum_db/forum_topic/'.$this->input->post('subject'),'refresh');
            }
        }
     

}

  function do_upload()
  {
    var_dump($this->input->post('upload'));
       if($this->input->post('upload')) {

        $config['upload_path'] = APPPATH . 'uploads/'; 
        $config['file_name'] = "test";
        $config['overwrite'] = TRUE;
        $config["allowed_types"] = 'jpg|jpeg|png|gif';
        $config["max_size"] = 1024;
        $config["max_width"] = 400;
        $config["max_height"] = 400;
        $this->load->library('upload', $config);

        if(!$this->upload->do_upload()) {               
            $this->data['error'] = $this->upload->display_errors();
        } else {
            //success                                      
        }  
    }


  }

function upload_pic($_FILES) {

        $post = $_POST;
   
        // Define a destination
        $targetFolder = './uploads'; // Relative to the root
        
        if (!is_dir($targetFolder)) {
            mkdir($targetFolder, 0755);
        }
        if (!empty($_FILES)) {

            //set new filename
            $name = explode('.', $_FILES['Filedata']['name']);
            $ext = $name[count($name) - 1];
      
      $time = '-'.date('d-m-Y-H-i-s');
      
            $new_filename = 'logo_'. $time .'.' . $ext;

            $tempFile = $_FILES['Filedata']['tmp_name'];
            $targetPath = $targetFolder;
            $targetFile = rtrim($targetPath, '/') . '/' . $new_filename;

            // Validate the file type
            $fileTypes = array('jpg', 'jpeg', 'gif', 'png','JPG','JPEG','GIF','PNG'); // File extensions
            $fileParts = pathinfo($_FILES['Filedata']['name']);

            if (in_array($fileParts['extension'], $fileTypes)) {
                move_uploaded_file($tempFile, $targetFile);
                
                $this->load->library('photos');
                
                //resize if image
                $this->photos->resize($targetPath . '/', $new_filename, TRUE);

        echo $new_filename;
        die();

            } else {
                echo 'Invalid file type.';
            }
        }
    }





    public function forum_page() {
      //topic_picture
      $id = $this->uri->segment(5);
      $this->load->model('custom_m');
      $data['admin'] = $this->getdata();
      $data['topic'] =  $this->custom_m->topics($id);
      $data['post_tp'] =  $this->custom_m->post_topic($id);

   // var_dump($data['post_tp']);
     $this->load->view('admin/forum_page' ,$data);


    }

     public function insert_comment(){
    
   // $firstname = $this->input->post('firstname');
    

    $data = array(
       'name' => $this->input->post('name_post'),
       'message' => $this->input->post('message') ,
       'date_post' => $this->input->post('date_post') ,
       'propic' => $this->input->post('photo'),
       'topic_id' => $this->input->post('topic_id') ,
   
    );
    $this->post_m->save($data);
    //$this->session->set_flashdata('result', 'Successfully Registered!');
    redirect('admin/forum_db/forum_page/'.$this->input->post('category').'/'.$this->input->post('topic_id'),'refresh');

  }

}

?>