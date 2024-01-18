<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    
    public function index()
    {
        $data = array(
            'title' => 'Dashboard Page',
            // 'data_user' => $this->user_m->get_user()->result()
        );

        $data['content'] =  $this->load->view('dashboard/index', $data, true);
        $this->load->view('template/backend', $data);

    }

}