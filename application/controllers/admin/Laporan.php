<?php

class Laporan extends CI_Controller {
  

	function __construct(){
		parent::__construct();
		$this->load->model("Laporan_model");
        $this->load->library('pdf');

	}

	public function index()
	{
        $data["laporans"] = $this->Laporan_model->getAll();
    	$this->load->view("admin/laporan" ,$data);
	}

	public function cetakPdf(){
		$pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'LAPORAN DATA TRANSAKSI',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'YANG SUDAH BAYAR',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(59,6,'Nama Pemilik',1,0);
        $pdf->Cell(39,6,'Kode Tempat Parkir',1,0);
        $pdf->Cell(29,6,'Tanggal Awal',1,0);
        $pdf->Cell(29,6,'Tanggal Akhir',1,0);
        $pdf->Cell(20,6,'Biaya',1,1);
        
        $pdf->SetFont('Arial','',10);
        $data = $this->Laporan_model->getAll();
        foreach ($data as $row){
            $pdf->Cell(59,6,$row->nama_pemilik,1,0);
            $pdf->Cell(39,6,$row->kode_tempat_parkir,1,0);
            $pdf->Cell(29,6,$row->tanggal_awal,1,0);
            $pdf->Cell(29,6,$row->tanggal_akhir,1,0);
            $pdf->Cell(20,6,$row->biaya,1,1);
            
            }
        $pdf->Output();
    }
}