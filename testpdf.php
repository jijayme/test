<?php
// Include the TCPDF library
require_once('../tcpdf/tcpdf.php');


// Create a TCPDF instance
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Add a page
$pdf->AddPage();

// Fetch the HTML content of the webpage
$html = file_get_contents('https://github.com/eKoopmans/html2pdf.js/issues/271');

// Convert HTML to PDF
$pdf->writeHTML($html, true, false, true, false, '');


$pdf->Output($_SERVER['DOCUMENT_ROOT'] . 'test/upload/SAMPLE.pdf', 'F');

echo 'PDF saved to upload/SAMPLE.pdf';
 

?>