<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller
 {

 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_mahasiswa');
 	}



	public function index()
	{
		$data['tabel'] = $this->M_mahasiswa->semuaData();
		

		$this->load->view('mahasiswa/v_index', $data);
	}


	public function create()
	{
		$this->load->view('mahasiswa/v_create');
	}

	
}
