
<?php 
include_once 'database.php';
session_start();
    $destination_id = $_SESSION['destination_id']; 
    $agency_id = $_SESSION['agency_id'];

    $query = "SELECT * FROM destinations WHERE id = $destination_id";
    $result = mysqli_query($link, $query);
    $destination = mysqli_fetch_array($result);
    
    $query2 = "SELECT * FROM agencies WHERE id = $agency_id";
    $result2 = mysqli_query($link, $query2);
    $agency = mysqli_fetch_array($result2);
    
require('fpdf.php'); 

//create a FPDF object
$pdf=new FPDF();

$pdf->SetAuthor($agency['title']);
$pdf->SetTitle($destination['title']);

//set font for the entire document
$pdf->SetFont('Helvetica','B',20);
$pdf->SetTextColor(50,60,100);

//set up a page
$pdf->AddPage('P'); 

//$pdf->SetDisplayMode(real,'default');

//insert an link and make it a link
//$pdf->Link(10, 20, 33,33, 'http://www.fpdf.org/');

//display the title with a border around it
$pdf->SetXY(50,20);
$pdf->SetDrawColor(50,60,100);
$pdf->Cell(100,10,$destination['title'],1,0,'C',0);

//Set x and y position for the main text, reduce font size and write content
$pdf->SetXY (10,50);
$pdf->SetFontSize(10);
$pdf->Write(5,'Ponudnik potovanja:'.$agency['title']);

$pdf->SetXY (10,55);
$pdf->Write(7,'Ime potovanja:'.$destination['title']);

$pdf->SetXY (10,60);
$pdf->Write(9,'Opis potovanja:'.$destination['description']);

//Output the document
$pdf->Output('example1.pdf','I'); 
?>
