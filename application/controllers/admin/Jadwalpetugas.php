<?php
class Jadwalpetugas extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_jadwalpetugas');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_jadwalpetugas->get_all_petugas();
		$this->load->view('admin/v_jadwalpetugas',$x);
	}

	function skm(){
		$x['data']=$this->m_jadwalpetugas->get_all_petugasskm();
		$this->load->view('admin/v_jadwalpetugasskm',$x);
	}

//PETUGAS IBADAH UMUM_______________________________________________________________________

	function simpan_petugas(){
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$jamita1=strip_tags($this->input->post('xjamita1'));
		$jamita2=strip_tags($this->input->post('xjamita2'));
		$jamita3=strip_tags($this->input->post('xjamita3'));
		$agenda1=strip_tags($this->input->post('xagenda1'));
		$agenda2=strip_tags($this->input->post('xagenda2'));
		$agenda3=strip_tags($this->input->post('xagenda3'));
		$tingting1=strip_tags($this->input->post('xtingting1'));
		$tingting2=strip_tags($this->input->post('xtingting2'));
		$tingting3=strip_tags($this->input->post('xtingting3'));
		$pelean1=strip_tags($this->input->post('xpelean1'));
		$pelean2=strip_tags($this->input->post('xpelean2'));
		$pelean3=strip_tags($this->input->post('xpelean3'));
		$balkon1=strip_tags($this->input->post('xbalkon1'));
		$balkon2=strip_tags($this->input->post('xbalkon2'));
		$balkon3=strip_tags($this->input->post('xbalkon3'));
		$dlmgereja1=strip_tags($this->input->post('xdlmgereja1'));
		$dlmgereja2=strip_tags($this->input->post('xdlmgereja2'));
		$dlmgereja3=strip_tags($this->input->post('xdlmgereja3'));
		$musik=strip_tags($this->input->post('xmusik'));
		$ket="";

		$this->m_jadwalpetugas->simpan_petugas($tanggal,$jamita1,$jamita2,$jamita3,$agenda1,$agenda2,$agenda3,$tingting1,$tingting2,$tingting3,$pelean1,$pelean2,$pelean3,$balkon1,$balkon2,$balkon3,$dlmgereja1,$dlmgereja2,$dlmgereja3,$musik,$ket);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/jadwalpetugas');
	}

	function update_petugas(){
		$kode=strip_tags($this->input->post('kode'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$jamita1=strip_tags($this->input->post('xjamita1'));
		$jamita2=strip_tags($this->input->post('xjamita2'));
		$jamita3=strip_tags($this->input->post('xjamita3'));
		$agenda1=strip_tags($this->input->post('xagenda1'));
		$agenda2=strip_tags($this->input->post('xagenda2'));
		$agenda3=strip_tags($this->input->post('xagenda3'));
		$tingting1=strip_tags($this->input->post('xtingting1'));
		$tingting2=strip_tags($this->input->post('xtingting2'));
		$tingting3=strip_tags($this->input->post('xtingting3'));
		$pelean1=strip_tags($this->input->post('xpelean1'));
		$pelean2=strip_tags($this->input->post('xpelean2'));
		$pelean3=strip_tags($this->input->post('xpelean3'));
		$balkon1=strip_tags($this->input->post('xbalkon1'));
		$balkon2=strip_tags($this->input->post('xbalkon2'));
		$balkon3=strip_tags($this->input->post('xbalkon3'));
		$dlmgereja1=strip_tags($this->input->post('xdlmgereja1'));
		$dlmgereja2=strip_tags($this->input->post('xdlmgereja2'));
		$dlmgereja3=strip_tags($this->input->post('xdlmgereja3'));
		$musik=strip_tags($this->input->post('xmusik'));
		$ket="";

		$this->m_jadwalpetugas->update_petugas($kode,$tanggal,$jamita1,$jamita2,$jamita3,$agenda1,$agenda2,$agenda3,$tingting1,$tingting2,$tingting3,$pelean1,$pelean2,$pelean3,$balkon1,$balkon2,$balkon3,$dlmgereja1,$dlmgereja2,$dlmgereja3,$musik,$ket);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/jadwalpetugas');
	}

	function hapus_petugas(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_jadwalpetugas->hapus_petugas($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/jadwalpetugas');
	}


//PETUGAS IBADAH SEKOLAH MINGGU_______________________________________________________________________

    function simpan_petugasskm(){
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$skmliturgis=strip_tags($this->input->post('xagenda'));
		$skmkhotbah=strip_tags($this->input->post('xjamita'));
		$skmpiket=strip_tags($this->input->post('xpiket'));
		$skmmusik=strip_tags($this->input->post('xmusik'));
		$skmket="";

		$this->m_jadwalpetugas->simpan_petugasskm($tanggal,$skmliturgis,$skmkhotbah,$skmpiket,$skmmusik,$skmket);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/jadwalpetugas/skm');
	}

	function update_petugasskm(){
		$kode=strip_tags($this->input->post('kode'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$skmliturgis=strip_tags($this->input->post('xagenda'));
		$skmkhotbah=strip_tags($this->input->post('xjamita'));
		$skmpiket=strip_tags($this->input->post('xpiket'));
		$skmmusik=strip_tags($this->input->post('xmusik'));
		$skmket="";

		$this->m_jadwalpetugas->update_petugasskm($kode,$tanggal,$skmliturgis,$skmkhotbah,$skmpiket,$skmmusik,$skmket);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/jadwalpetugas/skm');
	}

	function hapus_petugasskm(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_jadwalpetugas->hapus_petugasskm($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/jadwalpetugas/skm');
	}




}