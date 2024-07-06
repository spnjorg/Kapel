<?php
class Lingkungan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_lingkungan');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_lingkungan->get_all_lingkungan();
		$this->load->view('admin/v_lingkungan',$x);
	}

	function simpan_lingkungan(){
		$id=strip_tags($this->input->post('xid'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$jalan=strip_tags($this->input->post('xjalan'));
		$this->m_lingkungan->simpan_lingkungan($id,$lingkungan,$jalan);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/lingkungan');
	}

	function update_lingkungan(){
		$kode=strip_tags($this->input->post('kode'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$jalan=strip_tags($this->input->post('xjalan'));
		$this->m_lingkungan->update_lingkungan($kode,$lingkungan,$jalan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/lingkungan');
	}
	function hapus_lingkungan(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_lingkungan->hapus_lingkungan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/lingkungan');
	}

}
