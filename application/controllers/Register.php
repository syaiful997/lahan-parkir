<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

		$this->load->helper(array('url'));
        $this->load->model("register_model");
        $this->load->library('form_validation');

          // untuk debugging
    //$this->output->enable_profiler(TRUE);
    }

    public function index()
    {
    //$data["register"] = $this->register_model->getAll();
    //$this->load->view("register" ,$data);

    }

    public function add()
    {
    	$register = $this->register_model;
    	
    	$validation = $this->form_validation;
        $validation->set_rules($register->rules());
        if ($validation->run()) {
            $register->save();

        
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $this->load->view("register");
    }
}