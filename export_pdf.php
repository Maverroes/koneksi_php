<?php
require ('fpdf186/fpdf.php');
include 'koneksi.php';

// Ambil data dari database
$query = $db->prepare("SELECT * FROM Pendaftaran");
$query->execute();
$data = $query->fetchAll();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

// Judul di PDF
$pdf->Cell(0,10,'DAFTAR PESERTA PENDAFTARAN',0,1,'C');

// Header kolom
$pdf->SetFont('Arial','B',10);
$pdf->Cell(45,10,'Nama',1);
$pdf->Cell(60,10,'Alamat',1);
$pdf->Cell(25,10,'Gender',1);
$pdf->Cell(40,10,'Pekerjaan',1);
$pdf->Ln();
// ini code Muhammad Averroes
// Data baris
$pdf->SetFont('Arial','',10);
foreach ($data as $row) {
    $pdf->Cell(45,10,$row['Nama'],1);
    $pdf->Cell(60,10,$row['Alamat'],1);
    $pdf->Cell(25,10,$row['Gender'],1);
    $pdf->Cell(40,10,$row['Pekerjaan'],1);
    $pdf->Ln();
}

// Output PDF
$pdf->Output();
?>
