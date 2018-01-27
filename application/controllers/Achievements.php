<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Achievements extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('mod_penghargaan');
	}


	public function index()
	{
		$data = array('data_penghargaan' => $this->mod_penghargaan->getData()->result() 
	);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/penghargaan', $data);
		$this->load->view('layout/footer');
	}


	public function addPenghargaan(){
		$data = array(
			'title' => 'Form tambah penghargaan',
			'action' => 'add'
		 );
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/form/form_penghargaan',$data);
		$this->load->view('layout/footer');

	}

	public function editPenghargaan($id){
		$data = array('title' => 'From edit penghargaan',
		'action' => 'edit', 
		'data' => $this->mod_penghargaan->edit($id)->result()
		);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/form/form_penghargaan',$data);
		$this->load->view('layout/footer');

	}	
	public function saveData(){
		$action = $this->input->post('action');
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'nama_mhs' => $nama,
			'keterangan' => $keterangan
			 );

		$config['upload_path'] = realpath(APPPATH . '../assets/upload/penghargaan');
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size']     = 3000;
	    $config['max_width'] = 2732;
	    $config['max_height'] = 1536;
	    $this->load->library('upload',$config);

	    if ($this->upload->do_upload('foto')){
	      $files = $this->upload->data('file_name');
	      $data['foto'] = $files;
	    }else{
	      if($action == "add"){
	        echo $this->upload->display_errors();
	      }
	    }

    	if($action == "add"){
	      $this->mod_penghargaan->saveData($data);
	      $data_session = array('succes' => 'success');
			$this->session->set_userdata($data_session);
	    }
	    else {
	      $id = $this->input->post('id_penghargaan');
	      $this->mod_penghargaan->update($id,$data);
	      $data_session = array('succes' => 'success');
			$this->session->set_userdata($data_session);
	    }
	    redirect('Achievements');
	}

	public function deletePenghargaan($id){
		$this->mod_penghargaan->delete($id);
		redirect('Achievements');
	}

	public function deleteAllPenghargaan(){
		$this->mod_penghargaan->deleteAll();
		redirect('Achievements');
	}
	
}
