<?php

echo "Start.\n";

//--- test basic Iris API
$tag = "CXNK000CE9D9";

$url = "https://iris.frogfoot.net/iris/api2/api/graphs?search.graphtype=snipsLatency&search.basetag.like=%25".$tag."%25";
$curl = curl_init($url);
                curl_setopt($curl, CURLOPT_TIMEOUT, 5);
                curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_USERPWD, "jm@frogfoot.com:frog4get");
                $JobJson = curl_exec($curl);
                curl_close($curl);
                var_dump($JobJson);


die;







//
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


//


                // Get Graph number
		                                $URL = "https://iris.frogfoot.net/iris/api2/api/graphs?search.graphtype=snipsLatency&search.basetag.like=%25".$Tag."%25";
                //echo $URL."\n";
		                                //die();
                curl_setopt($CH, CURLOPT_TIMEOUT, 5);
                curl_setopt($CH, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($CH, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($CH, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($CH, CURLOPT_USERPWD, "jm@frogfoot.com:frog4get");
                $JobJson = curl_exec($CH);
                curl_close($CH);
                var_dump($JobJson);


//


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