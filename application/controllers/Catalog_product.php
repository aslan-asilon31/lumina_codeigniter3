<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login_model'); // Load the model
    }

    public function index()
    {
        $data['content'] = $this->load->view('catalog/product_vw', [], true);

        $this->load->view('template/backend', $data);
    }
    

}
