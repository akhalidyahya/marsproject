<?php 
/**
* 
*/
class mod_login extends CI_Model
{
	function validate($where){
    	return $this->db->get_where('admin',$where);
	}

	function update($id,$data){
  		$this->db->where('id_admin',$id);
  		$query = $this->db->update('admin',$data);
  		return $query;
	}

	function getCurrentPass($id){
		return $this->db->query("SELECT * FROM admin where id_admin = $id")->row();
	}
}
 ?>