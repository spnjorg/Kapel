<?php
class M_kdewan extends CI_Model{

	function get_all_kdewan(){
		$hsl=$this->db->query("SELECT * FROM tbl_kdewan");
		return $hsl;
	}
	function simpan_kdewan($kategori){
		$hsl=$this->db->query("insert into tbl_kdewan(kdewan_nama) values('$kategori')");
		return $hsl;
	}
	function update_kdewan($kode,$kategori){
		$hsl=$this->db->query("update tbl_kdewan set kdewan_nama='$kategori' where kdewan_id='$kode'");
		return $hsl;
	}
	function hapus_kdewan($kode){
		$hsl=$this->db->query("delete from tbl_kdewan where kdewan_id='$kode'");
		return $hsl;
	}
	
	function get_kdewan_byid($kategori_id){
		$hsl=$this->db->query("select * from tbl_kdewan where kdewan_id='$kdewan_id'");
		return $hsl;
	}

	function kdewan(){
		$hsl=$this->db->query("select * from tbl_kdewan");
		return $hsl;
	}

}