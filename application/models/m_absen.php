<?php

defined("BASEPATH") or exit("No direct script access allowed");

class M_absen extends CI_Model
{

    function getDataAbsen()
    {
        $this->db->select('name, in, out');
        $this->db->from('absen');
        $this->db->join('user', 'absen.user_id = user.id');
        $query = $this->db->get();
        return $query->result();
    }

    function insertDataAbsen($data)
    {
        $this->db->insert('absen', $data);
    }

    public function outDataAbsen($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $this->db->update('absen', $data);
    }
}
