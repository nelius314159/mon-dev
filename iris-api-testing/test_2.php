<?php


$curl = curl_init();

curl_setopt_array($curl, array(
			         CURLOPT_URL => 'http://iris-dev.frogfoot.net/iris/api2/api/alarms',
			         CURLOPT_RETURNTRANSFER => true,
			         CURLOPT_ENCODING => '',
			         CURLOPT_MAXREDIRS => 10,
			         CURLOPT_TIMEOUT => 0,
			         CURLOPT_FOLLOWLOCATION => true,
			         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			         CURLOPT_CUSTOMREQUEST => 'GET',
			       CURLOPT_USERPWD, "nelius@frogfoot.com:Jy0x[w0G-A",    // iris-dev			       			       

			       CURLOPT_HTTPHEADER => array(
							         'Cookie: {{Session Cookie}}'
							       ),
			       ));

$response = curl_exec($curl);

curl_close($curl);
echo $response;



die;


echo "Start.\n";

$curl = curl_init();
curl_setopt_array($curl, array(

//			       CURLOPT_URL => "https://iris.frogfoot.net/iris/api2/api/graphs?search.graphtype=snipsLatency&search.basetag.like=%25".$tag."%25",
			       CURLOPT_URL => "http://iris-dev.frogfoot.net/iris/api2/api/devices".urlencode ('search={"deleted":0,"hostname":{"like":"%-lts%"}}')    ,
			       CURLOPT_RETURNTRANSFER => TRUE,
			       CURLOPT_ENCODING => '',
			       CURLOPT_MAXREDIRS => 10,
			       CURLOPT_TIMEOUT => 5,
			       CURLOPT_CONNECTTIMEOUT => 5,
			       CURLOPT_SSL_VERIFYPEER => FALSE,
			       CURLOPT_FOLLOWLOCATION => TRUE,
//			       CURLOPT_USERPWD, "nelius@frogfoot.com:zB3ekyPU",      // iris-prod
			       CURLOPT_USERPWD, "nelius@frogfoot.com:Jy0x[w0G-A",    // iris-dev			       			       
			       CURLOPT_CUSTOMREQUEST => 'GET'

			       )
		  );

$response = curl_exec($curl);

curl_close($curl);
echo $response;

///
//curl --silent --location --globoff --request GET 'http://iris-dev.frogfoot.net/iris/api2/api/devices' \
//  --user 'nelius@frogfoot.com:Jy0x[w0G-A' \
//  --data-urlencode 'search={"deleted":0,"hostname":{"like":"%-lts%"
///



//////////////////////

//.--------------

// $JobJson = curl_exec($CH);
// curl_close($CH);
// var_dump($JobJson);

// $GraphData = json_decode($JobJson,FALSE,512,JSON_BIGINT_AS_STRING);

// var_dump($GraphData);
		






echo "End.\n";
?>