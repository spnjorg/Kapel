<?php
class M_jadwalpetugas extends CI_Model{

	function get_all_petugas(){
		$hsl=$this->db->query("SELECT tbl_petugas.*,DATE_FORMAT(petugas_tgl,'%d/%m/%Y') AS tanggal FROM tbl_petugas ORDER BY petugas_id DESC");
		return $hsl;
	}

	function get_all_petugasskm(){
		$hsl=$this->db->query("SELECT tbl_petugasskm.*,DATE_FORMAT(petugas_skmtgl,'%d/%m/%Y') AS tanggal FROM tbl_petugasskm ORDER BY petugas_skmid DESC");
		return $hsl;
	}

//WEB____________________

	function get_all_petugastanggal(){
		$hsl=$this->db->query("SELECT tbl_petugas.*,DATE_FORMAT(petugas_tgl,'%d/%m/%Y') AS tanggal
			FROM tbl_petugas 
			WHERE petugas_tgl='2022-07-17'
			ORDER BY petugas_id DESC");
		return $hsl;
	}

// PETUGAS IBADAH UMUM___________________________________________________________________________________________________________________
	

	function simpan_petugas($tanggal,$jamita1,$jamita2,$jamita3,$agenda1,$agenda2,$agenda3,$tingting1,$tingting2,$tingting3,$pelean1,$pelean2,$pelean3,$balkon1,$balkon2,$balkon3,$dlmgereja1,$dlmgereja2,$dlmgereja3,$musik,$ket){
		$hsl=$this->db->query("INSERT INTO tbl_petugas(petugas_tgl,petugas_jamita1,petugas_jamita2,petugas_jamita3,petugas_agenda1,petugas_agenda2,petugas_agenda3,petugas_tingting1,petugas_tingting2,petugas_tingting3,petugas_pelean1,petugas_pelean2,petugas_pelean3,petugas_balkon1,petugas_balkon2,petugas_balkon3,petugas_dlmgereja1,petugas_dlmgereja2,petugas_dlmgereja3,petugas_musik,petugas_ket) VALUES ('$tanggal','$jamita1','$jamita2','$jamita3','$agenda1','$agenda2','$agenda3','$tingting1','$tingting2','$tingting3','$pelean1','$pelean2','$pelean3','$balkon1','$balkon2','$balkon3','$dlmgereja1','$dlmgereja2','$dlmgereja3','$musik','$ket')");
		return $hsl;
	}

	function update_petugas($kode,$tanggal,$jamita1,$jamita2,$jamita3,$agenda1,$agenda2,$agenda3,$tingting1,$tingting2,$tingting3,$pelean1,$pelean2,$pelean3,$balkon1,$balkon2,$balkon3,$dlmgereja1,$dlmgereja2,$dlmgereja3,$musik,$ket){
		$hsl=$this->db->query("UPDATE tbl_petugas SET petugas_tgl='$tanggal',petugas_jamita1='$jamita1',petugas_jamita2='$jamita2',petugas_jamita3='$jamita3',petugas_agenda1='$agenda1',petugas_agenda2='$agenda2',petugas_agenda3='$agenda3',petugas_tingting1='$tingting1',petugas_tingting2='$tingting2',petugas_tingting3='$tingting3',petugas_pelean1='$pelean1',petugas_pelean2='$pelean2',petugas_pelean3='$pelean3',petugas_balkon1='$balkon1',petugas_balkon2='$balkon2',petugas_balkon3='$balkon3',petugas_dlmgereja1='$dlmgereja1',petugas_dlmgereja2='$dlmgereja2',petugas_dlmgereja3='$dlmgereja3',petugas_musik='$musik',petugas_ket='$ket'  where petugas_id='$kode'");
		return $hsl;
	}
	function hapus_petugas($kode){
		$hsl=$this->db->query("DELETE FROM tbl_petugas WHERE petugas_id='$kode'");
		return $hsl;
	}

// PETUGAS IBADAH SEKOLAH MINGGU__________________________________________________________________________________________________

	function simpan_petugasskm($tanggal,$skmliturgis,$skmkhotbah,$skmpiket,$skmmusik,$skmket){
		$hsl=$this->db->query("INSERT INTO tbl_petugasskm(petugas_skmtgl,petugas_skmliturgis,petugas_skmkhotbah,petugas_skmpiket,petugas_skmmusik,petugas_skmket) VALUES ('$tanggal','$skmliturgis','$skmkhotbah','$skmpiket','$skmmusik','$skmket')");
		return $hsl;
	}

	function update_petugasskm($kode,$tanggal,$skmliturgis,$skmkhotbah,$skmpiket,$skmmusik,$skmket){
		$hsl=$this->db->query("UPDATE tbl_petugas SET petugas_skmtgl='$tanggal',petugas_skmliturgis='$skmliturgis',petugas_skmkhotbah='$skmkhotbah',petugas_skmpiket='$skmpiket',petugas_skmmusik='$skmmusik',petugas_skmket='$skmket'  where petugas_skmid='$kode'");
		return $hsl;
	}
	function hapus_petugasskm($kode){
		$hsl=$this->db->query("DELETE FROM tbl_petugasskm WHERE petugas_skmid='$kode'");
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