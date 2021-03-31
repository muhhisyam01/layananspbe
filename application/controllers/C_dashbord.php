<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashbord extends CI_Controller {

	public function index()
	{
		$this->template->load('Admin/template','Admin/Dashbord');
    }

		
}