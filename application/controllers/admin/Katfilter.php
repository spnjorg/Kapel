<?php
class Katfiler extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_kategori->get_all_katfilter();
		$this->load->view('admin/v_downloadlaporan',$x);
	}

	
}
