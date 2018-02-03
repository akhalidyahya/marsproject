<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mod_slider');
		if($this->session->userdata('status') != 'login'){
			redirect('login');
		}
	}

	public function index()
	{
		$data['data_slider'] = $this->mod_slider->getData()->result();

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/slider',$data);
		$this->load->view('layout/footer');
	}

	public function addSlider()
	{
		$data['title'] = 'Form tambah slider';

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/form/form_slider',$data);
		$this->load->view('layout/footer');
	}

	public function deleteSlider($id)
	{
		$this->mod_slider->delete($id);
		$this->session->set_flashdata('error_status', 'success');
		redirect('slider');
	}

	public function saveData()	{
    	$config['upload_path'] = realpath(APPPATH . '../assets/upload/slider');
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size']     = 3000;
	    $config['max_width'] = 2732;
	    $config['max_height'] = 1536;
	    $this->load->library('upload',$config);

	    if ($this->upload->do_upload('foto')){
	    	$files = $this->upload->data('file_name');
	    	$data['gambar'] = $files;
	    }else{
	    	echo $this->upload->display_errors();
	    }

	    $this->mod_slider->saveData($data);
	    $this->session->set_flashdata('error_status', 'success');

	    redirect('slider');

	}
}
