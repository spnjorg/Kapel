<?php
class M_surat extends CI_Model{
	

	function get_all_surat(){
		$hsl=$this->db->query("SELECT tbl_galeri.*,DATE_FORMAT(galeri_tanggal,'%d/%m/%Y') AS tanggal,album_nama FROM tbl_galeri join tbl_album on galeri_album_id=album_id ORDER BY galeri_id DESC");
		return $hsl;
	}

	//---------------------------------------- SURAT KELAHIRAN ------------------------------------------------//
	
	function get_cek_suratkelahiran(){
		$hsl=$this->db->query("SELECT tbl_surat.*,tbl_kk.*, tbl_jemaat.*, lingkungan_nama ,katsurat_nama 
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON surat_katsurat_id=katsurat_id
			WHERE surat_id=0");
		return $hsl;
	}

	
	function cek_suratlahir($username){
		$hsl=$this->db->query("SELECT tbl_surat.*, tbl_kk.*, tbl_jemaat.*,  lingkungan_nama ,katsurat_nama 
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON surat_katsurat_id=katsurat_id
			WHERE surat_username='$username' AND surat_katsurat_id=2");
		return $hsl;
	}

	function getSuratlahir($id){
		$suratkelahiran	= $this->db->query("SELECT tbl_surat.*,tbl_kk.*, tbl_jemaat.*,  lingkungan_nama ,katsurat_nama
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat 
			ON surat_katsurat_id=katsurat_id
			WHERE surat_id='$id'");
		return $suratkelahiran->result_array();
	}


   function get_suratlahir_byid($id){
		$hsl=$this->db->query("SELECT tbl_surat.*,tbl_kk.*, tbl_jemaat.*,  lingkungan_nama ,katsurat_nama
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat 
			ON surat_katsurat_id=katsurat_id
			WHERE surat_id='$id'");
		return $hsl;
	}


	// SK KELAHIRAN ________________________________________________________________________________________________________________
	function get_all_sklahir(){
		$hsl=$this->db->query("SELECT tbl_surat.*, tbl_kk.*, tbl_jemaat.*, lingkungan_nama, katsurat_nama
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON surat_katsurat_id=katsurat_id
			WHERE surat_katsurat_id=2");
		return $hsl;
	}

	function simpan_sklahir($kk_id,$jemaat_id,$username,$surat_nama,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$katsurat,$status){
		$hsl=$this->db->query("INSERT INTO tbl_surat (surat_kk_id,surat_jemaat_id,surat_username,surat_nama,surat_jenkel,surat_tmptlahir,surat_tgllahir,surat_tgltardidi,surat_tglsidi,surat_katsurat_id,surat_status) VALUES ('$kk_id','$jemaat_id','$username','$surat_nama','$jenkel','$tmptlahir','$tgllahir','$tgltardidi','$tglsidi','$katsurat','$status')");
		return $hsl;
	}

	function update_sklahir($kode,$kk_id,$username,$surat_nama,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$katsurat,$status){
		$hsl=$this->db->query("UPDATE tbl_surat SET surat_kk_id='$kk_id',surat_username='$username',surat_nama='$surat_nama',surat_jenkel='$jenkel',surat_tmptlahir='$tmptlahir',surat_tgllahir='$tgllahir',surat_tgltardidi='$tgltardidi',surat_tglsidi='$tglsidi',surat_katsurat_id='$katsurat',surat_status='$status' WHERE surat_id='$kode'");
		return $hsl;
	}

	function hapus_sklahir($kode){
		$hsl=$this->db->query("DELETE FROM tbl_surat WHERE surat_id='$kode'");
		return $hsl;
	}

	//__________________________________________________________________________________________________________________________________

	//---------------------------------------- END SURAT KELAHIRAN ------------------------------------------------//


	//---------------------------------------- SURAT KETERANGAN DARI SINTUA ------------------------------------------------//

	function get_cek_surattardidi(){
		$hsl=$this->db->query("SELECT tbl_surat.*,tbl_kk.*, tbl_jemaat.*, lingkungan_nama ,katsurat_nama 
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON surat_katsurat_id=katsurat_id
			WHERE surat_id=0");
		return $hsl;
	}

	
	//SK TARDIDI____________________________________________________________________________________________________________
	function get_all_sktardidi(){
		$hsl=$this->db->query("SELECT tbl_surat.*,tbl_kk.*,tbl_jemaat.*, lingkungan_nama, katsurat_nama
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON surat_katsurat_id=katsurat_id
			WHERE surat_katsurat_id=1");
		return $hsl;
	}

	function simpan_sktardidi($kk_id,$jemaat_id,$username,$nama,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$katsurat,$status){
		$hsl=$this->db->query("INSERT INTO tbl_surat (surat_kk_id,surat_jemaat_id,surat_username,surat_nama,surat_jenkel,surat_tmptlahir,surat_tgllahir,surat_tgltardidi,surat_tglsidi,surat_katsurat_id,surat_status) VALUES ('$kk_id','$jemaat_id','$username','$nama','$jenkel','$tmptlahir','$tgllahir','$tgltardidi','$tglsidi','$katsurat','$status')");
		return $hsl;
	}

	function update_sktardidi($kode,$kk_id,$username,$nama,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$katsurat,$status){
		$hsl=$this->db->query("UPDATE tbl_surat SET surat_kk_id='$kk_id',surat_username='$username',surat_nama='$nama',surat_jenkel='$jenkel',surat_tmptlahir='$tmptlahir',surat_tgllahir='$tgllahir',surat_tgltardidi='$tgltardidi',surat_tglsidi='$tglsidi',surat_katsurat_id='$katsurat',surat_status='$status' WHERE surat_id='$kode'");
		return $hsl;
	}

	function hapus_sktardidi($kode){
		$hsl=$this->db->query("DELETE FROM tbl_surat WHERE surat_id='$kode'");
		return $hsl;
	}

	function cek_surattardidi($username){
		$hsl=$this->db->query("SELECT tbl_surat.*, tbl_kk.*, tbl_jemaat.*,  lingkungan_nama ,katsurat_nama 
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON surat_katsurat_id=katsurat_id
			WHERE surat_username='$username' AND surat_katsurat_id=1");
		return $hsl;
	}

	 function get_surattardidi_byid($id){
		$hsl=$this->db->query("SELECT tbl_surat.*, tbl_kk.*, tbl_jemaat.*,  lingkungan_nama ,katsurat_nama 
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON surat_katsurat_id=katsurat_id
			WHERE surat_id='$id'");
		return $hsl;
	}

	function getSuratTardidi($id){
		$surattardidi	= $this->db->query("SELECT tbl_surat.*, tbl_kk.*, tbl_jemaat.*,  lingkungan_nama ,katsurat_nama 
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON surat_katsurat_id=katsurat_id
			WHERE surat_id='$id'");
		return $surattardidi->result_array();
	}

	//SK SIDI____________________________________________________________________________________________________________


	function get_all_sksidi(){
		$hsl=$this->db->query("SELECT tbl_surat.*,tbl_kk.*, tbl_jemaat.*, lingkungan_nama, katsurat_nama
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON surat_katsurat_id=katsurat_id
			WHERE surat_katsurat_id=6");
		return $hsl;
	}

	function get_cek_suratsidi(){
		$hsl=$this->db->query("SELECT tbl_surat.*,tbl_kk.*, tbl_jemaat.*, lingkungan_nama, katsurat_nama
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON surat_katsurat_id=katsurat_id
			WHERE surat_id=0");
		return $hsl;
	}

	function simpan_sksidi($kk_id,$jemaat_id,$username,$nama,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$katsurat,$status){
		$hsl=$this->db->query("INSERT INTO tbl_surat (surat_kk_id,surat_jemaat_id,surat_username,surat_nama,surat_jenkel,surat_tmptlahir,surat_tgllahir,surat_tgltardidi,surat_tglsidi,surat_katsurat_id,surat_status) VALUES ('$kk_id','$jemaat_id','$username','$nama','$jenkel','$tmptlahir','$tgllahir','$tgltardidi','$tglsidi','$katsurat','$status')");
		return $hsl;
	}

	function update_sksidi($kode,$kk_id,$jemaat_id,$username,$nama,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglsidi,$katsurat,$status){
		$hsl=$this->db->query("UPDATE tbl_surat SET surat_kk_id='$kk_id',surat_jemaat_id='$jemaat_id',surat_username='$username',surat_nama='$nama',surat_jenkel='$jenkel',surat_tmptlahir='$tmptlahir',surat_tgllahir='$tgllahir',surat_tgltardidi='$tgltardidi',surat_tglsidi='$tglsidi',surat_katsurat_id='$katsurat',surat_status='$status' WHERE surat_id='$kode'");
		return $hsl;
	}

	function hapus_sksidi($kode){
		$hsl=$this->db->query("DELETE FROM tbl_surat WHERE surat_id='$kode'");
		return $hsl;
	}

	function cek_suratsidi($username){
		$hsl=$this->db->query("SELECT tbl_surat.*,tbl_kk.*, tbl_jemaat.*, lingkungan_nama, katsurat_nama
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON surat_katsurat_id=katsurat_id
			WHERE surat_username='$username' AND surat_katsurat_id=6");
		return $hsl;
	}

	 function get_suratsidi_byid($id){
		$hsl=$this->db->query("SELECT tbl_surat.*,tbl_kk.*, tbl_jemaat.*, lingkungan_nama, katsurat_nama
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON surat_katsurat_id=katsurat_id
			WHERE surat_id='$id'");
		return $hsl;
	}

	function getSuratSidi($id){
		$suratsidi	= $this->db->query("SELECT tbl_surat.*,tbl_kk.*, tbl_jemaat.*, lingkungan_nama, katsurat_nama
			FROM tbl_surat JOIN tbl_kk
			ON surat_kk_id=kk_id
			INNER JOIN tbl_jemaat
			ON surat_jemaat_id=jemaat_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON surat_katsurat_id=katsurat_id
			WHERE surat_id='$id'");
		return $suratsidi->result_array();
	}

	//SK PINDAH HURIA____________________________________________________________________________________________________________

	function get_all_skjpindah(){
		$hsl=$this->db->query("SELECT tbl_sk.*, tbl_kk.*, lingkungan_nama, katsurat_nama
			FROM tbl_sk JOIN tbl_kk
			ON sk_kk_id=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON sk_katsurat_id=katsurat_id
			WHERE sk_katsurat_id=4");
		return $hsl;
	}

	function get_cek_suratjpindah(){
		$hsl=$this->db->query("SELECT tbl_sk.*, tbl_kk.*, lingkungan_nama, katsurat_nama
			FROM tbl_sk JOIN tbl_kk
			ON sk_kk_id=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON sk_katsurat_id=katsurat_id
			WHERE sk_id=0");
		return $hsl;
	}

	function simpan_skjpindah($kk_id,$jemaat_id,$username,$tanggal,$jlhanak,$namapasangan,$huria,$tujuanhuria,$tglnikah,$katsurat,$ketjk,$ket,$status){
		$hsl=$this->db->query("INSERT INTO tbl_sk (sk_kk_id,sk_jemaat_id,sk_username,sk_tanggal,sk_jlhanak,sk_namapasangan,sk_huria,sk_tujuanhuria,sk_tglnikah,sk_katsurat_id,sk_ketjk,sk_ket,sk_status) VALUES ('$kk_id','$jemaat_id','$username','$tanggal','$jlhanak','$namapasangan','$huria','$tujuanhuria','$tglnikah','$katsurat','$ketjk','$ket','$status')");
		return $hsl;
	}

	function update_skjpindah($kode,$kk_id,$jemaat_id,$username,$tanggal,$jlhanak,$namapasangan,$huria,$tujuanhuria,$tglnikah,$katsurat,$ketjk,$ket,$status){
		$hsl=$this->db->query("UPDATE tbl_sk SET sk_kk_id='$kk_id',sk_jemaat_id='$jemaat_id',sk_username='$username', sk_tanggal='$tanggal', sk_jlhanak='$jlhanak', sk_namapasangan='$namapasangan', sk_huria='$huria', sk_tujuanhuria='$tujuanhuria', sk_tglnikah='$tglnikah', sk_katsurat_id='$katsurat', sk_ketjk='$ketjk', sk_ket='$ket', sk_status='$status' WHERE sk_id='$kode'");
		return $hsl;
	}

	function hapus_skjpindah($kode){
		$hsl=$this->db->query("DELETE FROM tbl_sk WHERE sk_id='$kode'");
		return $hsl;
	}

	function cek_suratjpindah($username){
		$hsl=$this->db->query("SELECT tbl_sk.*, tbl_kk.*, lingkungan_nama, katsurat_nama
			FROM tbl_sk JOIN tbl_kk
			ON sk_kk_id=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON sk_katsurat_id=katsurat_id
			WHERE sk_username='$username' AND sk_katsurat_id=4");
		return $hsl;
	}

	function get_suratjpindah_byid($id){
		$hsl=$this->db->query("SELECT tbl_sk.*, tbl_kk.*, lingkungan_nama, katsurat_nama
			FROM tbl_sk JOIN tbl_kk
			ON sk_kk_id=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON sk_katsurat_id=katsurat_id
			WHERE sk_id='$id'");
		return $hsl;
	}

	function getSuratJpindah($id){
		$suratjpindah	= $this->db->query("SELECT tbl_sk.*, tbl_kk.*, lingkungan_nama, katsurat_nama
			FROM tbl_sk JOIN tbl_kk
			ON sk_kk_id=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON sk_katsurat_id=katsurat_id
			WHERE sk_id='$id'");
		return $suratjpindah->result_array();
	}

	//SK JEMAAT HENDAK MENIKAH____________________________________________________________________________________________________________

	function get_all_skjmenikah(){
		$hsl=$this->db->query("SELECT tbl_sk.*, tbl_jemaat.*, tbl_kk.*, lingkungan_nama, katsurat_nama
			FROM tbl_sk JOIN tbl_jemaat
			ON sk_jemaat_id=jemaat_id
			INNER JOIN tbl_kk
			ON jemaat_nokk=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON sk_katsurat_id=katsurat_id
			WHERE sk_katsurat_id=5");
		return $hsl;
	}

	function get_cek_suratjmenikah(){
		$hsl=$this->db->query("SELECT tbl_sk.*, tbl_kk.*, tbl_jemaat.*, lingkungan_nama, katsurat_nama
			FROM tbl_sk JOIN tbl_kk
			ON sk_kk_id=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_jemaat
			ON sk_jemaat_id=jemaat_id
			INNER JOIN tbl_katsurat
			ON sk_katsurat_id=katsurat_id
			WHERE sk_id=0");
		return $hsl;
	}

	function simpan_skjmenikah($kk_id,$jemaat_id,$username,$tanggal,$jlhanak,$namapasangan,$huria,$tujuanhuria,$tglnikah,$katsurat,$ketjk,$ket,$status){
		$hsl=$this->db->query("INSERT INTO tbl_sk (sk_kk_id,sk_jemaat_id,sk_username,sk_tanggal,sk_jlhanak,sk_namapasangan,sk_huria,sk_tujuanhuria,sk_tglnikah,sk_katsurat_id,sk_ketjk,sk_ket,sk_status) VALUES ('$kk_id','$jemaat_id','$username','$tanggal','$jlhanak','$namapasangan','$huria','$tujuanhuria','$tglnikah','$katsurat','$ketjk','$ket','$status')");
		return $hsl;
	}

	function update_skjmenikah($kode,$kk_id,$jemaat_id,$username,$tanggal,$jlhanak,$namapasangan,$huria,$tujuanhuria,$tglnikah,$katsurat,$ketjk,$ket,$status){
		$hsl=$this->db->query("UPDATE tbl_sk SET sk_kk_id='$kk_id',sk_jemaat_id='$jemaat_id',sk_username='$username', sk_tanggal='$tanggal', sk_jlhanak='$jlhanak', sk_namapasangan='$namapasangan', sk_huria='$huria', sk_tujuanhuria='$tujuanhuria', sk_tglnikah='$tglnikah', sk_katsurat_id='$katsurat', sk_ketjk='$ketjk', sk_ket='$ket', sk_status='$status' WHERE sk_id='$kode'");
		return $hsl;
	}

	function hapus_skjmenikah($kode){
		$hsl=$this->db->query("DELETE FROM tbl_sk WHERE sk_id='$kode'");
		return $hsl;
	}

	function cek_suratjmenikah($username){
		$hsl=$this->db->query("SELECT tbl_sk.*,tbl_jemaat.*, katsurat_nama
			FROM tbl_sk JOIN tbl_jemaat
			ON sk_jemaat_id=jemaat_id
			INNER JOIN tbl_katsurat
			ON sk_katsurat_id=katsurat_id
			WHERE sk_username='$username' AND sk_katsurat_id=5");
		return $hsl;
	}

	function get_suratjmenikah_byid($id){
		$hsl=$this->db->query("SELECT tbl_sk.*,tbl_jemaat.*,lingkungan_nama, katsurat_nama
			FROM tbl_sk JOIN tbl_jemaat
			ON sk_jemaat_id=jemaat_id
			INNER JOIN tbl_kk
			ON jemaat_nokk=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON sk_katsurat_id=katsurat_id
			WHERE sk_id='$id' and sk_katsurat_id=5");
		return $hsl;
	}

	function getSuratJmenikah($id){
		$suratjmenikah	= $this->db->query("SELECT tbl_sk.*,tbl_jemaat.*, tbl_kk.*,lingkungan_nama, katsurat_nama
			FROM tbl_sk JOIN tbl_jemaat
			ON sk_jemaat_id=jemaat_id
			INNER JOIN tbl_kk
			ON jemaat_nokk=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			INNER JOIN tbl_katsurat
			ON sk_katsurat_id=katsurat_id
			WHERE sk_id='$id' and sk_katsurat_id=5");
		return $suratjmenikah->result_array();
	}


	//---------------------------------------- END SURAT KETERANGAN DARI SINTUA ------------------------------------------------//










}