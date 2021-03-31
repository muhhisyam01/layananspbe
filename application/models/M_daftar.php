<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_daftar extends CI_Model {

    public function kode_register(){
        $this->db->select('RIGHT(tb_domain.tiket,2) as tiket', FALSE);
        $this->db->order_by('tiket','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('tb_domain');  //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){      
             //cek kode jika telah tersedia    
             $data = $query->row();      
             $kode = intval($data->tiket) + 1; 
        }
        else{      
             $kode = 1;  //cek jika kode belum terdapat pada table
        }
            $tgl=date('dmY'); 
            $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
            $kodetampil = "APK".$tgl.$batas;  //format kode
            return $kodetampil;  
    }

    public function tambah($data,$table)
    {
        $this->db->insert($table, $data);
    }

    public function kode_domain(){
        $this->db->select('RIGHT(tb_domain.tiket,2) as tiket', FALSE);
        $this->db->order_by('tiket','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('tb_domain');  //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){      
             //cek kode jika telah tersedia    
             $data = $query->row();      
             $kode = intval($data->tiket) + 1; 
        }
        else{      
             $kode = 1;  //cek jika kode belum terdapat pada table
        }
            $tgl=date('dmY'); 
            $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
            $kodetampil = "DM".$tgl.$batas;  //format kode
            return $kodetampil;  
    }
     public function kode_Zoom(){
        $this->db->select('RIGHT(tb_domain.tiket,2) as tiket', FALSE);
        $this->db->order_by('Tiket','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('tb_domain');  //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){      
             //cek kode jika telah tersedia    
             $data = $query->row();      
             $kode = intval($data->tiket) + 1; 
        }
        else{      
             $kode = 1;  //cek jika kode belum terdapat pada table
        }
            $tgl=date('dmY'); 
            $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
            $kodetampil = "ZM".$tgl.$batas;  //format kode
            return $kodetampil;  
    }
    public function get_product_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_aplikasi');
        $this->db->like('tiket',$keyword);
        $this->db->or_like('nama_OPD',$keyword);
        $this->db->or_like('verifikasi',$keyword);

        return $this->db->get()->result();
    }
   


    public function ambil_aplikasi()
    {
        $this->db->select('*');
        $this->db->from('tb_aplikasi');
        $query = $this->db->get();
        return $query;
    }

    public function ambil_domain()
    {
        $this->db->select('*');
        $this->db->from('tb_domain');
        $query = $this->db->get();
        return $query;
    }
     public function ambil_zoom()
    {
        $this->db->select('*');
        $this->db->from('tb_zoom');
        $query = $this->db->get();
        return $query;
    }

    public function verifikasi_update($where,$table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($table,$where, $data)
    {
        $this->db->update($table,$where, $data);
    }
   function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
   }
   function hapus_domain($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
   }
   function hapus_zoom($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
   }
}