<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat_parkir_model extends CI_Model
{
    private $_table = "tempat_parkir";

    public $tempat_parkir_id;
    public $owner_id;
    public $kode_tempat_parkir;
    public $kapasitas_mobil;
    public $alamat;
    public $biaya;
    public $counter;

    public function rules()
    {
        return [
            ['field' => 'kode_tempat_parkir',
            'label' => 'kode_tempat_parkir',
            'rules' => 'required'],

             ['field' => 'owner_id',
            'label' => 'owner_id',
            'rules' => 'required'],

            ['field' => 'kapasitas_mobil',
            'label' => 'kapasitas_mobil',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required']


        ];
    }

	function getMembers(){
			$this->db->order_by('nama_pemilik','ASC');
			$members= $this->db->get('owner');
			return $members->result_array();
			//$hasil=$this->db->query("SELECT * FROM tempat_parkir");
        //return $hasil;
		}

    public function getAll()
    {
    	 $hasil=$this->db->query("select a.*, b.nama_pemilik from tempat_parkir a inner join owner b on a.owner_id=b.owner_id");
          return $hasil->result() ;
        //return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["tempat_parkir_id" => $id])->row();
    }

    public function save()
    {
    	
        $post = $this->input->post();
        $this->tempat_parkir_id = uniqid();
        $this->owner_id = $post["owner_id"];
        $this->kode_tempat_parkir = $post["kode_tempat_parkir"];
        $this->kapasitas_mobil = $post["kapasitas_mobil"];
        $this->alamat = $post["alamat"];
        $this->biaya = $post["biaya"];
        $this->counter = $post["kapasitas_mobil"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->tempat_parkir_id = $post["id"];
        $this->owner_id = $post["owner_id"];
        $this->kode_tempat_parkir = $post["kode_tempat_parkir"];
        $this->kapasitas_mobil = $post["kapasitas_mobil"];
        $this->alamat = $post["alamat"];
        $this->biaya = $post["biaya"];
        $this->counter = $post["kapasitas_mobil"];
        $this->db->update($this->_table, $this, array('tempat_parkir_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("tempat_parkir_id" => $id));
    }

}