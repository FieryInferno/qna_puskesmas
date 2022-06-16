<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {

	public function store()
	{
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');

    if ($this->form_validation->run() == FALSE) {
      redirect($_SERVER['HTTP_REFERER']);
    } else {
      $this->PertanyaanModel->create($this->input->post());
      redirect();
    }
	}
}
