<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {

  public function index()
  {
    $data['jumlahPertanyaan'] = count($this->PertanyaanModel->getNotAnswered());
    $data['title']            = 'Pertanyaan';
    $data['pertanyaan']       = $this->PertanyaanModel->getAll();
    
    $this->load->view('user/pertanyaan/index', $data);
  }

	public function store()
	{
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error', validation_errors());
      redirect($_SERVER['HTTP_REFERER']);
    } else {
      $this->PertanyaanModel->create($this->input->post());
      redirect();
    }
	}
}
