<?php 

/**
* 
*/
class mod_visitor extends CI_model
{
		
	function getData(){
		$this->db->select('*');
		$this->db->from('penghargaan');
		return $this->db->get();
	}

	function getJumlah(){
  		$this->db->select('SUM(count) as visitor');
  		$this->db->from('visitor');
  		return $this->db->get()->row()->visitor;
  	}

}

 ?>