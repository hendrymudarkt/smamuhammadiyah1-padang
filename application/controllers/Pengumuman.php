<?php
class Pengumuman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pengumuman_model');

        if ($this->session->userdata('status') != "login") {
            redirect('login/index');
        }
    }

    function index()
    {
        $data['pengumuman'] = $this->Pengumuman_model->get_all_pengumuman();

        $data['_view'] = 'pengumuman/index';
        $this->load->view('layouts/main2', $data);
    }
    
    function index2()
    {
        $data['pengumuman'] = $this->Pengumuman_model->get_all_pengumuman();

        $data['_view'] = 'pengumuman/index';
        $this->load->view('layouts/main3', $data);
    }
    
    function daftar_ulang()
    {
        if(isset($_POST) && count($_POST) > 0){
            $params = array(
				'nis' => $this->input->post('nis')
            );
            
            $this->session->set_flashdata('success', 'Anda telah melakukan daftar ulang...');
            $pengumuman_id = $this->Pengumuman_model->notif($params);
            redirect('dashboard/siswa');
        }
        else{
            $data['_view'] = 'pengumuman/daftar_ulang';
            $this->load->view('layouts/main2', $data);
        }
    }
}
