<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    	$this->load->model('mod_login');
    	$this->load->model('mod_blog');
    	$this->load->model('mod_penghargaan');
    	$this->load->model('mod_anggota');
    	$this->load->model('mod_visitor');
    	if($this->session->userdata('status') != 'login'){
			redirect('login');
		}
	}

	public function index()
	{
		$blog = $this->mod_blog->getJumlah();
		$jumlah = $this->mod_visitor->getJumlah();
		$jumlah2 = $this->mod_penghargaan->getJumlah();
		$jumlah3 = $this->mod_anggota->getJumlah();
		$data = array(
			'blog' => $blog,
			'visitor' => $jumlah,
			'penghargaan' => $jumlah2,
			'anggota' => $jumlah3
		);

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('layout/footer');
	}
}
