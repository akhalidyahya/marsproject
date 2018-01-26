<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Achievements extends CI_Controller {

	public function index()
	{
		$this->load->view('penghargaan');
	}
}
