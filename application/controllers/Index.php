<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->model('main_model');
        $this->auth_model->is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Inventory Scanner";
        $data['name'] = $this->session->userdata('name');
        $data['id_number'] = $this->session->userdata('id_number');
        $data['avatar'] = $this->session->userdata('image');

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('dash');
        $this->load->view('layout/footer');
    }

    public function users()
    {
        $data['title'] = "Inventory Scanner";
        $data['name'] = $this->session->userdata('name');
        $data['id_number'] = $this->session->userdata('id_number');
        $data['avatar'] = $this->session->userdata('image');
        $data['user_list'] = $this->main_model->user_list();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('user_list', $data);
        $this->load->view('layout/footer');
    }

    public function scan_list()
    {
        $data['title'] = "Inventory Scanner";
        $data['name'] = $this->session->userdata('name');
        $data['id_number'] = $this->session->userdata('id_number');
        $data['avatar'] = $this->session->userdata('image');
        $data['scan_list'] = $this->main_model->scan_last();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('scan_list', $data['scan_list']);
        $this->load->view('layout/footer');
    }

    public function scan_ajax()
    {
        $data['scan_ajax'] = $this->main_model->scan_ajax();
        $this->load->view('scan_ajax', $data);
    }

    public function user_add()
    {
        $data['title'] = "Inventory Scanner";
        $data['name'] = $this->session->userdata('name');
        $data['id_number'] = $this->session->userdata('id_number');
        $data['avatar'] = $this->session->userdata('image');

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('user_add', $data);
        $this->load->view('layout/footer');
    }

    public function user_add_check()
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
            $role = $this->input->post('role_id');
            $this->main_model->user_add($id_number, $name, $email, $password, $role);
            redirect('users');
            $this->session->set_flashdata('success', 'User has been added');
        } else {
            redirect('addUser');
        }
    }

    public function user_delete()
    {
        $id = $this->input->post('id');
        $this->main_model->user_delete($id);
        $this->session->set_flashdata('success', 'User has been deleted');
        redirect('users');
    }

    public function user_update()
    {
        $id = $this->input->post('id');
        $id_number = $this->input->post('id_number');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $role = $this->input->post('role_id');
        $this->main_model->user_update($id, $id_number, $name, $email, $role);
        redirect('users');
    }

    public function tag_search()
    {
        $data['title'] = "Inventory Scanner";
        $data['name'] = $this->session->userdata('name');
        $data['id_number'] = $this->session->userdata('id_number');
        $data['avatar'] = $this->session->userdata('image');

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('tag_search', $data);
        $this->load->view('layout/footer');
    }

    public function tag_search_check()
    {
        $sn = $this->input->post('serial_number');
        $this->main_model->tag_search($sn);
        redirect('tagSearch');
    }

    public function settings()
    {
        $data['title'] = "Inventory Scanner";
        $data['name'] = $this->session->userdata('name');
        $data['id_number'] = $this->session->userdata('id_number');
        $data['avatar'] = $this->session->userdata('image');
        $data['user'] = $this->main_model->user_id('id');

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('settings', $data);
        $this->load->view('layout/footer');
    }

    public function roles()
    {
        $data['title'] = "Inventory Scanner";
        $data['name'] = $this->session->userdata('name');
        $data['id_number'] = $this->session->userdata('id_number');
        $data['avatar'] = $this->session->userdata('image');
        $data['user'] = $this->main_model->user_id('id');
        $data['role_list'] = $this->main_model->role_list();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('roles', $data);
        $this->load->view('layout/footer');
    }

    #create function to delete user_role by id
    public function role_delete()
    {
        $id = $this->input->post('id');
        $this->main_model->role_delete($id);
        redirect('roles');
    }

    #create function to add user_role
    public function role_add()
    {
        $this->form_validation->set_rules('role_name', 'role_name', 'trim|required');
        if ($this->form_validation->run() == true) {
            $role_name = $this->input->post('role_name');
            $this->main_model->role_add($role_name);
            redirect('roles');
        } else {
            redirect('roles');
        }
    }

    #create function to update user_role
    public function role_update()
    {
        $id = $this->input->post('id');
        $role_name = $this->input->post('role_name');
        $this->main_model->role_update($id, $role_name);
        redirect('roles');
    }
}
