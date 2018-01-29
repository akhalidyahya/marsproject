<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
    	$this->load->model('mod_login');
  //   	if($this->session->userdata('status') == 'login'){
		// 	redirect('dashboard');
		// }
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function loginValidation(){
		 
		$this->session->unset_userdata('error_status');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$validation = $this->mod_login->validate($where)->num_rows();
		if($validation > 0){
			$hasil = $this->mod_login->validate($where)->row();
			$data_session = array(
	        	'id' => $hasil->id_admin,
	        	'nama' => $hasil->nama_admin,
	        	'foto' => $hasil->foto_admin,
	        	'role' => $hasil->role,
	        	'status' => 'login'
	        );
	    	$this->session->set_userdata($data_session);
	       	redirect('dashboard');
		} else {
			$this->session->set_flashdata('error_status', 'error');
			redirect('login');
		}

	}

	function logout(){
    	$this->session->sess_destroy();
    	redirect('login');
  	}
}
