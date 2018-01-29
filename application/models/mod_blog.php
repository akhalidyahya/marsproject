<?php 

/**
* 
*/
class mod_blog extends CI_model
{
		
	function getData(){
		$this->db->select('*');
	    $this->db->from('berita');
	    $this->db->join('admin','admin.id_admin = berita.id_admin');
	    $this->db->order_by('id_berita','desc');
	    return $this->db->get();
	}
	function getLatestData(){
		$this->db->select('*');
	    $this->db->from('berita');
	    $this->db->join('admin','admin.id_admin = berita.id_admin');
	    $this->db->order_by('id_berita','desc');
	    $this->db->limit('3');
	    return $this->db->get();
	}
	function getDataById($id){
		$this->db->select('*');
	    $this->db->from('berita');
	    $this->db->join('admin','admin.id_admin = berita.id_admin');
		$this->db->where('id_berita',$id);
    	return $this->db->get();
	}
	function saveData($data){
		 $this->db->insert('berita',$data);
	}

	function update($id,$data){
  		$this->db->where('id_berita',$id);
  		return $this->db->update('berita',$data);
	}

	function delete($id){
		$this->db->where('id_berita',$id);
		$this->db->delete('berita');
	}

	function deleteAll(){
		$this->db->truncate('berita');
	}

	function edit($id){
    	$this->db->where('id_berita',$id);
    	return $this->db->get('berita');
  	}

}

 ?>