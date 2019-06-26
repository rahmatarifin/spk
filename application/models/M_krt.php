<?php
class M_krt extends ci_model{
	function tampil(){
		return $this->db->get('kriteria')->result();
	}

	function tambah($data){
		return $this->db->insert('kriteria', $data);
	}

	function hapus($id_krt){
		$this->db->where('id_kriteria', $id_krt);
		return $this->db->delete('kriteria');
	}
}