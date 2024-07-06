<?php
class Kepalakeluarga extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kepalakeluarga');
		$this->load->model('m_lingkungan');
		$this->load->library('upload');
	}


	function index(){
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_kepalakeluarga->get_all_kk();
		$this->load->view('admin/v_kk',$x);
	}

	function simpan_kk(){
		$id=strip_tags($this->input->post('xid'));
		$nama=strip_tags($this->input->post('xnamakk'));
		$lingkungan=strip_tags($this->input->post('xlingkungankk'));
		$alamat=$this->input->post('xalamatkk');

		$this->m_kepalakeluarga->simpan_kk($id,$nama,$lingkungan,$alamat);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/kepalakeluarga');
	}

	function update_kk(){
		$kode=strip_tags($this->input->post('kode'));
		$nama=strip_tags($this->input->post('xnamakk'));
		$lingkungan=strip_tags($this->input->post('xlingkungankk'));
		$alamat=$this->input->post('xalamatkk');
		
		$this->m_kepalakeluarga->update_kk($kode,$nama,$lingkungan,$alamat);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/kepalakeluarga');
	}

	function hapus_kk(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_kepalakeluarga->hapus_kk($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/kepalakeluarga');
	}

}