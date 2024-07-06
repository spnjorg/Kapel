<?php
class Listwa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_listwa');
		$this->load->model('m_kategoriwarta');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_listwa->get_all_listwa();
		$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
		$x['pengguna']=$this->m_pengguna->get_all_pengguna();
		$this->load->view('pendeta/v_listwa',$x);
	}

	function simpan_warta(){
		$judul=strip_tags($this->input->post('xjudul'));
		$deskripsi=$this->input->post('xdeskripsi');
		$tanggal=$this->input->post('xtanggal');
		$kategori=$this->input->post('xkategori');
		$this->m_warta->simpan_warta($judul,$deskripsi,$tanggal,$kategori);
		echo $this->session->set_flashdata('msg','success');
		redirect('pendeta/listwa');
	}

	function update_warta(){
		$kode=strip_tags($this->input->post('kode'));
		$judul=strip_tags($this->input->post('xjudul'));
		$deskripsi=$this->input->post('xdeskripsi');
		$tanggal=$this->input->post('xtanggal');
		$kategori=$this->input->post('xkategori');
		$this->m_warta->update_warta($kode,$judul,$deskripsi,$tanggal,$kategori);
		echo $this->session->set_flashdata('msg','info');
		redirect('pendeta/listwa');
	}
	function hapus_warta(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_warta->hapus_warta($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('pendeta/listwa');
	}


//WhatsApp Gateway________________________________________________________________________________________________________
	

}