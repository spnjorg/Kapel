<?php
class Wartafix extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_warta');
		$this->load->model('m_kategoriwarta');
		$this->load->model('m_pengguna');
		$this->load->model('m_kategori');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_warta->get_all_wnasorang();
		$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
		$x['pengguna']=$this->m_pengguna->get_all_pengguna();
		$x['minggu']=$this->m_kategori->get_all_minggu();
		$this->load->view('admin/v_wartafix',$x);
	}

	// SIMPAN WARTA DARI HALAMAN LIST WARTA MASUK KE WARTA JEMAAT SESUAI DENGAN KATEGORI WARTA____________________---

	function simpan_walist(){
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');
		$minggu=$this->input->post('xminggu');
		$status=0;

		$this->m_warta->simpan_wartafix($tanggal,$nama,$deskripsi,$kategori,$minggu,$status);
		echo $this->session->set_flashdata('msg','berhasil');
		redirect('admin/warta');
	}

	// END______________________________________________________________________________________________________---
	
	function simpan_wartafix(){
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');
		$minggu=$this->input->post('xminggu');
		$status=$this->input->post('xstatus');

		$this->m_warta->simpan_wartafix($tanggal,$nama,$deskripsi,$kategori,$minggu,$status);
		echo $this->session->set_flashdata('msg','berhasil');
		redirect('admin/wartafix');
	}

	function update_wartafix(){
		$kode=strip_tags($this->input->post('kode'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');
		$minggu=$this->input->post('xminggu');
		$status=$this->input->post('xstatus');

		$this->m_warta->update_wartafix($kode,$tanggal,$nama,$deskripsi,$kategori,$minggu,$status);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/wartafix');
	}
	function hapus_wartafix(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_warta->hapus_wartafix($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/wartafix');
	}


	//_____________________________________________________________________________________________________________
//NAMONDING---------------------------------------------------
	function namonding(){
		$x['data']=$this->m_warta->get_all_wnamonding();
		$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
		$x['minggu']=$this->m_kategori->get_all_minggu();
		$x['pengguna']=$this->m_pengguna->get_all_pengguna();
		$this->load->view('admin/v_wartanamonding',$x);
	}

	function simpan_wartafix_namonding(){
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');
		$minggu=$this->input->post('xminggu');
		$status=$this->input->post('xstatus');

		$this->m_warta->simpan_wartafix($tanggal,$nama,$deskripsi,$kategori,$minggu,$status);
		echo $this->session->set_flashdata('msg','berhasil');
		redirect('admin/wartafix/namonding');
	}

	function update_wartafix_namonding(){
		$kode=strip_tags($this->input->post('kode'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');
		$minggu=$this->input->post('xminggu');
		$status=$this->input->post('xstatus');

		$this->m_warta->update_wartafix($kode,$tanggal,$nama,$deskripsi,$kategori,$minggu,$status);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/wartafix/namonding');
	}

	function hapus_wartafix_namonding(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_warta->hapus_wartafix($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/wartafix/namonding');
	}

//MENIKAH ----------------------------------------------------------------------------------------
	function jmenikah(){
		$x['data']=$this->m_warta->get_all_wjmenikah();
		$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
		$x['minggu']=$this->m_kategori->get_all_minggu();
		$x['pengguna']=$this->m_pengguna->get_all_pengguna();
		$this->load->view('admin/v_wartajmenikah',$x);
	}

	function simpan_wartafix_jmenikah(){
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');
		$minggu=$this->input->post('xminggu');
		$status=$this->input->post('xstatus');

		$this->m_warta->simpan_wartafix($tanggal,$nama,$deskripsi,$kategori,$minggu,$status);
		echo $this->session->set_flashdata('msg','berhasil');
		redirect('admin/wartafix/jmenikah');
	}

	function update_wartafix_jmenikah(){
		$kode=strip_tags($this->input->post('kode'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');
		$minggu=$this->input->post('xminggu');
		$status=$this->input->post('xstatus');

		$this->m_warta->update_wartafix($kode,$tanggal,$nama,$deskripsi,$kategori,$minggu,$status);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/wartafix/jmenikah');
	}

	function hapus_wartafix_jmenikah(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_warta->hapus_wartafix($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/wartafix/jmenikah');
	}


//PINDAH----------------------------------------------------------------------------------------
	function jpindah(){
		$x['data']=$this->m_warta->get_all_wjpindah();
		$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
		$x['minggu']=$this->m_kategori->get_all_minggu();
		$x['pengguna']=$this->m_pengguna->get_all_pengguna();
		$this->load->view('admin/v_wartajpindah',$x);
	}

	function simpan_wartafix_jpindah(){
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');
		$minggu=$this->input->post('xminggu');
		$status=$this->input->post('xstatus');

		$this->m_warta->simpan_wartafix($tanggal,$nama,$deskripsi,$kategori,$minggu,$status);
		echo $this->session->set_flashdata('msg','berhasil');
		redirect('admin/wartafix/jpindah');
	}

	function update_wartafix_jpindah(){
		$kode=strip_tags($this->input->post('kode'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');
		$minggu=$this->input->post('xminggu');
		$status=$this->input->post('xstatus');

		$this->m_warta->update_wartafix($kode,$tanggal,$nama,$deskripsi,$kategori,$minggu,$status);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/wartafix/jpindah');
	}

	function hapus_wartafix_jpindah(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_warta->hapus_wartafix($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/wartafix/jpindah');
	}


//HAMULIATEON ----------------------------------------------------------------------------------------
	function hamuliateon(){
		$x['data']=$this->m_warta->get_all_whamuliateon();
		$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
		$x['minggu']=$this->m_kategori->get_all_minggu();
		$x['pengguna']=$this->m_pengguna->get_all_pengguna();
		$this->load->view('admin/v_wartahamuliateon',$x);
	}

	function simpan_wartafix_hamuliateon(){
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');
		$minggu=$this->input->post('xminggu');
		$status=$this->input->post('xstatus');

		$this->m_warta->simpan_wartafix($tanggal,$nama,$deskripsi,$kategori,$minggu,$status);
		echo $this->session->set_flashdata('msg','berhasil');
		redirect('admin/wartafix/hamuliateon');
	}

	function update_wartafix_hamuliateon(){
		$kode=strip_tags($this->input->post('kode'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');
		$minggu=$this->input->post('xminggu');
		$status=$this->input->post('xstatus');

		$this->m_warta->update_wartafix($kode,$tanggal,$nama,$deskripsi,$kategori,$minggu,$status);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/wartafix/hamuliateon');
	}

	function hapus_wartafix_hamuliateon(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_warta->hapus_wartafix($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/wartafix/hamuliateon');
	}

//WARTA LAIN----------------------------------------------------------------------------------------
	function wartalain(){
		$x['data']=$this->m_warta->get_all_wartalain();
		$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
		$x['minggu']=$this->m_kategori->get_all_minggu();
		$x['pengguna']=$this->m_pengguna->get_all_pengguna();
		$this->load->view('admin/v_wartalain',$x);
	}

	function simpan_wartafix_wartalain(){
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');
		$minggu=$this->input->post('xminggu');
		$status=$this->input->post('xstatus');

		$this->m_warta->simpan_wartafix($tanggal,$nama,$deskripsi,$kategori,$minggu,$status);
		echo $this->session->set_flashdata('msg','berhasil');
		redirect('admin/wartafix/wartalain');
	}

	function update_wartafix_wartalain(){
		$kode=strip_tags($this->input->post('kode'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');
		$minggu=$this->input->post('xminggu');
		$status=$this->input->post('xstatus');

		$this->m_warta->update_wartafix($kode,$tanggal,$nama,$deskripsi,$kategori,$minggu,$status);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/wartafix/wartalain');
	}

	function hapus_wartafix_wartalain(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_warta->hapus_wartafix($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/wartafix/wartalain');
	}

}