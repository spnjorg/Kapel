<?php
class M_pengguna extends CI_Model{

	function get_all_pengguna(){
		$hsl=$this->db->query("SELECT tbl_pengguna.*, jemaat_notelp, jemaat_jenkel, IF(jemaat_jenkel='L','Laki-Laki','Perempuan') AS jenkel
			FROM tbl_pengguna JOIN tbl_jemaat
			ON pengguna_jemaat_id=jemaat_id");
		return $hsl;	
	}

	function simpan_pengguna($idjemaat,$nama,$username,$password,$email,$level,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_pengguna (pengguna_jemaat_id,pengguna_nama,pengguna_username,pengguna_password,pengguna_email,pengguna_level,pengguna_photo) VALUES ('$idjemaat','$nama','$username',md5('$password'),'$email','$level','$gambar')");
		return $hsl;
	}

	function simpan_pengguna_tanpa_gambar($idjemaat,$nama,$username,$password,$email,$level){
		$hsl=$this->db->query("INSERT INTO tbl_pengguna (pengguna_jemaat_id,pengguna_nama,pengguna_username,pengguna_password,pengguna_email,pengguna_level) VALUES ('$nama','$jenkel','$nama','$username',md5('$password'),'$email','$nohp','$level')");
		return $hsl;
	}

	//UPDATE PENGGUNA //
	function update_pengguna_tanpa_pass($kode,$idjemaat,$nama,$username,$password,$email,$level,$gambar){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_jemaat_id='$idjemaat',pengguna_nama='$nama',pengguna_username='$username',pengguna_email='$email',pengguna_level='$level',pengguna_photo='$gambar' where pengguna_id='$kode'");
		return $hsl;
	}
	function update_pengguna($kode,$idjemaat,$nama,$username,$password,$email,$level,$gambar){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_jemaat_id='$idjemaat',pengguna_nama='$nama',pengguna_username='$username',pengguna_password='$password',pengguna_email='$email',pengguna_level='$level',pengguna_photo='$gambar' where pengguna_id='$kode'");
		return $hsl;
	}

	function update_pengguna_tanpa_pass_dan_gambar($kode,$idjemaat,$nama,$username,$password,$email,$level){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_jemaat_id='$idjemaat',pengguna_nama='$nama',pengguna_username='$username',pengguna_email='$email',pengguna_level='$level' where pengguna_id='$kode'");
		return $hsl;
	}
	function update_pengguna_tanpa_gambar($kode,$idjemaat,$nama,$username,$password,$email,$level){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_jemaat_id='$idjemaat',pengguna_nama='$nama',pengguna_username='$username',pengguna_password='$password',pengguna_email='$email',pengguna_nohp='$nohp',pengguna_level='$level' where pengguna_id='$kode'");
		return $hsl;
	}
	//END UPDATE PENGGUNA//

	function hapus_pengguna($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pengguna where pengguna_id='$kode'");
		return $hsl;
	}
	function getusername($id){
		$hsl=$this->db->query("SELECT * FROM tbl_pengguna where pengguna_id='$id'");
		return $hsl;
	}
	function resetpass($id,$pass){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_password=md5('$pass') where pengguna_id='$id'");
		return $hsl;
	}

	function get_pengguna_login($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_pengguna where pengguna_id='$kode'");
		return $hsl;
	}


	//SIMPAN REGISTRASI ______________________________________________________________________________________________

	function simpan_registrasi($nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_pengguna (pengguna_nama,pengguna_jenkel,pengguna_username,pengguna_password,pengguna_email,pengguna_nohp,pengguna_level,pengguna_photo) VALUES ('$nama','$jenkel','$username',md5('$password'),'$email','$nohp','$level','$gambar')");
		return $hsl;
	}


}