<?php
#create 404 page
class My404 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        if (!$this->auth_model->is_logged_in()) {
            redirect('auth');
        }
    }
    public function index()
    {
        $this->output->set_status_header('404');
        $data['title'] = "404 Not Found | Inventory Scanner";
        $this->load->view('layout/header', $data);
        $this->load->view('404');
        $this->load->view('layout/footer');
    }
}
