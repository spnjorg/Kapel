<?php
class Tardidi extends CI_Controller{
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
		$x['data']=$this->m_berita->get_all_tardidi();
		$this->load->view('admin/v_tardidi',$x);
	}

// ----------------------------------------------- DATA KELAHIRAN ---------------------------------------------------//

	function simpan_tardidi(){
		$tgltardidi=strip_tags($this->input->post('xtgltardidi'));
		$idkel=strip_tags($this->input->post('xidkeluarga'));
		$nama=strip_tags($this->input->post('xnama'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmplahir=strip_tags($this->input->post('xtmptlahir'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		

		$this->m_berita->simpan_tardidi($tgltardidi,$idkel,$nama,$jenkel,$tmplahir,$tgllahir);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/tardidi');

	}

	function simpan_sktardidi(){
		$tgltardidi="2021-12-26";
		$idkel=strip_tags($this->input->post('xidkeluarga'));
		$nama=strip_tags($this->input->post('xnama'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmplahir=strip_tags($this->input->post('xtmptlahir'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));

		$this->m_berita->simpan_tardidi($tgltardidi,$idkel,$nama,$jenkel,$tmplahir,$tgllahir);
		echo $this->session->set_flashdata('msg','berhasil');
		redirect('admin/surat/tardidi');

	}


	function update_tardidi(){
		$kode=strip_tags($this->input->post('kode'));
		$tgltardidi=strip_tags($this->input->post('xtgltardidi'));
		$idkel=strip_tags($this->input->post('xidkeluarga'));
		$nama=strip_tags($this->input->post('xnama'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmplahir=strip_tags($this->input->post('xtmptlahir'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));

		$this->m_berita->update_tardidi($kode,$tgltardidi,$idkel,$nama,$jenkel,$tmplahir,$tgllahir);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/tardidi');
	}

		function hapus_tardidi(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_berita->hapus_tardidi($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/tardidi');
	}

// ---------------------------------------------- END DATA KELAHIRAN ---------------------------------------------------//



}