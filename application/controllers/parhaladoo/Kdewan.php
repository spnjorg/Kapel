<?php
class Kdewan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kdewan');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_kdewan->get_all_kdewan();
		$this->load->view('parhaladoo/v_kdewan',$x);
	}

	function simpan_kdewan(){
		$kategori=strip_tags($this->input->post('xkdewan'));
		$this->m_kdewan->simpan_kdewan($kategori);
		echo $this->session->set_flashdata('msg','success');
		redirect('parhaladoo/kdewan');
	}

	function update_kdewan(){
		$kode=strip_tags($this->input->post('kode'));
		$kategori=strip_tags($this->input->post('xkdewan'));
		$this->m_kdewan->update_kdewan($kode,$kategori);
		echo $this->session->set_flashdata('msg','info');
		redirect('parhaladoo/kdewan');
	}
	function hapus_kdewan(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_kdewan->hapus_kdewan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('parhaladoo/kdewan');
	}

}
