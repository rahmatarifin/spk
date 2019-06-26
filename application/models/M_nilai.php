<?php
class M_nilai extends ci_model{
	function tampil(){
		$this->db->join('kriteria', 'kriteria.id_kriteria=nilai.id_kriteria');
		$this->db->join('alternatif', 'alternatif.id_alternatif=nilai.id_alternatif');
		$this->db->order_by('nilai.id_kriteria', 'desc');
		return $this->db->get('nilai')->result();
	}

	function tambah($data){
		return $this->db->insert('nilai', $data);
	}

	function hasil(){
		$this->db->select('*, max(nilai) as hasil');
		$this->db->group_by('nilai.id_kriteria');
		$this->db->order_by('id_nilai', 'asc');
		$this->db->join('kriteria','kriteria.id_kriteria=nilai.id_kriteria');
		$this->db->join('alternatif', 'alternatif.id_alternatif=nilai.id_alternatif');
		return $this->db->get('nilai')->result();

	}

	function g_per($id_nilai){
		$this->db->where('id_nilai', $id_nilai);
		$this->db->join('kriteria', 'kriteria.id_kriteria=nilai.id_kriteria');
		$this->db->join('alternatif', 'alternatif.id_alternatif=nilai.id_alternatif');
		return $this->db->get('nilai')->result();
	}

	function per_($id_alter){
		$this->db->where('nilai.id_alternatif', $id_alter);
		$this->db->join('alternatif', 'alternatif.id_alternatif=nilai.id_alternatif');
		$this->db->join('kriteria', 'kriteria.id_kriteria=nilai.id_kriteria');
		return $this->db->get('nilai')->result();
	}

	function hapus($id){
		$this->db->where('id_nilai', $id);
		return $this->db->delete('nilai');
	}

	function update($id_nilai, $data){
		$this->db->where('id_nilai', $id_nilai);
		return $this->db->update('nilai', $data);
	}
}