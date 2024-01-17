<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class statusmaster_m extends CI_Model {

    public function get_statusmaster()
    {
        //select semua data user
        $this->db->select('*');
        $this->db->from('transactions');
        $this->db->order_by('transaction_id', 'DESC');
        return $this->db->get();
    }


}