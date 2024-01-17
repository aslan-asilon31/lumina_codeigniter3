<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {


    public function __construct() {

        parent::__construct();
        $this->load->model('order_m');
        $this->load->database();
  
     }

    public function index()
    {
        $data = array(
            'title' => 'Order Page',
            'data_order' => $this->order_m->get_order()->result()
        );


        $data['content'] =   $this->load->view('orders/index', $data, true);
        $this->load->view('template/backend', $data);

    }
}