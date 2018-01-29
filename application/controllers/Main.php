<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		if($this->session->tempdata('visitor') !== 'visited') {
			$this->session->set_tempdata('visitor', 'visited', 1800);
			$now = date('Y-m-d');
			$id = 1;
			$this->db->set('count','count+1',false);
			$this->db->set('last_visitor',$now,false);
  			$this->db->where('id',$id);
  			$this->db->update('visitor');
		}
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
