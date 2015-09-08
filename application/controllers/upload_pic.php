<!-- if($_FILES['txtImage']['name'] != "")
{
    $config['upload_path'] = 'images/upload/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = '2000';
    $config['remove_spaces'] = true;
    $config['overwrite'] = false;
    $config['encrypt_name'] = true;
    $config['max_width']  = '';
    $config['max_height']  = '';
    $this->load->library('upload', $config);
    $this->upload->initialize($config);            
    if (!$this->upload->do_upload('txtImage'))
    {
        $error = array('error' => $this->upload->display_errors());
        print_r($error);
        exit();
    }
    else
    {
        $image = $this->upload->data();
        if ($image['file_name'])
        {
            $data['file1'] = $image['file_name'];
        }        
        $product_image = $data['file1'];
        $config['image_library'] = 'gd2';
        $config['source_image'] = '/images/upload/'.$data['file1'];
        $config['new_image'] = '/images/upload/new/';
        $config['maintain_ratio'] = FALSE;
        $config['overwrite'] = false;
        $config['width'] = 280;
        $config['height'] = 280;
        $this->load->library('image_lib', $config); //load library
        $this->image_lib->clear();
        $this->image_lib->initialize($config);
        $this->image_lib->resize(); //do whatever specified in config
        echo "all the things go well.";
    }
} -->


