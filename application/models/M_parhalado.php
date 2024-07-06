<?php 
class M_parhalado extends CI_Model{

	function get_all_parhalado(){
		$hsl=$this->db->query("SELECT tbl_parhalado.*,tbl_jemaat.*, tbl_kk.*, lingkungan_nama 
			FROM tbl_parhalado JOIN tbl_jemaat 
			ON parhalado_jemaat_id=jemaat_id
			INNER JOIN tbl_kk
			ON jemaat_nokk=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id");
		return $hsl;
	}

	function simpan_parhalado($jemaat_id,$jabatan,$dilantik,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_parhalado (parhalado_jemaat_id,parhalado_jabatan,parhalado_dilantik,parhalado_photo) VALUES ('$jemaat_id','$jabatan','$dilantik','$photo')");
		return $hsl;
	}
	function simpan_parhalado_tanpa_img($jemaat_id,$jabatan,$dilantik){
		$hsl=$this->db->query("INSERT INTO tbl_parhalado (parhalado_jemaat_id,parhalado_jabatan,parhalado_dilantik) VALUES ('$jemaat_id','$jabatan','$dilantik')");
		return $hsl;
	}

	function update_parhalado($kode,$jemaat_id,$jabatan,$dilantik,$photo){
		$hsl=$this->db->query("UPDATE tbl_parhalado SET parhalado_jemaat_id='$jemaat_id',parhalado_jabatan='$jabatan',parhalado_dilantik='$dilantik',parhalado_photo='$photo' WHERE parhalado_id='$kode'");
		return $hsl;
	}
	function update_parhalado_tanpa_img($kode,$jemaat_id,$jabatan,$dilantik){
		$hsl=$this->db->query("UPDATE tbl_parhalado SET parhalado_jemaat_id='$jemaat_id',parhalado_jabatan='$jabatan',parhalado_dilantik='$dilantik' WHERE parhalado_id='$kode'");
		return $hsl;
	}
	function hapus_parhalado($kode){
		$hsl=$this->db->query("DELETE FROM tbl_parhalado WHERE parhalado_id='$kode'");
		return $hsl;
	}

	function parhalado(){
		$hsl=$this->db->query("SELECT tbl_parhalado.*,tbl_jemaat.*, tbl_kk.*, lingkungan_nama 
			FROM tbl_parhalado JOIN tbl_jemaat 
			ON parhalado_jemaat_id=jemaat_id
			INNER JOIN tbl_kk
			ON jemaat_nokk=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id");
		return $hsl;
	}
	function parhalado_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_parhalado.*,tbl_jemaat.*, tbl_kk.*, lingkungan_nama 
			FROM tbl_parhalado JOIN tbl_jemaat 
			ON parhalado_jemaat_id=jemaat_id
			INNER JOIN tbl_kk
			ON jemaat_nokk=kk_id
			INNER JOIN tbl_lingkungan
			ON kk_lingk_id=lingkungan_id
			limit $offset,$limit");
		return $hsl;
	}

}