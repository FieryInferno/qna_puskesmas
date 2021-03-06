<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {

  public $data;
  
  public function __construct() {
    parent::__construct();
    $this->data = [
      'jumlahPertanyaan'  => count($this->PertanyaanModel->getNotAnswered()),
      'title'             => 'Pertanyaan',
    ];
  }

  public function index()
  {
    $this->data['pertanyaan']       = $this->PertanyaanModel->getAll();
    
    $this->load->view('user/pertanyaan/index', $this->data);
  }

	public function store()
	{
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error', validation_errors());
      redirect($_SERVER['HTTP_REFERER']);
    } else {
      $this->PertanyaanModel->create($this->input->post());
      redirect();
    }
	}

  public function edit($id)
  {
    $pertanyaan = $this->PertanyaanModel->getById($id);
    $data       = array_merge($this->data, $pertanyaan);

    $this->load->view('user/pertanyaan/jawab', $data);
  }

  public function update($id)
  {
    $this->form_validation->set_rules('jawaban', 'Jawaban', 'required');
    
    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error', validation_errors());
      redirect($_SERVER['HTTP_REFERER']);
    } else {
      $this->PertanyaanModel->update($id, $this->input->post());
      $this->session->set_flashdata('success', 'Berhasil menjawab pertanyaan');
      redirect('pertanyaan');
    }
  }

  public function destroy($id)
  {
    $this->PertanyaanModel->delete($id);
    $this->session->set_flashdata('success', 'Berhasil menghapus pertanyaan');
    redirect('pertanyaan');
  }
}
