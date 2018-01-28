<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mod_blog');
		if($this->session->userdata('status') != 'login'){
			redirect('login');
		}
	}

	public function index()
	{
		$data = array(
			'data' => $this->mod_blog->getData()->result()
		);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/blog',$data);
		$this->load->view('layout/footer');
	}
}
