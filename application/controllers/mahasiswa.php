<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {



	public function index()
	{
		$this->load->view('mahasiswa_index');
	}
}
