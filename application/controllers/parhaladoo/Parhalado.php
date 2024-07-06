<?php
class Parhalado extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_parhalado');
		$this->load->model('m_pengguna');
		$this->load->model('m_lingkungan');
		$this->load->library('upload');
	}


	function index(){
		$x['lingkungan']=$this->m_lingkungan->get_all_lingkungan();
		$x['data']=$this->m_parhalado->get_all_parhalado();
		$this->load->view('parhaladoo/v_parhalado',$x);
	}
	
	function simpan_parhalado(){
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

	                        $photo=$gbr['file_name'];
							$jemaat_id=strip_tags($this->input->post('xidjemaat'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$dilantik=strip_tags($this->input->post('xdilantik'));

							$this->m_parhalado->simpan_parhalado($jemaat_id,$jabatan,$dilantik,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('parhaladoo/parhalado');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('parhaladoo/parhalado');
	                }
	                 
	            }else{
	            			$jemaat_id=strip_tags($this->input->post('xidjemaat'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$dilantik=strip_tags($this->input->post('xdilantik'));

					$this->m_parhalado->simpan_parhalado_tanpa_img($jemaat_id,$jabatan,$dilantik);
					echo $this->session->set_flashdata('msg','success');
					redirect('parhaladoo/parhalado');
				}
				
	}
	
	function update_parhalado(){
				
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
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/'.$gambar;
							unlink($path);

	                        $photo=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
							$jemaat_id=strip_tags($this->input->post('xidjemaat'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$dilantik=strip_tags($this->input->post('xdilantik'));

							$this->m_parhalado->update_parhalado($kode,$jemaat_id,$jabatan,$dilantik,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('parhaladoo/parhalado');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('parhaladoo/parhalado');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$jemaat_id=strip_tags($this->input->post('xidjemaat'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$dilantik=strip_tags($this->input->post('xdilantik'));

							$this->m_parhalado->update_parhalado_tanpa_img($kode,$jemaat_id,$jabatan,$dilantik);
							echo $this->session->set_flashdata('msg','info');
							redirect('parhaladoo/parhalado');
	            } 

	}

	function hapus_parhalado(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_parhalado->hapus_parhalado($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('parhaladoo/parhalado');
	}

}