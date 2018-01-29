<?php 
/**
* 
*/
class mod_anggota extends CI_Model
{
	function getData(){
		$this->db->select('anggota.id_anggota,anggota.nama_anggota,anggota.foto_anggota,divisi.nama_divisi,anggota.jabatan');
		$this->db->from('anggota');
		$this->db->join('divisi','divisi.id_divisi=anggota.id_divisi');
    	return $this->db->get();
	}

	function saveData($data){
		 $this->db->insert('anggota',$data);
		 
	}

	function update($id,$data){
  		$this->db->where('id_anggota',$id);
  		return $this->db->update('anggota',$data);
	}

	function delete($id){
		$this->db->where('id_anggota',$id);
		$this->db->delete('anggota');
	}

	function deleteAll(){
		$this->db->truncate('anggota');
	}

	function edit($id){
    	$this->db->where('id_anggota',$id);
    	return $this->db->get('anggota');
  	}

  	function getJumlah(){
  		$this->db->select('id_anggota');
  		$this->db->from('anggota');
  		return $this->db->count_all_results();
  	}
}
 ?>