<?php
class M_kategori extends CI_Model{

	function get_all_kategori(){
		$hsl=$this->db->query("SELECT * from tbl_kategori");
		return $hsl;
	}

	function get_all_katfilter(){
		$hsl=$this->db->query("SELECT * FROM tbl_katfilter");
		return $hsl;
	}

	function get_all_katsurat(){
		$hsl=$this->db->query("SELECT * FROM tbl_katsurat");
		return $hsl;
	}

	function get_all_katusia(){
		$hsl=$this->db->query("SELECT * FROM tbl_katfilter");
		return $hsl;
	}

	function get_all_minggu(){
		$hsl=$this->db->query("SELECT * FROM tbl_minggu");
		return $hsl;
	}

	function get_all_flag(){
		$hsl=$this->db->query("SELECT * FROM tbl_flag");
		return $hsl;
	}

	function simpan_kategori($kategori){
		$hsl=$this->db->query("insert into tbl_kategori(kategori_nama) values('$kategori')");
		return $hsl;
	}

	function update_kategori($kode,$kategori){
		$hsl=$this->db->query("update tbl_kategori set kategori_nama='$kategori' where kategori_id='$kode'");
		return $hsl;
	}

	function hapus_kategori($kode){
		$hsl=$this->db->query("delete from tbl_kategori where kategori_id='$kode'");
		return $hsl;
	}
	
	function get_kategori_byid($kategori_id){
		$hsl=$this->db->query("select * from tbl_kategori where kategori_id='$kategori_id'");
		return $hsl;
	}

	function get_all_video(){
		$hsl=$this->db->query("SELECT * from tbl_video");
		return $hsl;
	}

}