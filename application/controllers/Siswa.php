<?php
class Siswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Kelas_model');

        if($this->session->userdata('status') != "login" && $this->session->userdata('sebagai') != "admin"){
            redirect('login/index');
        }
    } 

    function index(){
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        $data['kelas'] = $this->Kelas_model->get_all_kelas();
        
        $data['_view'] = 'siswa/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        $data['kelas'] = $this->Kelas_model->get_all_kelas();

        if(isset($_POST) && count($_POST) > 0){
            $params = array(
				'nis' => $this->input->post('nis'),
                'nama' => $this->input->post('nama'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'alamat' => $this->input->post('alamat'),
				'id_kelas' => $this->input->post('id_kelas'),
				'tahun_angkatan' => $this->input->post('tahun_angkatan'),
                'password' => $this->encryption->encrypt($this->input->post('nis'))
            );
            
            $siswa_id = $this->Siswa_model->add_siswa($params);
            redirect('siswa/index');
        }
        else{
            $data['_view'] = 'siswa/add';
            $this->load->view('layouts/main',$data);
        }
    }

    function edit($nis){
        $data['siswa'] = $this->Siswa_model->get_siswa($nis);
        $data['kelas'] = $this->Kelas_model->get_all_kelas();
        
        if(isset($data['siswa']['nis'])){
            if(isset($_POST) && count($_POST) > 0){
                $params = array(
                    'nis' => $this->input->post('nis'),
					'nama' => $this->input->post('nama'),
					'tempat_lahir' => $this->input->post('tempat_lahir'),
					'tgl_lahir' => $this->input->post('tgl_lahir'),
					'alamat' => $this->input->post('alamat'),
					'id_kelas' => $this->input->post('id_kelas'),
					'tahun_angkatan' => $this->input->post('tahun_angkatan'),
                    'password' => $this->encryption->encrypt($this->input->post('password'))
                );

                $this->Siswa_model->update_siswa($nis,$params);            
                redirect('siswa/index');
            }
            else{
                $data['_view'] = 'siswa/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The siswa you are trying to edit does not exist.');
    } 

    function remove($nis){
        $siswa = $this->Siswa_model->get_siswa($nis);

        if(isset($siswa['nis'])){
            $this->Siswa_model->delete_siswa($nis);
            redirect('siswa/index');
        }
        else
            show_error('The siswa you are trying to delete does not exist.');
    }   
}