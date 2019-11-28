<?php 

session_start();

require('fpdf/fpdf.php');
require('classes/contatos.php');

$contatos = new contatos();
$contatos = $contatos->findContatos($_SESSION["idUsuario"]);


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->MultiCell(100,20,'Lista de Contatos');

$pdf->SetFont('Arial','',12);

foreach ($contatos as $key => $value) {
	$pdf->MultiCell(400, 6, "Nome: $value->nome");
	$pdf->MultiCell(400, 6, "Apelido: $value->apelido");
	$pdf->MultiCell(400, 6, "E-mail: $value->email");
	$pdf->MultiCell(400, 6, "Whatsapp: $value->whatsapp");
	$pdf->MultiCell(400, 6, "Nascimento: $value->dtnasc");
	$pdf->MultiCell(400, 6, '');
}

$pdf->Output();


