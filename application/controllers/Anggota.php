<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mod_anggota');
		$this->load->model('mod_divisi');
	}

	public function index()
	{
		$data = array('data_anggota' => $this->mod_anggota->getData()->result()
		);

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/anggota', $data);
		$this->load->view('layout/footer');
	}

		public function addAnggota(){
		$data = array(
			'title' => 'Form tambah anggota',
			'action' => 'add',
			'data_anggota' => $this->mod_anggota->getData()->result(),
			'data_divisi' =>  $this->mod_divisi->getData()->result()
		);

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/form/form_anggota',$data);
		$this->load->view('layout/footer');
	}

		public function editAnggota($id){
		$data = array(
			'title' => 'Form edit anggota',
			'action' => 'edit',
			'data' => $this->mod_anggota->edit($id)->result(),
			'data_divisi' =>  $this->mod_divisi->getData()->result()
		);
		
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/form/form_anggota',$data);
		$this->load->view('layout/footer');
	}


	public function saveData()	{
		$action = $this->input->post('action');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$divisi = $this->input->post('divisi');
		$data = array(
      		'nama_anggota' => $nama,
      		'jabatan' => $jabatan,
      		'id_divisi'=>$divisi
    	);

    	$config['upload_path'] = realpath(APPPATH . '../assets/upload/anggota');
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size']     = 3000;
	    $config['max_width'] = 2732;
	    $config['max_height'] = 1536;
	    $this->load->library('upload',$config);

	    if ($this->upload->do_upload('foto')){
	      $files = $this->upload->data('file_name');
	      $data['foto_anggota'] = $files;
	    }else{
	      if($action == "add"){
	        echo $this->upload->display_errors();
	    	}
	    }

	    if($action == "add"){
	      $this->mod_anggota->saveData($data);
	      $data_session = array('succes' => 'success');
			$this->session->set_userdata($data_session);
	    }
	    else {
	      $id = $this->input->post('id_anggota');
	      $this->mod_anggota->update($id,$data);
	      $data_session = array('succes' => 'success');
			$this->session->set_userdata($data_session);
	    }
	    redirect('anggota');

	}

	public function deleteAnggota($id){
		$this->mod_anggota->delete($id);
		redirect('anggota');
	}

	public function deleteAllAnggota(){
		$this->mod_anggota->deleteAll();
		redirect('anggota');
	}
}














