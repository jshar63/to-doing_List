<?php

if (isset($_REQUEST['usename'])){
	$usename = $_REQUEST['usename'];
}
if (isset($_REQUEST['name'])){
	$name = $_REQUEST['name'];
}
if (isset($_REQUEST['data'])){
	$data = $_REQUEST['data'];
}

//print_r($_REQUEST['usename']);exit;
$data = rawurlencode($data);
$name = rawurlencode($name);

 $apiURL = "http://localhost/webservices/to-doingList/CreateList/serverPOST.php?usename=$usename&name=$name&data=$data";
 //echo $apiURL;exit;
 $curl = curl_init($apiURL);
 
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // GET method
 curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");

 //curl_setopt($curl, CURLOPT_POSTFIELDS, "monitor='$monitor'&keyboard='$keyboard'&mouse='$mouse'");  // POST method
 $response = curl_exec($curl);
 curl_close($curl);
 //echo $response;exit;

 $result = json_decode($response);
//echo $result->status;exit;
 if($result->status==201){
    //echo "Successfully added item $data to your list $name";
	include 'success.html';
 }else{

    echo $result->status_message;
 }

?>