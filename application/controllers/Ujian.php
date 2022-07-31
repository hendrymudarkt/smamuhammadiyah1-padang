<?php
class Ujian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ujian_model');
        $this->load->model('Soal_model');
        $this->load->model('Siswa_model');

        if ($this->session->userdata('status') != "login") {
            redirect('login/index');
        }
    }

    function index()
    {
        $data['_view'] = 'ujian/index';
        $this->load->view('layouts/main2', $data);
    }

    function hasil()
    {
        $data['siswa'] = $this->Siswa_model->get_all_siswa();

        $data['_view'] = 'ujian/hasil';
        $this->load->view('layouts/main', $data);
    }

    function analisa()
    {
        $data['soal'] = $this->Soal_model->get_all_soal();

        $data['_view'] = 'ujian/analisa';
        $this->load->view('layouts/main', $data);
    }

    function analisa_guru()
    {
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        $data['soal'] = $this->Soal_model->get_all_soal();

        $data['_view'] = 'ujian/analisa';
        $this->load->view('layouts/main4', $data);
    }

    function hasil_kp()
    {
        $data['siswa'] = $this->Siswa_model->get_all_siswa();

        $data['_view'] = 'ujian/hasil';
        $this->load->view('layouts/main3', $data);
    }

    function hasil_guru()
    {
        $data['siswa'] = $this->Siswa_model->get_all_siswa();

        $data['_view'] = 'ujian/hasil';
        $this->load->view('layouts/main4', $data);
    }

    function add($jenis_soal)
    {
        $data['soal'] = $this->Soal_model->get_jenis_soal($jenis_soal);

        if (isset($_POST) && count($_POST) > 0) {
            $nis = $this->input->post('nis');
            $params = array();
            foreach ($nis as $key => $val) {
                $params[] = array(
                    "nis"  => $_POST['nis'][$key],
                    "id_soal"  => $_POST['id_soal'][$key],
                    "jenis_soal"  => $_POST['jenis_soal'][$key],
                    "jawab"  => $_POST['jawab'][$key]
                );
            }

            $ujian_id = $this->Ujian_model->add_ujian($params);
            $this->session->set_flashdata('sukses', 'Anda Sudah Menyelesaikan Ujian');
            redirect('ujian/index');
        } else {
            $data['_view'] = 'ujian/add';
            $this->load->view('layouts/main2', $data);
        }
    }
}
