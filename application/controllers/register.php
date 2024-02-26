<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('register_model'); // Load the model
    }

    public function index()
    {

            // Load the content view
            $data['content'] = $this->load->view('auth/register', [], true);
        
            // Load the main template view and pass the content as data
            $this->load->view('template/auth', $data);


    }

    public function process_registration() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        // Add more validation rules as needed

        if ($this->form_validation->run() == FALSE) {
                redirect('login/errorpage');
        } else {
            // Validation passed, proceed with registration
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // Call the register_user method from the model
            $this->register_model->register_user($name,$email, $password);

            redirect('login/successpage');

        }
    }
    
    public function forgotpassword()
    {
        $data['content'] = $this->load->view('auth/forgotpassword', [], true);

        $this->load->view('template/auth', $data);
    }

    public function errorpage()
    {

        $data['error'] = 'Invalid username or password';
        $data['content'] = $this->load->view('auth/errorpage', $data, true);

        $this->load->view('template/auth', $data);
    }

    public function successpage()
    {
        $data['success'] = 'Register Successfull';
        $data['content'] = $this->load->view('auth/successpage', $data, true);

        $this->load->view('template/auth', $data);
    }


}