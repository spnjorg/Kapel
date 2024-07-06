<?php
class M_warta extends CI_Model{

	function get_all_warta(){
		$hsl=$this->db->query("SELECT SELECT tbl_wartafix.*, kategori_warta_nama , minggu_nama
			FROM tbl_wartafix JOIN tbl_kategori_warta 
			ON wartafix_kat_id=kategori_warta_id
			INNER JOIN tbl_minggu
			ON wartafix_minggu_id=minggu_id 
			ORDER BY wartafix_id DESC");
		return $hsl;
	}


	function get_all_wnasorang(){
		$hsl=$this->db->query("SELECT tbl_wartafix.*, kategori_warta_nama , minggu_nama
			FROM tbl_wartafix JOIN tbl_kategori_warta 
			ON wartafix_kat_id=kategori_warta_id
			INNER JOIN tbl_minggu
			ON wartafix_minggu_id=minggu_id
			WHERE wartafix_kat_id=1");
		return $hsl;
	}

	function get_all_wnamonding(){
		$hsl=$this->db->query("SELECT tbl_wartafix.*, kategori_warta_nama , minggu_nama
			FROM tbl_wartafix JOIN tbl_kategori_warta 
			ON wartafix_kat_id=kategori_warta_id
			INNER JOIN tbl_minggu
			ON wartafix_minggu_id=minggu_id
			WHERE wartafix_kat_id=2");
		return $hsl;
	}

	function get_all_wjmenikah(){
		$hsl=$this->db->query("SELECT tbl_wartafix.*, kategori_warta_nama , minggu_nama
			FROM tbl_wartafix JOIN tbl_kategori_warta 
			ON wartafix_kat_id=kategori_warta_id
			INNER JOIN tbl_minggu
			ON wartafix_minggu_id=minggu_id
			WHERE wartafix_kat_id=3");
		return $hsl;
	}

	function get_all_whamuliateon(){
		$hsl=$this->db->query("SELECT tbl_wartafix.*, kategori_warta_nama , minggu_nama
			FROM tbl_wartafix JOIN tbl_kategori_warta 
			ON wartafix_kat_id=kategori_warta_id
			INNER JOIN tbl_minggu
			ON wartafix_minggu_id=minggu_id
			WHERE wartafix_kat_id=4");
		return $hsl;
	}

	function get_all_wjpindah(){
		$hsl=$this->db->query("SELECT tbl_wartafix.*, kategori_warta_nama , minggu_nama
			FROM tbl_wartafix JOIN tbl_kategori_warta 
			ON wartafix_kat_id=kategori_warta_id
			INNER JOIN tbl_minggu
			ON wartafix_minggu_id=minggu_id
			WHERE wartafix_kat_id=5");
		return $hsl;
	}


	function get_all_wartalain(){
		$hsl=$this->db->query("SELECT tbl_wartafix.*, kategori_warta_nama , minggu_nama
			FROM tbl_wartafix JOIN tbl_kategori_warta 
			ON wartafix_kat_id=kategori_warta_id
			INNER JOIN tbl_minggu
			ON wartafix_minggu_id=minggu_id
			WHERE wartafix_kat_id=6");
		return $hsl;
	}


	// function get_all_wartain(){
	// 	$hsl=$this->db->query("SELECT tbl_wartain.*, pewarta_nama
	// 	FROM tbl_wartain JOIN tbl_pewarta
	// 	ON wartain_notelp=pewarta_notelp");
	// 	return $hsl;
	// }

	function get_all_wartain(){
		$hsl=$this->db->query("SELECT tbl_wartain.*, pewarta_nama
		FROM tbl_wartain JOIN tbl_pewarta
		ON wartain_notelp=pewarta_notelp");
		return $hsl;
	}


	public function getFilterWarta($tglawal,$tglakhir) {
		$this->db->where('wartain_tanggal >=', $tglawal);
		$this->db->where('wartain_tanggal <=', $tglakhir);
		return $this->db->get('tbl_wartain')->result_array();
	}

	public function get_data($tglawal = null, $tglakhir = null)
{
    $this->db->select('*');
    $this->db->from('tbl_wartain');
    $this->db->where('wartain_tanggal >=', $tglawal);
    $this->db->where('wartain_tanggal <=', $tglakhir);
    return $this->db->get()->result();
}


	function simpan_wartafix($tanggal,$nama,$deskripsi,$kategori,$minggu,$status){
		$hsl=$this->db->query("INSERT INTO tbl_wartafix (wartafix_tgl,wartafix_nama,wartafix_isi,wartafix_kat_id,wartafix_minggu_id,wartafix_status) VALUES ('$tanggal','$nama','$deskripsi','$kategori','$minggu','$status')");
		return $hsl;
	}

	function update_wartafix($kode,$tanggal,$nama,$deskripsi,$kategori,$minggu,$status){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("UPDATE tbl_wartafix SET wartafix_tgl='$tanggal',wartafix_nama='$nama',wartafix_isi='$deskripsi',wartafix_kat_id='$kategori',wartafix_minggu_id='$minggu',wartafix_status='$status' where wartafix_id='$kode'");
		return $hsl;
	}

	function hapus_wartafix($kode){
		$hsl=$this->db->query("DELETE FROM tbl_wartafix WHERE wartafix_id='$kode'");
		return $hsl;
	}

	function hapus_wartain($kode){
		$hsl=$this->db->query("DELETE FROM tbl_wartain WHERE wartain_id='$kode'");
		return $hsl;
	}

	//Front-end

	function get_warta_home(){
		$hsl=$this->db->query("SELECT * FROM v_wartahome ORDER BY wartafix_id DESC limit 4");
		return $hsl;
	}

	function wartakeep(){
		$hsl=$this->db->query("SELECT tbl_wartafix.*,DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_warta ORDER BY wartafix_id DESC");
		return $hsl;
	}

	function wartahome(){
		$hsl=$this->db->query("SELECT tbl_wartafix.*,kategori_warta_nama,DATE_FORMAT(wartafix_tgl,'%d/%m/%Y') AS tanggal FROM tbl_wartafix JOIN tbl_kategori_warta ON wartafix_kat_id=kategori_warta_id 
			WHERE wartafix_minggu_id=1
			ORDER BY wartafix_id DESC");
		return $hsl;
	}
	

	function warta(){
		$hsl=$this->db->query("SELECT tbl_warta.*,kategori_warta_nama,DATE_FORMAT(warta_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_warta JOIN tbl_kategori_warta ON warta_kategori_id=kategori_warta_id ORDER BY warta_id DESC");
		return $hsl;
	}
	function warta_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_wartafix.*,kategori_warta_nama,DATE_FORMAT(wartafix_tgl,'%d/%m/%Y') AS tanggal 
			FROM tbl_wartafix JOIN tbl_kategori_warta 
			ON wartafix_kat_id=kategori_warta_id 
			WHERE wartafix_status=1
			ORDER BY wartafix_id DESC limit $offset,$limit");
		return $hsl;
	}


}
