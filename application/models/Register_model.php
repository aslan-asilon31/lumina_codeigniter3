<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    public function register_user($name,$email, $password) {
        // You should perform proper password hashing and database insertion here
        $data = array(
            'name' => $name,
            'email' => $email,
            'password' => sha1($password), 
        );

        $this->db->insert('users', $data);
    }
}
