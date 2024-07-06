<?php
class Kategoriwarta extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kategoriwarta');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_kategoriwarta->get_all_kwarta();
		$this->load->view('admin/v_kategoriwarta',$x);
	}

	function simpan_kwarta(){
		$kategori=strip_tags($this->input->post('xkategoriwarta'));
		$this->m_kategoriwarta->simpan_kwarta($kategori);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/kategoriwarta');
	}

	function update_kwarta(){
		$kode=strip_tags($this->input->post('kode'));
		$kategori=strip_tags($this->input->post('xkategoriwarta'));
		$this->m_kategoriwarta->update_kwarta($kode,$kategori);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/kategoriwarta');
	}
	function hapus_kwarta(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_kategoriwarta->hapus_kwarta($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/kategoriwarta');
	}

}
