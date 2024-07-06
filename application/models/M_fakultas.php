<?php
class M_fakultas extends CI_Model{

    function get_all_fakultas($type){
        $result = $this->db->query("SELECT F.*, U.pengguna_nama as nama_admin FROM tbl_fakultas F INNER JOIN tbl_pengguna U ON  U.pengguna_id = F.admin_fakultas WHERE F.is_fakultas = '$type'");
        return $result;
    }
}