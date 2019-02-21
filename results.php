<?php


$project = $_ENV["PROJECT"];
$apiKey = $_ENV["KEY"];



$endpoint_url = 'https://cloud.testdroid.com/api/me/projects/' . $project . '/runs';

$curl = curl_init();

curl_setopt($curl, CURLOPT_HTTPHEADER, array("Accept: application/json"));
curl_setopt($curl, CURLOPT_USERPWD, $apiKey . ":");
curl_setopt($curl, CURLOPT_URL, $endpoint_url);

// Assigns our options
//curl_setopt_array($curl, $options);

// Executes the cURL POST
$results = curl_exec($curl);
//echo $results;

//eval($runstr);

?>
