<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function prosesLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $queryUser = $this->m_user->getValidation($username, $password);


        if (isset($queryUser)) {

            $this->session->set_userdata('id', $queryUser->id);
            $this->session->set_userdata('name', $queryUser->username);
            $this->session->set_userdata('username', $queryUser->username);
            $this->session->set_userdata('password', $queryUser->password);
            $this->session->set_userdata('role', $queryUser->role);
            $this->session->set_userdata('departemen', $queryUser->departemen);
            $this->session->set_userdata('position', $queryUser->position);
            if ($queryUser->role == 'admin') {
                redirect(base_url('home'));
            } else {
                redirect(base_url('user'));
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert"> Username or password salah</div>');

            redirect(base_url());
        }
    }
}
