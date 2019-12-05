<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owners extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("owner_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
    $data["owners"] = $this->owner_model->getAll();
    $this->load->view("admin/owner/list_owner" ,$data);
    }

    public function add()
    {
    	$owner = $this->owner_model;
        $validation = $this->form_validation;
        $validation->set_rules($owner->rules());

        if ($validation->run()) {
            $owner->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/owner/new_owner");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/owner');
       
        $owner = $this->owner_model;
        $validation = $this->form_validation;
        $validation->set_rules($owner->rules());

        if ($validation->run()) {
            $owner->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["owner"] = $owner->getById($id);
        if (!$data["owner"]) show_404();
        
        $this->load->view("admin/owner/edit_owner", $data);
	    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->owner_model->delete($id)) {
            redirect(base_url('admin/owners'));
        }
    }
}