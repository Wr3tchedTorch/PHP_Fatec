<?php

require "./fpdf186/fpdf.php";
require "./StringUtil.php";
require "./text.php";

$pdfFile = new FPDF();
$pdfFile->AddPage();

$pdfFile->SetFont("Arial", '', 20);
$pdfFile->Cell(0, 0, StringUtil::encodeUTF8("Darth Vader"), 0, 1, 'C');
$pdfFile->Ln();

$pdfFile->SetFont("Arial", '', 12);
$pdfFile->MultiCell(0, 5, StringUtil::encodeUTF8("\n\n{$firstParagraph}"));
$pdfFile->Ln();
$pdfFile->MultiCell(0, 5, StringUtil::encodeUTF8($secondParagraph));
$pdfFile->Ln();
$pdfFile->Image("./vader.jpg", null, null, 150);
$pdfFile->Output("F", "vader_summary.pdf");
