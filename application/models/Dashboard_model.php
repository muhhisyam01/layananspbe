<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

function hitungtiketaplikasi()
{
 $query = $this->db->query('SELECT * FROM tb_aplikasi WHERE label= "aplikasi"');
 $aplikasi=$query->num_rows();
 return $aplikasi;
 }

function hitungtiketdomain()
{
 $query = $this->db->query('SELECT * FROM tb_domain WHERE label= "domain"');
 $domain=$query->num_rows();
 return $domain;
}
function hitungtiketzoom()
{
 $query = $this->db->query('SELECT * FROM tb_zoom WHERE label= "zoom"');
 $zoom=$query->num_rows();
 return $zoom;
}
}