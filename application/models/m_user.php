<?php

defined("BASEPATH") or exit("No direct script access allowed");

class M_user extends CI_Model
{
    function getDataUser()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

    function insertDataUser($data)
    {
        $this->db->insert('user', $data);
    }

    public function getDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        return $query->row();
    }

    public function updateUser($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function getValidation($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        return $query->row();
    }
}
