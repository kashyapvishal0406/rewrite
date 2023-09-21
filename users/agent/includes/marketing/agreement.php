<?php
include("includes/error.php");
include("includes/session.php");
require_once '../../configs/paths.php';
require_once DB_CONFIG_PATH;
?>
<?php
require_once('vendors/tcpdf/tcpdf.php');

// Start output buffering to capture HTML output
ob_start();

// Include the modified letter.php file
include('agreement_template.php');

// Get the HTML content from the buffer
$htmlContent = ob_get_clean();

$pdf = new TCPDF();
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
// Add a page
$pdf->AddPage();

// Add the HTML content to the PDF
$pdf->writeHTML($htmlContent, true, false, true, false, '');

// Output the PDF as a download
$pdf->Output('leave_application.pdf', 'I');
?>