<?php

//echo 'Curl: ', function_exists('curl_version') ? 'Enabled' : 'Disabled';
//die;

echo "Start.\n";


//$URL = "https://iris.frogfoot.net/iris/api2/api/graphs?search.graphtype=snipsLatency&search.basetag.like=%25".$tag."%25";
//echo $URL."\n";
//die();


//--- test basic Iris API
$tag = "CXNK000CE9D9";

$curl = curl_init();
curl_setopt_array($curl, array(
			       CURLOPT_URL => "https://iris.frogfoot.net/iris/api2/api/graphs?search.graphtype=snipsLatency&search.basetag.like=%25".$tag."%25",
			       CURLOPT_RETURNTRANSFER => TRUE,
			       CURLOPT_ENCODING => '',
			       CURLOPT_MAXREDIRS => 10,
			       CURLOPT_TIMEOUT => 5,
			       CURLOPT_CONNECTTIMEOUT => 5,
			       CURLOPT_SSL_VERIFYPEER => FALSE,
			       CURLOPT_FOLLOWLOCATION => TRUE,
			       CURLOPT_USERPWD, "nelius@frogfoot.com:zB3ekyPU",
			       CURLOPT_CUSTOMREQUEST => 'GET'
			       )
		  );

$response = curl_exec($curl);

curl_close($curl);
echo $response;






//////////////////////

//.--------------

// $JobJson = curl_exec($CH);
// curl_close($CH);
// var_dump($JobJson);

// $GraphData = json_decode($JobJson,FALSE,512,JSON_BIGINT_AS_STRING);

// var_dump($GraphData);
		






echo "End.\n";
?>