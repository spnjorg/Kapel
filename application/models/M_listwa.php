<?php
class M_listwa extends CI_Model{

	function get_all_listwa(){
		$hsl=$this->db->query("SELECT * FROM tbl_wartain ");
		return $hsl;
	}

	function simpan_warta($judul,$deskripsi,$tanggal,$kategori){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("INSERT INTO tbl_warta(warta_judul,warta_deskripsi,warta_tanggal,warta_kategori_id,warta_author) VALUES ('$judul','$deskripsi','$tanggal','$kategori','$author')");
		return $hsl;
	}
	function update_warta($kode,$judul,$deskripsi,$tanggal,$kategori){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("UPDATE tbl_warta SET warta_judul='$judul',warta_deskripsi='$deskripsi',warta_tanggal='$tanggal',warta_kategori_id='$kategori',warta_author='$author' where warta_id='$kode'");
		return $hsl;
	}
	function hapus_warta($kode){
		$hsl=$this->db->query("DELETE FROM tbl_warta WHERE warta_id='$kode'");
		return $hsl;
	}

	//Front-end
	function get_warta_home(){
		$hsl=$this->db->query("SELECT tbl_warta.*,kategori_warta_nama,DATE_FORMAT(warta_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_warta JOIN tbl_kategori_warta ON warta_kategori_id=kategori_warta_id ORDER BY warta_id DESC limit 3");
		return $hsl;
	}

	function warta(){
		$hsl=$this->db->query("SELECT tbl_warta.*,kategori_warta_nama,DATE_FORMAT(warta_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_warta JOIN tbl_kategori_warta ON warta_kategori_id=kategori_warta_id ORDER BY warta_id DESC");
		return $hsl;
	}
	function pengumuman_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_warta.*,kategori_warta_nama,DATE_FORMAT(warta_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_warta JOIN tbl_kategori_warta ON warta_kategori_id=kategori_warta_id ORDER BY warta_id DESC limit $offset,$limit");
		return $hsl;
	}


}
