<?php 
class Nilai extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_nilai');
		$this->load->model('m_alter');
		$this->load->model('m_krt');
	}

	function index(){
		$data['title'] = 'Nilai';
		$this->load->view('tmp/head', $data);
		$data['krt'] = $this->m_krt->tampil();
		$data['alter'] = $this->m_alter->tampil();
		$data['alt'] = $this->m_nilai->tampil();
		$this->load->view('nilai/t_nilai', $data);
		$this->load->view('tmp/footer');
	}

	function tambah(){
		$id_alter = $this->input->post('id_alternatif');
		$id_krt = $this->input->post('id_kriteria');
		$nilai = $this->input->post('nilai');

		$data = array(
			'id_alternatif' => $id_alter,
			'id_kriteria' => $id_krt,
			'nilai' => $nilai
		);

		$this->m_nilai->tambah($data);
		redirect('nilai');
	}

	function edit(){
		$data['title'] = 'Update Nilai';
		$this->load->view('tmp/head', $data);
		$id_nilai = $this->uri->segment(3);
		$data['nilai'] = $this->m_nilai->g_per($id_nilai);
		$this->load->view('nilai/f_edit', $data);
		$this->load->view('tmp/footer');
	}

	function per(){
		$id_alter = $this->input->post('id_alternatif');
		$id_krt = $this->input->post('id_kriteria');
		$nilai = $this->input->post('nilai');

		$data = array(
			'id_alternatif' => $id_alter,
			'id_kriteria' => $id_krt,
			'nilai' => $nilai
		);

		$this->m_nilai->tambah($data);
		redirect('nilai/pe_alter/'.$id_alter);	
	}

	function hapus(){
		$id = $this->uri->segment(3);
		$this->m_nilai->hapus($id);
		redirect('nilai');
	}

	function pe_alter(){
		$id_alter = $this->uri->segment(3);
		$data['title'] = "Nilai ".$id_alter;
		$this->load->view('tmp/head', $data);
		$data['alter'] = $this->m_alter->per_($id_alter);
		$data['krt'] = $this->m_krt->tampil();
		$data['nilai'] = $this->m_nilai->per_($id_alter);
		$this->load->view('nilai/f_nilaiper_', $data);
		$this->load->view('tmp/footer');
	}

	function update(){
		$id_nilai = $this->uri->segment(3);
		$id_alternatif = $this->input->post('id_alternatif');
		$id_kriteria = $this->input->post('id_kriteria');
		$nilai = $this->input->post('nila');

		$data = array(
			'id_kriteria' => $id_kriteria,
			'id_alternatif' => $id_alternatif,
			'nilai' => $nilai
		);

		$this->m_nilai->update($id_nilai, $data);
		redirect('nilai');
	}


	function hasil(){
		$data['title'] = 'Hasil ';
		$this->load->view('tmp/head', $data);
		$data['hsl'] = $this->m_nilai->hasil();
		$this->load->view('nilai/t_hasil', $data);
		$this->load->view('tmp/footer');
	}
}