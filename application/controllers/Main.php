<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->model('mod_anggota');
		$this->load->model('mod_blog');
		$this->load->model('mod_divisi');
		$this->load->model('mod_penghargaan');
		$data = array(
			'data_struktur' => $this->mod_anggota->getData()->result(),
			'data_divisi' => $this->mod_divisi->getData()->result(),
			'data_berita' => $this->mod_blog->getLatestData()->result(),
			'data_penghargaan' => $this->mod_penghargaan->getLatestData()->result()
		);
		$this->load->view('index',$data);
	}
	
}
