<?php
class Gallery extends Admin_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
        $this->load->model('gallery_m');
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

       $data['galleries'] = $this->gallery_m->get();

      $this->load->view('admin/adminGallery', $data);

    }

    public function gallery_add(){

        $id = $this->input->post('id');
    	 $rules = $this->gallery_m->rules_admin;
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
    		'title' => $this->input->post('title'),
    		'description' => $this->input->post('description'),
        'date' => $this->input->post('date'),
    		'photo' => $folder_name.'/'.$file_name
    		);
                $this->gallery_m->save($data,$id);
                $this->session->set_flashdata('result', 'Gallery Successfully Added!');
			    redirect('admin/gallery','refresh');
            }
        }


}
  public function delete_gallery(){
    $id = $this->uri->segment(4);
    $this->gallery_m->delete($id);

      $this->session->set_flashdata('result', 'Gallery Successfully Delted!');
          redirect('admin/gallery','refresh');
  }

   public function edit_gallery(){

      $data['admin'] = $this->getdata();
      $query = $this->db->query('SELECT * FROM request_tb where req_file = "none" ');
      $data['count_request'] = $query->num_rows();
       $id = $this->uri->segment(4);

       $query = $this->db->query('SELECT * FROM gallery where id = '.$id.' ');
      $data['galleries'] = $query->result();


    $this->load->view('admin/adminGallery_edit', $data);
  
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

function upload_pic() {

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
