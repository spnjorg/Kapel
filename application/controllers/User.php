<?php
class User extends CI_Controller{
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
		$this->load->model('m_parhalado');
		$this->load->model('m_dewan');
		$this->load->model('m_kdewan');
		$this->load->model('m_files');
		$this->load->model('m_kategori');
		$this->load->model('m_jadwalibadah');
		$this->load->model('m_jadwalpetugas');
		$this->load->model('m_pengunjung');
		$this->load->model('m_kepalakeluarga');
		$this->load->model('m_galeri');
		$this->load->model('m_kontak');
		$this->load->model('m_album');
		$this->m_pengunjung->count_visitor();
	}


	function index(){
		$kode=$this->session->userdata('idadmin');
		$x['user']=$this->m_pengguna->get_pengguna_login($kode);
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

	

// SEJARAH HKBP -- USER JEMAAT_______________________________________________________________________________________________________

	function sejarahgereja(){
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_parhalado']=$this->db->get('tbl_parhalado')->num_rows();
		$x['tot_kk']=$this->db->get('tbl_kk')->num_rows();
		$x['tot_jemaat']=$this->db->get('tbl_jemaat')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('user/v_sejarahgereja',$x);
	}


// PARHALADO -- USER JEMAAT_____________________________________________________________________________________________________
   function parhalado(){
		$jum=$this->m_parhalado->parhalado();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=12;
        $config['base_url'] = base_url() . 'user/parhalado/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	          $config['full_tag_close']   = '</ul></nav></div>';
	          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['num_tag_close']    = '</span></li>';
	          $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['prev_tagl_close']  = '</span>Next</li>';
	          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	          $config['first_tagl_close'] = '</span></li>';
	          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['last_tagl_close']  = '</span></li>';

            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
						$x['data']=$this->m_parhalado->parhalado_perpage($offset,$limit);
						$this->load->view('user/v_parhalado',$x);
	}

// DOWNLOAD -- USER JEMAAT____________________________________________________________________________________________________

 function download(){
		$x['data']=$this->m_files->get_all_files();
		$this->load->view('user/v_download',$x);
	}

	function get_file(){
		$id=$this->uri->segment(3);
		$get_db=$this->m_files->get_file_byid($id);
		$q=$get_db->row_array();
		$file=$q['file_data'];
		$path='./assets/files/'.$file;
		$data = file_get_contents($path);
		$name = $file;
		force_download($name, $data);
	}

// DEWAN -- USER JEMAAT________________________________________________________________________________________________________

function dewan(){
		$jum=$this->m_dewan->dewan();
		$jum=$this->m_kdewan->kdewan();
		$jum=$this->m_parhalado->parhalado();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=8;
        $config['base_url'] = base_url() . 'dewan/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	          $config['full_tag_close']   = '</ul></nav></div>';
	          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['num_tag_close']    = '</span></li>';
	          $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['prev_tagl_close']  = '</span>Next</li>';
	          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	          $config['first_tagl_close'] = '</span></li>';
	          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['last_tagl_close']  = '</span></li>';

            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
						$x['data']=$this->m_dewan->dewan_perpage($offset,$limit);
						$x['koinonia']=$this->m_dewan->dewankoinonia_perpage($offset,$limit);
						$x['marturia']=$this->m_dewan->dewanmarturia_perpage($offset,$limit);
						$x['diakonia']=$this->m_dewan->dewandiakonia_perpage($offset,$limit);
						$this->load->view('user/v_dewan',$x);
	}

// BLOG/RENUNGAN -- USER JEMAAT________________________________________________________________________________________________________________

function blog(){
		$jum=$this->m_renungan->berita();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=5;
        $config['base_url'] = base_url() . 'user/blog/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	          $config['full_tag_close']   = '</ul></nav></div>';
	          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['num_tag_close']    = '</span></li>';
	          $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['prev_tagl_close']  = '</span>Next</li>';
	          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	          $config['first_tagl_close'] = '</span></li>';
	          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['last_tagl_close']  = '</span></li>';
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
						$x['data']=$this->m_renungan->berita_perpage($offset,$limit);
						$x['category']=$this->db->get('tbl_kategori');
						$x['populer']=$this->db->query("SELECT * FROM tbl_renungan ORDER BY renungan_views DESC LIMIT 5");
						$this->load->view('user/v_blog',$x);
	}
	function detail($slugs){
		$slug=htmlspecialchars($slugs,ENT_QUOTES);
		$query = $this->db->get_where('tbl_renungan', array('renungan_slug' => $slug));
		if($query->num_rows() > 0){
			$b=$query->row_array();
			$kode=$b['renungan_id'];
			$this->db->query("UPDATE tbl_renungan SET renungan_views=renungan_views+1 WHERE renungan_id='$kode'");
			$data=$this->m_renungan->get_berita_by_kode($kode);
			$row=$data->row_array();
			$x['id']=$row['renungan_id'];
			$x['title']=$row['renungan_judul'];
			$x['image']=$row['renungan_gambar'];
			$x['blog'] =$row['renungan_isi'];
			$x['tanggal']=$row['renungan_tanggal'];
			$x['author']=$row['renungan_author'];
			$x['kategori']=$row['renungan_kategori_nama'];
			$x['slug']=$row['renungan_slug'];
			$x['show_komentar']=$this->m_renungan->show_komentar_by_renungan_id($kode);
			$x['category']=$this->db->get('tbl_kategori');
			$x['populer']=$this->db->query("SELECT * FROM tbl_renungan ORDER BY renungan_views DESC LIMIT 5");
			$this->load->view('user/v_blog_detail',$x);
		}else{
			redirect('user_artikel');
		}
	}

	function kategori(){
		 $kategori=str_replace("-"," ",$this->uri->segment(3));
		 $query = $this->db->query("SELECT tbl_renungan.*,DATE_FORMAT(renungan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_renungan WHERE renungan_kategori_nama LIKE '%$kategori%' ORDER BY renungan_views DESC LIMIT 5");
		 if($query->num_rows() > 0){
			 $x['data']=$query;
			 $x['category']=$this->db->get('tbl_kategori');
 			 $x['populer']=$this->db->query("SELECT * FROM tbl_renungan ORDER BY renungan_views DESC LIMIT 5");
			 $this->load->view('user/v_blog',$x);
		 }else{
			 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak Ada artikel untuk kategori <b>'.$kategori.'</b></div>');
			 redirect('user_artikel');
		 }
	}

    function search(){
        $keyword=str_replace("'", "", htmlspecialchars($this->input->get('keyword',TRUE),ENT_QUOTES));
        $query=$this->m_renungan->cari_berita($keyword);
				if($query->num_rows() > 0){
					$x['data']=$query;
					$x['category']=$this->db->get('tbl_kategori');
  				$x['populer']=$this->db->query("SELECT * FROM tbl_renungan ORDER BY renungan_views DESC LIMIT 5");
          $this->load->view('user/v_blog',$x);
	 		 }else{
				 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak dapat menemukan artikel dengan kata kunci <b>'.$keyword.'</b></div>');
				 redirect('user_artikel');
			 }
    }

		function komentar(){
				$kode = htmlspecialchars($this->input->post('id',TRUE),ENT_QUOTES);
				$data=$this->m_renungan->get_berita_by_kode($kode);
				$row=$data->row_array();
				$slug=$row['renungan_slug'];
				$nama = htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
				$email = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
				$komentar = nl2br(htmlspecialchars($this->input->post('komentar',TRUE),ENT_QUOTES));
				if(empty($nama) || empty($email)){
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Masukkan input dengan benar.</div>');
					redirect('user_artikel/'.$slug);
				}else{
					$data = array(
			        'komentar_nama' 			=> $nama,
			        'komentar_email' 			=> $email,
			        'komentar_isi' 				=> $komentar,
							'komentar_status' 		=> 0,
							'komentar_tulisan_id' => $kode
					);

					$this->db->insert('tbl_komentar', $data);
					$this->session->set_flashdata('msg','<div class="alert alert-info">Komentar Anda akan tampil setelah moderasi.</div>');
					redirect('user_artikel/'.$slug);
				}
		}


// GALLERY -- USER JEMAAT____________________________________________________________________________________________________

function galeri(){
		$x['alb']=$this->m_album->get_all_album();
		$x['all_galeri']=$this->m_galeri->get_all_galeri();
		$this->load->view('user/v_galeri',$x);
	}
	function album(){
		$idalbum=$this->uri->segment(3);
		$x['alb']=$this->m_album->get_all_album();
		$x['data']=$this->m_galeri->get_galeri_by_album_id($idalbum);
		$this->load->view('user/v_galeri_per_album',$x);
	}

// MY PROFILE -- USER JEMAAT__________________________________________________________________________________________
function myprofile(){
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_parhalado']=$this->db->get('tbl_parhalado')->num_rows();
		$x['tot_kk']=$this->db->get('tbl_kk')->num_rows();
		$x['tot_jemaat']=$this->db->get('tbl_jemaat')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();

		$kode=$this->session->userdata('idadmin');
		$x['user']=$this->m_pengguna->get_pengguna_login($kode);
		// $x['kk']=$this->m_kepalakeluarga->get_allkk($idkk);
		$x['data']=$this->m_pengguna->get_all_pengguna();
		$this->load->view('user/v_myprofile',$x);
	}

// CONTACT -- USER JEMAAT__________________________________________________________________________________________

function contact(){
      $x['tot_parhalado']=$this->db->get('tbl_parhalado')->num_rows();
      $x['tot_files']=$this->db->get('tbl_files')->num_rows();
      $x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
	  $this->load->view('user/v_contact',$x);
	}

  function kirim_pesan(){
      $nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
      $email=htmlspecialchars($this->input->post('xemail',TRUE),ENT_QUOTES);
      $kontak=htmlspecialchars($this->input->post('xphone',TRUE),ENT_QUOTES);
      $pesan=htmlspecialchars($this->input->post('xmessage',TRUE),ENT_QUOTES);
      $this->m_kontak->kirim_pesan($nama,$email,$kontak,$pesan);
      echo $this->session->set_flashdata('msg','<p><strong> NB: </strong> Terima Kasih Telah Menghubungi Kami.</p>');
      redirect('user/contact');
  }

// AGENDA -- USER JEMAAT__________________________________________________________________________________________

  function agenda(){
		$jum=$this->m_agenda->agenda();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=7;
        $config['base_url'] = base_url() . 'user/agenda/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	          $config['full_tag_close']   = '</ul></nav></div>';
	          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['num_tag_close']    = '</span></li>';
	          $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['prev_tagl_close']  = '</span>Next</li>';
	          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	          $config['first_tagl_close'] = '</span></li>';
	          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['last_tagl_close']  = '</span></li>';
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
		$x['data']=$this->m_agenda->agenda_perpage($offset,$limit);
		$this->load->view('user/v_agenda',$x);
	}

// PENGUMUMAN -- USER JEMAAT__________________________________________________________________________________________

function pengumuman(){
		$jum=$this->m_pengumuman->pengumuman();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=7;
        $config['base_url'] = base_url() . 'user/pengumuman/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	          $config['full_tag_close']   = '</ul></nav></div>';
	          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['num_tag_close']    = '</span></li>';
	          $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['prev_tagl_close']  = '</span>Next</li>';
	          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	          $config['first_tagl_close'] = '</span></li>';
	          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['last_tagl_close']  = '</span></li>';
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
						$x['data']=$this->m_pengumuman->pengumuman_perpage($offset,$limit);
						$this->load->view('user/v_pengumuman',$x);
	}

// WARTAFIX-- USER JEMAAT__________________________________________________________________________________________

function wartafix(){
		$jum=$this->m_warta->wartahome();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=100;
        $config['base_url'] = base_url() . 'user/wartafix/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	          $config['full_tag_close']   = '</ul></nav></div>';
	          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['num_tag_close']    = '</span></li>';
	          $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['prev_tagl_close']  = '</span>Next</li>';
	          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	          $config['first_tagl_close'] = '</span></li>';
	          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['last_tagl_close']  = '</span></li>';
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
						$x['data']=$this->m_warta->warta_perpage($offset,$limit);
						$this->load->view('user/v_warta',$x);
	}












}