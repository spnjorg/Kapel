<?php
class Sejarahgereja extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
			$x['tot_files']=$this->db->get('tbl_files')->num_rows();
			$x['tot_parhalado']=$this->db->get('tbl_parhalado')->num_rows();
			$x['tot_kk']=$this->db->get('tbl_kk')->num_rows();
			$x['tot_jemaat']=$this->db->get('tbl_jemaat')->num_rows();
			$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
			$this->load->view('depan/v_sejarahgereja',$x);
	}
}
