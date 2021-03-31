<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        // check_not_login();
		$this->load->model('m_daftar');
		$this->load->model('Tes_m');
    }

	public function index()
	{
		
		$this->load->view('template-user/header');
		$this->load->view('user/landingpage');
		$this->load->view('template-user/footer');
    }
// proses pendaftaran aplikasi
    public function tiketaplikasi()
	{
		$data['kode_register'] = $this->m_daftar->kode_register();
		$this->load->view('template-user/header');
		$this->load->view('user/Tiketaplikasi', $data);
		$this->load->view('template-user/footer');
    }

	public function proses_data()
	{
		$this->_rules();
		
		if($this->form_validation->run() == FALSE){
			$this->tiketaplikasi();
		}else{
			$tiket	= $this->input->post('tiket');
			$nama_OPD	= $this->input->post('nama_OPD');
			$nama_aplikasi = $this->input->post('nama_aplikasi');
			$jenis_aplikasi = $this->input->post('jenis_aplikasi');
			$pengembang = $this->input->post('pengembang');
			$sourcecode							= $_FILES['sourcecode']['name'];
			if($sourcecode ==''){}else{
				$config['upload_path']		='./asset-admin/img';
				$config['allowed_types']	='jpg|jpeg|png'; 
				$config['max_size']             = 3024; 
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('sourcecode')){
					echo"Gambar gagal Diupload";
				}else{
					$sourcecode= $this->upload->data('file_name');
				}
			}
			$verifikasi = $this->input->post('verifikasi');
			$data = array(
				'tiket' => $tiket,
				'nama_OPD'  => $nama_OPD,
				'nama_aplikasi' => $nama_aplikasi,
				'jenis_aplikasi'=> $jenis_aplikasi,
				'pengembang'=> $pengembang,
				'sourcecode'=> $sourcecode,
				'verifikasi'=> $verifikasi

			);
			$this->m_daftar->tambah($data, 'tb_aplikasi');
			$this->session->set_flashdata('pesan','Daftar aplikasi Berhasil');
			$this->session->set_userdata('tiket',$data['tiket']);
			$this->session->set_userdata('nama_OPD',$data['nama_OPD']);
			$this->session->set_userdata('nama_aplikasi',$data['nama_aplikasi']);
			$this->session->set_userdata('jenis_aplikasi',$data['jenis_aplikasi']);
			$this->session->set_userdata('pengembang',$data['pengembang']);
			redirect('C_user/tiket_aplikasi');
		}
	}
	
	public function _rules()
	{
		$this->form_validation->set_rules('nama_OPD','Nama OPD','required');
		$this->form_validation->set_rules('nama_aplikasi','Nama aplikasi','required');
		$this->form_validation->set_rules('jenis_aplikasi','Jenis aplikasi','required');
		$this->form_validation->set_rules('pengembang','Pengembang','required');
	}

	public function tiket_aplikasi()
	{
		$this->load->view('template-user/header');
		$this->load->view('user/Daftar');
		$this->load->view('template-user/footer');
	}
// end proses pendaftaran aplikasi 

// Proses pendaftaran domain
    public function tiketdomain()
	{
		$data['kode_domain'] = $this->m_daftar->kode_domain();
		$this->load->view('template-user/header');
		$this->load->view('user/Tiketdomain',$data);
		$this->load->view('template-user/footer');
    }

	public function prose_domain()
	{
		$this->_rules1();
		
		if($this->form_validation->run() == FALSE){
			$this->tiketdomain();
		}else{
			$tiket	= $this->input->post('tiket');
			$nama_OPD	= $this->input->post('nama_OPD');
			$nama_domain = $this->input->post('nama_domain');
			$jenis_domain = $this->input->post('jenis_domain');
			$data = array(
				'tiket' => $tiket,
				'nama_OPD'  => $nama_OPD,
				'nama_domain' => $nama_domain,
				'jenis_domain'=> $jenis_domain

			);
			$this->m_daftar->tambah($data, 'tb_domain');
			$this->session->set_flashdata('pesan','Daftar domain Berhasil');
			$this->session->set_userdata('tiket',$data['tiket']);
			$this->session->set_userdata('nama_OPD',$data['nama_OPD']);
			$this->session->set_userdata('nama_domain',$data['nama_domain']);
			$this->session->set_userdata('jenis_domain',$data['jenis_domain']);
			redirect('C_user/tiket_domain');
		}
	}
	
	public function _rules1()
	{
		$this->form_validation->set_rules('nama_OPD','Nama OPD','required');
		$this->form_validation->set_rules('nama_domain','Nama domain','required');
		$this->form_validation->set_rules('jenis_domain','Jenis domain','required');
	}

	public function tiket_domain()
	{
		$this->load->view('template-user/header');
		$this->load->view('user/Daftar_domain');
		$this->load->view('template-user/footer');
	}
// end proses domain

// Proses pendaftaran zoom
public function tiketzoom()
	{
		$data['kode_zoom'] = $this->m_daftar->kode_zoom();
		$this->load->view('template-user/header');
		$this->load->view('user/Tiketzoom',$data);
		$this->load->view('template-user/footer');
    }

	public function prose_zoom()
	{
		$this->_rules2();
		
		if($this->form_validation->run() == FALSE){
			$this->tiketzoom();
		}else{
			$Tiket	= $this->input->post('Tiket');
			$Nama_instansi	= $this->input->post('Nama_instansi');
			$keperluan = $this->input->post('keperluan');
			$E_mail = $this->input->post('E_mail');
			$No_handphone = $this->input->post('No_handphone');
			$tgl_pinjam = $this->input->post('tgl_pinjam');
			$tgl_kembali = $this->input->post('tgl_kembali');
			$data = array(
				'Tiket' => $Tiket,
				'Nama_instansi'  => $Nama_instansi,
				'keperluan' => $keperluan,
				'E_mail'=> $E_mail,
				'No_handphone' => $No_handphone,
				'tgl_pinjam' => $tgl_pinjam,
				'tgl_kembali' => $tgl_kembali

			);
			$this->m_daftar->tambah($data, 'tb_zoom');
			$this->session->set_flashdata('pesan','Daftar Zoom Berhasil');
			$this->session->set_userdata('Tiket',$data['Tiket']);
			$this->session->set_userdata('Nama_instansi',$data['Nama_instansi']);
			$this->session->set_userdata('keperluan',$data['Keperluan']);
			$this->session->set_userdata('E_mail',$data['E_mail']);
			$this->session->set_userdata('No_handphone',$data['No_handphone']);
			$this->session->set_userdata('tgl_pinjam',$data['tgl_pinjam']);
			$this->session->set_userdata('tgl_kembali',$data['tgl_kembali']);
			redirect('C_user/tiket_zoom');
		}
	}
	
	public function _rules2()
	{
		$this->form_validation->set_rules('Nama_instansi','Nama_instansi','required');
		$this->form_validation->set_rules('keperluan','keperluan','required');
		$this->form_validation->set_rules('E_mail','E_mail','required');
		$this->form_validation->set_rules('No_handphone','No_handphone','required');
		$this->form_validation->set_rules('tgl_pinjam','tgl_pinjam','required');
		$this->form_validation->set_rules('tgl_kembali','tgl_kembali','required');
	}

	public function tiket_zoom()
	{
		$this->load->view('template-user/header');
		$this->load->view('user/Daftar_zoom');
		$this->load->view('template-user/footer');
	}
   
// end proses zoom

   
     public function Bantuan()
	{
		
		$this->load->view('template-user/header');
		$this->load->view('user/bantuan');
		$this->load->view('template-user/footer');
    }
	
   
	


    
}