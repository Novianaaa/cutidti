<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model
{
    // di file User_model.php

    // application/models/User_model.php

    public function getAllUsers()
    {
        $this->db->select('user.*, user_role.role');
        $this->db->from('user');
        // Perbaikan
        $this->db->join('user_role', 'user_role.id_role = user.role_id');
        return $this->db->get()->result(); // Mengembalikan array objek
    }

    public function getUserById($id)
    {
        $this->db->select('user.*, user_role.role');
        $this->db->from('user');
        // Perbaikan
        $this->db->join('user_role', 'user_role.id_role = user.role_id');
        $this->db->where('user.id_user', $id);
        return $this->db->get()->row_array(); // Mengembalikan satu objek
    }
}
