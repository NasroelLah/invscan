<?php
class Main_model extends CI_Model
{
    public function scan_list()
    {
        return $this->db->get('scan_list')->result();
    }

    public function scan_last()
    {
        $this->db->from('scan_list');
        $this->db->order_by('keydata', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    public function scan_ajax()
    {
        return $this->db->query('SELECT epc FROM scan_list ORDER BY keydata DESC LIMIT 1')->result();
    }

    public function user_list()
    {
        return $this->db->get('users')->result();
    }

    public function user_id($id)
    {
        // return $this->db->where('id', $id)->row();
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
}
