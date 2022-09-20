<?php
class Auth_model extends CI_Model
{
    // private $_table = "users";
    // const SESSION_KEY = 'user_id';

    // public function rules()
    // {
    //     return [
    //         [
    //             'field' => 'id_number',
    //             'label' => 'ID Number',
    //             'rules' => 'required'
    //         ],
    //         [
    //             'field' => 'name',
    //             'label' => 'Full Name',
    //             'rules' => 'required'
    //         ],
    //         [
    //             'field' => 'email',
    //             'label' => 'Email Address',
    //             'rules' => 'required|valid_email'
    //         ],
    //         [
    //             'field' => 'password',
    //             'label' => 'Password',
    //             'rules' => 'required'
    //         ]
    //     ];
    // }

    public function register($id_number, $name, $email, $password)
    {
        $data = array(
            'id_number' => $id_number,
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'image' => rand(1, 50)
        );
        $this->db->insert('users', $data);
    }

    public function login($email, $password)
    {
        $query = $this->db->get_where('users', array('email' => $email));
        if ($query->num_rows() > 0) {
            $data = $query->row();
            if (password_verify($password, $data->password)) {
                $this->session->set_userdata('email', $email);
                $this->session->set_userdata('id_number', $data->id_number);
                $this->session->set_userdata('image', $data->image);
                $this->session->set_userdata('name', $data->name);
                $this->session->set_userdata('role', $data->role_id);
                $this->session->set_userdata('is_login', TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function isLogin()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect(base_url('auth'));
        }
    }
}
