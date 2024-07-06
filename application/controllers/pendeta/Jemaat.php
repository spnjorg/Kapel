<?php
class Jemaat extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_jemaat');
		$this->load->model('m_lingkungan');
		$this->load->model('m_kategori');
		$this->load->model('m_kepalakeluarga');
		$this->load->library('upload');
	}


	function index(){
		$x['kepalakeluarga']=$this->m_kepalakeluarga->get_all_kk();
		$x['flag']=$this->m_kategori->get_all_flag();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_jemaat->get_all_jemaat();
		$this->load->view('pendeta/v_jemaatfix',$x);
	}

	function sinode(){
		$x['flag']=$this->m_kategori->get_all_flag();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_jemaat->get_all_sinode();
		$this->load->view('pendeta/v_sinode',$x);
	}

		
	function simpan_jemaat(){
		$id=strip_tags($this->input->post('xid'));
		$nokk=strip_tags($this->input->post('xnokk'));
		$nama=strip_tags($this->input->post('xnama'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmptlahir=strip_tags($this->input->post('xtmptlahir'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tgltardidi=strip_tags($this->input->post('xtgltardidi'));
		$tglmalua=strip_tags($this->input->post('xtglmalua'));
		$pendidikan=strip_tags($this->input->post('xpendidikan'));
		$pekerjaan=strip_tags($this->input->post('xpekerjaan'));
		$statuskk=strip_tags($this->input->post('xstatuskk'));
		$notelp=strip_tags($this->input->post('xnotelp'));
		$nourutkk=strip_tags($this->input->post('xnourutkk'));
		$flag=strip_tags($this->input->post('xflag'));

		$this->m_jemaat->simpan_jemaat($id,$nokk,$nama,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglmalua,$pendidikan,$pekerjaan,$statuskk,$notelp,$nourutkk,$flag);
		echo $this->session->set_flashdata('msg','success');
		redirect('pendeta/jemaat');
	}
	
	function update_jemaat(){
		$kode=strip_tags($this->input->post('kode'));
		$nokk=strip_tags($this->input->post('xnokk'));
		$nama=strip_tags($this->input->post('xnama'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmptlahir=strip_tags($this->input->post('xtmptlahir'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tgltardidi=strip_tags($this->input->post('xtgltardidi'));
		$tglmalua=strip_tags($this->input->post('xtglmalua'));
		$pendidikan=strip_tags($this->input->post('xpendidikan'));
		$pekerjaan=strip_tags($this->input->post('xpekerjaan'));
		$statuskk=strip_tags($this->input->post('xstatuskk'));
		$notelp=strip_tags($this->input->post('xnotelp'));
		$nourutkk=strip_tags($this->input->post('xnourutkk'));
		$flag=strip_tags($this->input->post('xflag'));

		$this->m_jemaat->update_jemaat($kode,$nokk,$nama,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglmalua,$pendidikan,$pekerjaan,$statuskk,$notelp,$nourutkk,$flag);
		echo $this->session->set_flashdata('msg','info');
		redirect('pendeta/jemaat');
	}

	function hapus_jemaat(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_jemaat->hapus_jemaat($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('pendeta/jemaat');
	}

// SIMPAN DATA NEW (SINODE) _____________________________________________________________________________________________________________ 

	function simpan_sinode(){
		$id=strip_tags($this->input->post('xid'));
		$nokk=strip_tags($this->input->post('xnokk'));
		$nama=strip_tags($this->input->post('xnama'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmptlahir=strip_tags($this->input->post('xtmptlahir'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tgltardidi=strip_tags($this->input->post('xtgltardidi'));
		$tglmalua=strip_tags($this->input->post('xtglmalua'));
		$pendidikan=strip_tags($this->input->post('xpendidikan'));
		$pekerjaan=strip_tags($this->input->post('xpekerjaan'));
		$statuskk=strip_tags($this->input->post('xstatuskk'));
		$notelp=strip_tags($this->input->post('xnotelp'));
		$nourutkk=strip_tags($this->input->post('xnourutkk'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$alamat=strip_tags($this->input->post('xalamat'));
		$flag=strip_tags($this->input->post('xflag'));

		$this->m_jemaat->simpan_sinode($id,$nokk,$nama,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglmalua,$pendidikan,$pekerjaan,$statuskk,$notelp,$nourutkk,$lingkungan,$alamat,$flag);
		echo $this->session->set_flashdata('msg','success');
		redirect('pendeta/jemaat/sinode');
	}

	function update_sinode(){
		$kode=strip_tags($this->input->post('xid'));
		$nokk=strip_tags($this->input->post('xnokk'));
		$nama=strip_tags($this->input->post('xnama'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmptlahir=strip_tags($this->input->post('xtmptlahir'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tgltardidi=strip_tags($this->input->post('xtgltardidi'));
		$tglmalua=strip_tags($this->input->post('xtglmalua'));
		$pendidikan=strip_tags($this->input->post('xpendidikan'));
		$pekerjaan=strip_tags($this->input->post('xpekerjaan'));
		$statuskk=strip_tags($this->input->post('xstatuskk'));
		$notelp=strip_tags($this->input->post('xnotelp'));
		$nourutkk=strip_tags($this->input->post('xnourutkk'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$alamat=strip_tags($this->input->post('xalamat'));
		$flag=strip_tags($this->input->post('xflag'));

		$this->m_jemaat->update_sinode($kode,$nokk,$nama,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglmalua,$pendidikan,$pekerjaan,$statuskk,$notelp,$nourutkk,$lingkungan,$alamat,$flag);
		echo $this->session->set_flashdata('msg','info');
		redirect('pendeta/jemaat/sinode');
	}

	function hapus_sinode(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_jemaat->hapus_sinode($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('pendeta/jemaat/sinode');
	}


}