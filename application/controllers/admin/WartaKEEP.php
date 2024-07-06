<?php
class Warta extends CI_Controller{
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
		$x['datawartain']=$this->m_warta->get_all_wartain();
		$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
		$x['pengguna']=$this->m_pengguna->get_all_pengguna();
		$x['minggu']=$this->m_kategori->get_all_minggu();
		$this->load->view('admin/v_warta',$x);
	}

	// public function contoh() {
	// 	$data['title'] = 'Laporan Data Barang Masuk';
	// 	$keyword1 = $this->input->get('keyword1', true);
	// 	$keyword2 = $this->input->get('keyword2', true);
	// 	$data['masuk'] = $this->Laporan_model->data_barang_masuk(array($keyword1,$keyword2));
	// 	$this->load->view('tema_admin/header', $data);
	// 	$this->load->view('laporan/barang_masuk', $data);
	// 	$this->load->view('tema_admin/footer');
	// }

	public function filtertgl_warta() {
		$tglawal		= $this->input->post('xtglawal',TRUE);
		$tglakhir		= $this->input->post('xtglawal',TRUE);
	
		$data['filter'] = $this->m_warta->get_data(array($tglawal,$tglakhir));
		$this->load->view('admin/v_wartafilter',$data);
	}




	// function filtertgl_warta(){
	// 	$tglawal		= $this->input->post('xtglawal');
	// 	$tglakhir		= $this->input->post('xtglakhir');

	// 	$x['filter']=$this->m_warta->getFilter_warta($tglawal,$tglakhir);

	// 	$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
	// 	$x['pengguna']=$this->m_pengguna->get_all_pengguna();
	// 	$x['minggu']=$this->m_kategori->get_all_minggu();
	// 	$this->load->view('admin/v_wartafilter',$x);
	// }

	
	function simpan_warta(){
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=strip_tags($this->input->post('xnama'));
		$deskripsi=strip_tags($this->input->post('xisi'));
		$kategori=strip_tags($this->input->post('xkategori'));
		
		$this->m_warta->simpan_wartafix($tanggal,$nama,$deskripsi,$kategori);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/warta/wartafix');
	}

	function simpan_wartafix(){
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');

		$this->m_warta->simpan_wartafix($tanggal,$nama,$deskripsi,$kategori);
		echo $this->session->set_flashdata('msg','berhasil');
		redirect('admin/warta');
	}

	function update_wartafix(){
		$kode=strip_tags($this->input->post('kode'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=$this->input->post('xnama');
		$deskripsi=$this->input->post('xisi');
		$kategori=$this->input->post('xkategori');
		
		$this->m_warta->update_wartafix($kode,$tanggal,$nama,$deskripsi,$kategori);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/warta/wartafix');
	}
	function hapus_wartafix(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_warta->hapus_wartafix($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/warta/wartafix');
	}

	function hapus_wartain(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_warta->hapus_wartain($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/warta');
	}

}