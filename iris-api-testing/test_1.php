<?php

echo "Start.\n";


//-------------------------------------------
//--- test basic Iris API
$tag = "CXNK000CE9D9";

$url = "https://iris.frogfoot.net/iris/api2/api/graphs?search.graphtype=snipsLatency&search.basetag.like=%25".$tag."%25";

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_USERPWD,                 "nelius@frogfoot.com:zB3ekyPU");
curl_setopt($curl, CURLOPT_CUSTOMREQUEST,           "GET"   );

curl_setopt($curl, CURLOPT_RETURNTRANSFER,           TRUE    );
curl_setopt($curl, CURLOPT_ENCODING,                 ''      );
curl_setopt($curl, CURLOPT_TIMEOUT,                  5       );
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT,           5       );
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,           FALSE   );
curl_setopt($curl, CURLOPT_FOLLOWLOCATION,           TRUE    );




$JobJson = curl_exec($curl);
curl_close($curl);
//var_dump($JobJson);

echo $JobJson;


die;
//-------------------------------------------






//////////////////////

//.--------------

// $JobJson = curl_exec($CH);
// curl_close($CH);
// var_dump($JobJson);

// $GraphData = json_decode($JobJson,FALSE,512,JSON_BIGINT_AS_STRING);

// var_dump($GraphData);
		






echo "End.\n";
?>