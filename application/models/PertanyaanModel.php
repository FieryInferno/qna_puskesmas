<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PertanyaanModel extends CI_Model {
  
	public function create($data)
	{
    $this->db->insert('pertanyaan', $data);
	}
}
