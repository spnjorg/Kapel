<?php
class User_login extends CI_Controller{

	public function index(){
		$this->load->view('user/v_home');
	}


	public function ceklogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('m_userlogin');
		// $this->m_userlogin->ambillogin($username,$password);
		$cuser=$this->m_userlogin->ambillogin($username,$password);
	// 	redirect('user_login');

	// }

		echo json_encode($cuser);
        if($cuser->num_rows() > 0){
         $this->session->set_userdata('masuk',true);
         $this->session->set_userdata('user',$u);
         $xcuser=$cuser->row_array();

 
            $iduser=$xcuser['user_id'];
            $user_nama=$xcuser['user_username'];
            $this->session->set_userdata('iduser',$iduser);
            $this->session->set_userdata('nama',$user_nama);
            redirect('user_login');    

       }else{
         echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
         redirect('home');
       }

    }





	public function logout(){
		$this->session->set_userdata('username',FALSE);
		$this->session->sess_destroy();
		redirect('home');

	}




}