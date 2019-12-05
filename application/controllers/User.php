<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("register_model");
        $this->load->library('form_validation');

          // untuk debugging
    //$this->output->enable_profiler(TRUE);
    }

    public function index()
    {
    $data["user"] = $this->register_model->getAll();
    $this->load->view("member/list_member" ,$data);

    }

    public function add()
    {
    	$user = $this->register_model;
    
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/member");
    }
}