<?php
class M_jadwalibadah extends CI_Model{

	function get_all_ibadah(){
		$hsl=$this->db->query("SELECT tbl_jadwal_ibadah.*,DATE_FORMAT(ibadah_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_jadwal_ibadah ORDER BY jadwal_ibadah_id DESC");
		return $hsl;
	}
	function simpan_ibadah($nama,$tanggal,$waktu,$keterangan){
		$hsl=$this->db->query("INSERT INTO tbl_jadwal_ibadah(nama_ibadah,ibadah_tanggal,ibadah_waktu,ibadah_keterangan) VALUES ('$nama','$tanggal','$waktu','$keterangan')");
		return $hsl;
	}

	function update_ibadah($kode,$nama,$tanggal,$waktu,$keterangan){
		$hsl=$this->db->query("UPDATE tbl_jadwal_ibadah SET nama_ibadah='$nama',ibadah_tanggal='$tanggal',ibadah_waktu='$waktu',ibadah_keterangan='$keterangan' where jadwal_ibadah_id='$kode'");
		return $hsl;
	}
	function hapus_ibadah($kode){
		$hsl=$this->db->query("DELETE FROM tbl_jadwal_ibadah WHERE jadwal_ibadah_id='$kode'");
		return $hsl;
	}

	//front-end
	function get_ibadah_home(){
		$hsl=$this->db->query("SELECT tbl_jadwal_ibadah.*,DATE_FORMAT(ibadah_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_jadwal_ibadah ORDER BY jadwal_ibadah_id DESC limit 3");
		return $hsl;
	}
	function ibadah(){
		$hsl=$this->db->query("SELECT tbl_jadwal_ibadah.*,DATE_FORMAT(ibadah_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_jadwal_ibadah ORDER BY jadwal_ibadah_id DESC");
		return $hsl;
	}
	function ibadah_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_jadwal_ibadah.*,DATE_FORMAT(ibadah_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_jadwal_ibadah ORDER BY jadwal_ibadah_id DESC limit $offset,$limit");
		return $hsl;
	}


} 