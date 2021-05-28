<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://donation.cmdrf.kerala.gov.in/index.php/Dashboard/allType_transaction',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Cookie: AWSALB=Y86frvG/2D8XwNMGRYHx4xXF2YTDap0VqlrLDEvXbP2OmBJeqKHJAVv4RaOxdgKpT9HLEuqS/OxN3lBzhlCPAoqwNFk+fkEVp8AoSCG2F2tn8xkkvmIyA4TQElUZ; AWSALBCORS=Y86frvG/2D8XwNMGRYHx4xXF2YTDap0VqlrLDEvXbP2OmBJeqKHJAVv4RaOxdgKpT9HLEuqS/OxN3lBzhlCPAoqwNFk+fkEVp8AoSCG2F2tn8xkkvmIyA4TQElUZ; ci_session=25133ca542889842658078b3d8c6328923dccd17'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$str="<li><a href=\"https://donation.cmdrf.kerala.gov.in/#donation\">Donate</a></li>";
$response=str_replace("$str","",$response);

$str="<li><a href=\"https://donation.cmdrf.kerala.gov.in/index.php/Settings/transparency\">Transparency</a></li>";
$response=str_replace("$str","",$response);

$str="<li><a href=\"https://donation.cmdrf.kerala.gov.in/index.php/Settings/payment_list\">Print Receipt</a></li>";
$response=str_replace("$str","",$response);

$str="<li><a href=\"https://donation.cmdrf.kerala.gov.in/index.php/Dashboard/allType_transaction\">Statistics</a></li>";
$response=str_replace("$str","",$response);

$str="<li><a href=\"https://donation.cmdrf.kerala.gov.in/#faq-page\">FAQ</a></li>";
$response=str_replace("$str","",$response);

$str="<li><a href=\"https://donation.cmdrf.kerala.gov.in/#contact-page\">Contact</a></li>";
$response=str_replace("$str","",$response);

$str="\"https://donation.cmdrf.kerala.gov.in/\"";
$response=str_replace("$str","index.php",$response);

$str="<a target=\"_blank\" href=\"http://cdit.org\">C-DIT</a>";
$response=str_replace("$str","Anurag A",$response);

$str="View Expenditure Details";
$response=str_replace("$str","Close",$response);

$str="https://donation.cmdrf.kerala.gov.in/index.php/Settings/transparency#expenditure";
$response=str_replace("$str","index.php",$response);

$str="https://donation.cmdrf.kerala.gov.in/assets/images/thanks-icon-en.png";
$response=str_replace("$str","resources/images/coronavirus_214.png",$response);

$str="https://donation.cmdrf.kerala.gov.in//assets/images/logo-en.png";
$response=str_replace("$str","resources/images/covid-logo.png\" height='70px' width='120px'",$response);

$str="https://donation.cmdrf.kerala.gov.in//assets/images/logo-en-mob.png";
$response=str_replace("$str","resources/images/covid-logo.png\" height='70px' width='120px'",$response);

$str="<table class=\"table table-responsive table-condensed table-bordered";
$response=str_replace("$str","<!--",$response);


$str=">Details</span>";
$response=str_replace("$str","-->",$response);


$str="<title>Donation : Chief Minister's Distress Relief Fund</title>";
$response=str_replace("$str","<title>CovidCare4u : Chief Minister's Distress Relief Fund</title>",$response);


$str="https://donation.cmdrf.kerala.gov.in//assets/images/favicon.png";
$response=str_replace("$str","resources/images/covid-logo.png",$response);

$str="https://donation.cmdrf.kerala.gov.in//assets/images/favicon1.png";
$response=str_replace("$str","resources/images/covid-logo.png",$response);


echo $response;
