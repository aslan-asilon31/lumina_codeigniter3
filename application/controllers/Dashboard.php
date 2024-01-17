<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {

        $data = array(
            'title' => 'Dashboard Page'
        );

        $data['content'] =   $this->load->view('dashboard/index', $data, true);
        $this->load->view('template/backend', $data, true);

    }
}