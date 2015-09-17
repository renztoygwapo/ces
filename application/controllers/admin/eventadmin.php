<?php
class Eventadmin extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
        $this->load->model('event_m');
        $this->load->model('teacher_m');
        $this->load->model('profile_m');
        $this->load->model('familybg_m');
        $this->load->model('personalinfo_m');
        $this->load->model('admin_m');
        $this->load->model('pds');
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
      $this->load->view('admin/adminEvent', $data);

    }

    public function event_add(){


    	 $rules = $this->event_m->rules_admin;
    	$this->form_validation->set_rules($rules);
    	//var_dump($this->form_validation->run());
        if ($this->form_validation->run() == TRUE) {
//------------------------------------->>>>>>>>>>>>addingTOdatabase
            $folder_name=date('Y-m-d_h_m_s');
            $file_name=$folder_name.'.jpg';
            $targetFolder = './uploads/'.$folder_name.'/'; // Relative to the root
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
                    //	var_dump($this->upload->do_upload());
            
            
            if(!$this->upload->do_upload()){
                 
                var_dump($this->upload->display_errors());

            }else{
            	$data = array(
    		'event_title' => $this->input->post('event_title'),
    		'event_description' => $this->input->post('event_description'),
    		'event_start' => $this->input->post('event_start'),
    		'event_end' => $this->input->post('event_end'),
    		'event_picture' => $folder_name.'/'.$file_name
    		);
                $this->event_m->save($data);
                $this->session->set_flashdata('result', 'Event Successfully Added!');
			    redirect('admin/eventadmin','refresh');
            }
        }


  //   	 $rules = $this->event_m->rules_admin;
  //   	$this->form_validation->set_rules($rules);
  //   	var_dump($this->form_validation->run());
  //       if ($this->form_validation->run() == TRUE) {
  //   	// $data = array(
  //   	// 	'event_title' => $this->input->post('event_title'),
  //   	// 	'event_description' => $this->input->post('event_description'),
  //   	// 	'event_start' => $this->input->post('event_start'),
  //   	// 	'event_end' => $this->input->post('event_end'),
  //   	// 	'event_picture' => $this->input->post('event_picture')
  //   	// );
  //   	//var_dump($event_picture);
  //   	$config['upload_path'] = './uploads/';
		// $config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']	= '100';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';

		// $this->load->library('upload', $config);

		// if ( ! $this->upload->do_upload())
		// {
		// 	$error = array('error' => $this->upload->display_errors());

		// 	$this->load->view('upload_form', $error);
		// }
		// else
		// {
		// 	$data_pic = array('upload_data' => $this->upload->data());

		// 	$this->load->view('upload_success', $data_pic);
		// }

  //   	// $this->event_m->save($data);
  //   	// $this->session->set_flashdata('result', 'Event Successfully Added!');
  //    //    redirect('admin/eventadmin','refresh');
   

  //   }
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
  
}
