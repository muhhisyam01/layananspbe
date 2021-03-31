<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Admin/login');
	}

	public function proses_login()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('M_login');
			$query = $this->M_login->login($post);
			if($query->num_rows() > 0  ){
				$row = $query->row();
				$params = array(
					'id_user' =>$row->id_user,
					'username' =>$row->username
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat, Login berhasil');
					window.location='".base_url('C_Admin')."';
					</script>";
			}else{
				echo "<script>
					alert('Login Gagal');
					window.location='".base_url('Auth')."';
					</script>";
			}
		}
	}
 public function logout(){
    $this->session->sess_destroy();
    redirect('Auth');
  }
 
}
     