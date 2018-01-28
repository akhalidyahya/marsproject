<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mod_divisi');
		if($this->session->userdata('status') != 'login'){
			redirect('login');
		}
	}

	public function index()
	{
		$data = array('data_divisi' => $this->mod_divisi->getData()->result()
		);

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/divisi' ,$data);
		$this->load->view('layout/footer');
	}

	public function addDivisi() {
		$data = array(
			'title' => 'Form Tambah Divisi',
			'action' => 'add'
		);

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/form/form_divisi' ,$data);
		$this->load->view('layout/footer');
	}

	public function saveData() {
		$action = $this->input->post('action');
		$nama = $this->input->post('nama');
		$data = array('nama_divisi' => $nama 
		);

		if($action == "add"){
	      $this->mod_divisi->saveData($data);
	      $data_session = array('succes' => 'success');
			$this->session->set_userdata($data_session);
	    }
	    else {
	      $id = $this->input->post('id_divisi');
	      $this->mod_divisi->update($id,$data);
	      $data_session = array('succes' => 'success');
			$this->session->set_userdata($data_session);
	    }
	    redirect('divisi');
	}

	public function deleteDivisi($id) {
		$this->mod_divisi->delete($id);
		redirect('divisi');
	}

	public function deleteAllDivisi() {
		$this->mod_divisi->deleteAll();
		redirect('divisi');
	}
}
