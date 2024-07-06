<?php
class Ama extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_jemaat');
		$this->load->model('m_lingkungan');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}

	function index(){
		$x['jemaat']=$this->m_jemaat->get_all_jemaat();
		$x['user']=$this->m_pengguna->get_all_pengguna();
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_jemaat->get_all_ama();
		$this->load->view('admin/v_ama',$x);
	}





}