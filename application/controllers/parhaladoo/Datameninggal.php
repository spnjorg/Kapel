<?php
class Datameninggal extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_jemaat');
		$this->load->model('m_lingkungan');
		$this->load->model('m_kategori');
		$this->load->model('m_berita');
		$this->load->library('upload');
	}


	function index(){
		$x['katusia']=$this->m_kategori->get_all_katfilter();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['jemaat']=$this->m_jemaat->get_all_jemaat();
		$x['data']=$this->m_berita->get_all_datameninggal();
		$this->load->view('parhaladoo/v_datameninggal',$x);
	}

// ----------------------------------------------- DATA KELAHIRAN ---------------------------------------------------//

	function simpan_datameninggal(){
		$idjemaat=strip_tags($this->input->post('xidjemaat'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$kategori=strip_tags($this->input->post('xkatusia'));
		
		$this->m_berita->simpan_datameninggal($idjemaat,$tanggal,$kategori);
		echo $this->session->set_flashdata('msg','success');
		redirect('parhaladoo/datameninggal');

	}


	function update_datameninggal(){
		$kode=strip_tags($this->input->post('kode'));
		$idjemaat=strip_tags($this->input->post('xidjemaat'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$kategori=strip_tags($this->input->post('xkatusia'));

		$this->m_berita->update_datameninggal($kode,$idjemaat,$tanggal,$kategori);
		echo $this->session->set_flashdata('msg','info');
		redirect('parhaladoo/datameninggal');
	}

		function hapus_datameninggal(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_berita->hapus_datameninggal($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('parhaladoo/datameninggal');
	}

// ---------------------------------------------- END DATA KELAHIRAN ---------------------------------------------------//



}