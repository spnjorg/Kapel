<?php
class Sidi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_jemaat');
		$this->load->model('m_lingkungan');
		$this->load->model('m_kepalakeluarga');
		$this->load->model('m_berita');
		$this->load->library('upload');
	}


	function index(){
		$x['kepalakeluarga']=$this->m_kepalakeluarga->get_all_kk();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['jemaat']=$this->m_jemaat->get_all_jemaat();
		$x['data']=$this->m_berita->get_all_sidi();
		$this->load->view('parhaladoo/v_sidi',$x);
	}

// ----------------------------------------------- DATA KELAHIRAN ---------------------------------------------------//

	function simpan_sidi(){
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$idjemaat=strip_tags($this->input->post('xidjemaat'));
		$ham=strip_tags($this->input->post('xham'));

		$this->m_berita->simpan_sidi($tanggal,$idjemaat,$ham);
		echo $this->session->set_flashdata('msg','success');
		redirect('parhaladoo/sidi');

	}

	function simpan_sksidi(){
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$idjemaat=strip_tags($this->input->post('xidjemaat'));
		$ham=strip_tags($this->input->post('xham'));


		$this->m_berita->simpan_sidi($tanggal,$idjemaat,$ham);
		echo $this->session->set_flashdata('msg','berhasil');
		redirect('parhaladoo/surat/sidi');

	}


	function update_sidi(){
		$kode=strip_tags($this->input->post('kode'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$idjemaat=strip_tags($this->input->post('xidjemaat'));
		$ham=strip_tags($this->input->post('xham'));

		$this->m_berita->update_sidi($kode,$tanggal,$idjemaat,$ham);
		echo $this->session->set_flashdata('msg','info');
		redirect('parhaladoo/sidi');
	}

		function hapus_sidi(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_berita->hapus_sidi($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('parhaladoo/sidi');
	}

// ---------------------------------------------- END DATA KELAHIRAN ---------------------------------------------------//



}