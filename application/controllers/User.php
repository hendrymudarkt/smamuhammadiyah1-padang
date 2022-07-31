<?php
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');

        if ($this->session->userdata('status') != "login" && $this->session->userdata('sebagai') != "admin") {
            redirect('login/index');
        }
    }

    function index()
    {
        $data['user'] = $this->User_model->get_all_user();

        $data['_view'] = 'user/index';
        $this->load->view('layouts/main', $data);
    }

    function add()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->encryption->encrypt($this->input->post('password')),
                'level' => $this->input->post('level'),
                'jenis_guru' => $this->input->post('jenis_guru')
            );

            $user_id = $this->User_model->add_user($params);
            redirect('user/index');
        } else {
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main', $data);
        }
    }

    function edit($id)
    {
        $data['user'] = $this->User_model->get_user($id);

        if (isset($data['user']['id'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'nama' => $this->input->post('nama'),
                    'username' => $this->input->post('username'),
                    'password' => $this->encryption->encrypt($this->input->post('password')),
                    'level' => $this->input->post('level'),
                    'jenis_guru' => $this->input->post('jenis_guru')
                );

                $this->User_model->update_user($id, $params);
                redirect('user/index');
            } else {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The user you are trying to edit does not exist.');
    }

    function remove($id)
    {
        $user = $this->User_model->get_user($id);

        if (isset($user['id'])) {
            $this->User_model->delete_user($id);
            redirect('user/index');
        } else
            show_error('The user you are trying to delete does not exist.');
    }
}
