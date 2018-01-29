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

	public function addBlog(){
		$data = array(
			'title' => 'Form tambah berita',
			'action' => 'add'
		);

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/form/form_blog',$data);
		$this->load->view('layout/footer');
	}

	public function editBlog($id){
		$data = array(
			'title' => 'Form edit berita',
			'action' => 'edit',
			'data' => $this->mod_blog->edit($id)->result()
		);
		
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/form/form_blog',$data);
		$this->load->view('layout/footer');
	}


	public function saveData()	{
		$action = $this->input->post('action');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tgl = date('Y-m-d');
		$admin = $this->session->userdata('id');
		$data = array(
      		'judul' => $judul,
      		'isi' => $isi,
      		'tanggal_buat'=>$tgl,
      		'id_admin'=>$admin,
      		'index_pembaca' => 0
    	);

    	$config['upload_path'] = realpath(APPPATH . '../assets/upload/berita');
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size']     = 3000;
	    $config['max_width'] = 2732;
	    $config['max_height'] = 1536;
	    $this->load->library('upload',$config);

	    if ($this->upload->do_upload('foto')){
	      $files = $this->upload->data('file_name');
	      $data['gambar'] = $files;
	    }else{
	      if($action == "add"){
	        echo $this->upload->display_errors();
	    	}
	    }

	    if($action == "add"){
	      $this->mod_blog->saveData($data);
	      $data_session = array('succes' => 'success');
			$this->session->set_userdata($data_session);
	    }
	    else {
	      $id = $this->input->post('id_anggota');
	      $this->mod_blog->update($id,$data);
	      $data_session = array('succes' => 'success');
			$this->session->set_userdata($data_session);
	    }
	    redirect('blog');

	}

	public function deleteBlog($id){
		$this->mod_blog->delete($id);
		redirect('blog');
	}
}
