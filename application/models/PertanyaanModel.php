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

  public function getById($id)
  {
    return $this->db->get_where('pertanyaan', ['id' => $id])->row_array();
  }

  public function update($id, $data)
  {
    $this->db->update('pertanyaan', $data, ['id' => $id]);
  }

  public function getAnswered()
  {
    return $this->db->get_where('pertanyaan', ['jawaban !=' => NULL])->result();
  }
}
