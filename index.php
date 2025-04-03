<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning to use the FPDF library!</title>
</head>

<body>
    <h1>Learning to use the FPDF library!</h1>
</body>

</html>

<?php

require "./fpdf186/fpdf.php";

$pdfWriter = new FPDF();

$pdfWriter->SetFont("Arial");
$pdfWriter->AddPage();


