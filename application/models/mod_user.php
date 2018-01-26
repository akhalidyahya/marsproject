<?php 
/**
* 
*/
class mod_user extends CI_Model
{
	function getData(){
		$this->db->select('*');
		$this->db->from('admin');
    	return $this->db->get();
	}

	function update($id,$data){
  		$this->db->where('id_admin',$id);
  		return $this->db->update('admin',$data);
	}

	function delete($id){
		$this->db->where('id_admin',$id);
		$this->db->delete('admin');
	}

	function deleteAll(){
		$this->db->empty_table('admin');
	}
}
 ?>