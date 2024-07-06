<?php
class M_renungan extends CI_Model{

	function get_all_renungan(){
		$hsl=$this->db->query("SELECT tbl_renungan.*,DATE_FORMAT(renungan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_renungan ORDER BY renungan_id DESC");
		return $hsl;
	}
	function simpan_renungan($judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("insert into tbl_renungan(renungan_judul,renungan_isi,renungan_kategori_id,renungan_kategori_nama,renungan_img_slider,renungan_pengguna_id,renungan_author,renungan_gambar,renungan_slug) values ('$judul','$isi','$kategori_id','$kategori_nama','$imgslider','$user_id','$user_nama','$gambar','$slug')");
		return $hsl;
	}
	function get_renungan_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_renungan.*,DATE_FORMAT(renungan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_renungan where renungan_id='$kode'");
		return $hsl;
	}
	function update_renunganKeep($renungan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("update tbl_tulisan set tulisan_judul='$judul',tulisan_isi='$isi',tulisan_kategori_id='$kategori_id',tulisan_kategori_nama='$kategori_nama',tulisan_img_slider='$imgslider',tulisan_pengguna_id='$user_id',tulisan_author='$user_nama',tulisan_gambar='$gambar',tulisan_slug='$slug' where tulisan_id='$tulisan_id'");
		return $hsl;
	}

	function update_renungan($renungan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug){
		$hsl=$this->db->query("update tbl_renungan set renungan_judul='$judul',renungan_isi='$isi',renungan_kategori_id='$kategori_id',renungan_kategori_nama='$kategori_nama',renungan_img_slider='$imgslider',renungan_pengguna_id='$user_id',renungan_author='$user_nama',renungan_gambar='$gambar',renungan_slug='$slug' where renungan_id='$renungan_id'");
		return $hsl;
	}

	function update_renungan_tanpa_img($renungan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$slug){
		$hsl=$this->db->query("update tbl_renungan set renungan_judul='$judul',renungan_isi='$isi',renungan_kategori_id='$kategori_id',renungan_kategori_nama='$kategori_nama',renungan_img_slider='$imgslider',renungan_pengguna_id='$user_id',renungan_author='$user_nama',renungan_slug='$slug' where renungan_id='$renungan_id'");
		return $hsl;
	}
	function hapus_renungan($kode){
		$hsl=$this->db->query("delete from tbl_renungan where renungan_id='$kode'");
		return $hsl;
	}

	//Front-End
	function get_berita_slider(){
		$hsl=$this->db->query("SELECT tbl_renungan.*,DATE_FORMAT(renungan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_renungan where renungan_img_slider='1' ORDER BY renungan_id DESC");
		return $hsl;
	}
	function get_berita_home(){
		$hsl=$this->db->query("SELECT tbl_renungan.*,DATE_FORMAT(renungan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_renungan ORDER BY renungan_id DESC limit 4");
		return $hsl;
	}

	function berita_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_renungan.*,DATE_FORMAT(renungan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_renungan ORDER BY renungan_id DESC limit $offset,$limit");
		return $hsl;
	}

	function berita(){
		$hsl=$this->db->query("SELECT tbl_renungan.*,DATE_FORMAT(renungan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_renungan ORDER BY renungan_id DESC");
		return $hsl;
	}
	function get_berita_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_renungan.*,DATE_FORMAT(renungan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_renungan where renungan_id='$kode'");
		return $hsl;
	}

	function cari_berita($keyword){
		$hsl=$this->db->query("SELECT tbl_renungan.*,DATE_FORMAT(renungan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_renungan WHERE renungan_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

	function show_komentar_by_renungan_id($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_tulisan_id='$kode' AND komentar_status='1' AND komentar_parent='0'");
		return $hsl;
	}

	
//VIDEO RENUNGAN____________________________________________________________________________________________________________________
	function simpan_video($judul,$link,$ket){
		$hsl=$this->db->query("INSERT into tbl_video (video_judul,video_link,video_ket) values ('$judul','$link','$ket')");
		return $hsl;
	}

	function update_video($kode,$judul,$link,$ket){
		$hsl=$this->db->query("UPDATE tbl_video SET video_judul='$judul',video_link='$link',video_ket='$ket' WHERE video_id='$kode'");
		return $hsl;
	}

	function hapus_video($kode){
		$hsl=$this->db->query("DELETE FROM tbl_video WHERE video_id='$kode'");
		return $hsl;
	}

	function get_berita_video(){
		$hsl=$this->db->query("SELECT * from tbl_video ORDER BY video_id DESC limit 4");
		return $hsl;
	}


}
