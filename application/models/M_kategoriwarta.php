<?php
class M_kategoriwarta extends CI_Model{

	function get_all_kwarta(){
		$hsl=$this->db->query("SELECT * FROM tbl_kategori_warta");
		return $hsl;
	}
	function simpan_kwarta($kategori){
		$hsl=$this->db->query("insert into tbl_kategori_warta(kategori_warta_nama) values('$kategori')");
		return $hsl;
	}
	function update_kwarta($kode,$kategori){
		$hsl=$this->db->query("update tbl_kategori_warta set kategori_warta_nama='$kategori' where kategori_warta_id='$kode'");
		return $hsl;
	}
	function hapus_kwarta($kode){
		$hsl=$this->db->query("delete from tbl_kategori_warta where kategori_warta_id='$kode'");
		return $hsl;
	}
	
	function get_kwarta_byid($kategori_warta_id){
		$hsl=$this->db->query("select * from tbl_kategori_warta where kategori_warta_id='$kategori_warta_id'");
		return $hsl;
	}

}