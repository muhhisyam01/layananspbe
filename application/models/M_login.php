<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function login($post)
    {
       $this->db->select('*');
       $this->db->from('tb_users');
       $this->db->where('username', $post['username']);
       $this->db->where('password', sha1($post['password']));
       $query = $this->db->get();
       return $query;
    }
public function keamanan(){
        $username = $this->session->userdata('username');
        if(empty($username)){
            $this->session->sess_destroy();
            redirect('C_admin');
        }
    }
  
}