<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mod_user');
	}

	public function index()
	{
		$data = array(
			'data_admin' => $this->mod_user->getData()->result()
		);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/users',$data);
		$this->load->view('layout/footer');
	}

	public function adduser(){
		$data = array(
			'title' => 'Form tambah user'
		);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/form/form_users',$data);
		$this->load->view('layout/footer');
	}

	public function deleteUser($id){
		$this->mod_user->delete($id);
		redirect('users');
	}

	public function deleteAllUser(){
		$this->mod_user->deleteAll();
		redirect('users');
	}
}
