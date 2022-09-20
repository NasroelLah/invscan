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

    #create function to validate login form
    public function login_check()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('auth');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            if ($this->auth_model->login($email, $password)) {
                redirect(base_url());
            } else {
                $this->session->set_flashdata('error', 'Username & Password salah');
                redirect('auth');
            }
        }
    }

    #create function to validate register form then send data to auth_model
    public function reg_check()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('id_number', 'ID Number', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('auth/register');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'id_number' => $this->input->post('id_number'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'image' => rand(1, 50)
            );
            $this->auth_model->register($data);
            $this->session->set_flashdata('success', 'Register Success');
            redirect('auth');
        }
    }

    #create function logout then destroy session
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
