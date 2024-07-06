<?php 
class M_kepalakeluarga extends CI_Model{

	function get_all_kk(){
		$hsl=$this->db->query("SELECT tbl_kk.*,lingkungan_nama FROM tbl_kk JOIN tbl_lingkungan ON kk_lingk_id=lingkungan_id");
		return $hsl;
	}

	function simpan_kk($id,$nama,$lingkungan,$alamat){
		$hsl=$this->db->query("INSERT INTO tbl_kk (kk_id,kk_username,kk_lingk_id,kk_alamat) VALUES ('$id','$nama','$lingkungan','$alamat')");
		return $hsl;
	}
	
	function update_kk($kode,$nama,$lingkungan,$alamat){
		$hsl=$this->db->query("UPDATE tbl_kk SET kk_username='$nama',kk_lingk_id='$lingkungan',kk_alamat='$alamat' WHERE kk_id='$kode'");
		return $hsl;
	}
	
	function hapus_kk($kode){
		$hsl=$this->db->query("DELETE FROM tbl_kk WHERE kk_id='$kode'");
		return $hsl;
	}

	function getDataFilterkk($idkk){
		$datafilterkk	= $this->db->query("SELECT tbl_jemaat.*, kk_alamat,lingkungan_nama,flag_nama
			FROM tbl_jemaat JOIN tbl_kk
			ON tbl_jemaat.jemaat_nokk=tbl_kk.kk_id
			INNER JOIN tbl_lingkungan
			ON tbl_kk.kk_lingk_id=tbl_lingkungan.lingkungan_id
			INNER JOIN tbl_flag
			ON tbl_jemaat.jemaat_flag_id=tbl_flag.flag_id
			WHERE kk_id= '$idkk' order by jemaat_id asc");
		return $datafilterkk->result_array();
	}

	function get_allkk($idkk){
		$hsl=$this->db->query("SELECT tbl_pengguna.*, tbl_jemaat.*, tbl_kk.*,
			FROM tbl_pengguna JOIN tbl_jemaat
			ON pengguna_jemaat_id=jemaat_id
			INNER JOIN tbl_kk
			ON jemaat_nokk=kk_id
			WHERE jemaat_nokk='$idkk'");
		return $hsl;	
	}

}