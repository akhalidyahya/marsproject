<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
    	$this->load->model('mod_login');
    	if($this->session->userdata('status') == 'login'){
			redirect('dashboard');
		}
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
	        	'id' => $hasil->id,
	        	'nama' => $hasil->nama,
	        	'status' => 'login'
	        );
	    	$this->session->set_userdata($data_session);
	       	redirect('dashboard');
		} else {
			$data_session = array('error_status' => 'login error');
			$this->session->set_userdata($data_session);
			redirect('login');
		}

	}

	function logout(){
    	$this->session->sess_destroy();
    	redirect('login');
  	}
}
