<?php
class Laporan extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_laporan');
		$this->load->model('m_lingkungan');
		$this->load->model('m_jemaat');
		$this->load->model('m_kepalakeluarga');
		$this->load->model('m_kategoriwarta');
		$this->load->model('m_warta');
		$this->load->model('m_pengguna');
		$this->load->model('m_kategori');
		$this->load->model('m_surat');
		$this->load->database();
		$this->load->library('upload');
		$this->load->library('pdflibrary');
	}


	function index(){
		$x['jemaat']=$this->m_jemaat->get_all_jemaat();
		$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['kk']=$this->m_kepalakeluarga->get_all_kk();
		$x['katusia']=$this->m_kategori->get_all_katusia();
		$x['data']=$this->m_jemaat->get_all_ama();
		$this->load->view('pendeta/v_laporan',$x);
	}

	function ina(){
		$x['jemaat']=$this->m_jemaat->get_all_jemaat();
		$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['kk']=$this->m_kepalakeluarga->get_all_kk();
		$x['katusia']=$this->m_kategori->get_all_katusia();
		$x['data']=$this->m_jemaat->get_all_ina();
		$this->load->view('pendeta/v_ina',$x);
	}

	function naposo(){
		$x['jemaat']=$this->m_jemaat->get_all_jemaat();
		$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['kk']=$this->m_kepalakeluarga->get_all_kk();
		$x['katusia']=$this->m_kategori->get_all_katusia();
		$x['data']=$this->m_jemaat->get_all_naposo();
		$this->load->view('pendeta/v_naposo',$x);
	}

	function remaja(){
		$x['jemaat']=$this->m_jemaat->get_all_jemaat();
		$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['kk']=$this->m_kepalakeluarga->get_all_kk();
		$x['katusia']=$this->m_kategori->get_all_katusia();
		$x['data']=$this->m_jemaat->get_all_remaja();
		$this->load->view('pendeta/v_remaja',$x);
	}

	function skm(){
		$x['jemaat']=$this->m_jemaat->get_all_jemaat();
		$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['kk']=$this->m_kepalakeluarga->get_all_kk();
		$x['katusia']=$this->m_kategori->get_all_katusia();
		$x['data']=$this->m_jemaat->get_all_skm();
		$this->load->view('pendeta/v_skm',$x);
	}

	function lansia(){
		$x['jemaat']=$this->m_jemaat->get_all_jemaat();
		$x['kategori']=$this->m_kategoriwarta->get_all_kwarta();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['kk']=$this->m_kepalakeluarga->get_all_kk();
		$x['katusia']=$this->m_kategori->get_all_katusia();
		$x['data']=$this->m_jemaat->get_all_lansia();
		$this->load->view('pendeta/v_lansia',$x);
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


	function laporan_ama(){
		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,5,'DAFTAR JEMAAT HKBP SIDIKALANG II',0,1,'C');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(310,15,' -- Berdasarkan Kategori AMA --',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(25,6,'ID Jemaat',1,0,'C');
		$pdf->Cell(50,6,'Nama (Goar/Marga)',1,0,'C');
		$pdf->Cell(45,6,'Tempat, Tanggal Lahir',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Tardidi',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Malua',1,0,'C');
		$pdf->Cell(20,6,'Pendidikan',1,0,'C');
		$pdf->Cell(20,6,'Pekerjaan',1,0,'C');
		$pdf->Cell(60,6,'Alamat',1,1,'C');
		$pdf->SetFont('Arial','',8);
		$dataama = $this->m_laporan->getDataAma();

		$no=1;
		foreach($dataama as $id=>$data){
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(25,6,$data['jemaat_id'],1,0,'C');
			$pdf->Cell(50,6,$data['jemaat_nama'],1,0,'C');
			$pdf->Cell(45,6,$data['jemaat_tmptlahir'].', '.$data['jemaat_tgllahir'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tgltardidi'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tglmalua'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pendidikan'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pekerjaan'],1,0,'C');
			$pdf->Cell(60,6,$data['kk_alamat'].' - Lingk.'.$data['lingkungan_nama'],1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(220, 5, '', 0, 0, 'L');
		$pdf->Cell(90, 5,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}



	function laporan_ina(){
		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,5,'DAFTAR JEMAAT HKBP SIDIKALANG II',0,1,'C');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(310,15,' -- Berdasarkan Kategori INA --',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(25,6,'ID Jemaat',1,0,'C');
		$pdf->Cell(55,6,'Nama (Goar/Marga)',1,0,'C');
		$pdf->Cell(45,6,'Tempat, Tanggal Lahir',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Tardidi',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Malua',1,0,'C');
		$pdf->Cell(20,6,'Pendidikan',1,0,'C');
		$pdf->Cell(20,6,'Pekerjaan',1,0,'C');
		$pdf->Cell(60,6,'Alamat',1,1,'C');
		$pdf->SetFont('Arial','',8);
		$dataina = $this->m_laporan->getDataIna();

		$no=1;
		foreach($dataina as $id=>$data){
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(25,6,$data['jemaat_id'],1,0,'C');
			$pdf->Cell(55,6,$data['jemaat_nama'],1,0,'C');
			$pdf->Cell(45,6,$data['jemaat_tmptlahir'].', '.$data['jemaat_tgllahir'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tgltardidi'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tglmalua'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pendidikan'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pekerjaan'],1,0,'C');
			$pdf->Cell(60,6,$data['kk_alamat'].' - Lingk.'.$data['lingkungan_nama'],1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(220, 5, '', 0, 0, 'L');
		$pdf->Cell(90, 5,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}

	function laporan_naposo(){
		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,5,'DAFTAR JEMAAT HKBP SIDIKALANG II',0,1,'C');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(310,15,' -- Berdasarkan Kategori NAPOSO --',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(25,6,'ID Jemaat',1,0,'C');
		$pdf->Cell(55,6,'Nama (Goar/Marga)',1,0,'C');
		$pdf->Cell(45,6,'Tempat, Tanggal Lahir',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Tardidi',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Malua',1,0,'C');
		$pdf->Cell(20,6,'Pendidikan',1,0,'C');
		$pdf->Cell(20,6,'Pekerjaan',1,0,'C');
		$pdf->Cell(60,6,'Alamat',1,1,'C');
		$pdf->SetFont('Arial','',8);
		$datanaposo = $this->m_laporan->getDataNaposo();

		$no=1;
		foreach($datanaposo as $id=>$data){
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(25,6,$data['jemaat_id'],1,0,'C');
			$pdf->Cell(55,6,$data['jemaat_nama'],1,0,'C');
			$pdf->Cell(45,6,$data['jemaat_tmptlahir'].', '.$data['jemaat_tgllahir'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tgltardidi'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tglmalua'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pendidikan'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pekerjaan'],1,0,'C');
			$pdf->Cell(60,6,$data['kk_alamat'].' - Lingk.'.$data['lingkungan_nama'],1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(220, 5, '', 0, 0, 'L');
		$pdf->Cell(90, 5,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}


	function laporan_remaja(){
		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,5,'DAFTAR JEMAAT HKBP SIDIKALANG II',0,1,'C');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(310,15,' -- Berdasarkan Kategori REMAJA --',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(25,6,'ID Jemaat',1,0,'C');
		$pdf->Cell(55,6,'Nama (Goar/Marga)',1,0,'C');
		$pdf->Cell(45,6,'Tempat, Tanggal Lahir',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Tardidi',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Malua',1,0,'C');
		$pdf->Cell(20,6,'Pendidikan',1,0,'C');
		$pdf->Cell(20,6,'Pekerjaan',1,0,'C');
		$pdf->Cell(60,6,'Alamat',1,1,'C');
		$pdf->SetFont('Arial','',8);
		$dataremaja = $this->m_laporan->getDataRemaja();

		$no=1;
		foreach($dataremaja as $id=>$data){
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(25,6,$data['jemaat_id'],1,0,'C');
			$pdf->Cell(55,6,$data['jemaat_nama'],1,0,'C');
			$pdf->Cell(45,6,$data['jemaat_tmptlahir'].', '.$data['jemaat_tgllahir'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tgltardidi'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tglmalua'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pendidikan'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pekerjaan'],1,0,'C');
			$pdf->Cell(60,6,$data['kk_alamat'].' - Lingk.'.$data['lingkungan_nama'],1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(220, 5, '', 0, 0, 'L');
		$pdf->Cell(90, 5,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}


	function laporan_skm(){
		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,5,'DAFTAR JEMAAT HKBP SIDIKALANG II',0,1,'C');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(310,15,' -- Berdasarkan Kategori ANAK SEKOLAH MINGGU --',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(25,6,'ID Jemaat',1,0,'C');
		$pdf->Cell(55,6,'Nama (Goar/Marga)',1,0,'C');
		$pdf->Cell(45,6,'Tempat, Tanggal Lahir',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Tardidi',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Malua',1,0,'C');
		$pdf->Cell(20,6,'Pendidikan',1,0,'C');
		$pdf->Cell(20,6,'Pekerjaan',1,0,'C');
		$pdf->Cell(60,6,'Alamat',1,1,'C');
		$pdf->SetFont('Arial','',8);
		$dataskm = $this->m_laporan->getDataSkm();

		$no=1;
		foreach($dataskm as $id=>$data){
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(25,6,$data['jemaat_id'],1,0,'C');
			$pdf->Cell(55,6,$data['jemaat_nama'],1,0,'C');
			$pdf->Cell(45,6,$data['jemaat_tmptlahir'].', '.$data['jemaat_tgllahir'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tgltardidi'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tglmalua'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pendidikan'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pekerjaan'],1,0,'C');
			$pdf->Cell(60,6,$data['kk_alamat'].' - Lingk.'.$data['lingkungan_nama'],1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(220, 5, '', 0, 0, 'L');
		$pdf->Cell(90, 5,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}


	function laporan_lansia(){
		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,5,'DAFTAR JEMAAT HKBP SIDIKALANG II',0,1,'C');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(310,15,' -- Berdasarkan Kategori LANSIA --',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(25,6,'ID Jemaat',1,0,'C');
		$pdf->Cell(55,6,'Nama (Goar/Marga)',1,0,'C');
		$pdf->Cell(45,6,'Tempat, Tanggal Lahir',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Tardidi',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Malua',1,0,'C');
		$pdf->Cell(20,6,'Pendidikan',1,0,'C');
		$pdf->Cell(20,6,'Pekerjaan',1,0,'C');
		$pdf->Cell(60,6,'Alamat',1,1,'C');
		$pdf->SetFont('Arial','',8);
		$datalansia = $this->m_laporan->getDataLansia();

		$no=1;
		foreach($datalansia as $id=>$data){
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(25,6,$data['jemaat_id'],1,0,'C');
			$pdf->Cell(55,6,$data['jemaat_nama'],1,0,'C');
			$pdf->Cell(45,6,$data['jemaat_tmptlahir'].', '.$data['jemaat_tgllahir'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tgltardidi'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tglmalua'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pendidikan'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pekerjaan'],1,0,'C');
			$pdf->Cell(60,6,$data['kk_alamat'].' - Lingk.'.$data['lingkungan_nama'],1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(220, 5, '', 0, 0, 'L');
		$pdf->Cell(90, 5,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}




	function laporan_parhalado(){
		$pdf = new FPDF('l', 'mm', 'legal');
		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",260,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(330,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(330,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(330,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'==============================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',13);
		$pdf->Cell(330,12,'DAFTAR NAMA PARHALADO TAHUN 2021',0,1,'C');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(8,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(45,6,'Nama',1,0,'C');
		$pdf->Cell(45,6,'Tempat/Tgl.Lahir',1,0,'C');
		$pdf->Cell(30,6,'Alamat',1,0,'C');
		$pdf->Cell(60,6,'Jabatan',1,0,'C');
		$pdf->Cell(20,6,'Dilantik',1,0,'C');
		$pdf->Cell(30,6,'Pendidikan',1,0,'C');
		$pdf->Cell(35,6,'Pekerjaan',1,0,'C');
		$pdf->Cell(25,6,'No.HP',1,1,'C');
		$pdf->SetFont('Arial','',8);
		$dataparhalado = $this->m_laporan->getDataParhalado();

		$no=1;
		foreach($dataparhalado as $id=>$data){
			$pdf->Cell(8,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(45,6,$data['parhalado_nama'],1,0);
			$pdf->Cell(45,6,$data['parhalado_tmp_lahir'].','.$data['parhalado_tgl_lahir'],1,0);
			$pdf->Cell(30,6,$data['parhalado_alamat'],1,0);
			$pdf->Cell(60,6,$data['parhalado_jabatan'],1,0,'');
			$pdf->Cell(20,6,$data['parhalado_dilantik'],1,0,'C');
			$pdf->Cell(30,6,$data['parhalado_pend'],1,0,'C');
			$pdf->Cell(35,6,$data['parhalado_pekerjaan'],1,0,'');
			$pdf->Cell(25,6,$data['parhalado_nohp'],1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}

	

	function laporan_dewan(){
		$pdf = new FPDF('p', 'mm', 'A4');
		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",20,3,29,25);
		$pdf->image("theme/images/HKBP.png",165,3,29,25);
		$pdf->SetFont('Arial','B',14);
		$pdf->Cell(193,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(193,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(193,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'==================================================================================',0,0);

		//Dewan Koinonia
		$pdf->Cell(190,7,'',0,1);
		$pdf->Cell(50,7,'',0,0);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(190,7,'DAFTAR NAMA DEWAN HURIA TAHUN 2021',0,1);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(30,6,'',0,0);
		$pdf->Cell(30,6,'A. DEWAN KOINONIA',0,1);
		$pdf->Cell(30,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(60,6,'Nama',1,0,'C');
		$pdf->Cell(30,6,'Dewan',1,0,'C');
		$pdf->Cell(35,6,'Jabatan',1,1,'C');
		$pdf->SetFont('Arial','',9);
		$koinonia = $this->m_laporan->getDataDewankoinonia();

		$no=1;
		foreach($koinonia as $id=>$data){
			$pdf->Cell(30,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(60,6,$data['Nama'],1,0);
			$pdf->Cell(30,6,$data['Dewan'],1,0,'C');
			$pdf->Cell(35,6,$data['Jabatan'],1,1,'C');
			$no++;
		}

		//Dewan Diakonia
		$pdf->Cell(190,7,'',0,1);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(30,6,'',0,0);
		$pdf->Cell(30,6,'B. DEWAN DIAKONIA',0,1);
		$pdf->Cell(30,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(60,6,'Nama',1,0,'C');
		$pdf->Cell(30,6,'Dewan',1,0,'C');
		$pdf->Cell(35,6,'Jabatan',1,1,'C');
		$pdf->SetFont('Arial','',9);
		$diakonia = $this->m_laporan->getDataDewandiakonia();

		$no=1;
		foreach($diakonia as $id=>$data){
			$pdf->Cell(30,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(60,6,$data['Nama'],1,0);
			$pdf->Cell(30,6,$data['Dewan'],1,0,'C');
			$pdf->Cell(35,6,$data['Jabatan'],1,1,'C');
			$no++;
		}

		//Dewan Marturia
		$pdf->Cell(190,7,'',0,1);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(30,6,'',0,0);
		$pdf->Cell(30,6,'C. DEWAN MARTURIA',0,1);
		$pdf->Cell(30,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(60,6,'Nama',1,0,'C');
		$pdf->Cell(30,6,'Dewan',1,0,'C');
		$pdf->Cell(35,6,'Jabatan',1,1,'C');
		$pdf->SetFont('Arial','',9);
		$marturia = $this->m_laporan->getDataDewanmarturia();

		$no=1;
		foreach($marturia as $id=>$data){
			$pdf->Cell(30,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(60,6,$data['Nama'],1,0);
			$pdf->Cell(30,6,$data['Dewan'],1,0,'C');
			$pdf->Cell(35,6,$data['Jabatan'],1,1,'C');
			$no++;
		}

		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(100, 10, '', 0, 0, 'R');
		$pdf->Cell(70, 10,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'R');
		$pdf->Cell(100, 10, '', 0, 0, 'R');
		$pdf->Cell(70, 10, 'Pendeta Ressort,', 0, 1, 'R');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(100, 6, '', 0, 0, 'R');
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->Cell(70, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'R');
		$pdf->Cell(115, 6, '', 0, 0, 'L');		
		$pdf ->Output();
	}


	//-------------------------------------- LAPORAN BERITA LAINNYA --------------------------------------//

	function laporan_kelahiran(){
		$tglawal		= $this->input->post('xtglawal');
		$tglakhir		= $this->input->post('xtglakhir');
		$lingkungan 	= $this->m_lingkungan->get_all_lingkungan();


		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'DAFTAR ANAK YANG LAHIR TAHUN HKBP SIDIKALANG II',0,1,'C');
		$pdf->Cell(310,7,'Mulai '.$tglawal.' Hingga '.$tglakhir,0,1,'C');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(30,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(25,6,'ID Keluarga',1,0,'C');
		$pdf->Cell(80,6,'Nama Keluarga',1,0,'C');
		$pdf->Cell(45,6,'Tanggal Lahir',1,0,'C');
		$pdf->Cell(30,6,'Jenis Kelamin',1,0,'C');
		$pdf->Cell(60,6,'Alamat',1,1,'C');
		$pdf->SetFont('Arial','',9);
		$datakelahiran = $this->m_laporan->getDataKelahiran($tglawal,$tglakhir);

		$no=1;
		foreach($datakelahiran as $id=>$data){
			$pdf->Cell(30,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(25,6,$data['kelahiran_kk_id'],1,0,'C');
			$pdf->Cell(80,6,$data['kk_username'],1,0);
			$pdf->Cell(45,6,$data['kelahiran_tgl'],1,0,'C');
			$pdf->Cell(30,6,$data['kelahiran_jenkel'],1,0,'C');
			$pdf->Cell(60,6,$data['kk_alamat'].' - Lingk.'.$data['lingkungan_nama'],1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}

	function laporan_datameninggal(){
		$tglawal		= $this->input->post('xtglawal');
		$tglakhir		= $this->input->post('xtglakhir');
		$lingkungan 	= $this->m_lingkungan->get_all_lingkungan();
		$katusia 	    = $this->m_kategori->get_all_katfilter();


		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'DAFTAR JEMAAT HKBP SIDIKALANG II YANG MENINGGAL DUNIA',0,1,'C');
		$pdf->Cell(310,7,'Mulai '.$tglawal.' Hingga '.$tglakhir,0,1,'C');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(40,6,'Tanggal',1,0,'C');
		$pdf->Cell(80,6,'Nama (Goar/Marga)',1,0,'C');
		$pdf->Cell(45,6,'Kategori Usia',1,0,'C');
		$pdf->Cell(30,6,'Tutup Usia',1,0,'C');
		$pdf->Cell(60,6,'Alamat',1,1,'C');
		$pdf->SetFont('Arial','',8);
		$datameninggal = $this->m_laporan->getDataMeninggal($tglawal,$tglakhir);

		$no=1;
		foreach($datameninggal as $id=>$data){
			$pdf->Cell(20,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(40,6,$data['meninggal_tgl'],1,0,'C');
			$pdf->Cell(80,6,$data['jemaat_nama'],1,0,'C');
			$pdf->Cell(45,6,$data['katfilter_nama'],1,0,'C');
			$pdf->Cell(30,6,$data['Umur'],1,0,'C');
			$pdf->Cell(60,6,$data['kk_alamat'].' - Lingk.'.$data['lingkungan_nama'],1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}


	function laporan_datatardidi(){
		$tglawal		= $this->input->post('xtglawal');
		$tglakhir		= $this->input->post('xtglakhir');
		$lingkungan 	= $this->m_lingkungan->get_all_lingkungan();
		$katusia 	    = $this->m_kategori->get_all_katfilter();


		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'DAFTAR ANAK JEMAAT HKBP SIDIKALANG II YANG TARDIDI',0,1,'C');
		$pdf->Cell(310,7,'Mulai '.$tglawal.' Hingga '.$tglakhir,0,1,'C');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(70,6,'Nama Anak',1,0,'C');
		$pdf->Cell(20,6,'Gender',1,0,'C');
		$pdf->Cell(70,6,'Nama Orangtua',1,0,'C');
		$pdf->Cell(55,6,'Tempat/Tanggal Lahir',1,0,'C');
		$pdf->Cell(60,6,'Alamat',1,1,'C');
		$pdf->SetFont('Arial','',8);
		$datatardidi = $this->m_laporan->getDataTardidi($tglawal,$tglakhir);

		$no=1;
		foreach($datatardidi as $id=>$data){
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(70,6,$data['tardidi_nama'],1,0,'C');
			$pdf->Cell(20,6,$data['tardidi_jenkel'],1,0,'C');
			$pdf->Cell(70,6,$data['kk_username'],1,0,'C');
			$pdf->Cell(55,6,$data['tardidi_tmptlahir'].','.$data['tardidi_tgllahir'],1,0,'C');
			$pdf->Cell(60,6,$data['kk_alamat'].' - Lingk.'.$data['lingkungan_nama'],1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}


	function laporan_datasidi(){
		$bulan		= $this->input->post('xbulan');
		$tahun		= $this->input->post('xtahun');

		$lingkungan 	= $this->m_lingkungan->get_all_lingkungan();
		$katusia 	    = $this->m_kategori->get_all_katfilter();


		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'DAFTAR HURIA NI HKBP SIDIKALANG II',0,1,'C');
		$pdf->Cell(310,7,'NAMANGHATINDANGHON HATA HAPORSEAON PADA  '.$bulan.' - '.$tahun,0,1,'C');
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(30,6,'Tanggal',1,0,'C');
		$pdf->Cell(70,6,'Nama (Goar/Marga)',1,0,'C');
		$pdf->Cell(20,6,'L/P',1,0,'C');
		$pdf->Cell(50,6,'Tempat/Tanggal Lahir',1,0,'C');
		$pdf->Cell(55,6,'Nama Orangtua',1,0,'C');
		$pdf->Cell(60,6,'Alamat',1,0,'C');
		$pdf->Cell(30,6,'Hamuliateon',1,1,'C');
		$pdf->SetFont('Arial','',9);
		$datasidi = $this->m_laporan->getDataSidi($bulan,$tahun);

		$no=1;
		foreach($datasidi as $id=>$data){
			$pdf->Cell(10,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(30,6,$data['sidi_tgl'],1,0,'C');
			$pdf->Cell(70,6,$data['jemaat_nama'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_jenkel'],1,0,'C');
			$pdf->Cell(50,6,$data['jemaat_tmptlahir'].','.$data['jemaat_tgllahir'],1,0,'C');
			$pdf->Cell(55,6,$data['kk_username'],1,0,'C');
			$pdf->Cell(60,6,$data['kk_alamat'].' - Lingk.'.$data['lingkungan_nama'],1,0,'C');
			$pdf->Cell(30,6,'Rp '.$data['sidi_ham'].',-',1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}


	function laporan_jpindah(){
		$tglawal		= $this->input->post('xtglawal');
		$tglakhir		= $this->input->post('xtglakhir');
		$lingkungan 	= $this->m_lingkungan->get_all_lingkungan();


		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'DAFTAR RUAS NA PINDAH HURIA',0,1,'C');
		$pdf->Cell(310,7,'Mulai '.$tglawal.' Hingga '.$tglakhir,0,1,'C');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(30,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(35,6,'Tanggal',1,0,'C');
		$pdf->Cell(85,6,'Nama Keluarga',1,0,'C');
		$pdf->Cell(20,6,'Jlh. Anak',1,0,'C');
		$pdf->Cell(30,6,'Lingkungan',1,0,'C');
		$pdf->Cell(100,6,'Tu Huria',1,1,'C');
		$pdf->SetFont('Arial','',9);
		$datajpindah = $this->m_laporan->getDataJpindah($tglawal,$tglakhir);

		$no=1;
		foreach($datajpindah as $id=>$data){
			$pdf->Cell(30,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(35,6,$data['kkpindah_tgl'],1,0,'C');
			$pdf->Cell(85,6,$data['kk_username'],1,0);
			$pdf->Cell(20,6,$data['kkpindah_jlhanak'],1,0,'C');
			$pdf->Cell(30,6,'Lingk.'.$data['lingkungan_nama'],1,0,'C');
		    $pdf->Cell(100,6,$data['kkpindah_huria'],1,1,'');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}


function laporan_jmenikah(){
		$tglawal		= $this->input->post('xtglawal');
		$tglakhir		= $this->input->post('xtglakhir');
		$lingkungan 	= $this->m_lingkungan->get_all_lingkungan();


		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',9);
		$pdf->Cell(310,7,'DAFTAR RUAS NI HURIA NAMARHASOHOTAN',0,1,'C');
		$pdf->Cell(310,7,'Mulai '.$tglawal.' Hingga '.$tglakhir,0,1,'C');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(1,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(50,6,'Goar/Marga',1,0,'C');
		$pdf->Cell(70,6,'Goar Ni Natoras',1,0,'C');
		$pdf->Cell(60,6,'Alamat',1,0,'C');
		$pdf->Cell(8,6,'Lk',1,0,'C');
		$pdf->Cell(50,6,'Goar Nioroan',1,0,'C');
		$pdf->Cell(50,6,'Huria',1,0,'C');
		$pdf->Cell(25,6,'Tgl.Pams',1,0,'C');
		$pdf->Cell(10,6,'Ket',1,1,'C');
		$pdf->SetFont('Arial','',9);
		$datajmenikah = $this->m_laporan->getDataJmenikah($tglawal,$tglakhir);

		$no=1;
		foreach($datajmenikah as $id=>$data){
			$pdf->Cell(1,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(50,6,$data['jemaat_nama'],1,0);
			$pdf->Cell(70,6,$data['kk_username'],1,0);
			$pdf->Cell(60,6,$data['kk_alamat'],1,0,'C');
			$pdf->Cell(8,6,$data['lingkungan_nama'],1,0,'C');
			$pdf->Cell(50,6,$data['jmenikah_namapasangan'],1,0);
			$pdf->Cell(50,6,$data['jmenikah_huria'],1,0);
			$pdf->Cell(25,6,$data['jmenikah_tglnikah'],1,0,'C');
			$pdf->Cell(10,6,$data['jemaat_jenkel'],1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}

// DATA JEMAAT_________________________________________________________________________________________________________________________
	

	
	function laporan_alljemaat(){
		$lingkungan		= $this->input->post('xlingkungan');
		$kk 	        = $this->m_kepalakeluarga->get_all_kk();
		$mlingkungan 	= $this->m_lingkungan->get_all_lingkungan();
		$mflag 			= $this->m_kategori->get_all_flag();


		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,20,'DAFTAR JEMAAT HKBP SIDIKALANG II',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(2,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(25,6,'ID Jemaat',1,0,'C');
		$pdf->Cell(50,6,'Nama (Goar/Marga)',1,0,'C');
		$pdf->Cell(45,6,'Tempat, Tanggal Lahir',1,0,'C');
		$pdf->Cell(15,6,'L/P',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Tardidi',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Malua',1,0,'C');
		$pdf->Cell(20,6,'Pendidikan',1,0,'C');
		$pdf->Cell(20,6,'Pekerjaan',1,0,'C');
		$pdf->Cell(40,6,'Status keluarga',1,0,'C');
		$pdf->Cell(55,6,'Alamat',1,1,'C');
		$pdf->SetFont('Arial','',8);
		$datajemaat = $this->m_laporan->getDataJemaat($lingkungan);

		$no=1;
		foreach($datajemaat as $id=>$data){
			$pdf->Cell(2,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(25,6,$data['jemaat_id'],1,0,'C');
			$pdf->Cell(50,6,$data['jemaat_nama'],1,0,'C');
			$pdf->Cell(45,6,$data['jemaat_tmptlahir'].', '.$data['jemaat_tgllahir'],1,0,'C');
			$pdf->Cell(15,6,$data['jemaat_jenkel'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tgltardidi'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tglmalua'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pendidikan'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pekerjaan'],1,0,'C');
			$pdf->Cell(40,6,$data['jemaat_statuskel'],1,0,'C');
			$pdf->Cell(55,6,$data['kk_alamat'].' - Lingk.'.$data['lingkungan_nama'],1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(220, 5, '', 0, 0, 'L');
		$pdf->Cell(90, 5,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}

	function laporan_jemaat(){
		$lingkungan		= $this->input->post('xlingkungan');
		$kk 	        = $this->m_kepalakeluarga->get_all_kk();
		$mlingkungan 	= $this->m_lingkungan->get_all_lingkungan();
		$mflag 			= $this->m_kategori->get_all_flag();


		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'DAFTAR JEMAAT HKBP SIDIKALANG II',0,1,'C');
		$pdf->Cell(310,7,'Pada Lingkungan - '.$lingkungan,0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(2,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(25,6,'ID Jemaat',1,0,'C');
		$pdf->Cell(50,6,'Nama (Goar/Marga)',1,0,'C');
		$pdf->Cell(45,6,'Tempat, Tanggal Lahir',1,0,'C');
		$pdf->Cell(15,6,'L/P',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Tardidi',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Malua',1,0,'C');
		$pdf->Cell(20,6,'Pendidikan',1,0,'C');
		$pdf->Cell(20,6,'Pekerjaan',1,0,'C');
		$pdf->Cell(40,6,'Status keluarga',1,0,'C');
		$pdf->Cell(55,6,'Alamat',1,1,'C');
		$pdf->SetFont('Arial','',8);
		$datafilter = $this->m_laporan->getDataFilter($lingkungan);

		$no=1;
		foreach($datafilter as $id=>$data){
			$pdf->Cell(2,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(25,6,$data['jemaat_id'],1,0,'C');
			$pdf->Cell(50,6,$data['jemaat_nama'],1,0,'C');
			$pdf->Cell(45,6,$data['jemaat_tmptlahir'].', '.$data['jemaat_tgllahir'],1,0,'C');
			$pdf->Cell(15,6,$data['jemaat_jenkel'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tgltardidi'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tglmalua'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pendidikan'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pekerjaan'],1,0,'C');
			$pdf->Cell(40,6,$data['jemaat_statuskel'],1,0,'C');
			$pdf->Cell(55,6,$data['kk_alamat'].' - Lingk.'.$data['lingkungan_nama'],1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(220, 5, '', 0, 0, 'L');
		$pdf->Cell(90, 5,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}

	function laporan_kk(){
		$filter_kk		= $this->input->post('xkk');


		$pdf = new FPDF('L', 'mm', 'legal');

		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",60,3,29,25);
		$pdf->image("theme/images/HKBP.png",240,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(310,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(310,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(310,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(200,7,'=====================================================================================================================================',0,0);
		$pdf->Cell(190,7,'',0,1);
		$pdf->Cell(190,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',14);
		$pdf->Cell(310,6,'DAFTAR ANGGOTA KELUARGA ',0,1,'C');
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(630,12,'ID Keluarga : '.$filter_kk,0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(2,6,'',0,0);
		$pdf->Cell(8,6,'No.',1,0,'C');
		$pdf->Cell(25,6,'ID Jemaat',1,0,'C');
		$pdf->Cell(50,6,'Nama (Goar/Marga)',1,0,'C');
		$pdf->Cell(45,6,'Tempat, Tanggal Lahir',1,0,'C');
		$pdf->Cell(15,6,'L/P',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Tardidi',1,0,'C');
		$pdf->Cell(28,6,'Tanggal Malua',1,0,'C');
		$pdf->Cell(20,6,'Pendidikan',1,0,'C');
		$pdf->Cell(20,6,'Pekerjaan',1,0,'C');
		$pdf->Cell(40,6,'Status keluarga',1,0,'C');
		$pdf->Cell(55,6,'Alamat',1,1,'C');
		$pdf->SetFont('Arial','',8);
		$datafilterkk = $this->m_laporan->getDataFilterkk($filter_kk);

		$no=1;
		foreach($datafilterkk as $id=>$data){
			$pdf->Cell(2,6,'',0,0);
			$pdf->Cell(8,6,$no,1,0,'C');
			$pdf->Cell(25,6,$data['jemaat_id'],1,0,'C');
			$pdf->Cell(50,6,$data['jemaat_nama'],1,0,'C');
			$pdf->Cell(45,6,$data['jemaat_tmptlahir'].', '.$data['jemaat_tgllahir'],1,0,'C');
			$pdf->Cell(15,6,$data['jemaat_jenkel'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tgltardidi'],1,0,'C');
			$pdf->Cell(28,6,$data['jemaat_tglmalua'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pendidikan'],1,0,'C');
			$pdf->Cell(20,6,$data['jemaat_pekerjaan'],1,0,'C');
			$pdf->Cell(40,6,$data['jemaat_statuskel'],1,0,'C');
			$pdf->Cell(55,6,$data['kk_alamat'].' - Lingk.'.$data['lingkungan_nama'],1,1,'C');
			$no++;
		}
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(15,5,'',0,1);
		$pdf->Cell(220, 5, '', 0, 0, 'L');
		$pdf->Cell(90, 5,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(220, 10, '', 0, 0, 'L');
		$pdf->Cell(90, 10, 'Pendeta Ressort,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(220, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(90, 6,'Pdt.Edison MB Nababan,S.Th', 0, 1, 'L');
		$pdf->Cell(115, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	
	}


	



	
}