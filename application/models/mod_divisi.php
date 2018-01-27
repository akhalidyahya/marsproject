<?php
/**
* 
*/
class mod_divisi extends CI_Model
{
	
	function getData() {
		$this->db->select('*');
		$this->db->from('divisi');
		return $this->db->get();
	}

	function saveData($data) {
		$this->db->insert('divisi' ,$data);
	}

	function delete($id) {
		$this->db->where('id_divisi',$id);
		$this->db->delete('divisi');
	}

	function deleteAll() {
		$this->db->empty_table('divisi');
	}
}
?>