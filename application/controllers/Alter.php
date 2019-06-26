<?php
class Alter extends ci_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_alter');
	}

	function index(){
		$data['title'] = 'Alternatif';
		$data['cod'] = $this->m_alter->kode();
		$this->load->view('tmp/head', $data);
		$data['alt'] = $this->m_alter->tampil();
		$this->load->view('alter/t_alter', $data);
		$this->load->view('tmp/footer');
	}

	function tambah(){
		$nama = $this->input->post('nama');
		$wa = $this->input->post('wa');

		$data = array(
			'nama' => $nama,
			'no_wa' => $wa
		);
		$this->m_alter->tambah($data);
		redirect('alter');
	}


	function f_edit(){
		$data['title'] = 'Update Data';
		$this->load->view('tmp/head', $data);
		$id_alter = $this->uri->segment(3);
		$data['alt'] = $this->m_alter->per_($id_alter);
		$this->load->view('alter/u_f', $data);
		$this->load->view('tmp/footer');
	}

	function edit(){
		$id = $this->input->post('id_alter');
		$nama = $this->input->post('nama');

		$data = array(
			'nama' => $nama
		);

		$this->m_alter->edit($data);
		redirect('alter');
	}

	function hapus(){
		$id_alter = $this->uri->segment(3);
		$this->m_alter->hapus($id_alter);
		redirect('alter');
	}
}