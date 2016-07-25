<?php
require 'pdfcrowd.php';

try
{   
    // create an API client instance
    $client = new Pdfcrowd("sorarikodikos", "06959ab6dbbcd0844ab03285e4dac92d");

    // convert a web page and store the generated PDF into a $pdf variable
    #$pdf = $client->convertURI('http://www.google.com/');
$pdf = $client->convertFile("contents.html");
    // set HTTP response headers
    header("Content-Type: application/pdf");
    header("Cache-Control: max-age=0");
    header("Accept-Ranges: none");
    header("Content-Disposition: attachment; filename=\"dps.pdf\"");

    // send the generated PDF 
    echo $pdf;
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>
