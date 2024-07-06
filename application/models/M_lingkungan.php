<?php
class M_lingkungan extends CI_Model{

	function get_all_lingkungan(){
		$hsl=$this->db->query("SELECT * FROM tbl_lingkungan");
		return $hsl;
	}

	function simpan_lingkungan($id,$lingkungan,$jalan){
		$hsl=$this->db->query("INSERT into tbl_lingkungan(lingkungan_id,lingkungan_nama,lingkungan_jalan) values('$id','$lingkungan','$jalan')");
		return $hsl;
	}
	function update_lingkungan($kode,$lingkungan,$jalan){
		$hsl=$this->db->query("UPDATE tbl_lingkungan set lingkungan_id='$kode', lingkungan_nama='$lingkungan' , lingkungan_jalan='$jalan' where lingkungan_id='$kode'");
		return $hsl;
	}
	function hapus_lingkungan($kode){
		$hsl=$this->db->query("DELETE from tbl_lingkungan where lingkungan_id='$kode'");
		return $hsl;
	}
	
	function get_lingkungan_byid($lingkungan_id){
		$hsl=$this->db->query("SELECT * from tbl_lingkungan where lingkungan_id='$lingkungan_id'");
		return $hsl;
	}

}