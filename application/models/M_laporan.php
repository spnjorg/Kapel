<?php 
class M_laporan extends CI_Model{
	function __construct(){
		parent:: __construct();
		$this->tabelama = 'v_ama';
		$this->tabelina = 'v_ina';
		$this->tabelnaposo = 'v_naposo';
		$this->tabelremaja = 'v_remaja';
		$this->tabelskm = 'v_skm';
		$this->tabellansia = 'v_lansia';
		$this->tabelparhalado = 'v_parhalado';
		$this->tabeldewan = 'v_dewan';
		$this->tabelwarta = 'v_dewan';
		$this->tabelkelahiran = 'v_kelahiran';
		$this->tabeljpindah = 'v_jpindah';

	}

	function getDataAma(){
		$this->db->select('jemaat_id,jemaat_nama,jemaat_jenkel,jemaat_tmptlahir,jemaat_tgllahir,jemaat_tgltardidi,jemaat_tglmalua,kk_alamat,jemaat_notelp,jemaat_pendidikan,jemaat_statuskel,jemaat_pekerjaan,Umur,lingkungan_nama');
		$this->db->from($this->tabelama);
		$this->db->order_by('jemaat_id','asc');
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}

	function getDataIna(){
		$this->db->select('jemaat_id,jemaat_nama,jemaat_jenkel,jemaat_tmptlahir,jemaat_tgllahir,jemaat_tgltardidi,jemaat_tglmalua,kk_alamat,jemaat_notelp,jemaat_pendidikan,jemaat_statuskel,jemaat_pekerjaan,Umur,lingkungan_nama');
		$this->db->from($this->tabelina);
		$this->db->order_by('jemaat_id','asc');
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}

	function getDataNaposo(){
		$this->db->select('jemaat_id,jemaat_nama,jemaat_jenkel,jemaat_tmptlahir,jemaat_tgllahir,jemaat_tgltardidi,jemaat_tglmalua,kk_alamat,jemaat_notelp,jemaat_pendidikan,jemaat_statuskel,jemaat_pekerjaan,Umur,lingkungan_nama');
		$this->db->from($this->tabelnaposo);
		$this->db->order_by('jemaat_id','asc');
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}

	function getDataRemaja(){
		$this->db->select('jemaat_id,jemaat_nama,jemaat_jenkel,jemaat_tmptlahir,jemaat_tgllahir,jemaat_tgltardidi,jemaat_tglmalua,kk_alamat,jemaat_notelp,jemaat_pendidikan,jemaat_statuskel,jemaat_pekerjaan,Umur,lingkungan_nama');
		$this->db->from($this->tabelremaja);
		$this->db->order_by('jemaat_id','asc');
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}

	function getDataSkm(){
		$this->db->select('jemaat_id,jemaat_nama,jemaat_jenkel,jemaat_tmptlahir,jemaat_tgllahir,jemaat_tgltardidi,jemaat_tglmalua,kk_alamat,jemaat_notelp,jemaat_pendidikan,jemaat_statuskel,jemaat_pekerjaan,Umur,lingkungan_nama');
		$this->db->from($this->tabelskm);
		$this->db->order_by('jemaat_id','asc');
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}

	function getDataLansia(){
		$this->db->select('jemaat_id,jemaat_nama,jemaat_jenkel,jemaat_tmptlahir,jemaat_tgllahir,jemaat_tgltardidi,jemaat_tglmalua,kk_alamat,jemaat_notelp,jemaat_pendidikan,jemaat_statuskel,jemaat_pekerjaan,Umur,lingkungan_nama');
		$this->db->from($this->tabellansia);
		$this->db->order_by('jemaat_id','asc');
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}

	function getDataParhalado(){
		$this->db->select('jemaat_nama,jemaat_tmptlahir,jemaat_tgllahir,kk_alamat,lingkungan_nama,parhalado_jabatan,jemaat_pendidikan,jemaat_pekerjaan,parhalado_dilantik,jemaat_notelp');
		$this->db->from($this->tabelparhalado);
		$this->db->order_by('parhalado_id','asc');
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}

