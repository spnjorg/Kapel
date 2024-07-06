<?php 
class M_jemaat extends CI_Model{

	// function get_all_jemaat(){
	// 	$hsl=$this->db->query("SELECT tbl_anggotakeluarga.*,alamat_keluarga FROM tbl_anggotakeluarga JOIN tbl_kk ON no_kk=kk_id");
	// 	return $hsl;
	// }

	function get_all_jemaat(){
		$hsl=$this->db->query("SELECT tbl_jemaat.*, kk_alamat,lingkungan_nama,flag_nama
			FROM tbl_jemaat JOIN tbl_kk
			ON tbl_jemaat.jemaat_nokk=tbl_kk.kk_id
			INNER JOIN tbl_lingkungan
			ON tbl_kk.kk_lingk_id=tbl_lingkungan.lingkungan_id
			INNER JOIN tbl_flag
			ON tbl_jemaat.jemaat_flag_id=tbl_flag.flag_id");
		return $hsl;
	}

	// function get_all_ama(){
	// 	$hsl=$this->db->query("SELECT v_katusia.*,alamat_keluarga FROM v_katusia JOIN tbl_kk ON no_kk=kk_id 
	// 		WHERE anggota_jenkel='l' AND Umur>=40 AND anggota_status like'%Kepala Keluarga%'");
	// 	return $hsl;
	// }

	function get_all_ama(){
		$hsl=$this->db->query("SELECT v_katusia.*, flag_nama ,kk_alamat
			FROM v_katusia JOIN tbl_flag
			ON jemaat_flag_id=flag_id
			INNER JOIN tbl_kk
			ON jemaat_nokk=kk_id
			WHERE jemaat_jenkel='l' AND Umur BETWEEN 30 AND 59 AND jemaat_statuskel like'%Kepala Keluarga%'
			ORDER BY jemaat_id asc");
		return $hsl;
	}

	function get_all_ina(){
		$hsl=$this->db->query("SELECT v_katusia.*, flag_nama ,kk_alamat
			FROM v_katusia JOIN tbl_flag
			ON jemaat_flag_id=flag_id
			INNER JOIN tbl_kk
			ON jemaat_nokk=kk_id
			WHERE jemaat_jenkel='p' AND Umur BETWEEN 30 AND 59 
			AND jemaat_statuskel like'%Kepala Keluarga%' or jemaat_statuskel like'%Ibu Rumah Tangga%'
			ORDER BY jemaat_id asc");
		return $hsl;
	}

	function get_all_naposo(){
		$hsl=$this->db->query("SELECT v_katusia.*, flag_nama ,kk_alamat
			FROM v_katusia JOIN tbl_flag
			ON jemaat_flag_id=flag_id
			INNER JOIN tbl_kk
			ON jemaat_nokk=kk_id
			WHERE Umur BETWEEN 18 AND 39 AND jemaat_statuskel like'%Anak%'
			ORDER BY jemaat_id asc");
		return $hsl;
	}

	function get_all_remaja(){
		$hsl=$this->db->query("SELECT v_katusia.*, flag_nama ,kk_alamat
			FROM v_katusia JOIN tbl_flag
			ON jemaat_flag_id=flag_id
			INNER JOIN tbl_kk
			ON jemaat_nokk=kk_id
			WHERE Umur BETWEEN 12 AND 17 AND jemaat_statuskel like'%Anak%'
			ORDER BY jemaat_id asc");
		return $hsl;
	}
	
	function get_all_skm(){
		$hsl=$this->db->query("SELECT v_katusia.*, flag_nama ,kk_alamat
			FROM v_katusia JOIN tbl_flag
			ON jemaat_flag_id=flag_id
			INNER JOIN tbl_kk
			ON jemaat_nokk=kk_id
			WHERE Umur BETWEEN 5 AND 14 AND jemaat_statuskel like'%Anak%'
			ORDER BY jemaat_id asc");
		return $hsl;
	}

	function get_all_lansia(){
		$hsl=$this->db->query("SELECT v_katusia.*, flag_nama ,kk_alamat
			FROM v_katusia JOIN tbl_flag
			ON jemaat_flag_id=flag_id
			INNER JOIN tbl_kk
			ON jemaat_nokk=kk_id
			WHERE Umur >=60
			ORDER BY jemaat_id asc");
		return $hsl;
	}


	function simpan_jemaat($id,$nokk,$nama,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglmalua,$pendidikan,$pekerjaan,$statuskk,$notelp,$nourutkk,$flag){
		$hsl=$this->db->query("INSERT INTO tbl_jemaat (jemaat_id,jemaat_nokk,jemaat_nama,jemaat_jenkel,jemaat_tmptlahir,jemaat_tgllahir,jemaat_tgltardidi,jemaat_tglmalua,jemaat_pendidikan,jemaat_pekerjaan,jemaat_statuskel,jemaat_notelp,jemaat_nourutkk,jemaat_flag_id) VALUES ('$id','$nokk','$nama','$jenkel','$tmptlahir','$tgllahir','$tgltardidi','$tglmalua','$pendidikan','$pekerjaan','$statuskk','$notelp','$nourutkk','$flag')");
		return $hsl;
	}
	
	function update_jemaat($kode,$nokk,$nama,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglmalua,$pendidikan,$pekerjaan,$statuskk,$notelp,$nourutkk,$flag){
		$hsl=$this->db->query("UPDATE tbl_jemaat SET jemaat_id='$kode', jemaat_nokk='$nokk',jemaat_nama='$nama',jemaat_jenkel='$jenkel',jemaat_tmptlahir='$tmptlahir',jemaat_tgllahir='$tgllahir',jemaat_tgltardidi='$tgltardidi',jemaat_tglmalua='$tglmalua',jemaat_pendidikan='$pendidikan',jemaat_pekerjaan='$pekerjaan',jemaat_statuskel='$statuskk',jemaat_notelp='$notelp',jemaat_nourutkk='$nourutkk',jemaat_flag_id='$flag' WHERE jemaat_id='$kode'");
		return $hsl;
	}

	function hapus_jemaat($kode){
		$hsl=$this->db->query("DELETE FROM tbl_jemaat WHERE jemaat_id='$kode'");
		return $hsl;
	}

	function jemaat(){
		$hsl=$this->db->query("SELECT tbl_anggotakeluarga.*,alamat_keluarga FROM tbl_anggotakeluarga JOIN tbl_kk ON no_kk=kk_id");
		return $hsl;
	}
	function jemaat_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_anggotakeluarga.*,alamat_keluarga FROM tbl_anggotakeluarga JOIN tbl_kk ON no_kk=kk_id limit $offset,$limit");
		return $hsl;
	}


// SIMPAN DATA NEW (SINODE) _____________________________________________________________________________________________________________ 

	function get_all_sinode(){
		$hsl=$this->db->query("SELECT tbl_sinodeagung.*,lingkungan_nama, flag_nama
			FROM tbl_sinodeagung JOIN tbl_lingkungan
			ON sinode_lingk_id=lingkungan_id
			INNER JOIN tbl_flag
			ON sinode_flag_id=flag_id");
		return $hsl;
	}

	function get_all_filter($lingkungan){
		$hsl=$this->db->query("SELECT tbl_sinodeagung.*,lingkungan_nama, flag_nama
			FROM tbl_sinodeagung JOIN tbl_lingkungan
			ON sinode_lingk_id=lingkungan_id
			INNER JOIN tbl_flag
			ON sinode_flag_id=flag_id
			WHERE sinode_lingk_id='$lingkungan' order by sinode_id");
		return $hsl;
	}

	function getDataFilter($lingkungan){
		$datafilter	= $this->db->query("SELECT tbl_sinodeagung.*, lingkungan_nama, flag_nama 
			FROM tbl_sinodeagung JOIN tbl_lingkungan
			ON sinode_lingk_id=lingkungan_id
			INNER JOIN tbl_flag
			ON sinode_flag_id=flag_id 
			WHERE sinode_lingk_id='$lingkungan' order by sinode_id asc");
		return $datafilter->result_array();
	}

		
	function simpan_sinode($id,$nokk,$nama,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglmalua,$pendidikan,$pekerjaan,$statuskk,$notelp,$nourutkk,$lingkungan,$alamat,$flag){
		$hsl=$this->db->query("INSERT INTO tbl_sinodeagung (sinode_id,sinode_no_kk,sinode_nama,sinode_jenkel,sinode_tmptlahir,sinode_tgllahir,sinode_tgltardidi,sinode_tglmalua,sinode_pendidikan,sinode_pekerjaan,sinode_statuskel,sinode_notelp,sinode_nourutkk,sinode_lingk_id,sinode_alamat,sinode_flag_id) VALUES ('$id','$nokk','$nama','$jenkel','$tmptlahir','$tgllahir','$tgltardidi','$tglmalua','$pendidikan','$pekerjaan','$statuskk','$notelp','$nourutkk','$lingkungan','$alamat','$flag')");
		return $hsl;
	}

	function update_sinode($kode,$nokk,$nama,$jenkel,$tmptlahir,$tgllahir,$tgltardidi,$tglmalua,$pendidikan,$pekerjaan,$statuskk,$notelp,$nourutkk,$lingkungan,$alamat,$flag){
		$hsl=$this->db->query("UPDATE tbl_sinodeagung SET sinode_id='$kode', sinode_no_kk='$nokk',sinode_nama='$nama',sinode_jenkel='$jenkel',sinode_tmptlahir='$tmptlahir',sinode_tgllahir='$tgllahir',sinode_tgltardidi='$tgltardidi',sinode_tglmalua='$tglmalua',sinode_pendidikan='$pendidikan',sinode_pekerjaan='$pekerjaan',sinode_statuskel='$statuskk',sinode_notelp='$notelp',sinode_nourutkk='$nourutkk',sinode_lingk_id='$lingkungan',sinode_alamat='$alamat',sinode_flag_id='$flag' WHERE sinode_id='$kode'");
		return $hsl;
	}

	function hapus_sinode($kode){
		$hsl=$this->db->query("DELETE FROM tbl_sinodeagung WHERE sinode_id='$kode'");
		return $hsl;
	}


	// PEWARTA _________________________________________________________________________________________________________________

	
	function get_all_pewarta(){
		$hsl=$this->db->query("SELECT tbl_pewarta.*, katfilter_nama
			FROM tbl_pewarta JOIN tbl_katfilter
			ON pewarta_katfilter_id=katfilter_id");
		return $hsl;
	}

	function simpan_pewarta($jemaat_id,$notelp,$nama,$status){
		$hsl=$this->db->query("INSERT INTO tbl_pewarta (pewarta_jemaat_id,pewarta_notelp,pewarta_nama,pewarta_katfilter_id) VALUES ('$jemaat_id','$notelp','$nama','$status')");
		return $hsl;
	}
	
	function update_pewarta($kode,$jemaat_id,$notelp,$nama,$status){
		$hsl=$this->db->query("UPDATE tbl_pewarta SET pewarta_jemaat_id='$jemaat_id', pewarta_notelp='$notelp', pewarta_nama='$nama',pewarta_katfilter_id='$status' WHERE pewarta_id='$kode'");
		return $hsl;
	}

	function hapus_pewarta($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pewarta WHERE pewarta_id='$kode'");
		return $hsl;
	}





}