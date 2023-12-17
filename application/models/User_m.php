<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_m extends CI_Model {

    public function get_user()
    {
        //select semua data user
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('id', 'DESC');
        return $this->db->get();
    }

    public function simpan_user($data)
    {
    //insert data
    return $this->db->insert("users", $data);
    }

    public function edit_user($user_id)
    {
        //edit data
        $query = $this->db->where("user_id", $user_id)->get("users");

        return $query->row();
    }

    public function update_user($data, $user_id)
    {
        //update user
        return $this->db->update("users", $data, $user_id);
    }

    public function hapus_user($id)
    {
        //hapus user
           return $this->db->delete("users", $id);
    }

}