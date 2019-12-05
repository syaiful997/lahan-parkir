<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Owner_model extends CI_Model
{
    private $_table = "owner";

    public $owner_id;
    public $nama_pemilik;
    public $no_rekening;
    public $nomor_handphone;
    public $alamat;

    public function rules()
    {
        return [
            ['field' => 'nama_pemilik',
            'label' => 'nama_pemilik',
            'rules' => 'required'],

            ['field' => 'no_rekening',
            'label' => 'no_rekening',
            'rules' => 'numeric',
            'rules' => 'required'],

            ['field' => 'nomor_handphone',
            'label' => 'nomor_handphone',
            'rules' => 'numeric',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required']


        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["owner_id" => $id])->row();
    }

    public function save()
    {
    	
        $post = $this->input->post();
        $this->owner_id = uniqid();
        $this->nama_pemilik = $post["nama_pemilik"];
        $this->no_rekening = $post["no_rekening"];
         $this->nomor_handphone = $post["nomor_handphone"];
        $this->alamat = $post["alamat"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->owner_id = $post["id"];
        $this->nama_pemilik = $post["nama_pemilik"];
        $this->no_rekening = $post["no_rekening"];
        $this->nomor_handphone = $post["nomor_handphone"];
        $this->alamat = $post["alamat"];
        $this->db->update($this->_table, $this, array('owner_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("owner_id" => $id));
    }
}