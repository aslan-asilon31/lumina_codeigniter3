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

        $password_confirm = $this->input->post('password');

        if(empty($password_confirm)){
            // Load the content view
            $data['content'] = $this->load->view('auth/login', [], true);
        
            // Load the main template view and pass the content as data
            $this->load->view('template/auth', $data);
        }else{
            redirect('login/process_registration');
        }

    }

    public function process_login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Check if username and password are valid
        $user = $this->login_model->validate_user($email, $password);

        if($user) {
            // If user is valid, store user data in session or perform necessary actions
            $this->session->set_userdata('user_id', $user->id);
            redirect('dashboard'); // Redirect to a dashboard page or any other page
        } else {

        }
    }
    

    public function forgotpassword()
    {
        $data['content'] = $this->load->view('auth/forgotpassword', [], true);

        $this->load->view('template/auth', $data);
    }

    public function errorpage()
    {
        // If not valid, show login page with an error message
        $data['error'] = 'Invalid username or password';
        $data['content'] = $this->load->view('auth/errorpage', $data, true);

        // $this->load->view('login_view', $data);
        
        $this->load->view('template/auth', $data);
    }

    public function successpage()
    {
        $data['content'] = $this->load->view('auth/successpage', [], true);

        $this->load->view('template/auth', $data);
    }


}