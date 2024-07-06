<?php
class Renungan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_renungan');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_renungan->get_all_renungan();
		$this->load->view('admin/v_renungan',$x);
	}

	function add_renungan(){
		$x['kat']=$this->m_kategori->get_all_kategori();
		$this->load->view('admin/v_add_renungan',$x);
	}

	function video(){
		$x['video']=$this->m_kategori->get_all_video();
		$this->load->view('admin/v_video',$x);
	}

	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->m_renungan->get_renungan_by_kode($kode);
		$x['kat']=$this->m_kategori->get_all_kategori();
		$this->load->view('admin/v_edit_renungan',$x);
	}
	function simpan_renungan(){
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
	                        $config['width']= 710;
	                        $config['height']= 460;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
													$judul=strip_tags($this->input->post('xjudul'));
													$isi=$this->input->post('xisi');
													$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
													$trim     = trim($string);
													$slug     = strtolower(str_replace(" ", "-", $trim));
													$kategori_id=strip_tags($this->input->post('xkategori'));
													$data=$this->m_kategori->get_kategori_byid($kategori_id);
													$q=$data->row_array();
													$kategori_nama=$q['kategori_nama'];
													//$imgslider=$this->input->post('ximgslider');
													$imgslider='0';
													$kode=$this->session->userdata('idadmin');
													$user=$this->m_pengguna->get_pengguna_login($kode);
													$p=$user->row_array();
													$user_id=$p['pengguna_id'];
													$user_nama=$p['pengguna_nama'];
													$this->m_renungan->simpan_renungan($judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug);
													echo $this->session->set_flashdata('msg','success');
													redirect('admin/renungan');
											}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/renungan');
	                }

	            }else{
					redirect('admin/renungan');
				}

	}

	function update_renungan(){

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
	                        $config['width']= 710;
	                        $config['height']= 460;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $renungan_id=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$isi=$this->input->post('xisi');
							$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
							$trim     = trim($string);
							$slug     = strtolower(str_replace(" ", "-", $trim));
							$kategori_id=strip_tags($this->input->post('xkategori'));
							$data=$this->m_kategori->get_kategori_byid($kategori_id);
							$q=$data->row_array();
							$kategori_nama=$q['kategori_nama'];
								//$imgslider=$this->input->post('ximgslider');
							$imgslider='0';
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_renungan->update_renungan($renungan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug);
								echo $this->session->set_flashdata('msg','info');
								redirect('admin/renungan');

	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/pengguna');
	                }

	            }else{
									$renungan_id=$this->input->post('kode');
									$judul=strip_tags($this->input->post('xjudul'));
									$isi=$this->input->post('xisi');
									$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
									$trim     = trim($string);
									$slug     = strtolower(str_replace(" ", "-", $trim));
									$kategori_id=strip_tags($this->input->post('xkategori'));
									$data=$this->m_kategori->get_kategori_byid($kategori_id);
									$q=$data->row_array();
									$kategori_nama=$q['kategori_nama'];
									//$imgslider=$this->input->post('ximgslider');
									$imgslider='0';
									$kode=$this->session->userdata('idadmin');
									$user=$this->m_pengguna->get_pengguna_login($kode);
									$p=$user->row_array();
									$user_id=$p['pengguna_id'];
									$user_nama=$p['pengguna_nama'];
									$this->m_renungan->update_renungan_tanpa_img($renungan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$slug);
									echo $this->session->set_flashdata('msg','info');
									redirect('admin/renungan');
	            }

	}

	function hapus_renungan(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_renungan->hapus_renungan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/renungan');
	}

//VIDEO RENUNGAN_______________________________________________________________

	function simpan_video(){
		$judul=strip_tags($this->input->post('xjudul'));
		$link=strip_tags($this->input->post('xlink'));
		$ket=strip_tags($this->input->post('xket'));
		
		$this->m_renungan->simpan_video($judul,$link,$ket);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/renungan/video');

	}

	function update_video(){
		$kode=strip_tags($this->input->post('kode'));
		$judul=strip_tags($this->input->post('xjudul'));
		$link=strip_tags($this->input->post('xlink'));
		$ket=strip_tags($this->input->post('xket'));

		$this->m_renungan->update_video($kode,$judul,$link,$ket);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/renungan/video');
	}

	function hapus_video(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_renungan->hapus_renungan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/renungan/video');
	}

}
