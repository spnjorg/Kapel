<?php
class Dewan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_dewan');
		$this->load->model('m_pengguna');
		$this->load->model('m_kdewan');
		$this->load->model('m_parhalado');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_dewan->get_all_dewan();
		$x['kdewan']=$this->m_kdewan->get_all_kdewan();
		$x['parhalado']=$this->m_parhalado->get_all_parhalado();
		$this->load->view('admin/v_dewan',$x);
	}

	function simpan_dewan(){
		$nama=strip_tags($this->input->post('xnama'));
		$dewan=strip_tags($this->input->post('xdewan'));
		$jabatan=strip_tags($this->input->post('xjabatan'));
		
		$this->m_dewan->simpan_dewan($nama,$dewan,$jabatan);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/dewan');
	}
	

	function update_dewan(){
		$kode=strip_tags($this->input->post('kode'));
		$nama=strip_tags($this->input->post('xnama'));
		$dewan=strip_tags($this->input->post('xdewan'));
		$jabatan=strip_tags($this->input->post('xjabatan'));
		
		$this->m_dewan->update_dewan($kode,$nama,$dewan,$jabatan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/dewan');
	}

	function hapus_dewan(){
		$kode=$this->input->post('kode');
		$this->m_dewan->hapus_dewan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/dewan');
	}

}