	function getDataDewankoinonia(){
		$this->db->select('Nama,Dewan,dewan_jabatan');
		$this->db->from($this->tabeldewan);
		$this->db->where('Dewan like"%Koinonia%"');
		$this->db->order_by('dewan_id','asc');
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}

	function getDataDewandiakonia(){
		$this->db->select('Nama,Dewan,dewan_jabatan');
		$this->db->from($this->tabeldewan);
		$this->db->where('Dewan like"%Diakonia%"');
		$this->db->order_by('dewan_id','asc');
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}

	function getDataDewanmarturia(){
		$this->db->select('Nama,Dewan,dewan_jabatan');
		$this->db->from($this->tabeldewan);
		$this->db->where('Dewan like"%Marturia%"');
		$this->db->order_by('dewan_id','asc');
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}

   // ------------------------------------------------ GET DATA BERITA LAINNYA ----------------------------------------------//

	
	function getDataKelahiran($tglawal,$tglakhir){
		$datakelahiran	= $this->db->query("SELECT tbl_kelahiran.*, kk_username,kk_alamat ,lingkungan_nama
			FROM tbl_kelahiran JOIN tbl_kk 
			ON kelahiran_kk_id=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			WHERE date(kelahiran_tgl) between '$tglawal' and '$tglakhir' order by kelahiran_tgl asc");
		return $datakelahiran->result_array();
	}

	function getDataMeninggal($tglawal,$tglakhir){
		$datakelahiran	= $this->db->query("SELECT tbl_meninggal.*,tbl_jemaat.jemaat_nama,tbl_katfilter.katfilter_nama,tbl_kk.kk_id,tbl_kk.kk_alamat, YEAR(CURDATE())-YEAR(jemaat_tgllahir) AS Umur, tbl_lingkungan.lingkungan_nama, tbl_kk.kk_alamat
			FROM tbl_meninggal JOIN tbl_jemaat
			ON meninggal_jemaat_id=jemaat_id
			INNER JOIN tbl_katfilter ON meninggal_katfilter_id=katfilter_id
			INNER JOIN tbl_kk ON jemaat_nokk=kk_id
			INNER JOIN tbl_lingkungan ON kk_lingk_id=lingkungan_id
			WHERE date(meninggal_tgl) between '$tglawal' and '$tglakhir' order by meninggal_tgl asc");
		return $datakelahiran->result_array();
	}


	function getDataTardidi($tglawal,$tglakhir){
		 $datatardidi	= $this->db->query("SELECT tbl_tardidi.*, kk_username, kk_alamat , lingkungan_nama
			FROM tbl_tardidi JOIN tbl_kk 
			ON tardidi_kk_id=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			WHERE date(tardidi_tgl) between '$tglawal' and '$tglakhir' order by tardidi_tgl asc");
		return $datatardidi->result_array();
	}


	function getDataSidi($bulan,$tahun){
		 $datasidi	= $this->db->query("SELECT tbl_sidi.*, jemaat_nama, jemaat_jenkel, jemaat_tmptlahir, jemaat_tgllahir, jemaat_tgltardidi,kk_username, kk_alamat, lingkungan_nama 
			FROM tbl_sidi JOIN tbl_jemaat ON sidi_jemaat_id=jemaat_id
			INNER JOIN tbl_kk ON jemaat_nokk=kk_id
			INNER JOIN tbl_lingkungan ON kk_lingk_id=lingkungan_id 
			WHERE MONTH(sidi_tgl) = '$bulan' and YEAR(sidi_tgl) = '$tahun' order by sidi_tgl asc");
		return $datasidi->result_array();
	}

	// function getDataJpindah($tglawal,$tglakhir){
	// 	$datajpindah	= $this->db->query("SELECT tbl_jpindah.*, lingkungan_nama 
	// 		FROM tbl_jpindah JOIN tbl_lingkungan
	// 		ON jpindah_lingk_id=lingkungan_id 
	// 		WHERE date(jpindah_tgl) between '$tglawal' and '$tglakhir' order by jpindah_tgl asc");
	// 	return $datajpindah->result_array();
	// }

	function getDataJpindah($tglawal,$tglakhir){
		$datajpindah	= $this->db->query("SELECT tbl_kkpindah.*, kk_username, kk_alamat, lingkungan_nama 
			FROM tbl_kkpindah JOIN tbl_kk ON kkpindah_kk_id=kk_id
			INNER JOIN tbl_lingkungan ON kk_lingk_id=lingkungan_id 
			WHERE date(kkpindah_tgl) between '$tglawal' and '$tglakhir' order by kkpindah_tgl asc");
		return $datajpindah->result_array();
	}


	function getDataJmenikah($tglawal,$tglakhir){
		$datajmenikah	= $this->db->query("SELECT tbl_jmenikah.*, jemaat_nama, jemaat_jenkel, jemaat_tmptlahir, jemaat_tgllahir, jemaat_tgltardidi,kk_username, kk_alamat, lingkungan_nama 
			FROM tbl_jmenikah JOIN tbl_jemaat ON jmenikah_jemaat_id=jemaat_id
			INNER JOIN tbl_kk ON jemaat_nokk=kk_id
			INNER JOIN tbl_lingkungan ON kk_lingk_id=lingkungan_id
			WHERE date(jmenikah_tglnikah) between '$tglawal' and '$tglakhir' order by jmenikah_tglnikah asc");
		return $datajmenikah->result_array();
	}

// ------------------------------------------------ END GET DATA BERITA LAINNYA ----------------------------------------------//

//GET FILTER JEMAAT_______________________________________________________________________________________________________________
	
	function getDataFilter($lingkungan){
		$datafilter	= $this->db->query("SELECT tbl_jemaat.*, kk_alamat,lingkungan_nama,flag_nama
			FROM tbl_jemaat JOIN tbl_kk
			ON tbl_jemaat.jemaat_nokk=tbl_kk.kk_id
			INNER JOIN tbl_lingkungan
			ON tbl_kk.kk_lingk_id=tbl_lingkungan.lingkungan_id
			INNER JOIN tbl_flag
			ON tbl_jemaat.jemaat_flag_id=tbl_flag.flag_id
			WHERE kk_lingk_id= '$lingkungan' order by jemaat_id asc");
		return $datafilter->result_array();
	}


	function getDataJemaat(){
		$datajemaat	= $this->db->query("SELECT tbl_jemaat.*, kk_alamat,lingkungan_nama,flag_nama
			FROM tbl_jemaat JOIN tbl_kk
			ON tbl_jemaat.jemaat_nokk=tbl_kk.kk_id
			INNER JOIN tbl_lingkungan
			ON tbl_kk.kk_lingk_id=tbl_lingkungan.lingkungan_id
			INNER JOIN tbl_flag
			ON tbl_jemaat.jemaat_flag_id=tbl_flag.flag_id order by jemaat_id asc");
		return $datajemaat->result_array();
	}

//GET FILTER WARTA JEMAAT_______________________________________________________________________________________________________________
	function getDataFilterkk($filter_kk){
		$datafilterkk	= $this->db->query("SELECT tbl_jemaat.*, kk_alamat,lingkungan_nama,flag_nama
			FROM tbl_jemaat JOIN tbl_kk
			ON tbl_jemaat.jemaat_nokk=tbl_kk.kk_id
			INNER JOIN tbl_lingkungan
			ON tbl_kk.kk_lingk_id=tbl_lingkungan.lingkungan_id
			INNER JOIN tbl_flag
			ON tbl_jemaat.jemaat_flag_id=tbl_flag.flag_id
			WHERE kk_id= '$filter_kk' order by jemaat_id asc");
		return $datafilterkk->result_array();
	}




}
?>