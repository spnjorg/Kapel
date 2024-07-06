<?php
class Surat extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->load->model('m_surat');
		$this->load->model('m_kategori');
		$this->load->model('m_berita');
		$this->load->model('m_lingkungan');
		$this->load->database();
		$this->load->library('upload');
		$this->load->library('pdflibrary');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['katsurat']=$this->m_kategori->get_all_katsurat();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_all_sklahir();
		$this->load->view('parhaladoo/v_skkelahiran',$x);
	}

	


	public function tgl_indo($tanggal)
		{
			$bulan = array(
				1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
			$pecahkan = explode('-', $tanggal);

			return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
		}

	//---------------------------------------- SURAT KETERANGAN KELAHIRAN ------------------------------------------------//

	function sk_lahir(){
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_all_sklahir();
		$this->load->view('parhaladoo/v_skkelahiran',$x);
	}

	function simpan_sklahir(){
		$username=strip_tags($this->input->post('xusername'));
		$surat_nama="";
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmptlahir="";
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tgltardidi="";
		$tglsidi="";
		$alamat=strip_tags($this->input->post('xalamat'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=2;
		$status=strip_tags($this->input->post('xstatus'));		

		$this->m_surat->simpan_sklahir($username,$surat_nama,$namaayah,$namaibu,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$alamat,$lingkungan,$katsurat,$status);
		echo $this->session->set_flashdata('msg','success');
		redirect('parhaladoo/surat');
	}


	function update_sklahir(){
		$kode=strip_tags($this->input->post('kode'));
		$username=strip_tags($this->input->post('xusername'));
		$surat_nama="";
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmptlahir="";
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tgltardidi="";
		$tglsidi="";
		$alamat=strip_tags($this->input->post('xalamat'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=2;
		$status=strip_tags($this->input->post('xstatus'));

		$this->m_surat->update_sklahir($kode,$username,$surat_nama,$namaayah,$namaibu,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$alamat,$lingkungan,$katsurat,$status);
		echo $this->session->set_flashdata('msg','info');
		redirect('parhaladoo/surat/sk_lahir');
	}

		function hapus_sklahir(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_surat->hapus_sklahir($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('parhaladoo/surat/sk_lahir');
	}

	//SIMPAN SK KELAHIRAN DARI WEB _____________________________________________________________________________________________

	function simpan_skkelahiran(){
		$username=strip_tags($this->input->post('xusername'));
		$surat_nama="";
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmptlahir="";
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tgltardidi="";
		$tglsidi="";
		$alamat=strip_tags($this->input->post('xalamat'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=2;
		$status=2;		

		$this->m_surat->simpan_sklahir($username,$surat_nama,$namaayah,$namaibu,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$alamat,$lingkungan,$katsurat,$status);
		echo $this->session->set_flashdata('msg','success');
		redirect('surat/surat_kelahiran');

	}

	//---------------------------------------- END SURAT KETERANGAN KELAHIRAN ------------------------------------------------//
	

	//---------------------------------------- SURAT KETERANGAN TARDIDI ------------------------------------------------//
	function tardidi(){
		$x['katsurat']=$this->m_kategori->get_all_katsurat();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_all_sktardidi();
		$this->load->view('parhaladoo/v_sktardidi',$x);
	}


    function simpan_sktardidi(){
		$username=strip_tags($this->input->post('xusername'));
		$surat_nama=strip_tags($this->input->post('xnama'));
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmptlahir=strip_tags($this->input->post('xtmptlahir'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tgltardidi="2021-12-26";
		$tglsidi="";
		$alamat=strip_tags($this->input->post('xalamat'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=1;
		$status=strip_tags($this->input->post('xstatus'));		


		$this->m_surat->simpan_sktardidi($username,$surat_nama,$namaayah,$namaibu,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$alamat,$lingkungan,$katsurat,$status);
		echo $this->session->set_flashdata('msg','success');
		redirect('parhaladoo/surat/tardidi');
	}


	function update_sktardidi(){
		$kode=strip_tags($this->input->post('kode'));
		$username=strip_tags($this->input->post('xusername'));
		$surat_nama=strip_tags($this->input->post('xnama'));
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmptlahir=strip_tags($this->input->post('xtmptlahir'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tgltardidi="2021-12-26";
		$tglsidi="";
		$alamat=strip_tags($this->input->post('xalamat'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=1;
		$status=strip_tags($this->input->post('xstatus'));

		$this->m_surat->update_sktardidi($kode,$username,$surat_nama,$namaayah,$namaibu,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$alamat,$lingkungan,$katsurat,$status);
		echo $this->session->set_flashdata('msg','info');
		redirect('parhaladoo/surat/tardidi');
	}

		function hapus_sktardidi(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_surat->hapus_sktardidi($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('parhaladoo/surat/tardidi');
	}

	//SIMPAN SK TARDIDI DARI WEB _____________________________________________________________________________________________
	function surat_tardidi(){
		$x['katsurat']=$this->m_kategori->get_all_katsurat();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_all_sktardidi();
		$this->load->view('parhaladoo/v_sktardidi',$x);
	}

	function simpan_stardidi(){
		$username=strip_tags($this->input->post('xusername'));
		$surat_nama=strip_tags($this->input->post('xnama'));
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmptlahir=strip_tags($this->input->post('xtmptlahir'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tgltardidi="2021-12-26";
		$tglsidi="";
		$alamat=strip_tags($this->input->post('xalamat'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=1;
		$status=2;		

		$this->m_surat->simpan_sktardidi($username,$surat_nama,$namaayah,$namaibu,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$alamat,$lingkungan,$katsurat,$status);
		echo $this->session->set_flashdata('msg','success');
		redirect('surat/surat_tardidi');

	}


	//---------------------------------------- END SURAT KETERANGAN TARDIDI ------------------------------------------------//

	//---------------------------------------- SURAT KETERANGAN SIDI ------------------------------------------------//
	function sidi(){
		$x['katsurat']=$this->m_kategori->get_all_katsurat();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_all_sksidi();
		$this->load->view('parhaladoo/v_sksidi',$x);
	}

	function simpan_sksidi(){
		$username=strip_tags($this->input->post('xusername'));
		$surat_nama=strip_tags($this->input->post('xnama'));
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmptlahir=strip_tags($this->input->post('xtmptlahir'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tgltardidi=strip_tags($this->input->post('xtgltardidi'));
		$tglsidi="";
		$alamat=strip_tags($this->input->post('xalamat'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=6;
		$status=strip_tags($this->input->post('xstatus'));		


		$this->m_surat->simpan_sksidi($username,$surat_nama,$namaayah,$namaibu,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$alamat,$lingkungan,$katsurat,$status);
		echo $this->session->set_flashdata('msg','success');
		redirect('parhaladoo/surat/sidi');
	}


	function update_sksidi(){
		$kode=strip_tags($this->input->post('kode'));
		$username=strip_tags($this->input->post('xusername'));
		$surat_nama=strip_tags($this->input->post('xnama'));
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmptlahir=strip_tags($this->input->post('xtmptlahir'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tgltardidi=strip_tags($this->input->post('xtgltardidi'));
		$tglsidi="";
		$alamat=strip_tags($this->input->post('xalamat'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=6;
		$status=strip_tags($this->input->post('xstatus'));

		$this->m_surat->update_sksidi($kode,$username,$surat_nama,$namaayah,$namaibu,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$alamat,$lingkungan,$katsurat,$status);
		echo $this->session->set_flashdata('msg','info');
		redirect('parhaladoo/surat/sidi');
	}

		function hapus_sksidi(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_surat->hapus_sksidi($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('parhaladoo/surat/sidi');
	}

	//SIMPAN SK SIDI DARI WEB _____________________________________________________________________________________________
	function surat_sidi(){
		$x['katsurat']=$this->m_kategori->get_all_katsurat();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_all_sksidi();
		$this->load->view('parhaladoo/v_sktardidi',$x);
	}

	function simpan_ssidi(){
		$username=strip_tags($this->input->post('xusername'));
		$surat_nama=strip_tags($this->input->post('xnama'));
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$tmptlahir=strip_tags($this->input->post('xtmptlahir'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tgltardidi=strip_tags($this->input->post('xtgltardidi'));
		$tglsidi="";
		$alamat=strip_tags($this->input->post('xalamat'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=6;
		$status=2;		

		$this->m_surat->simpan_sktardidi($username,$surat_nama,$namaayah,$namaibu,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$alamat,$lingkungan,$katsurat,$status);
		echo $this->session->set_flashdata('msg','success');
		redirect('surat/surat_sidi');

	}

	//---------------------------------------- END SURAT KETERANGAN SIDI ------------------------------------------------//

	//---------------------------------------- SURAT KETERANGAN PINDAH HURIA ------------------------------------------------//
	function jpindah(){
		$x['katsurat']=$this->m_kategori->get_all_katsurat();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_all_skjpindah();
		$this->load->view('parhaladoo/v_skjpindah',$x);
	}

	function sk_jpindah(){
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_all_skjpindah();
		$this->load->view('parhaladoo/v_skjpindah',$x);
	}

	function simpan_skjpindah(){
		$username=strip_tags($this->input->post('xusername'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama="";
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jlhanak=strip_tags($this->input->post('xjlhanak'));
		$namapasangan="";
		$huria="";
		$tujuanhuria=strip_tags($this->input->post('xtujuan'));
		$tglnikah="";
		$tgllahir="";
		$tglsidi="";
		$tglbaptis="";
		$alamat="";
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=4;
		$ketjk=0;
		$ket="";
		$status=strip_tags($this->input->post('xstatus'));		

		$this->m_surat->simpan_skjpindah($username,$tanggal,$nama,$namaayah,$namaibu,$jlhanak,$namapasangan,$huria,$tujuanhuria,$tglnikah,$tgllahir,$tglsidi,$tglbaptis,$alamat,$lingkungan,$katsurat,$ketjk,$ket,$status);
		echo $this->session->set_flashdata('msg','success');
		redirect('parhaladoo/surat/jpindah');
	}

	function update_skjpindah(){
		$kode=strip_tags($this->input->post('kode'));
		$username=strip_tags($this->input->post('xusername'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama="";
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jlhanak=strip_tags($this->input->post('xjlhanak'));
		$namapasangan="";
		$huria="";
		$tujuanhuria=strip_tags($this->input->post('xtujuan'));
		$tglnikah="";
		$tgllahir="";
		$tglsidi="";
		$tglbaptis="";
		$alamat="";
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=4;
		$ketjk=0;
		$ket="";
		$status=strip_tags($this->input->post('xstatus'));	

		$this->m_surat->update_skjpindah($kode,$username,$tanggal,$nama,$namaayah,$namaibu,$jlhanak,$namapasangan,$huria,$tujuanhuria,$tglnikah,$tgllahir,$tglsidi,$tglbaptis,$alamat,$lingkungan,$katsurat,$ketjk,$ket,$status);
		echo $this->session->set_flashdata('msg','info');
		redirect('parhaladoo/surat/jpindah');
	}

		function hapus_skjpindah(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_surat->hapus_skjpindah($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('parhaladoo/surat/jpindah');
	}

	//SIMPAN SK PINDAH JEMAAT DARI WEB _____________________________________________________________________________________________
	function surat_jpindah(){
		$x['katsurat']=$this->m_kategori->get_all_katsurat();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_all_skjpindah();
		$this->load->view('parhaladoo/v_skjpindah',$x);
	}

	function simpan_sjpindah(){
		$username=strip_tags($this->input->post('xusername'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama="";
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jlhanak=strip_tags($this->input->post('xjlhanak'));
		$namapasangan="";
		$huria="";
		$tujuanhuria=strip_tags($this->input->post('xtujuanhuria'));
		$tglnikah="";
		$tgllahir="";
		$tglsidi="";
		$tglbaptis="";
		$alamat="";
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=4;
		$ketjk=0;
		$ket="";
		$status=2;		

		$this->m_surat->simpan_skjpindah($username,$tanggal,$nama,$namaayah,$namaibu,$jlhanak,$namapasangan,$huria,$tujuanhuria,$tglnikah,$tgllahir,$tglsidi,$tglbaptis,$alamat,$lingkungan,$katsurat,$ketjk,$ket,$status);
		echo $this->session->set_flashdata('msg','success');
		redirect('surat/surat_jpindah');

	}

	//---------------------------------------- END SURAT KETERANGAN PINDAH HURIA ------------------------------------------------//

	//---------------------------------------- SURAT KETERANGAN JEMAAT HENDAK MENIKAH ------------------------------------------------//

	function jmenikah(){
		$x['katsurat']=$this->m_kategori->get_all_katsurat();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_all_skjmenikah();
		$this->load->view('parhaladoo/v_skjmenikah',$x);
	}

	function simpan_skjmenikah(){
		$username=strip_tags($this->input->post('xusername'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=strip_tags($this->input->post('xnama'));
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jlhanak="";
		$namapasangan=strip_tags($this->input->post('xnamapasangan'));
		$huria=strip_tags($this->input->post('xhuria'));
		$tujuanhuria="";
		$tglnikah=strip_tags($this->input->post('xtglnikah'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tglsidi=strip_tags($this->input->post('xtglsidi'));
		$tglbaptis=strip_tags($this->input->post('xtglbaptis'));
		$alamat=strip_tags($this->input->post('xalamat'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=5;
		$ketjk=strip_tags($this->input->post('xjenkel'));
		$ket="";
		$status=strip_tags($this->input->post('xstatus'));		

		$this->m_surat->simpan_skjmenikah($username,$tanggal,$nama,$namaayah,$namaibu,$jlhanak,$namapasangan,$huria,$tujuanhuria,$tglnikah,$tgllahir,$tglsidi,$tglbaptis,$alamat,$lingkungan,$katsurat,$ketjk,$ket,$status);
		echo $this->session->set_flashdata('msg','success');
		redirect('parhaladoo/surat/jmenikah');
	}

	function update_skjmenikah(){
		$kode=strip_tags($this->input->post('kode'));
		$username=strip_tags($this->input->post('xusername'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=strip_tags($this->input->post('xnama'));
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jlhanak="";
		$namapasangan=strip_tags($this->input->post('xnamapasangan'));
		$huria=strip_tags($this->input->post('xhuria'));
		$tujuanhuria="";
		$tglnikah=strip_tags($this->input->post('xtglnikah'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tglsidi=strip_tags($this->input->post('xtglsidi'));
		$tglbaptis=strip_tags($this->input->post('xtglbaptis'));
		$alamat=strip_tags($this->input->post('xalamat'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=5;
		$ketjk=strip_tags($this->input->post('xjenkel'));
		$ket="";
		$status=strip_tags($this->input->post('xstatus'));	

		$this->m_surat->update_skjmenikah($kode,$username,$tanggal,$nama,$namaayah,$namaibu,$jlhanak,$namapasangan,$huria,$tujuanhuria,$tglnikah,$tgllahir,$tglsidi,$tglbaptis,$alamat,$lingkungan,$katsurat,$ketjk,$ket,$status);
		echo $this->session->set_flashdata('msg','info');
		redirect('parhaladoo/surat/jmenikah');
	}

		function hapus_skjmenikah(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_surat->hapus_skjmenikah($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('parhaladoo/surat/jmenikah');
	}

	//SIMPAN SK JEMAAT MENIKAH DARI WEB _____________________________________________________________________________________________

	function surat_jmenikah(){
		$x['katsurat']=$this->m_kategori->get_all_katsurat();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_all_skjmenikah();
		$this->load->view('parhaladoo/v_skjmenikah',$x);
	}

	function simpan_smenikah(){
		$username=strip_tags($this->input->post('xusername'));
		$tanggal=strip_tags($this->input->post('xtanggal'));
		$nama=strip_tags($this->input->post('xnama'));
		$namaayah=strip_tags($this->input->post('xnamaayah'));
		$namaibu=strip_tags($this->input->post('xnamaibu'));
		$jlhanak="";
		$namapasangan=strip_tags($this->input->post('xnamapasangan'));
		$huria=strip_tags($this->input->post('xhuria'));
		$tujuanhuria="";
		$tglnikah=strip_tags($this->input->post('xtglnikah'));
		$tgllahir=strip_tags($this->input->post('xtgllahir'));
		$tglsidi=strip_tags($this->input->post('xtglsidi'));
		$tglbaptis=strip_tags($this->input->post('xtglbaptis'));
		$alamat=strip_tags($this->input->post('xalamat'));
		$lingkungan=strip_tags($this->input->post('xlingkungan'));
		$katsurat=5;
		$ketjk=strip_tags($this->input->post('xjenkel'));
		$ket="";
		$status=2;		

		$this->m_surat->simpan_skjmenikah($username,$tanggal,$nama,$namaayah,$namaibu,$jlhanak,$namapasangan,$huria,$tujuanhuria,$tglnikah,$tgllahir,$tglsidi,$tglbaptis,$alamat,$lingkungan,$katsurat,$ketjk,$ket,$status);
		echo $this->session->set_flashdata('msg','success');
		redirect('surat/surat_jmenikah');

	}




	//------------------------------------- END SURAT KETERANGAN JEMAAT HENDAK MENIKAH --------------------------------------------//







	


	
}
