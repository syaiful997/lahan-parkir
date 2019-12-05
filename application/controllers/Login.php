<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Register_model");
		 $this->load->library('form_validation','session');
	}

	public function index()
    {
    $data["login"] = $this->Register_model->getAll();
    $this->load->view('login');
    }

    function aksi_login(){
    	$username =$this->input->post('username');
    	$password =$this->input->post('password');
    	$where = array(
    	'username' => $username,
    	'password' => $password
    	);
    $cek = $this->Register_model->cek_login("register",$where)->num_rows();
    if($cek > 0){

    	$data_session = array(
    		'nama' =>$username,
    		'status' => "login"
    	);

    	$this->session->set_userdata($data_session);

    	redirect(base_url("admin/dashboard"));

    }else{
    echo "Login gagal! username dan password salah!";
	
    }
    }

    function logout(){
    	$this->session->session_destroy();
    	redirect(base_url('login'));
    }

}