<?php
class Upload_pic extends Frontend_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('teacher_m');
        $this->load->model('profile_m');
        $this->load->model('familybg_m');
        $this->load->model('personalinfo_m');
        $this->load->model('pds');

    }

    public function index() {

      // $this->load->view('admin/about');  

                    $this->load->view('admin_v2/upload');
                        }



    public function uploadpic() {

    // $this->load->view('admin/about');  
    // $query = $this->db->query('SELECT * FROM events');
    // $data['events'] = $query->num_rows();
    // $this->load->view('admin/admin_layout_main', $data);

            if($_FILES['txtImage']['name'] != "")
                    {
                        $config['upload_path'] = 'images/upload/';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                        $config['max_size'] = '2000';
                        $config['remove_spaces'] = true;
                        $config['overwrite'] = false;
                        $config['encrypt_name'] = true;
                        $config['max_width']  = '';
                        $config['max_height']  = '';
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);            
                        if (!$this->upload->do_upload('txtImage'))
                        {
                            $error = array('error' => $this->upload->display_errors());
                            print_r($error);
                            exit();
                        }
                        else
                        {
                            $image = $this->upload->data();
                            if ($image['file_name'])
                            {
                                $data['file1'] = $image['file_name'];
                            }        
                            $product_image = $data['file1'];
                            $config['image_library'] = 'gd2';
                            $config['source_image'] = '/images/upload/'.$data['file1'];
                            $config['new_image'] = '/images/upload/new/';
                            $config['maintain_ratio'] = FALSE;
                            $config['overwrite'] = false;
                            $config['width'] = 280;
                            $config['height'] = 280;
                            $this->load->library('image_lib', $config); //load library
                            $this->image_lib->clear();
                            $this->image_lib->initialize($config);
                            $this->image_lib->resize(); //do whatever specified in config
                            // echo "all the things go well.";
                           /// $this->load->view('admin_v2/upload');


                            $id = $this->session->userdata('id');
                            // update query
                            //
                             $query = $this->db->query('UPDATE users SET photo = "../../images/upload/'.$data['file1'].'" WHERE id ='.$id.'');
                             $data['events'] = $query;
                             //$this->load->view('admin/admin_layout_main', $data);
                             
                            $this->session->set_flashdata('result', 'Profile Successfully Updated!');
                            // $this->load->view('admin/teacher/myprofile', $data);
                               redirect('teacher/profile','refresh');






                        }
                    } 
                    
                        }


    public function uploadpicadmin() {

    // $this->load->view('admin/about');  
    // $query = $this->db->query('SELECT * FROM events');
    // $data['events'] = $query->num_rows();
    // $this->load->view('admin/admin_layout_main', $data);

            if($_FILES['txtImage']['name'] != "")
                    {
                        $config['upload_path'] = 'images/upload/';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                        $config['max_size'] = '2000';
                        $config['remove_spaces'] = true;
                        $config['overwrite'] = false;
                        $config['encrypt_name'] = true;
                        $config['max_width']  = '';
                        $config['max_height']  = '';
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);            
                        if (!$this->upload->do_upload('txtImage'))
                        {
                            $error = array('error' => $this->upload->display_errors());
                            print_r($error);
                            exit();
                        }
                        else
                        {
                            $image = $this->upload->data();
                            if ($image['file_name'])
                            {
                                $data['file1'] = $image['file_name'];
                            }        
                            $product_image = $data['file1'];
                            $config['image_library'] = 'gd2';
                            $config['source_image'] = '/images/upload/'.$data['file1'];
                            $config['new_image'] = '/images/upload/new/';
                            $config['maintain_ratio'] = FALSE;
                            $config['overwrite'] = false;
                            $config['width'] = 280;
                            $config['height'] = 280;
                            $this->load->library('image_lib', $config); //load library
                            $this->image_lib->clear();
                            $this->image_lib->initialize($config);
                            $this->image_lib->resize(); //do whatever specified in config
                            // echo "all the things go well.";
                           /// $this->load->view('admin_v2/upload');


                            $id = $this->session->userdata('id');
                            // update query
                            //
                             $query = $this->db->query('UPDATE users SET photo = "../../images/upload/'.$data['file1'].'" WHERE id ='.$id.'');
                             $data['events'] = $query;
                             //$this->load->view('admin/admin_layout_main', $data);
                             
                            $this->session->set_flashdata('result', 'Profile Successfully Updated!');
                            // $this->load->view('admin/teacher/myprofile', $data);
                               redirect('admin/myprofile','refresh');






                        }
                    } 
                    
                        }


        public function uploadpic_student() {

    // $this->load->view('admin/about');  
    // $query = $this->db->query('SELECT * FROM events');
    // $data['events'] = $query->num_rows();
    // $this->load->view('admin/admin_layout_main', $data);

            if($_FILES['txtImage']['name'] != "")
                    {
                        $config['upload_path'] = 'images/upload/';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                        $config['max_size'] = '2000';
                        $config['remove_spaces'] = true;
                        $config['overwrite'] = false;
                        $config['encrypt_name'] = true;
                        $config['max_width']  = '';
                        $config['max_height']  = '';
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);            
                        if (!$this->upload->do_upload('txtImage'))
                        {
                            $error = array('error' => $this->upload->display_errors());
                            print_r($error);
                            exit();
                        }
                        else
                        {
                            $image = $this->upload->data();
                            if ($image['file_name'])
                            {
                                $data['file1'] = $image['file_name'];
                            }        
                            $product_image = $data['file1'];
                            $config['image_library'] = 'gd2';
                            $config['source_image'] = '/images/upload/'.$data['file1'];
                            $config['new_image'] = '/images/upload/new/';
                            $config['maintain_ratio'] = FALSE;
                            $config['overwrite'] = false;
                            $config['width'] = 280;
                            $config['height'] = 280;
                            $this->load->library('image_lib', $config); //load library
                            $this->image_lib->clear();
                            $this->image_lib->initialize($config);
                            $this->image_lib->resize(); //do whatever specified in config
                            // echo "all the things go well.";
                           /// $this->load->view('admin_v2/upload');


                            $id = $this->session->userdata('id');
                            // update query
                            //
                             $query = $this->db->query('UPDATE users SET photo = "../../images/upload/'.$data['file1'].'" WHERE id ='.$id.'');
                             $data['events'] = $query;
                             //$this->load->view('admin/admin_layout_main', $data);
                             
                            $this->session->set_flashdata('result', 'Profile Successfully Updated!');
                            // $this->load->view('admin/teacher/myprofile', $data);
                               redirect('admin/myprofile','refresh');






                        }
                    } 
                    
                        }


}