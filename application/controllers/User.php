<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
    $data['jumlahPertanyaan'] = count($this->PertanyaanModel->getNotAnswered());
    $data['title']            = 'Dashboard';
    
    $this->load->view('user/dashboard', $data);
	}
}
