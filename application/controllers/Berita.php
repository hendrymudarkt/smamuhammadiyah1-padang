<?php
class Berita extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Berita_model');

        if($this->session->userdata('status') != "login" && $this->session->userdata('sebagai') != "panitia"){
            redirect('login/index');
        }
    }
    
    function view($id_berita){
        $data['berita'] = $this->Berita_model->get_berita($id_berita);
        
        if(isset($data['berita']['id_berita'])){
            $data['_view'] = 'berita/index';
            $this->load->view('layouts/main2',$data);
        }
    }
}