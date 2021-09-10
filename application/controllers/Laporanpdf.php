<?php
class Laporanpdf extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf'); 
    }



    function index()
    {
        $pdf = new FPDF('l', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(270, 7, 'Laporan Surat Keluar', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(270, 7, 'Desa Gandasoli', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(25, 6, 'Id_Surat', 1, 0, 'C');
        $pdf->Cell(25, 6, 'Tgl_Surat', 1, 0, 'C');
        $pdf->Cell(75, 6, 'No_Surat', 1, 0, 'C');
        $pdf->Cell(55, 6, 'Jenis_Surat', 1, 0, 'C');
        $pdf->Cell(55, 6, 'Nama_Pengaju', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Pekerjaan', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $suratkeluar = $this->db->get('suratkeluar')->result();
        foreach ($suratkeluar as $row) {
            $pdf->Cell(25, 6, $row->Id_Surat, 1, 0);
            $pdf->Cell(25, 6, $row->Tgl_Surat, 1, 0);
            $pdf->Cell(75, 6, $row->No_Surat, 1, 0);
            $pdf->Cell(55, 6, $row->Jenis_Surat, 1, 0);
            $pdf->Cell(55, 6, $row->Nama_Pengaju, 1, 0);
            $pdf->Cell(35, 6, $row->Pekerjaan, 1, 1);
        }
        $pdf->Output();
    }


    function SMasuk()
    {
        $pdf = new FPDF('l', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(245, 7, 'Laporan Surat Masuk', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(245, 7, 'Desa Gandasoli', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(25, 6, 'Id_Surat', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Tanggal Penerimaan', 1, 0, 'C');
        $pdf->Cell(75, 6, 'No_Surat', 1, 0, 'C');
        $pdf->Cell(55, 6, 'Tanggal Surat', 1, 0, 'C');
        $pdf->Cell(55, 6, 'Pengirim', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $suratkeluar = $this->db->get('suratmasuk')->result();
        foreach ($suratkeluar as $row) {
            $pdf->Cell(25, 6, $row->Id_SMasuk, 1, 0);
            $pdf->Cell(35, 6, $row->Tgl_Penerimaan, 1, 0);
            $pdf->Cell(75, 6, $row->No_SMasuk, 1, 0);
            $pdf->Cell(55, 6, $row->Tanggal, 1, 0);
            $pdf->Cell(55, 6, $row->Pengirim, 1, 1);
        }
        $pdf->Output();
    }
}
