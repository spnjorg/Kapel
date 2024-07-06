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
		$this->load->view('admin/v_jemaatfix',$x);
	}

	function sinode(){
		$x['flag']=$this->m_kategori->get_all_flag();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_jemaat->get_all_sinode();
		$this->load->view('admin/v_sinode',$x);
	}

		
	function simpan_jemaat(){
		$nama=strip_tags($this->input->post('xnamajemaat'));
		$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
		$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tardidi=strip_tags($this->input->post('xtgl_tardidi'));
		$malua=strip_tags($this->input->post('xtgl_malua'));
		$nohp=strip_tags($this->input->post('xnohp'));
		$pendidikan=strip_tags($this->input->post('xpendidikan'));
		$pekerjaan=strip_tags($this->input->post('xpekerjaan'));
		$statuskk=strip_tags($this->input->post('xstatuskk'));
		$nourutkk=strip_tags($this->input->post('xnourutkk'));

		$this->m_jemaat->simpan_jemaat($nama,$tmp_lahir,$tgl_lahir,$jenkel,$tardidi,$malua,$nohp,$pendidikan,$pekerjaan,$statuskk,$nourutkk);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/jemaat');
	}
	
	function update_jemaat(){
		$kode=strip_tags($this->input->post('kode'));
		$nama=strip_tags($this->input->post('xnamajemaat'));
		$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
		$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tardidi=strip_tags($this->input->post('xtgl_tardidi'));
		$malua=strip_tags($this->input->post('xtgl_malua'));
		$nohp=strip_tags($this->input->post('xnohp'));
		$pendidikan=strip_tags($this->input->post('xpendidikan'));
		$pekerjaan=strip_tags($this->input->post('xpekerjaan'));
		$statuskk=strip_tags($this->input->post('xstatuskk'));
		$nourutkk=strip_tags($this->input->post('xnourutkk'));

		$this->m_jemaat->update_jemaat($kode,$nama,$tmp_lahir,$tgl_lahir,$jenkel,$tardidi,$malua,$nohp,$pendidikan,$pekerjaan,$statuskk,$nourutkk);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/jemaat');
	}

	function hapus_jemaat(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_jemaat->hapus_jemaat($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/jemaat');
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
		redirect('admin/jemaat/sinode');
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
		redirect('admin/jemaat/sinode');
	}

	function hapus_sinode(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_jemaat->hapus_sinode($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/jemaat/sinode');
	}


}