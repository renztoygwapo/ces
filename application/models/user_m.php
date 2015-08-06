<?php
class User_M extends MY_Model
{
	
	protected $_table_name = 'users';
	protected $_order_by = 'username';
	public $rules = array(
		'username' => array(
			'field' => 'username', 
			'label' => 'Username', 
			'rules' => 'trim|required|xss_clean'
		), 
		'password' => array(
			'field' => 'password', 
			'label' => 'Password', 
			'rules' => 'trim|required'
		)
	);

	function __construct ()
	{
		parent::__construct();
	}

	public function login ()
	{
		$user = $this->get_by(array(
			'username' => $this->input->post('username'),
			'password' => $this->hash($this->input->post('password')),
		), TRUE);
		
		if (count($user)) {
			// Log in user
			$data = array(
				'username' => $user->username,
				'id' => $user->id,
				'loggedin' => TRUE,
			);
			$this->session->set_userdata($data);
		}
	}


	public function register_user($data){
		
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$role = $this->input->post('role');	
		$data = array(
		   'firstname' => $firstname ,
		   'lastname' => $lastname ,
		   'username' => $username ,
		   'password' => $this->hash($this->input->post('password'),TRUE),
		   'email' => $email ,
		   'role' => $role
		);
		$this->db->insert('users', $data); // insert user

	}


	public function logout ()
	{
		$this->session->sess_destroy();
	}
	public function loggedin ()
	{
		return (bool) $this->session->userdata('loggedin');
	}

	public function hash($string)
	{
		return hash('sha512', $string . config_item('encryption_key'));
	}
}