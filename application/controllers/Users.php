<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mod_user');
		if($this->session->userdata('status') != 'login'){
			redirect('login');
		}
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

	public function addUser(){
		$data = array(
			'title' => 'Form tambah user',
			'action' => 'add'
		);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/form/form_users',$data);
		$this->load->view('layout/footer');
	}

	public function editUser($id){
		$data = array(
			'title' => 'Form edit user',
			'action' => 'edit',
			'data' => $this->mod_user->edit($id)->result()
		);
		
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/form/form_users',$data);
		$this->load->view('layout/footer');
	}

	public function saveData(){
		$action = $this->input->post('action');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$role = $this->input->post('role');
		$password = md5($this->input->post('password'));
		$data = array(
      		'nama_admin' => $nama,
      		'username' => $username,
      		'password' => $password,
      		'role' => $role
    	);

    	$config['upload_path'] = realpath(APPPATH . '../assets/upload/user');
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size']     = 3000;
	    $config['max_width'] = 2732;
	    $config['max_height'] = 1536;
	    $this->load->library('upload',$config);

	    if ($this->upload->do_upload('foto')){
	      $files = $this->upload->data('file_name');
	      $data['foto_admin'] = $files;
	    }else{
	      if($action == "add"){
	        echo $this->upload->display_errors();
	      }
	    }

    	if($action == "add"){
	      $this->mod_user->saveData($data);
	      $this->session->set_flashdata('error_status', 'success');
	    }
	    else {
	      $id = $this->input->post('id_admin');
	      $this->mod_user->update($id,$data);
	      $this->session->set_flashdata('error_status', 'success');
	    }
	    redirect('users');
	}

	public function deleteUser($id){
		$this->mod_user->delete($id);
		$this->session->set_flashdata('error_status', 'success');
		redirect('users');
	}

	public function deleteAllUser(){
		$this->mod_user->deleteAll();
		redirect('users');
	}
}