<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes_m extends CI_Model {
	public function __construct(){

		parent::__construct();
	}
	public function set($key){
		$this->db->select('*');
		$this->db->like('tiket',$key);
		$this->db->or_like('verifikasi',$key);
		return $this->db->get('tb_aplikasi')->result();
	}

	public function set1($key){
		$this->db->select('*');
		$this->db->like('tiket',$key);
		$this->db->or_like('verifikasi',$key);
		return $this->db->get('tb_domain')->result();
	}
	public function set2($key){
		$this->db->select('*');
		$this->db->like('Tiket',$key);
		$this->db->or_like('verifikasi',$key);
		return $this->db->get('tb_zoom')->result();
	}
}