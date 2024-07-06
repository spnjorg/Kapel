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
		$x['data']=$this->m_surat->get_all_surat();
		$this->load->view('user/v_surat',$x);
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

	//---------------------------------------- SURAT KELAHIRAN ------------------------------------------------//

	function surat_kelahiran(){
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_cek_suratkelahiran();
		$this->load->view('user/v_suratlahir',$x);
	}

	function cek_suratlahir(){
		$username	= $this->input->post('xusername');

		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->cek_suratlahir($username);
		$this->load->view('user/v_suratlahir',$x);
	}


	function get_suratkelahiran(){
		$id=$this->uri->segment(3);
		$get_db=$this->m_surat->get_suratlahir_byid($id);

		$pdf = new FPDF('P', 'mm', 'A4');
		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",13,3,29,25);
		$pdf->image("theme/images/HKBP.png",170,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(200,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(200,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(200,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(180,7,'=====================================================================================',0,0);
		$pdf->Cell(200,7,'',0,1);
		$pdf->Cell(200,7,'',0,1);
		$pdf->Cell(200,7,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',14);
		$pdf->Cell(190,7,'NA SORANG',0,1,'C');
		$pdf->Cell(200,7,'',0,1);
		$pdf->Cell(200,7,'',0,1);
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(10,6,'',0,0);
		$suratkelahiran = $this->m_surat->getSuratlahir($id);

		foreach($suratkelahiran as $id=>$data){
		$pdf->SetFont('Arial','',12);

		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(20,6,'Na di Ari                           :',0,0,'');
		$pdf->Cell(32,6,'',0,0);
		$pdf->Cell(40,6,$data['surat_tgllahir'],0,1,'');

		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'Tanggal                            :',0,0,'');
		$pdf->Cell(32,6,'',0,0);
		$pdf->Cell(40,6,$data['surat_tgllahir'],0,1,'');

		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'Dibasa-basa Debata do Sada dakdanak  :',0,0,'');
		$pdf->Cell(62,6,'',0,0);
		$pdf->Cell(62,6,$data['surat_jenkel'],0,1,'');

		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'di Keluarga ni Halak        :',0,0,'');
		$pdf->Cell(62,6,'',0,0);
		$pdf->Cell(62,6,'',0,1,'');

		$pdf->Cell(35,6,'',0,0);
		$pdf->Cell(20,6,'Keluarga               :',0,0,'');
		$pdf->Cell(18,6,'',0,0);
		$pdf->Cell(18,6,$data['kk_username'],0,1,'');

		// $pdf->Cell(35,6,'',0,0);
		// $pdf->Cell(20,6,'Tubu ni Inanta    :',0,0,'');
		// $pdf->Cell(18,6,'',0,0);
		// $pdf->Cell(18,6,$data['surat_ibu'],0,1,'');

		$pdf->Cell(35,6,'',0,0);
		$pdf->Cell(20,6,'Inganan Nasida  :',0,0,'');
		$pdf->Cell(18,6,'',0,0);
		$pdf->Cell(18,6,$data['kk_alamat'],0,1,'');

		$pdf->Cell(35,6,'',0,0);
		$pdf->Cell(20,6,'Lingkungan        :',0,0,'');
		$pdf->Cell(18,6,'',0,0);
		$pdf->Cell(18,6,$data['lingkungan_nama'],0,1,'');

		$pdf->Cell(10,6,'',0,1);
		$pdf->Cell(24,6,'',0,0);
		$pdf->Cell(24,6,'Hipas do dakdanak i suang songon i nang dohot natorasna pe. Disiala basa-basa',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'ni Tuhanta dohot las ni roha nasida :',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'',0,1,'');

	
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(200,7,'H A M U L I A T E O N  : ',0,1,'C');
		$pdf->Cell(10,6,'',0,1);

		$pdf->SetFont('Arial','',12);
		$pdf->Cell(24,6,'',0,0);
		$pdf->Cell(24,6,'Godangna Rp              : ',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'',0,1,'');
		
		}

		$pdf->Cell(105,6,'',0,1);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(130, 8, '', 0, 0, 'L');
		$pdf->Cell(130, 8,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(130, 8, '', 0, 0, 'L');
		$pdf->Cell(130, 8, 'Sintua Lingkungan,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(130, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->Cell(130, 6,'St. ', 0, 1, 'L');
		$pdf->Cell(130, 6, '', 0, 0, 'L');
			
		$pdf ->Output();

	}

	//---------------------------------------- END SURAT KELAHIRAN ------------------------------------------------//

	//---------------------------------------- SURAT KETERANGAN DARI SINTUA ------------------------------------------------//

	// SURAT SK TARDIDI__________________________________________________________________________________________________

	function surat_tardidi(){
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_cek_surattardidi();
		$this->load->view('user/v_surattardidi',$x);
	}

	function cek_surattardidi(){
		$username	= $this->input->post('xusername');

		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->cek_surattardidi($username);
		$this->load->view('user/v_surattardidi',$x);
	}

	function get_surattardidi(){
		$id=$this->uri->segment(3);
		$get_db=$this->m_surat->get_surattardidi_byid($id);

		$pdf = new FPDF('P', 'mm', 'A4');
		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",13,3,29,25);
		$pdf->image("theme/images/HKBP.png",170,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(200,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(200,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(200,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(180,7,'=====================================================================================',0,0);
		$pdf->Cell(200,3,'',0,1);
		$pdf->Cell(200,4,'',0,1);
		$pdf->Cell(200,4,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',14);
		$pdf->Cell(190,7,'SURAT HATORANGAN SIAN SINTUA LINGKUNGAN',0,1,'C');
		$pdf->Cell(200,7,'',0,1);

		$pdf->SetFont('Arial','',11);
	
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->Cell(110, 5,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->SetFont('Arial','i',11);
		$pdf->Cell(110, 5, 'Mandapothon Napinasinarsangapan :', 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(110, 5, 'Uluan ni Huria HKBP Sidikalang II', 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->Cell(110, 5, 'di : Komp. Gereja HKBP Sidikalang II', 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 1, 'L');




		$pdf->SetFont('Arial','',12);
		$pdf->Cell(10,6,'',0,0);
		$surattardidi = $this->m_surat->getSuratTardidi($id);

		foreach($surattardidi as $id=>$data){
		$pdf->SetFont('Arial','',12);

		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(20,6,'Dengan hormat,',0,1,'');
		$pdf->Cell(10,6,'',0,0);

		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(40,6,'Ahu na martanda tangan di toruon : St._____________________________,',0,1,'');
		$pdf->Cell(10,6,'',0,0);

		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(20,6,'Sian Lingkungan '.$data['lingkungan_nama'].', Patorangkon :',0,1,'');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(10,3,'',0,0);
		$pdf->Cell(10,5,'',0,1);
		$pdf->SetFont('Arial','',12);


		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'K e l u a r g a              : '.$data['kk_username'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		// $pdf->Cell(40,3,'',0,0);
		// $pdf->Cell(30,6,'Inanta             : '.$data['surat_ibu'],0,0,'');
		// $pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'Alamat                        : '.$data['kk_alamat'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');
		$pdf->Cell(18,3,'',0,1,'');

		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'Patoranghon dohot sasintongna, ia nasida ni Huria do jala denggan do',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'parhuriaon nasida :',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'Namardomu tu guguan taon nungga digagar nasida sahat tu________________',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'Nilehon surat on asa boi pangkeon nasida laho mandohoti :',0,0,'');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(94,6,'',0,0);
		$pdf->Cell(50,6,'Marguru Tardidi',0,0);
		$pdf->Cell(10,3,'',0,0);
		$pdf->Cell(10,5,'',0,1);
		$pdf->Cell(10,5,'',0,1);
		$pdf->SetFont('Arial','',12);

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'G O A R            : '.$data['surat_nama'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'T U B U             : '.$data['surat_tgllahir'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'Tardidi               : ',0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'Manghatindangkon Haporseaon : ',0,0,'');
		$pdf->Cell(18,6,'',0,1,'');
		$pdf->Cell(18,3,'',0,1,'');


		$pdf->Cell(10,2,'',0,1);
		$pdf->Cell(30,2,'',0,0);
		$pdf->Cell(30,6,'Songon i ma pinasahat surat on tu hamuna asa boi dipangke mardomu tu',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'haporluanna. Mauliate',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'',0,1,'');


		
		}

		$pdf->Cell(105,6,'',0,1);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(110, 8, '', 0, 0, 'L');
		$pdf->Cell(110, 8,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(110, 8, '', 0, 0, 'L');
		$pdf->Cell(110, 8, 'Sintua Lingkungan,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(110, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->Cell(110, 6,'St.___________________ ', 0, 1, 'L');
		$pdf->Cell(110, 6, '', 0, 0, 'L');
			
		$pdf ->Output();

	}

	// SURAT SK SIDI__________________________________________________________________________________________________
	function surat_sidi(){
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_cek_surattardidi();
		$this->load->view('user/v_suratsidi',$x);
	}

	function cek_suratsidi(){
		$username	= $this->input->post('xusername');


		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->cek_suratsidi($username);
		$this->load->view('user/v_suratsidi',$x);
	}

	function get_suratsidi(){
		$id=$this->uri->segment(3);
		$get_db=$this->m_surat->get_suratsidi_byid($id);

		$pdf = new FPDF('P', 'mm', 'A4');
		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",13,3,29,25);
		$pdf->image("theme/images/HKBP.png",170,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(200,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(200,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(200,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(180,7,'=====================================================================================',0,0);
		$pdf->Cell(200,3,'',0,1);
		$pdf->Cell(200,4,'',0,1);
		$pdf->Cell(200,4,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',14);
		$pdf->Cell(190,7,'SURAT HATORANGAN SIAN SINTUA LINGKUNGAN',0,1,'C');
		$pdf->Cell(200,2,'',0,1);

		$pdf->SetFont('Arial','',11);
	
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->Cell(110, 5,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->SetFont('Arial','i',11);
		$pdf->Cell(110, 5, 'Mandapothon Napinasinarsangapan :', 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(110, 5, 'Uluan ni Huria HKBP Sidikalang II', 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->Cell(110, 5, 'di : Komp. Gereja HKBP Sidikalang II', 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 1, 'L');




		$pdf->SetFont('Arial','',12);
		$pdf->Cell(10,6,'',0,0);
		$suratsidi = $this->m_surat->getSuratSidi($id);

		foreach($suratsidi as $id=>$data){
		$pdf->SetFont('Arial','',12);

		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(20,6,'Dengan hormat,',0,1,'');
		$pdf->Cell(10,6,'',0,0);

		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(40,6,'Ahu na martanda tangan di toruon : St._____________________________,',0,1,'');
		$pdf->Cell(10,6,'',0,0);

		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(20,6,'Sian Lingkungan '.$data['lingkungan_nama'].', Patorangkon :',0,1,'');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(10,3,'',0,0);
		$pdf->Cell(10,5,'',0,1);
		$pdf->SetFont('Arial','',12);


		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'K e L u a r g a              : '.$data['kk_username'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		// $pdf->Cell(40,3,'',0,0);
		// $pdf->Cell(30,6,'Inanta             : '.$data['surat_ibu'],0,0,'');
		// $pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'Alamat                         : '.$data['kk_alamat'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');
		$pdf->Cell(18,3,'',0,1,'');

		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'Patoranghon dohot sasintongna, ia nasida ni Huria do jala denggan do',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'parhuriaon nasida :',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'Namardomu tu guguan taon nungga digagar nasida sahat tu________________',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'Nilehon surat on asa boi pangkeon nasida laho mandohoti :',0,0,'');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(94,6,'',0,0);
		$pdf->Cell(50,6,'Marguru -',0,1);
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(50,6,' Manghatindangkon Haporseaon',0,1);
		$pdf->Cell(10,3,'',0,0);
		$pdf->Cell(10,3,'',0,1);
		$pdf->Cell(10,3,'',0,1);
		$pdf->SetFont('Arial','',12);

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'G O A R            : '.$data['jemaat_nama'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'T U B U             : '.$data['jemaat_tgllahir'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'Tardidi               : '.$data['surat_tgltardidi'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'Manghatindangkon Haporseaon : ',0,0,'');
		$pdf->Cell(18,6,'',0,1,'');
		$pdf->Cell(18,3,'',0,1,'');


		$pdf->Cell(10,2,'',0,1);
		$pdf->Cell(30,2,'',0,0);
		$pdf->Cell(30,6,'Songon i ma pinasahat surat on tu hamuna asa boi dipangke mardomu tu',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'haporluanna. Mauliate',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'',0,1,'');


		
		}

		$pdf->Cell(105,6,'',0,1);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(110, 8, '', 0, 0, 'L');
		$pdf->Cell(110, 8,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(110, 8, '', 0, 0, 'L');
		$pdf->Cell(110, 8, 'Sintua Lingkungan,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(110, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->Cell(110, 6,'St.___________________ ', 0, 1, 'L');
		$pdf->Cell(110, 6, '', 0, 0, 'L');
			
		$pdf ->Output();

	}

	// SURAT SK JEMAAT PINDAH__________________________________________________________________________________________________

	function surat_jpindah(){
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_cek_suratjpindah();
		$this->load->view('user/v_suratjpindah',$x);
	}

	function cek_suratjpindah(){
		$username	= $this->input->post('xusername');

		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->cek_suratjpindah($username);
		$this->load->view('user/v_suratjpindah',$x);
	}

	function get_suratjpindah(){
		$id=$this->uri->segment(3);
		$get_db=$this->m_surat->get_suratjpindah_byid($id);

		$pdf = new FPDF('P', 'mm', 'A4');
		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",13,3,29,25);
		$pdf->image("theme/images/HKBP.png",170,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(200,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(200,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(200,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(180,7,'=====================================================================================',0,0);
		$pdf->Cell(200,3,'',0,1);
		$pdf->Cell(200,4,'',0,1);
		$pdf->Cell(200,4,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',14);
		$pdf->Cell(190,7,'SURAT HATORANGAN SIAN SINTUA LINGKUNGAN',0,1,'C');
		$pdf->Cell(200,7,'',0,1);

		$pdf->SetFont('Arial','',11);
	
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->Cell(110, 5,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->SetFont('Arial','i',11);
		$pdf->Cell(110, 5, 'Mandapothon Napinasinarsangapan :', 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(110, 5, 'Uluan ni Huria HKBP Sidikalang II', 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->Cell(110, 5, 'di : Komp. Gereja HKBP Sidikalang II', 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 1, 'L');




		$pdf->SetFont('Arial','',12);
		$pdf->Cell(10,6,'',0,0);
		$suratjpindah = $this->m_surat->getSuratJpindah($id);

		foreach($suratjpindah as $id=>$data){
		$pdf->SetFont('Arial','',12);

		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(20,6,'Dengan hormat,',0,1,'');
		$pdf->Cell(10,6,'',0,0);

		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(40,6,'Ahu na martanda tangan di toruon : St._____________________________,',0,1,'');
		$pdf->Cell(10,6,'',0,0);

		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(20,6,'Sian Lingkungan '.$data['lingkungan_nama'].', Patorangkon :',0,1,'');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(10,3,'',0,0);
		$pdf->Cell(10,5,'',0,1);
		$pdf->SetFont('Arial','',12);


		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'K e l u a r g a              : '.$data['kk_username'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		// $pdf->Cell(40,3,'',0,0);
		// $pdf->Cell(30,6,'Inanta             : '.$data['sk_ibu'],0,0,'');
		// $pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'Alamat                        : '.$data['kk_alamat'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');
		$pdf->Cell(18,3,'',0,1,'');

		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'Patoranghon dohot sasintongna, ia nasida ni Huria do jala denggan do',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'parhuriaon nasida :',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'Namardomu tu guguan taon nungga digagar nasida sahat tu________________',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'Nilehon surat on asa boi pangkeon nasida laho mandohoti :',0,0,'');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(94,6,'',0,0);
		$pdf->Cell(50,6,'Manjalo Surat parhuriaon',0,0);
		$pdf->Cell(10,3,'',0,0);
		$pdf->Cell(10,5,'',0,1);
		$pdf->Cell(10,5,'',0,1);
		$pdf->SetFont('Arial','',12);

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'G O A R            : ',0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'T U B U             : ',0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'Tardidi               : ',0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'Manghatindangkon Haporseaon : ',0,0,'');
		$pdf->Cell(18,6,'',0,1,'');
		$pdf->Cell(18,3,'',0,1,'');


		$pdf->Cell(10,2,'',0,1);
		$pdf->Cell(30,2,'',0,0);
		$pdf->Cell(30,6,'Songon i ma pinasahat surat on tu hamuna asa boi dipangke mardomu tu',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'haporluanna. Mauliate',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'',0,1,'');

		
		}

		$pdf->Cell(105,6,'',0,1);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(110, 8, '', 0, 0, 'L');
		$pdf->Cell(110, 8,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(110, 8, '', 0, 0, 'L');
		$pdf->Cell(110, 8, 'Sintua Lingkungan,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(110, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->Cell(110, 6,'St.___________________ ', 0, 1, 'L');
		$pdf->Cell(110, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	}

	// SURAT SK JEMAAT HENDAK MENIKAH________________________________________________________________________________________________
	function surat_jmenikah(){
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->get_cek_suratjmenikah();
		$this->load->view('user/v_suratjmenikah',$x);
	}

	function cek_suratjmenikah(){
		$username	= $this->input->post('xusername');

		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_surat->cek_suratjmenikah($username);
		$this->load->view('user/v_suratjmenikah',$x);
	}

	function get_suratjmenikah(){
		$id=$this->uri->segment(3);
		$get_db=$this->m_surat->get_suratjmenikah_byid($id);

		$pdf = new FPDF('P', 'mm', 'A4');
		//membuat halaman baru
		$pdf->AddPage();
		$pdf->image("theme/images/HKBP.png",13,3,29,25);
		$pdf->image("theme/images/HKBP.png",170,3,29,25);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(200,7,'HURIA KRISTEN BATAK PROTESTAN',0,1,'C');
		$pdf->SetFont('Arial','B',15);
		$pdf->Cell(200,7,'RESSORT SIDIKALANG II DISTRIK VI DAIRI',0,1,'C');
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(200,7,'Jl. Damai No.51 Sidikalang, Kab. Dairi  Telp. (0627) 21647 - 424009',0,1,'C');
		$pdf->Cell(8,7,'',0,0);
		$pdf->Cell(180,7,'=====================================================================================',0,0);
		$pdf->Cell(200,3,'',0,1);
		$pdf->Cell(200,4,'',0,1);
		$pdf->Cell(200,4,'',0,1);
		$pdf->SetFont('Arial','',9);
		$pdf->SetFont('Arial','B',14);
		$pdf->Cell(190,7,'SURAT HATORANGAN SIAN SINTUA LINGKUNGAN',0,1,'C');
		$pdf->Cell(200,7,'',0,1);

		$pdf->SetFont('Arial','',11);
	
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->Cell(110, 5,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->SetFont('Arial','i',11);
		$pdf->Cell(110, 5, 'Mandapothon Napinasinarsangapan :', 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(110, 5, 'Uluan ni Huria HKBP Sidikalang II', 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 0, 'L');
		$pdf->Cell(110, 5, 'di : Komp. Gereja HKBP Sidikalang II', 0, 1, 'L');
		$pdf->Cell(110, 5, '', 0, 1, 'L');




		$pdf->SetFont('Arial','',12);
		$pdf->Cell(10,6,'',0,0);
		$suratjmenikah = $this->m_surat->getSuratJmenikah($id);

		foreach($suratjmenikah as $id=>$data){
		$pdf->SetFont('Arial','',12);

		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(20,6,'Dengan hormat,',0,1,'');
		$pdf->Cell(10,6,'',0,0);

		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(40,6,'Ahu na martanda tangan di toruon : St._____________________________,',0,1,'');
		$pdf->Cell(10,6,'',0,0);

		$pdf->Cell(10,6,'',0,0);
		$pdf->Cell(20,6,'Sian Lingkungan '.$data['lingkungan_nama'].', Patorangkon :',0,1,'');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(10,3,'',0,0);
		$pdf->Cell(10,5,'',0,1);
		$pdf->SetFont('Arial','',12);


		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'Dari Keluarga              : '.$data['kk_username'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		// $pdf->Cell(40,3,'',0,0);
		// $pdf->Cell(30,6,'Inanta             : '.$data['sk_ibu'],0,0,'');
		// $pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'Alamat                         : '.$data['kk_alamat'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');
		$pdf->Cell(18,3,'',0,1,'');

		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'Patoranghon dohot sasintongna, ia nasida ni Huria do jala denggan do',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'parhuriaon nasida :',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'Namardomu tu guguan taon nungga digagar nasida sahat tu________________',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'Nilehon surat on asa boi pangkeon nasida laho mandohoti :',0,0,'');
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(94,6,'',0,0);
		$pdf->Cell(50,6,'Manjalo Surat parhuriaon',0,0);
		$pdf->Cell(10,3,'',0,0);
		$pdf->Cell(10,5,'',0,1);
		$pdf->Cell(10,5,'',0,1);
		$pdf->SetFont('Arial','',12);

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'G O A R            : '.$data['jemaat_nama'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'T U B U             : '.$data['jemaat_tgllahir'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'Tardidi               : '.$data['jemaat_tgltardidi'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');

		$pdf->Cell(40,3,'',0,0);
		$pdf->Cell(30,6,'Manghatindangkon Haporseaon : '.$data['jemaat_tglmalua'],0,0,'');
		$pdf->Cell(18,6,'',0,1,'');
		$pdf->Cell(18,3,'',0,1,'');


		$pdf->Cell(10,2,'',0,1);
		$pdf->Cell(30,2,'',0,0);
		$pdf->Cell(30,6,'Songon i ma pinasahat surat on tu hamuna asa boi dipangke mardomu tu',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'haporluanna. Mauliate',0,1,'');
		$pdf->Cell(20,6,'',0,0);
		$pdf->Cell(20,6,'',0,1,'');


		
		}

		$pdf->Cell(105,6,'',0,1);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,6,'',0,1);
		$pdf->Cell(110, 8, '', 0, 0, 'L');
		$pdf->Cell(110, 8,'Sidikalang, ' . $this->tgl_indo(date('Y-m-d')), 0, 1, 'L');
		$pdf->Cell(110, 8, '', 0, 0, 'L');
		$pdf->Cell(110, 8, 'Sintua Lingkungan,', 0, 1, 'L');
		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(110, 6, '', 0, 0, 'L');
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->Cell(110, 6,'St.___________________ ', 0, 1, 'L');
		$pdf->Cell(110, 6, '', 0, 0, 'L');
			
		$pdf ->Output();
	}



	//---------------------------------------- END SURAT KETERANGAN DARI SINTUA ------------------------------------------------//








	
}
