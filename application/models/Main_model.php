<?php
class Main_model extends CI_Model
{
    #create constructor to check if user is logged in
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        if (!$this->auth_model->is_logged_in()) {
            redirect('auth');
        }
    }

    public function scan_list()
    {
        return $this->db->get('scan_list')->result();
    }

    #create function scan_last to get last 1 scan data
    public function scan_last()
    {
        $this->db->order_by('keydata', 'DESC');
        $this->db->limit(1);
        return $this->db->get('scan_list')->result();
    }

    #create function scan_ajax to get last 1 scan data
    public function scan_ajax()
    {
        $this->db->order_by('keydata', 'DESC');
        $this->db->limit(1);
        return $this->db->get('scan_list')->result();
    }

    public function user_list()
    {
        return $this->db->get('users')->result();
    }

    public function user_add($id_number, $name, $email, $password, $role)
    {
        $data = array(
            'id_number' => $id_number,
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role_id' => $role,
            'image' => rand(1, 50)
        );
        $this->db->insert('users', $data);
    }

    public function user_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }

    #create function user_edit to get user data by id
    public function user_edit($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('users')->result();
    }

    public function user_update($id, $id_number, $name, $email, $role)
    {
        $this->db->where('id', $id);
        $data = array(
            'id_number' => $id_number,
            'name' => $name,
            'email' => $email,
            'role_id' => $role
        );
        $this->db->update('users', $data);
    }

    public function tag_search($sn)
    {
        $serial_number = array('serial_number' => $sn);
        $this->db->insert('tag_search', $serial_number);
    }

    

    #create function roles to get all roles then return to $roles
    public function role_list()
    {
        $roles = $this->db->get('user_role')->result();
        return $roles;
    }

    #create function to delete roles by id
    public function role_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_role');
    }

    #create function to add user_role by insert $name to user_role table
    public function role_add($name)
    {
        $data = array(
            'name' => $name
        );
        $this->db->insert('user_role', $data);
    }

    #create function to update user_role by id
    public function role_update($id, $name)
    {
        $this->db->where('id', $id);
        $data = array(
            'name' => $name
        );
        $this->db->update('user_role', $data);
    }
}
