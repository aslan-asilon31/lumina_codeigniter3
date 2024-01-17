<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


    public function __construct() {

        parent::__construct();
        $this->load->model('user_m');
        $this->load->database();
  
     }

    public function index()
    {
        $data = array(
            'title' => 'User Page',
            'data_user' => $this->user_m->get_user()->result()
        );


        $data['content'] =   $this->load->view('users/index', $data, true);
        $this->load->view('template/backend', $data);

    }

    // function get_user_json() { //data data produk by JSON object
    //     header('Content-Type: application/json');
    //     $query = $this->db->query('SELECT * FROM users ORDER BY user_id DESC');
    //     return $query->result_array();
    //     // echo $data;
    // }

    public function get_user_json()
    {
 
       $draw = intval($this->input->get("draw"));
       $start = intval($this->input->get("start"));
       $length = intval($this->input->get("length"));
 
       $query = $this->db->get("users");
 
 
       $data = [];
 
 
       foreach($query->result() as $r) {
 
            $data[] = array(
 
                 $r->id,
 
                 $r->name,
 
                 $r->email
 
            );
 
       }
 
 
       $result = array(
 
                "draw" => $draw,
 
                  "recordsTotal" => $query->num_rows(),
 
                  "recordsFiltered" => $query->num_rows(),
 
                  "data" => $data
 
             );
 
 
       echo json_encode($result);
 
       exit();
 
    }

    public function tambah()
    {
        //load view
        $this->load->view('users/create');
    }

    public function simpan()
    {
        //load model
        $this->load->model('user_m');

        $randomId = null;

        while (!$randomId || $this->db->where('user_id', $randomId)->get('users')->row()) {
            $randomId = rand(1, 1000); // Adjust range based on your table size
        }

        // print_r($_FILES["image"]["tmp_name"]);exit;

        //get data dari form
        $user_id            = $randomId;
        $name    = $this->input->post('name');
        $email          = $this->input->post('email');
        $base64Gambar = $_FILES["image"]["tmp_name"];

        $Path = "upload/";
        $ImagePath = $Path . $name. "_logoku.png";
        move_uploaded_file($base64Gambar, $ImagePath);
        
        $data = array(
            'user_id'         => $user_id,    
            'name' => $name,
            'email'       => $email,    
            'image'       => $ImagePath    
        );

        //insert data via model
        $this->user_m->simpan_user($data);

        //redirect ke controller siswa
        redirect('user');

    }

    public function edit($user_id)
    {
        //load model 
        $this->load->model('user_m');

        //get ID dari URL segment ke 3
        $id_siswa = $this->uri->segment(3);

        $data = array(
            'data_user' => $this->user_m->edit_user($user_id)
        );

        //load view
        $this->load->view('users/edit', $data);
    }

    public function update()
    {

        //load model
        $this->load->model('user_m');


        // $config['upload_path']   = './upload/';
        // $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size']      = 1000;
        // $config['max_width']     = 1024;
        // $config['max_height']    = 768;


        // print_r($_FILES["image"]);exit;
        
        //get data dari form
        // $user_id= $this->input->post("user_id");
        $user_id['user_id'] = $this->input->post("user_id");
        $name    = $this->input->post('name');
        $email            = $this->input->post('email');
        $base64Gambar            = $this->input->post('image');
        // $base64Gambar = $_FILES["image"]["tmp_name"];
        // print_r($name);exit;
        // print_r($image);exit;

        $Path = "upload/";
        $ImagePath = $Path . $name. "_logoku.png";

        move_uploaded_file($base64Gambar, $ImagePath);
        // print_r($ImagePath);exit;
        
        $data = array(
            'name'         => $name,
            'email'       => $email,
            'image'       => $ImagePath  
        );

        //update via model    
        $this->user_m->update_user($data, $user_id);
        //redirect ke controller siswa
        redirect('user');
    }

    public function hapus($id_siswa)
    {
    //load model
    $this->load->model('user_m');

    //get ID dari URL segment ke 3
    $id['user_id'] = $this->uri->segment(3);

    //delete via model
    $this->user_m->hapus_user($id);

    //redirect ke controller siswa
    redirect('user');

    }



}