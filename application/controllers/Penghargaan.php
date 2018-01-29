<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghargaan extends CI_Controller {

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

		$this->load->model('mod_penghargaan');
		$data =array(
			'data_penghargaan' => $this->mod_penghargaan->getData()->result()
		);
		$this->load->view('penghargaan',$data);
	}
}
