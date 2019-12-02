<?php
require_once('tcpdf/tcpdf.php');
include("configDB.php");

//get info from database
session_start();
$iduser = $_SESSION["iduser"];
$sqlAlumno ="SELECT * FROM user WHERE iduser = '$iduser'";
$resAlumno = mysqli_query($conexion, $sqlAlumno);
$infAlumno = mysqli_fetch_row($resAlumno);

$tmp = $_REQUEST["postToSend"];

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('David Portilla');
$pdf->SetTitle('There Will Be Postcards!');
$pdf->SetSubject('Postcard');
$pdf->SetKeywords('postcard, PDF, twbp, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', 'BI', 20);

// add a page
$pdf->AddPage();

$emailReceiver = $_POST["email"];
$signSender = $_POST["sign"];
$dateNow = date("Y-m-d");
// set some text to print
$html = <<<EOD
<h1 style="text-align: center; color: #3A81EB;">POSTCARD from TWBP!</h1>
<img src="../postcards/p$tmp.jpg">
<hr>
<p>
    <h4 style="text-align: left; color: #3A81EB;">From: <span style="color: #000000;">$infAlumno[1] $infAlumno[2]</span></h4>
    <h4 style="text-align: left; color: #3A81EB;">To: <span style="color: #000000;">$emailReceiver</span></h4>
    <h4 style="text-align: left; color: #3A81EB;">Sign: <span style="color: #000000;">$signSender</span></h4>
    <h4 style="text-align: left; color: #3A81EB;">Date: <span style="color: #000000;">$dateNow</span></h4>
</p>
EOD;

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('postcard.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+