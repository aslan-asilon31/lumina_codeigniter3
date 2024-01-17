<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        // Load the content view
        $data['content'] = $this->load->view('auth/login', [], true);
    
        // Load the main template view and pass the content as data
        $this->load->view('template/auth', $data);
    }
    

    public function register()
    {
        $data['content'] = $this->load->view('auth/register', [], true);

        $this->load->view('template/auth', $data);
    }

    public function reset()
    {
        $data['content'] = $this->load->view('auth/reset', [], true);

        $this->load->view('template/auth', $data);
    }
}