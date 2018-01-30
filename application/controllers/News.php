<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

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

		$this->load->model('mod_blog');
		$data =array(
			'data_berita' => $this->mod_blog->getData()->result()
		);
		$this->load->view('news',$data);
	}

	public function detailNews($id){
		$this->load->model('mod_blog');

		if($this->session->tempdata('visitor') != 'visited') {
			$this->session->set_tempdata('visitor', 'visited', 1800);
			$now = date('Y-m-d');
			$id = 1;
			$this->db->set('count','count+1',false);
			$this->db->set('last_visitor',$now,false);
  			$this->db->where('id',$id);
  			$this->db->update('visitor');
		}

		if ($this->session->tempdata('reader') != 'read') {
			$this->session->set_tempdata('reader','read',1200);
			$this->mod_blog->updateCounter($id);
		}
		
		$berita = $this->mod_blog->getDataById($id)->result();

		$data = array(
			'data_detail' => $berita
		);
		$this->load->view('news_detail',$data);
	}
}
