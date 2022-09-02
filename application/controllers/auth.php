<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'username wajib diisi!']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'password wajib diisi!']);
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('form_login');
			$this->load->view('templates/footer');
		}else{
			$auth = $this->model_auth->cek_login();
			if($auth == FALSE)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Username atau Password Anda Salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('auth/login');
			}else{
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('role_id', $auth->role_id);

				switch ($auth->role_id) {
					case 1:
						redirect('admin/dashboard_admin');
						break;
					case 2:
						redirect('welcome');
						break;
					default:
						break;
				}
			}
		}
	}
	public function registrasi()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama wajib diisi !']);
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username masih kosong  !']);
		$this->form_validation->set_rules('password1', 'Password', 'required|matches[password2]', ['required' => 'Password wajib diisi !', 'matches' => 'Password tidak sama']);
		$this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('registrasi');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'id'       => '',
				'nama'     => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password1'),
				'role_id'  =>  2
			];
			$this->db->insert('tb_user', $data);
			redirect('auth/login');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}
