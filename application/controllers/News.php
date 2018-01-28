<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->load->model('mod_blog');
		$data =array(
			'data_berita' => $this->mod_blog->getData()->result()
		);
		$this->load->view('news',$data);
	}

	public function detailNews($id){
		$this->load->model('mod_blog');
		$data = array(
			'data_detail' => $this->mod_blog->getDataById($id)->result()
		);
		$this->load->view('news_detail',$data);
	}
}
