<?php

class M_mahasiswa extends CI_Model	

{
	private $tabel = 'mahasiswa';

	public function semuaData()
	{
		//select * from mahasiswa
		//mysli_fetch_objec()

		return $this->db->get($this->tabel)->result();
	}
}

?>