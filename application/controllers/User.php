<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        //load model
        $this->load->model('user_m');

        $data = array(
            'data_user' => $this->user_m->get_user()->result()
        );
        //load view
        $this->load->view('users/index', $data);
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
        // print_r($ImagePath);exit;
        move_uploaded_file($base64Gambar, $ImagePath);
        
        $data = array(
            'user_id'         => $user_id,    
            'name' => $name,
            'email'       => $email,    
            'image'       => $ImagePath    
        );
        // print_r($data);exit;
        
        // print_r($data);exit;

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

        //get data dari form
        // $user_id= $this->input->post("user_id");
        $user_id['user_id'] = $this->input->post("user_id");
        $name    = $this->input->post('name');
        $email            = $this->input->post('email');


        $data = array(
            'name' => $name,
            'email'       => $email    
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