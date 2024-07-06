<?php
class Jmenikah extends CI_Controller{
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
		$x['data']=$this->m_berita->get_all_jmenikah();
		$this->load->view('admin/v_jmenikah',$x);
	}

// ----------------------------------------------- DATA KELAHIRAN ---------------------------------------------------//
	
	function simpan_jmenikah(){
		$idjemaat=strip_tags($this->input->post('xidjemaat'));
		$namapasangan=strip_tags($this->input->post('xnamapasangan'));
		$tanggal=strip_tags($this->input->post('xtglnikah'));
		$huria=strip_tags($this->input->post('xhuria'));


		$this->m_berita->simpan_jmenikah($idjemaat,$namapasangan,$tanggal,$huria);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/jmenikah');

	}

	function simpan_skjmenikah(){
		$idjemaat=strip_tags($this->input->post('xidjemaat'));
		$namapasangan=strip_tags($this->input->post('xnamapasangan'));
		$tanggal=strip_tags($this->input->post('xtglnikah'));
		$huria=strip_tags($this->input->post('xhuria'));

		$this->m_berita->simpan_jmenikah($idjemaat,$namapasangan,$tanggal,$huria);
		echo $this->session->set_flashdata('msg','berhasil');
		redirect('admin/surat/jmenikah');

	}


	function update_jmenikah(){
		$kode=strip_tags($this->input->post('kode'));
		$idjemaat=strip_tags($this->input->post('xidjemaat'));
		$namapasangan=strip_tags($this->input->post('xnamapasangan'));
		$tanggal=strip_tags($this->input->post('xtglnikah'));
		$huria=strip_tags($this->input->post('xhuria'));


		$this->m_berita->update_jmenikah($kode,$idjemaat,$namapasangan,$tanggal,$huria);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/jmenikah');
	}

		function hapus_jmenikah(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_berita->hapus_jmenikah($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/jmenikah');
	}

	// SURAT KELAHIRAN

	function simpan_suratkelahiran(){
		$username=strip_tags($this->input->post('xusername'));
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$tanggal=strip_tags($this->input->post('xtgllahir'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$alamat=strip_tags($this->input->post('xalamat'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$status=2;

		$this->m_berita->simpan_kelahiran($username,$namaayah,$namaibu,$tanggal,$jenkel,$alamat,$lingkungan,$status);
		echo $this->session->set_flashdata('msg','success');
		//header("location:v_suratlahir.php?pesan=sukses");
		redirect('surat/surat_kelahiran');

	}

	function cek_suratkelahiran(){
		$x['kepalakeluarga']=$this->m_kepalakeluarga->get_all_kk();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['jemaat']=$this->m_jemaat->get_all_jemaat();
		$x['data']=$this->m_berita->get_all_kelahiran();
		$this->load->view('admin/v_kelahiran',$x);
	}



// ---------------------------------------------- END DATA KELAHIRAN ---------------------------------------------------//



}