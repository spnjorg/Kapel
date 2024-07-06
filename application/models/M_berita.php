<?php 
class M_berita extends CI_Model{

// ----------------------------------------------- DATA KELAHIRAN ---------------------------------------------------//
	function get_all_kelahiran(){
		$hsl=$this->db->query("SELECT tbl_kelahiran.*, kk_username,kk_alamat ,lingkungan_nama
			FROM tbl_kelahiran JOIN tbl_kk 
			ON kelahiran_kk_id=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id");
		return $hsl;
	}

	function simpan_kelahiran($idkel,$tanggal,$jenkel){
		$hsl=$this->db->query("INSERT INTO tbl_kelahiran (kelahiran_kk_id,kelahiran_tgl,kelahiran_jenkel) VALUES ('$idkel','$tanggal','$jenkel')");
		return $hsl;
	}

	
	function update_kelahiran($kode,$idkel,$tanggal,$jenkel){
		$hsl=$this->db->query("UPDATE tbl_kelahiran SET kelahiran_kk_id='$idkel',kelahiran_tgl='$tanggal',kelahiran_jenkel='$jenkel' WHERE kelahiran_id='$kode'");
		return $hsl;
	}

	function hapus_kelahiran($kode){
		$hsl=$this->db->query("DELETE FROM tbl_kelahiran WHERE kelahiran_id='$kode'");
		return $hsl;
	}


// ---------------------------------------------- END DATA KELAHIRAN ---------------------------------------------------//

// ---------------------------------------------- DATA MENINGGAL ---------------------------------------------------//
    function get_all_datameninggal(){
		$hsl=$this->db->query("SELECT tbl_meninggal.*,tbl_jemaat.jemaat_nama,tbl_katfilter.katfilter_nama,tbl_kk.kk_id,tbl_kk.kk_alamat, YEAR(CURDATE())-YEAR(jemaat_tgllahir) AS Umur, tbl_lingkungan.lingkungan_nama, tbl_kk.kk_alamat
			FROM tbl_meninggal JOIN tbl_jemaat
			ON meninggal_jemaat_id=jemaat_id
			INNER JOIN tbl_katfilter ON meninggal_katfilter_id=katfilter_id
			INNER JOIN tbl_kk ON jemaat_nokk=kk_id
			INNER JOIN tbl_lingkungan ON kk_lingk_id=lingkungan_id");
		return $hsl;
	}

	function simpan_datameninggal($idjemaat,$tanggal,$kategori){
		$hsl=$this->db->query("INSERT INTO tbl_meninggal (meninggal_jemaat_id,meninggal_tgl,meninggal_katfilter_id) VALUES ('$idjemaat','$tanggal','$kategori')");
		return $hsl;
	}

	function update_datameninggal($kode,$idjemaat,$tanggal,$kategori){
		$hsl=$this->db->query("UPDATE tbl_meninggal SET meninggal_jemaat_id='$idjemaat',meninggal_tgl='$tanggal',meninggal_katfilter_id='$kategori' WHERE meninggal_id='$kode'");
		return $hsl;
	}
	
	function hapus_datameninggal($kode){
		$hsl=$this->db->query("DELETE FROM tbl_meninggal WHERE meninggal_id='$kode'");
		return $hsl;
	}


// ---------------------------------------------- END DATA MENINGGAL ---------------------------------------------------//

	
	
// ---------------------------------------------- DATA TARDIDI ---------------------------------------------------//
    function get_all_tardidi(){
		$hsl=$this->db->query("SELECT tbl_tardidi.*, kk_username, kk_alamat , lingkungan_nama
			FROM tbl_tardidi JOIN tbl_kk 
			ON tardidi_kk_id=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id");
		return $hsl;
	}

	function simpan_tardidi($tgltardidi,$idkel,$nama,$jenkel,$tmplahir,$tgllahir){
		$hsl=$this->db->query("INSERT INTO tbl_tardidi (tardidi_tgl,tardidi_kk_id,tardidi_nama,tardidi_jenkel,tardidi_tmptlahir,tardidi_tgllahir) VALUES ('$tgltardidi','$idkel','$nama','$jenkel','$tmplahir','$tgllahir')");
		return $hsl;
	}

	function update_tardidi($kode,$tgltardidi,$idkel,$nama,$jenkel,$tmplahir,$tgllahir){
		$hsl=$this->db->query("UPDATE tbl_tardidi SET tardidi_tgl='$tgltardidi',tardidi_kk_id='$idkel',tardidi_nama='$nama',tardidi_jenkel='$jenkel',tardidi_tmptlahir='$tmplahir',tardidi_tgllahir='$tgllahir' WHERE tardidi_id='$kode'");
		return $hsl;
	}

	function hapus_tardidi($kode){
		$hsl=$this->db->query("DELETE FROM tbl_tardidi WHERE tardidi_id='$kode'");
		return $hsl;
	}

// ---------------------------------------------- END DATA TARDIDI ---------------------------------------------------//

// ---------------------------------------------- DATA PENEGUHAN SIDI ---------------------------------------------------//
    function get_all_sidi(){
		$hsl=$this->db->query("SELECT tbl_sidi.*, jemaat_nama, jemaat_jenkel, jemaat_tmptlahir, jemaat_tgllahir, jemaat_tgltardidi,kk_username, kk_alamat, lingkungan_nama 
			FROM tbl_sidi JOIN tbl_jemaat ON sidi_jemaat_id=jemaat_id
			INNER JOIN tbl_kk ON jemaat_nokk=kk_id
			INNER JOIN tbl_lingkungan ON kk_lingk_id=lingkungan_id");
		return $hsl;
	}

	function simpan_sidi($tanggal,$idjemaat,$ham){
		$hsl=$this->db->query("INSERT INTO tbl_sidi (sidi_tgl,sidi_jemaat_id,sidi_ham) VALUES ('$tanggal','$idjemaat','$ham')");
		return $hsl;
	}

	function update_sidi($kode,$tanggal,$idjemaat,$ham){
		$hsl=$this->db->query("UPDATE tbl_sidi SET sidi_tgl='$tanggal',sidi_jemaat_id='$idjemaat',sidi_ham='$ham' WHERE sidi_id='$kode'");
		return $hsl;
	}

	function hapus_sidi($kode){
		$hsl=$this->db->query("DELETE FROM tbl_sidi WHERE sidi_id='$kode'");
		return $hsl;
	}

// ---------------------------------------------- END DATA PENEGUHAN SIDI ---------------------------------------------------//

	// ---------------------------------------------- DATA JEMAAT PINDAH ---------------------------------------------------//
    function get_all_jpindah(){
		$hsl=$this->db->query("SELECT tbl_kkpindah.*, kk_username, kk_alamat, lingkungan_nama 
			FROM tbl_kkpindah JOIN tbl_kk ON kkpindah_kk_id=kk_id
			INNER JOIN tbl_lingkungan ON kk_lingk_id=lingkungan_id");
		return $hsl;
	}

	function simpan_jpindah($idkel,$tanggal,$jlhanak,$tujuan){
		$hsl=$this->db->query("INSERT INTO tbl_kkpindah (kkpindah_kk_id,kkpindah_tgl,kkpindah_jlhanak,kkpindah_huria) VALUES ('$idkel','$tanggal','$jlhanak','$tujuan')");
		return $hsl;
	}

	function update_jpindah($kode,$idkel,$tanggal,$jlhanak,$tujuan){
		$hsl=$this->db->query("UPDATE tbl_kkpindah SET kkpindah_kk_id='$idkel',kkpindah_tgl='$tanggal',kkpindah_jlhanak='$jlhanak',kkpindah_huria='$tujuan' WHERE kkpindah_id='$kode'");
		return $hsl;
	}

	function hapus_jpindah($kode){
		$hsl=$this->db->query("DELETE FROM tbl_kkpindah WHERE kkpindah_id='$kode'");
		return $hsl;
	}
	// ---------------------------------------------- END DATA JEMAAT PINDAH ---------------------------------------------------//

	// ---------------------------------------------- DATA JEMAAT MENIKAH ---------------------------------------------------//

	function get_all_jmenikah(){
		$hsl=$this->db->query("SELECT tbl_jmenikah.*, jemaat_nama, jemaat_jenkel, jemaat_tmptlahir, jemaat_tgllahir, jemaat_tgltardidi,kk_username, kk_alamat, lingkungan_nama 
			FROM tbl_jmenikah JOIN tbl_jemaat ON jmenikah_jemaat_id=jemaat_id
			INNER JOIN tbl_kk ON jemaat_nokk=kk_id
			INNER JOIN tbl_lingkungan ON kk_lingk_id=lingkungan_id");
		return $hsl;
	}

	function simpan_jmenikah($idjemaat,$namapasangan,$tanggal,$huria){
		$hsl=$this->db->query("INSERT INTO tbl_jmenikah (jmenikah_jemaat_id,jmenikah_namapasangan,jmenikah_tglnikah,jmenikah_huria) VALUES ('$idjemaat','$namapasangan','$tanggal','$huria')");
		return $hsl;
	}

	function update_jmenikah($kode,$idjemaat,$namapasangan,$tanggal,$huria){
		$hsl=$this->db->query("UPDATE tbl_jmenikah SET jmenikah_jemaat_id='$idjemaat',jmenikah_namapasangan='$namapasangan',jmenikah_tglnikah='$tanggal', jmenikah_huria='$huria' WHERE jmenikah_id='$kode'");
		return $hsl;
	}

	function hapus_jmenikah($kode){
		$hsl=$this->db->query("DELETE FROM tbl_jmenikah WHERE jmenikah_id='$kode'");
		return $hsl;
	}


	// ---------------------------------------------- END DATA JEMAAT MENIKAH ---------------------------------------------------//






}