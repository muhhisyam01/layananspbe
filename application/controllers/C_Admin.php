<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		

		$this->load->model('M_login');
		$this->M_login->keamanan();
		
        // check_not_login();
		$this->load->model('m_daftar');
    }

	public function index()
	{
		$this->load->view('template-admin/header');
		$this->load->view('Admin/Dashbord');
		$this->load->view('template-admin/footer');
    }
	public function Dashbord()
	{
		$this->load->view('template-admin/header');
		$this->load->view('Admin/Dashbord');
		$this->load->view('template-admin/footer');	
	} 
	public function Aplikasi()
	{
		$data['aplikasi'] = $this->m_daftar->ambil_aplikasi()->result();
		$this->load->view('template-admin/header');
		$this->load->view('Admin/Aplikasi', $data);
		$this->load->view('template-admin/footer');	
	} 
	public function Domain()
	{
		$data['domain'] = $this->m_daftar->ambil_domain()->result();
		$this->load->view('template-admin/header');
		$this->load->view('Admin/Domain', $data);
		$this->load->view('template-admin/footer');	
	} 
	public function Zoom(){
		$data['Zoom'] = $this->m_daftar->ambil_zoom()->result();
		$this->load->view('template-admin/header');
		$this->load->view('Admin/peminjamanzoom', $data);
		$this->load->view('template-admin/footer');	
	} 
    
	public function verifikasi_edit($id){
		$where = array('id_aplikasi' => $id);
		$data['verifikasi'] = $this->m_daftar->verifikasi_update($where,'tb_aplikasi')->result();
		$this->load->view('template-admin/header');
		$this->load->view('Admin/verifikasi_admin', $data);
		$this->load->view('template-admin/footer');	
	}
	public function verifikasi_edit1($id){
		$where = array('id_domain' => $id);
		$data['verifikasi'] = $this->m_daftar->verifikasi_update($where,'tb_domain')->result();
		$this->load->view('template-admin/header');
		$this->load->view('Admin/verifikasi_admin1', $data);
		$this->load->view('template-admin/footer');	
	}
		public function verifikasi_edit2($id){
		$where = array('id_zoom' => $id);
		$data['verifikasi'] = $this->m_daftar->verifikasi_update($where,'tb_zoom')->result();
		$this->load->view('template-admin/header');
		$this->load->view('Admin/verifikasi_admin2', $data);
		$this->load->view('template-admin/footer');	
	}


	public function update()
	{
		$id_aplikasi 	= $this->input->post('id_aplikasi');
		$verifikasi = $this->input->post('verifikasi');

		$data = array(
			'verifikasi' => $verifikasi,
		);

		$where = array(
			'id_aplikasi' => $id_aplikasi
			
		);

		$this->m_daftar->update_data('tb_aplikasi', $data, $where);
		redirect('C_Admin/Aplikasi');
	}
	public function update1()
	{
		$id_domain 	= $this->input->post('id_domain');
		$verifikasi = $this->input->post('verifikasi');

		$data = array(
			'verifikasi' => $verifikasi,
		);

		$where = array(
			'id_domain' => $id_domain
			
		);

		$this->m_daftar->update_data('tb_domain', $data, $where);
		redirect('C_Admin/Domain');
	}
	public function update2()
	{
		$id_zoom 	= $this->input->post('id_zoom');
		$verifikasi = $this->input->post('verifikasi');

		$data = array(
			'verifikasi' => $verifikasi,
		);

		$where = array(
			'id_zoom' => $id_zoom
			
		);

		$this->m_daftar->update_data('tb_zoom', $data, $where);
		redirect('C_Admin/Zoom');
	}
	public function profile(){
		$this->load->view('template-admin/header');
		$this->load->view('Admin/user/data');
		$this->load->view('template-admin/footer');	
	} 
	public function delete_aplikasi($id_aplikasi){
		$where = array('id_aplikasi' => $id_aplikasi);
		$this->m_daftar->hapus_data($where,'tb_aplikasi');
		redirect('C_Admin/Aplikasi');
	}
	public function delete_domain($id_domain){
		$where = array('id_domain' => $id_domain);
		$this->m_daftar->hapus_domain($where,'tb_domain');
		redirect('C_Admin/Domain');
	}
	public function delete_zoom($id_zoom){
		$where = array('id_zoom' => $id_zoom);
		$this->m_daftar->hapus_zoom($where,'tb_zoom');
		redirect('C_Admin/Zoom');
	}
	
	
	
	

}