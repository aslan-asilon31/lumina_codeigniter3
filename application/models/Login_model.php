<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function validate_user($email, $password) {
        // Validate user against database
        $this->db->where('email', $email);
        $this->db->where('password', sha1($password)); // You should use proper hashing and salt

        
        $query = $this->db->get('users');
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
}
