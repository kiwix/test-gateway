<?php
$apkId = $_GET["apk"];
$testId = $_GET["test"];
$buildno = $_GET["buildno"];
echo "hi" . $apkId . $testId;


$project = $_ENV["PROJECT"];
$apiKey = $_ENV["KEY"];


if (!isset($apkId) || !isset($testId) || !isset($buildno)) {
	die("params must be ints");
}

$apkId = intval($apkId);
$testId = intval($testId);
$buildno = intval($buildno);

$data = "{
	\"osType\":\"ANDROID\",\"projectId\":". $project .",\"testRunName\":\"Auto Test " .$buildno . "\",
		\"files\":[
			{\"id\":".$apkId."},
			{\"id\":".$testId."}
		],
	\"frameworkId\":748,\"deviceGroupId\":25500
	}";

$endpoint_url = 'https://cloud.testdroid.com/api/me/runs';

$curl = curl_init();

curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($curl, CURLOPT_USERPWD, $apiKey . ":");
curl_setopt($curl, CURLOPT_URL, $endpoint_url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

// Assigns our options
//curl_setopt_array($curl, $options);

// Executes the cURL POST
echo "sending";
$results = curl_exec($curl);
echo "sent";

//eval($runstr);

?>
