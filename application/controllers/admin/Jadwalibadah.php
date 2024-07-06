<?php
class Jadwalibadah extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_jadwalibadah');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_jadwalibadah->get_all_ibadah();
		$this->load->view('admin/v_jadwalibadah',$x);
	}

	function simpan_ibadah(){
		$nama=strip_tags($this->input->post('xnamaibadah'));
		$tanggal=$this->input->post('xtanggal');
		$waktu=$this->input->post('xwaktu');
		$keterangan=$this->input->post('xketerangan');
		$this->m_jadwalibadah->simpan_ibadah($nama,$tanggal,$waktu,$keterangan);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/jadwalibadah');
	}

	function update_ibadah(){
		$kode=strip_tags($this->input->post('kode'));
		$nama=strip_tags($this->input->post('xnamaibadah'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$waktu=strip_tags($this->input->post('xwaktu'));
		$keterangan=strip_tags($this->input->post('xketerangan'));
		$this->m_jadwalibadah->update_ibadah($kode,$nama,$tanggal,$waktu,$keterangan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/jadwalibadah');
	}

	function hapus_ibadah(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_jadwalibadah->hapus_ibadah($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/jadwalibadah');
	}

}