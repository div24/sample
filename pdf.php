<?php

//require('u/fpdf.php');//fpdf path
require_once('fpdf/fpdf.php');
include_once('config/db.php');// my db connection

/*$sel = array (1,3);
$id=implode(",",$sel);
$result=mysql_query("select * from `receipt` where id IN($id) ");*/

//$test = "<img src='img/Chrysanthemum.jpg'>";

$email = $_REQUEST['email'];
$date = $_REQUEST['date'];


$result=mysql_query("select * from tbl_ordr WHERE Email='$email' AND date='$date'");

//Initialize the 3 columns and the total
$c_code = "";
$c_name = "";
$c_price = "";
$total = 0;

$i=1;

//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{ 
   $code =$i;
   $username = $row['name'];
   $addr = $row['Sadr1'].' '. $row['Sadr2'];
   $city_zip = $row['Zip_Code'].'-'.$row['City'];
   $country = $row['Country'];
   $state = $row['Stae_Province'];
   $name = substr($row['prod_name'],0,20);
   $real_price = $row['prod_total'];
   $show =$row['prod_total'];

 $c_code = $c_code.$code."\n";
 $c_name = $c_name.$name."\n";
 $c_price = $c_price.$show."\n";
 
 

//Sum all the Prices (TOTAL)
    $total = $total+$real_price;
	$i++;
}
mysql_close();

$total = $total;

$data['text']['cmpny'] = "Test Company"."\n"."Test Address"."\n";
$data['text']['cmpnyone'] = "Test Company One"."\n"."Test Address One"."\n";
//Create a new PDF file
$pdf=new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','',12);


$pdf->SetY(25);
$pdf->SetX(35);
$pdf->SetTextColor(103,103,103);
$pdf->SetFontSize(12);
$pdf->MultiCell(150,6,$data['text']['cmpny'],0,'R',0);
$pdf->Ln();

$pdf->SetTextColor(56,141,14);
$pdf->SetFontSize(20);
$pdf->Text(25,25,'Longvalley Fresh');


$pdf->Ln();
$pdf->SetFontSize(12);
$pdf->SetTextColor(103,103,103);
$pdf->Text(25,35,'Customer:');
$pdf->Ln();
$pdf->Text(25,40,$username);
$pdf->Ln();
$pdf->Text(25,45,$email);
$pdf->Ln();
$pdf->Text(25,50,$addr);
$pdf->Ln();
$pdf->Text(25,55,$city_zip);
$pdf->Ln();
$pdf->Text(25,60,$state);
$pdf->Ln();
$pdf->Text(25,65,$country);

$pdf->Ln();
$pdf->SetTextColor(0,0,0);
$pdf->SetY(75);
$pdf->SetX(25);
$pdf->MultiCell(20,6,$c_code,1);
$pdf->SetY(75);
$pdf->SetX(45);
$pdf->MultiCell(100,6,$c_name,1);
$pdf->SetY(75);
$pdf->SetX(135);
$pdf->MultiCell(30,6,$c_price,1,'R');
$pdf->SetX(135);
$pdf->MultiCell(30,6,'Total :  '.'$ '.$total,1,'R');

$pdf->Ln();


//$pdf->SetY(115);
$pdf->SetX(25);
$pdf->SetTextColor(255,0,0);
$pdf->SetFontSize(12);
$pdf->MultiCell(180,6,$data['text']['cmpnyone'],0,'L',0);
$pdf->Ln();

$filename="invoice.pdf";
$pdf->Output($filename,'F');

//echo'<a href="invoice.pdf">Download your Invoice</a>';

header("Location:invoice.pdf");

?>