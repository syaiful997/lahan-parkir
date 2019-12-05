<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
 
		$this->load->helper(array('url'));
        $this->load->model("transaksi_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
    $data["transaksi"] = $this->transaksi_model->getAll();
    
	$this->load->view("transaksi/list_transaksi" ,$data);


    }

    public function add()
    {
    	$transaksi = $this->transaksi_model;
		$data['tempatParkir']=$this->transaksi_model->tempatParkir();
		$data['members']=$this->transaksi_model->getMembers();
			
    
        $validation = $this->form_validation;
        $validation->set_rules($transaksi->rules());

        if ($validation->run()) {
           $transaksi->save();
         	$this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("transaksi/new_transaksi", $data);
    }
    	
    public function upload($id = null)
    {
        if (!isset($id)) redirect('admin/transaksi');
       
        $transaksi = $this->transaksi_model;
        $validation = $this->form_validation;
        $validation->set_rules($transaksi->rules());

        if ($validation->run()) {
            $transaksi->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["transaksi"] = $transaksi->getById($id);
        if (!$data["transaksi"]) show_404();
        
        $this->load->view("transaksi/edit_transaksi", $data);
    }
    

}