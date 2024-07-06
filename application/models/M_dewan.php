<?php 
class M_dewan extends CI_Model{

	function get_all_dewan(){
		$hsl=$this->db->query("SELECT tbl_dewan.*,tbl_parhalado.parhalado_jemaat_id,tbl_parhalado.parhalado_photo,tbl_jemaat.jemaat_nama,tbl_kdewan.kdewan_nama
		FROM tbl_dewan JOIN tbl_parhalado
		ON dewan_parhalado_id=parhalado_id
		INNER JOIN tbl_jemaat
		ON parhalado_jemaat_id=jemaat_id
		INNER JOIN tbl_kdewan
		ON dewan_katid=kdewan_id");
		return $hsl;
	}

	function simpan_dewan($nama,$dewan,$jabatan){
		$hsl=$this->db->query("INSERT INTO tbl_dewan (dewan_parhalado_id,dewan_katid,dewan_jabatan) VALUES ('$nama','$dewan','$jabatan')");
		return $hsl;
	}

	function update_dewan($kode,$nama,$dewan,$jabatan){
		$hsl=$this->db->query("UPDATE tbl_dewan SET dewan_parhalado_id='$nama',dewan_katid='$dewan',dewan_jabatan='$jabatan' WHERE dewan_id='$kode'");
		return $hsl;
	}
	
	function hapus_dewan($kode){
		$hsl=$this->db->query("DELETE FROM tbl_dewan WHERE dewan_id='$kode'");
		return $hsl;
	}

	function dewan(){
		$hsl=$this->db->query("SELECT tbl_dewan.*,tbl_parhalado.parhalado_jemaat_id,tbl_parhalado.parhalado_photo,tbl_jemaat.jemaat_nama,tbl_kdewan.kdewan_nama
		FROM tbl_dewan JOIN tbl_parhalado
		ON dewan_parhalado_id=parhalado_id
		INNER JOIN tbl_jemaat
		ON parhalado_jemaat_id=jemaat_id
		INNER JOIN tbl_kdewan
		ON dewan_katid=kdewan_id");
		return $hsl;
	}
	function dewan_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_dewan.*,tbl_parhalado.parhalado_jemaat_id,tbl_parhalado.parhalado_photo,tbl_jemaat.jemaat_nama,tbl_kdewan.kdewan_nama
		FROM tbl_dewan JOIN tbl_parhalado
		ON dewan_parhalado_id=parhalado_id
		INNER JOIN tbl_jemaat
		ON parhalado_jemaat_id=jemaat_id
		INNER JOIN tbl_kdewan
		ON dewan_katid=kdewan_id 
			limit $offset,$limit");
		return $hsl;
	}

	function dewankoinonia_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_dewan.*,tbl_parhalado.parhalado_jemaat_id,tbl_parhalado.parhalado_photo,tbl_jemaat.jemaat_nama,tbl_kdewan.kdewan_nama
		FROM tbl_dewan JOIN tbl_parhalado
		ON dewan_parhalado_id=parhalado_id
		INNER JOIN tbl_jemaat
		ON parhalado_jemaat_id=jemaat_id
		INNER JOIN tbl_kdewan
		ON dewan_katid=kdewan_id
			WHERE kdewan_nama='Koinonia'
			ORDER BY dewan_id
			limit $offset,$limit");
		return $hsl;
	}

	function dewanmarturia_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_dewan.*,tbl_parhalado.parhalado_jemaat_id,tbl_parhalado.parhalado_photo,tbl_jemaat.jemaat_nama,tbl_kdewan.kdewan_nama
		FROM tbl_dewan JOIN tbl_parhalado
		ON dewan_parhalado_id=parhalado_id
		INNER JOIN tbl_jemaat
		ON parhalado_jemaat_id=jemaat_id
		INNER JOIN tbl_kdewan
		ON dewan_katid=kdewan_id
			WHERE kdewan_nama='Marturia'
			ORDER BY dewan_id
			limit $offset,$limit");
		return $hsl;
	}

	function dewandiakonia_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_dewan.*,tbl_parhalado.parhalado_jemaat_id,tbl_parhalado.parhalado_photo,tbl_jemaat.jemaat_nama,tbl_kdewan.kdewan_nama
		FROM tbl_dewan JOIN tbl_parhalado
		ON dewan_parhalado_id=parhalado_id
		INNER JOIN tbl_jemaat
		ON parhalado_jemaat_id=jemaat_id
		INNER JOIN tbl_kdewan
		ON dewan_katid=kdewan_id
			WHERE kdewan_nama='Diakonia'
			ORDER BY dewan_id
			limit $offset,$limit");
		return $hsl;
	}

}
