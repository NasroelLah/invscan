<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function index()
    {
        $data['title'] = "Inventory Scanner";
        $this->load->view('layout/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('layout/auth_footer');
    }

    public function register()
    {
        $data['title'] = "Inventory Scanner";
        $this->load->view('layout/auth_header', $data);
        $this->load->view('auth/register');
        $this->load->view('layout/auth_footer');
    }

    public function login_check()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        if ($this->auth_model->login($email, $password)) {
            redirect(base_url());
        } else {
            $this->session->set_flashdata('error', 'Username & Password salah');
            redirect('auth');
        }
    }

    public function reg_check()
    {
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('id_number', 'id_number', 'trim|required');
        if ($this->form_validation->run() == true) {
            $id_number = $this->input->post('id_number');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $name = $this->input->post('name');
            $this->auth_model->register($id_number, $name, $email, $password);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('auth');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('auth/register');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_number');
        $this->session->unset_userdata('image');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('is_login');
        redirect(base_url());
    }
}
