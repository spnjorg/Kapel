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
		$this->load->view('pendeta/v_parhalado',$x);
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
							$nama=strip_tags($this->input->post('xnama'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$nohp=strip_tags($this->input->post('xnohp'));
							$alamat=strip_tags($this->input->post('xalamat'));
							$lingkungan=strip_tags($this->input->post('xlingkungan'));
							$pendidikan=strip_tags($this->input->post('xpendidikan'));
							$pekerjaan=strip_tags($this->input->post('xpekerjaan'));
							$dilantik=strip_tags($this->input->post('xdilantik'));

							$this->m_parhalado->simpan_parhalado($nama,$tmp_lahir,$tgl_lahir,$jenkel,$jabatan,$nohp,$alamat,$lingkungan,$pendidikan,$pekerjaan,$dilantik,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('pendeta/parhalado');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('pendeta/parhalado');
	                }
	                 
	            }else{
	            	$nama=strip_tags($this->input->post('xnama'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$nohp=strip_tags($this->input->post('xnohp'));
							$alamat=strip_tags($this->input->post('xalamat'));
							$lingkungan=strip_tags($this->input->post('xlingkungan'));
							$pendidikan=strip_tags($this->input->post('xpendidikan'));
							$pekerjaan=strip_tags($this->input->post('xpekerjaan'));
							$dilantik=strip_tags($this->input->post('xdilantik'));

					$this->m_parhalado->simpan_parhalado_tanpa_img($nama,$tmp_lahir,$tgl_lahir,$jenkel,$jabatan,$nohp,$alamat,$lingkungan,$pendidikan,$pekerjaan,$dilantik);
					echo $this->session->set_flashdata('msg','success');
					redirect('pendeta/parhalado');
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
							$nama=strip_tags($this->input->post('xnama'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$nohp=strip_tags($this->input->post('xnohp'));
							$alamat=strip_tags($this->input->post('xalamat'));
							$lingkungan=strip_tags($this->input->post('xlingkungan'));
							$pendidikan=strip_tags($this->input->post('xpendidikan'));
							$pekerjaan=strip_tags($this->input->post('xpekerjaan'));
							$dilantik=strip_tags($this->input->post('xdilantik'));

							$this->m_parhalado->update_parhalado($kode,$nama,$tmp_lahir,$tgl_lahir,$jenkel,$jabatan,$nohp,$alamat,$lingkungan,$pendidikan,$pekerjaan,$dilantik,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('pendeta/parhalado');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('pendeta/parhalado');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$nama=strip_tags($this->input->post('xnama'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$nohp=strip_tags($this->input->post('xnohp'));
							$alamat=strip_tags($this->input->post('xalamat'));
							$lingkungan=strip_tags($this->input->post('xlingkungan'));
							$pendidikan=strip_tags($this->input->post('xpendidikan'));
							$pekerjaan=strip_tags($this->input->post('xpekerjaan'));
							$dilantik=strip_tags($this->input->post('xdilantik'));

							$this->m_parhalado->update_parhalado_tanpa_img($kode,$nama,$tmp_lahir,$tgl_lahir,$jenkel,$jabatan,$nohp,$alamat,$lingkungan,$pendidikan,$pekerjaan,$dilantik);
							echo $this->session->set_flashdata('msg','info');
							redirect('pendeta/parhalado');
	            } 

	}

	function hapus_parhalado(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_parhalado->hapus_parhalado($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('pendeta/parhalado');
	}

}