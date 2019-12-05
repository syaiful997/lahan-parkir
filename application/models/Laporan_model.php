<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    
    public function getAll()
    {
        //return $this->db->get($this->_table)->result();

        $hasil=$this->db->query("select a.tanggal_awal, a.tanggal_akhir, b.kode_tempat_parkir, c.nama_pemilik ,a.biaya
			from transaksi a 
			inner join 
			tempat_parkir b on a.kode_tempat_parkir=b.tempat_parkir_id
			inner join owner c on b.owner_id=c.owner_id
			where a.status='SUDAH_BAYAR'");
          return $hasil->result() ;
    }
}