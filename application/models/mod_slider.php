<?php 
/**
* 
*/
class mod_slider extends CI_Model
{
	function getData(){
		$this->db->select('*');
		$this->db->from('slider');
    	return $this->db->get();
	}

	function saveData($data){
		 $this->db->insert('slider',$data);
		 
	}

	function delete($id){
		$this->db->where('id_slider',$id);
		$this->db->delete('slider');
	}

}
 ?>