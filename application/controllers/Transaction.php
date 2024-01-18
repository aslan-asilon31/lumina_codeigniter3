<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {



    public function __construct() {

        parent::__construct();
        $this->load->model('transaction_m');
        $this->load->database();
  
     }
    
    public function index()
    {
        $data = array(
            'title' => 'Transaction Page',
            'data_transaction' => $this->transaction_m->get_transaction()->result()
        );

        $data['content'] =  $this->load->view('transaction/index', $data, true);
        $this->load->view('template/backend', $data);

    }

}