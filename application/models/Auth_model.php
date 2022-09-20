<?php
class Auth_model extends CI_Model
{
    #create function to insert user data into database
    public function register($data)
    {
        $this->db->insert('users', $data);
    }

    #create function to check if user is logged in
    public function is_logged_in()
    {
        if ($this->session->userdata('logged_in')) {
            return true;
        } else {
            return false;
        }
    }

    #create function to login user by email and password then set session including user data
    public function login($email, $password)
    {
        $this->db->where('email', $email);
        $result = $this->db->get('users');
        if ($result->num_rows() == 1) {
            $data = $result->row_array();
            if (password_verify($password, $data['password'])) {
                $session_data = array(
                    'id_number' => $data['id_number'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'role_id' => $data['role_id'],
                    'image' => $data['image'],
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($session_data);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}
