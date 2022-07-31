<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');

		$this->load->library('encryption');
	}

	function index()
	{
		$this->load->view('login');
	}

	function aksi_login()
	{
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));
		$level = $this->security->xss_clean($this->input->post('level'));

		if ($level == 1) {
			redirect('https://ranahcode.000webhostapp.com/SMAMuhammadiyah');
		} else if ($level == 2) {
			$data = $this->Login_model->cek_login_siswa($username);
			$passb = $this->encryption->decrypt($data['password']);
			if ($password == $passb) {
				$data_session = array(
					'nis' => $username,
					'status' => "login",
					'sebagai' => "siswa",
					'nama' => $data['nama']
				);
				$this->session->set_userdata($data_session);
				redirect('dashboard/siswa');
			} else {
				redirect(base_url('login'));
			}
		} else if ($level == 3) {
			$data = $this->Login_model->cek_login($username);
			$passb = $this->encryption->decrypt($data['password']);
			if ($password == $passb) {
				$data_session = array(
					'username' => $username,
					'status' => "login",
					'sebagai' => "kepsek",
					'nama' => $data['username']
				);
				$this->session->set_userdata($data_session);
				redirect('dashboard/kepsek');
			} else {
				redirect(base_url('login/index'));
			}
		} else if ($level == 4) {
			$data = $this->Login_model->cek_login($username);
			$passb = $this->encryption->decrypt($data['password']);
			if ($password == $passb) {
				$data_session = array(
					'username' => $username,
					'status' => "login",
					'sebagai' => "guru",
					'nama' => $data['nama'],
					'jenis_guru' => $data['jenis_guru']
				);
				$this->session->set_userdata($data_session);
				redirect('dashboard/guru');
			} else {
				redirect(base_url('login'));
			}
		} else {
			redirect(base_url('login'));
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
