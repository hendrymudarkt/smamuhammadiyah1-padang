<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();

        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }

        $this->load->model('Berita_model');
    }

    function index(){
        if($this->session->userdata('sebagai') != "panitia"){
            redirect('dashboard/siswa');
        }
        else{
            $data['_view'] = 'dashboard';
            $this->load->view('layouts/main',$data);
        }
    }

    function siswa(){
        $data['berita'] = $this->Berita_model->get_all_berita();

    	$data['_view'] = 'dashboard2';
        $this->load->view('layouts/main2',$data);
    }

    function kepsek(){
        $data['berita'] = $this->Berita_model->get_all_berita();
        
        $data['_view'] = 'dashboard2';
        $this->load->view('layouts/main3',$data);
    }
}
