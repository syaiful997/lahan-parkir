<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat_parkir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tempat_parkir_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
    $data["tempat_parkir"] = $this->Tempat_parkir_model->getAll();
    $this->load->view("tempat_parkir/list_lahanparkir" ,$data);
    }

    public function add()
    {
    	$tempat_parkir = $this->Tempat_parkir_model;
        $validation = $this->form_validation;
        $validation->set_rules($tempat_parkir->rules());

        $data['members']=$this->Tempat_parkir_model->getMembers();

        if ($validation->run()) {
            $tempat_parkir->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("tempat_parkir/new_lahanparkir", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('tempat_parkir');
       
        $tempat_parkir = $this->Tempat_parkir_model;
        $validation = $this->form_validation;
        $validation->set_rules($tempat_parkir->rules());

        $data['members']=$this->Tempat_parkir_model->getMembers();

        if ($validation->run()) {
            $tempat_parkir->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["tempat_parkir"] = $tempat_parkir->getById($id);
        if (!$data["tempat_parkir"]) show_404();
        
        $this->load->view("tempat_parkir/edit_lahanparkir", $data);
	    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->Tempat_parkir_model->delete($id)) {
            redirect(base_url('tempat_parkir'));
        }
    }
}