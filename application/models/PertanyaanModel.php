<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PertanyaanModel extends CI_Model {
  
	public function create($data)
	{
    $this->db->insert('pertanyaan', $data);
	}

  public function getNotAnswered()
  {
    return $this->db->get_where('pertanyaan', ['jawaban' => NULL])->result();
  }

  public function getAll()
  {
    return $this->db->get('pertanyaan')->result();
  }
}
