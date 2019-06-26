<?php class M_alter extends ci_model{
	function kode(){
		$query = $this->db->get('alternatif');
		if ($query->num_rows()<> 0) {
			$data = $query->row();
			$kode = intval($data->id_alternatif)+1;
		}else{
			$kode = 1;
		}

		$batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kode_tampil = "A".$batas;
		return $kode_tampil;

	}
	function tampil(){
		return $this->db->get('alternatif')->result();
	}

	function tambah($data){
		return $this->db->insert('alternatif', $data);
	}

	function per_($id_alter){
		$this->db->where('id_alternatif', $id_alter);
		return $this->db->get('alternatif')->result();
	}

	function edit($id_alter, $data){
		$this->db->where('id_alternatif', $id_alter);
		return $this->db->update('alternatif', $data);
	}

	function hapus($id_alter){
		$this->db->where('id_alternatif', $id_alter);
		return $this->db->delete('alternatif');
	}
}