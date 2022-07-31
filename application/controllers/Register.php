<?php
class Register extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Register_model');

		$this->load->library('encryption');
	}

	function index()
	{
		$this->load->view('register');
	}

	function aksi_register()
	{
        if(isset($_POST) && count($_POST) > 0){
            $params = array(
				'nis' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'password' => $this->encryption->encrypt($this->input->post('password'))
            );
            
            $register_id = $this->Register_model->add_register($params);
            redirect('register');
        }
        else{
            $this->load->view('register');
        }
	}
}
