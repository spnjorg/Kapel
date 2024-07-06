<?php

class Fakultas extends CI_Controller {
    function __construct() {
        parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };

        $this->load->model('m_fakultas');
    }

    public function index() {
        $kode = $this->session->userdata('idadmin');
        $type = $this->input->get('type');
		$code = '';
	
		if ($type == "fakultas") {
			$code = '1';
		} else {
			$code = '2';
		}
	
		$x['data'] = $this->m_fakultas->get_all_fakultas($code);
	
		if ($type == "fakultas") {
			$this->load->view('admin/v_fakultas', $x);
		} else {
			$this->load->view('admin/v_fakultas_lainnya', $x);
		}
    }
}