<?php

class Dashboard extends CI_Controller {
  

	function __construct(){
		parent::__construct();
		$this->load->model("Dashboard_model");
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
        // load view admin/dashboard.php
        $this->load->view("admin/dashboard");
	}
}