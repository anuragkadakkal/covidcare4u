<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://dashboard.kerala.gov.in/index.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Cookie: PHPSESSID=bff027451e743bdada57071646aadd7b'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$response = strip_tags($response);

function string_between_two_string($str, $starting_word, $ending_word)
{
    $subtring_start = strpos($str, $starting_word);
    $subtring_start += strlen($starting_word);  
    $size = strpos($str, $ending_word, $subtring_start) - $subtring_start;  
    return substr($str, $subtring_start, $size);  
}


$stringneeded = string_between_two_string($response, 'Updated:', 'Cumulative Summary of Kerala');
$arr=preg_split("/\s+/", trim($stringneeded));
//var_dump($arr);
/*
echo "Updated On : ".$arr[0]." ".$arr[1].$arr[2]."<br>";

$pos=array_search("Statistics",$arr);
echo "<br>Total Confirmed :".$arr[$pos+1]."<br>";

$pos=array_search("Active",$arr);
echo "<br>Active Cases ".$arr[$pos+2]." : ".$arr[$pos-1]."<br>";

$pos=array_search("Recovered",$arr);
echo "<br>Recovered ".$arr[$pos+1]." : ".$arr[$pos-2].$arr[$pos-1]."<br>";

$pos=array_search("Deaths",$arr);
echo "<br>Deaths ".$arr[$pos+1]." : ".$arr[$pos-2].$arr[$pos-1]."<br>";

$pos=array_search("People",$arr);
echo "<br>People Vaccinated : ".$arr[$pos-1]."<br>";

$pos=array_search("≈",$arr);
echo "<br>% of Kerala People Vaccinated : ".$arr[$pos+1]."<br>";

$pos=array_search("First",$arr);
echo "<br>First Dose : ".$arr[$pos+2]."<br>";

$pos=array_search("Second",$arr);
echo "<br>Second Dose : ".$arr[$pos+2]."<br>";

$stringneeded = string_between_two_string($response, 'Second', 'Cumulative Summary of Kerala');
$arr=preg_split("/\s+/", trim($stringneeded));

$pos=array_search("Total",$arr);
echo "<br>Total : ".$arr[$pos+1]." Vaccinations<br>";


$pos=array_search("Projected",$arr);
echo "<br>2021 Projected population of Kerala is ".$arr[$pos+5]." as per the report of National Commission on Population<br>";*/
