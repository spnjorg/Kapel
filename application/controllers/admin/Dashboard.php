<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_pengunjung');
	}

	function index(){
		if($this->session->userdata('akses')=='1'){
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$this->load->view('admin/v_dashboard',$x);
		}elseif ($this->session->userdata('akses')=='2') {
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$this->load->view('pendeta/v_dashboard',$x);
			redirect('administrator');
		}elseif ($this->session->userdata('akses')=='3') {
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$this->load->view('parhaladoo/v_dashboard',$x);
			redirect('administrator');
		}else{
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			redirect('administrator');
		}
	
	}


	
}