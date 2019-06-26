<?php
class Krt extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_krt');
	}

	function index(){
		$data['title'] = 'Kriteria';
		$this->load->view('tmp/head', $data);
		$data['krt'] = $this->m_krt->tampil();
		$this->load->view('krt/tm_', $data);
		$this->load->view('tmp/footer');
	}

	function tambah(){
		$nama = $this->input->post('nama');

		$data = array(
			'nama_kriteria' => $nama
		);

		$this->m_krt->tambah($data);
		redirect('krt');
	}

	function hapus(){
		$id = $this->uri->segment(3);
		$this->m_krt->hapus($id);
		redirect('krt');
	}
}