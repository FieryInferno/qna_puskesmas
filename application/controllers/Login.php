<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
    $this->load->view('login');
	}

  public function auth()
  {
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() !== FALSE) {
      $user = $this->UserModel->getByUsername($this->input->post('username'));

      if ($user) {
        if (password_verify($this->input->post('password'), $user->password)) {
          $this->session->set_userdata('user', $user);
          redirect('dashboard');
        } else {
          $this->session->set_flashdata('error', 'Password Salah');
        }
      } else {
        $this->session->set_flashdata('error', 'Username Salah');
      }
    } else {
      $this->session->set_flashdata('error', validation_errors());
    }

    redirect($_SERVER['HTTP_REFERER']);
  }
}
