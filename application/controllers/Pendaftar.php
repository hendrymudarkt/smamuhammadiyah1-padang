<?php
class Pendaftar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftar_model');

        if ($this->session->userdata('status') != "login" && $this->session->userdata('sebagai') != "panitia") {
            redirect('login/index');
        }
    }

    function index($nis)
    {
        $data['pendaftar'] = $this->Pendaftar_model->get_pendaftar_nis($nis);

        if(isset($data['pendaftar']['nis'])){
            if(isset($_POST) && count($_POST) > 0){
                $config['upload_path']          = 'images/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 10000;
                $config['max_width']            = 3000;
                $config['max_height']           = 1688;
         
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('lampiran')){
                    $this->session->set_flashdata('error', 'Lampiran tidak ada, silahkan di upload. Terimakasih...');  
                }
                else{
                    $waktu = date("Y-m-d h:i:s");
                    $hasil = $this->db->query("SELECT max(nomor_antri) as maxAntri FROM pendaftar WHERE YEAR(tgl_daftar) = '$waktu'")->row_array();
                    $nomor2 = $hasil['maxAntri'];
                    $noUrut2 = (int) substr($nomor2, 2, 2);
                    $noUrut2++;
                    $char2 = "";
                    $nomor2 = $char2 . sprintf("%03s", $noUrut2);
                    $birthday = @$_POST['tgl_lahir'];
                    $biday = new DateTime($birthday);
                    $today = new DateTime();
                        
                    $diff = $today->diff($biday);
                    $file = $this->upload->data();
                    $lampiran = $file['file_name'];

                    if ($diff->y >= 15 && $diff->y <= 22) {
                        $params = array(
                            'nomor_antri' => $nomor2,
                            'jenis_kelamin' => $this->input->post('jk'),
                            'alamat' => $this->input->post('alamat'),
                            'tempat_lahir' => $this->input->post('tempat_lahir'),
                            'tgl_lahir' => $this->input->post('tgl_lahir'),
                            'tgl_daftar' => date('Y-m-d H:i:s'),
                            'no_hp' => $this->input->post('no_hp'),
                            'no_hp_ortu' => $this->input->post('no_hp_ortu'),
                            'status' => $this->input->post('status'),
                            'nik' => $this->input->post('nik'),
                            'no_reg' => $this->input->post('no_reg'),
                            'agama' => $this->input->post('agama'),
                            'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                            'berkebutuhan_khusus' => $this->input->post('berkebutuhan_khusus'),
                            'berkebutuhan_khusus' => $this->input->post('berkebutuhan_khusus'),
                            'rt' => $this->input->post('rt'),
                            'rw' => $this->input->post('rw'),
                            'dusun' => $this->input->post('dusun'),
                            'kelurahan' => $this->input->post('kelurahan'),
                            'kecamatan' => $this->input->post('kecamatan'),
                            'kode_pos' => $this->input->post('kode_pos'),
                            'lintang' => $this->input->post('lintang'),
                            'bujur' => $this->input->post('bujur'),
                            'tempat_tinggal' => $this->input->post('tempat_tinggal'),
                            'transportasi' => $this->input->post('transportasi'),
                            'nomor_kks' => $this->input->post('nomor_kks'),
                            'anak_keberapa' => $this->input->post('anak_keberapa'),
                            'penerima_kps' => $this->input->post('penerima_kps'),
                            'lampiran' => $lampiran
                        );
    
                        $this->session->set_flashdata('success', 'Anda telah terdaftar, tunggu informasi selanjutnya melalui pengumuman. Terimakasih...');
                        $this->Pendaftar_model->update_pendaftar($nis,$params);            
                        redirect('pendaftar/index/'.$this->session->userdata('nis'));
                    }
                    else {
                        $this->session->set_flashdata('warning', 'Umur tidak mencukupi, batas minimum umur adalah 15 Tahun dan maksimum 22 Tahun, Terimakasih...');
                        redirect('pendaftar/index/'.$this->session->userdata('nis'));
                    }
                }
            }
            else{
                $data['_view'] = 'pendaftar/index';
                $this->load->view('layouts/main2', $data);
            }
        }
    }
}