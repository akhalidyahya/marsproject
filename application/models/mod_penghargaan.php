<?php 

/**
* 
*/
class mod_penghargaan extends CI_model
{
		
	function getData(){
		$this->db->select('*');
		$this->db->from('penghargaan');
		return $this->db->get();
	}
	function getLatestData(){
		$this->db->select('*');
		$this->db->from('penghargaan');
		$this->db->order_by('id_penghargaan','desc');
		$this->db->limit('6');
		return $this->db->get();
	}
	function saveData($data){
		 $this->db->insert('penghargaan',$data);
	}

	function update($id,$data){
  		$this->db->where('id_penghargaan',$id);
  		return $this->db->update('penghargaan',$data);
	}

	function delete($id){
		$this->db->where('id_penghargaan',$id);
		$this->db->delete('penghargaan');
	}

	function deleteAll(){
		$this->db->truncate('penghargaan');
	}

	function edit($id){
    	$this->db->where('id_penghargaan',$id);
    	return $this->db->get('penghargaan');
  	}

  	function getJumlah(){
  		$this->db->select('id_penghargaan');
  		$this->db->from('penghargaan');
  		return $this->db->count_all_results();
  	}

}

 ?>