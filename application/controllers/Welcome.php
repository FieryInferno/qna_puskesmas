<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  
	public function index()
	{
    $data['pertanyaan'] = $this->PertanyaanModel->getAnswered();

		$this->load->view('welcome_message', $data);
	}
}
