<?php
class M_pengguna extends CI_Model{

	function get_all_pengguna($type){
		$hsl=$this->db->query("SELECT*FROM tbl_pengguna WHERE pengguna_level = '$type'");
		return $hsl;	
	}

	function simpan_pengguna($nama,$username,$password,$email,$level,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_pengguna (pengguna_nama,pengguna_username,pengguna_password,pengguna_email,pengguna_level,pengguna_photo) VALUES ('$nama','$username',md5('$password'),'$email','$level','$gambar')");
		return $hsl;
	}
	//UPDATE PENGGUNA //
	function update_pengguna($kode,$nama,$username,$email,$level,$gambar){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_nama='$nama',pengguna_username='$username', pengguna_email='$email',pengguna_level='$level',pengguna_photo='$gambar' where pengguna_id='$kode'");
		return $hsl;
	}
	function update_pengguna_tanpa_gambar($kode,$nama,$username,$email,$level){
		$hsl=$this->db->query("UPDATE tbl_pengguna set pengguna_nama='$nama',pengguna_username='$username', pengguna_email='$email',pengguna_level='$level' where pengguna_id='$kode'");
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