<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tiket extends CI_Controller {
public function __construct(){

		parent::__construct();
		$this->load->model('Tes_m');
	}
	public function index()
	{
		$key=$this->input->post('key',true);
		$data['aplikasi']=$this->Tes_m->set($key);
		$this->load->view('template-user/header');
		
		$this->load->view('user/Cektiket',$data);
		$this->load->view('template-user/footer');
	}

	public function domain()
	{
		$key=$this->input->post('key',true);
		$data['domain']=$this->Tes_m->set1($key);
		$this->load->view('template-user/header');
		
		$this->load->view('user/Cekdomain',$data);
		$this->load->view('template-user/footer');
	}
	public function zoom()
	{
		$key=$this->input->post('key',true);
		$data['zoom']=$this->Tes_m->set2($key);
		$this->load->view('template-user/header');
		
		$this->load->view('user/Cekzoom',$data);
		$this->load->view('template-user/footer');
	}

}