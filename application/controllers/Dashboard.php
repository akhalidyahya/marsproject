<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('mod_login');
    	if($this->session->userdata('status') != 'login'){
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dashboard');
		$this->load->view('layout/footer');
	}
}
