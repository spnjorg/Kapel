<?php
class Registrasi extends CI_Controller{
	function __construct(){
		parent::__construct();

		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('user');
            redirect($url);
        };
		
		$this->load->model('m_pengguna');
		$this->load->library('upload');
		$this->load->model('m_renungan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_warta');
		$this->load->model('m_agenda');
		$this->load->model('m_files');
		$this->load->model('m_jadwalibadah');
		$this->load->model('m_jadwalpetugas');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}


	function index(){
		// $kode=$this->session->userdata('idadmin');
		// $x['user']=$this->m_pengguna->get_pengguna_login($kode);
		    $x['renungan']=$this->m_renungan->get_berita_home();
			$x['video']=$this->m_renungan->get_berita_video();
			$x['warta']=$this->m_warta->get_warta_home();
			$x['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$x['jadwalibadah']=$this->m_jadwalibadah->get_all_ibadah();
			$x['jadwalpetugas']=$this->m_jadwalpetugas->get_all_petugastanggal();
			$x['agenda']=$this->m_agenda->get_agenda_home();
			$x['tot_parhalado']=$this->db->get('tbl_parhalado')->num_rows();
			$x['tot_kk']=$this->db->get('tbl_kk')->num_rows();
			$x['tot_jemaat']=$this->db->get('tbl_jemaat')->num_rows();
			$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();

		$x['data']=$this->m_pengguna->get_all_pengguna();
		$this->load->view('user/v_home',$x);
	}

	
    function simpan_registrasi(){
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $nama=$this->input->post('xnama');
	                        $jenkel=$this->input->post('xjenkel');
	                        $username=$this->input->post('xusername');
	                        $password=$this->input->post('xpassword');
                            $konfirm_password=$this->input->post('xpassword2');
                            $email=$this->input->post('xemail');
                            $nohp=$this->input->post('xkontak');
							$level=4;
     						if ($password <> $konfirm_password) {
     							echo $this->session->set_flashdata('msg','error');
	               				redirect('admin/registrasi');
     						}else{
	               				$this->m_pengguna->simpan_registrasi($nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar);
	                    		echo $this->session->set_flashdata('msg','success');
	               				redirect('admin/registrasi');
	               				
	               			}
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/registrasi');
	                }
	                 
	            }else{
	            	$nama=$this->input->post('xnama');
	                $jenkel=$this->input->post('xjenkel');
	                $username=$this->input->post('xusername');
	                $password=$this->input->post('xpassword');
                    $konfirm_password=$this->input->post('xpassword2');
                    $email=$this->input->post('xemail');
                    $nohp=$this->input->post('xkontak');
					$level=4;
	            	if ($password <> $konfirm_password) {
     					echo $this->session->set_flashdata('msg','error');
	               		redirect('admin/registrasi');
     				}else{
	               		$this->m_pengguna->simpan_pengguna_tanpa_gambar($nama,$jenkel,$username,$password,$email,$nohp,$level);
	                    echo $this->session->set_flashdata('msg','success');
	               		redirect('admin/registrasi');
	               	}
	            } 

	}


}