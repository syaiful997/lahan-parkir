<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    private $_table = "transaksi";

    public $transaksi_id;
    public $kode_transaksi_id;
    public $nama_member;
    public $kode_tempat_parkir;
    public $tanggal_awal;
    public $tanggal_akhir;
    public $status;
    public $biaya;
	public $path_file ="default.jpg";


    public function rules()
    {
        return [
            ['field' => 'kode_transaksi_id',
            'label' => 'kode_transaksi_id',
            'rules' => 'required'],

            ['field' => 'nama_member',
            'label' => 'nama_member',
            'rules' => 'required'],
            
            ['field' => 'kode_tempat_parkir',
            'label' => 'kode_tempat_parkir',
            'rules' => 'required'],

            ['field' => 'tanggal_awal',
            'label' => 'tanggal_awal',
            'rules' => 'required'],

            ['field' => 'tanggal_akhir',
            'label' => 'tanggal_akhir',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'status'
            ],

            ['field' => 'biaya',
            'label' => 'biaya',
            'rules' => 'required']
        ];
    }

	function tempatParkir(){
			$this->db->order_by('kode_tempat_parkir','ASC');
			$tempatParkirs= $this->db->get('tempat_parkir');
			return $tempatParkirs->result_array();
			//$hasil=$this->db->query("SELECT * FROM tempat_parkir");
        //return $hasil;
		}

		function getMembers(){
			$this->db->order_by('username','ASC');
			$members= $this->db->get('register');
			return $members->result_array();
			//$hasil=$this->db->query("SELECT * FROM tempat_parkir");
        //return $hasil;
		}



    public function getAll()
    {
        //return $this->db->get($this->_table)->result();
		  $hasil=$this->db->query("select a.*, b.kode_tempat_parkir as tempat_parkir 
				from transaksi a inner join tempat_parkir b on a.kode_tempat_parkir=b.tempat_parkir_id;");
          return $hasil->result() ;
		
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["transaksi_id" => $id])->row();
    }

    public function save()
    {
    	
        $post = $this->input->post();
        $this->transaksi_id = uniqid();
        $this->kode_transaksi_id = $post["kode_transaksi_id"];
        $this->nama_member = $post["nama_member"];
        $this->kode_tempat_parkir = $post["kode_tempat_parkir"];
        $this->tanggal_awal = $post["tanggal_awal"];
        $this->tanggal_akhir = $post["tanggal_akhir"];
        $this->status = "BELUM_BAYAR";
        $this->biaya = $post["biaya"];
        $this->path_file = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->transaksi_id = $post["id"];
        $this->kode_transaksi_id = $post["kode_transaksi_id"];
        $this->nama_member = $post["nama_member"];
        $this->kode_tempat_parkir = $post["kode_tempat_parkir"];
        $this->tanggal_awal = $post["tanggal_awal"];
        $this->tanggal_akhir = $post["tanggal_akhir"];
        $this->status = "SUDAH_BAYAR";
        $this->biaya = $post["biaya"];

        if (!empty($_FILES["path_file"]["name"])){
        	$this->path_file = $this->_uploadImage();
        }else {
        }
         $this->path_file = $this->_uploadImage();
        $this->db->update($this->_table, $this, array('transaksi_id' => $post['id']));
    }

    private function _uploadImage()
	{
    $config['upload_path']          = './upload/transaksi/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->transaksi_id;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    	}
    
    return "default.jpg";
	}
}