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

    //Data access
    $servername = "localhost";
    $dbname = "todoing_List";
    $username = "root";
    $password = "";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 


    $sql = "INSERT INTO list (username, name, data)
		VALUES ('$usename', '$name', '$data')"; 
    //echo $sql; exit; //dubug query
    $result = $conn->query($sql);
//echo $result;
    if($result)// successfuly inserted
    {
      response(201,"Product Inserted",$result);
    }else{
      response(400,"Product not inserted",$result);
    }


function response($status,$status_message,$data)
{
    header("HTTP/1.1 ".$status);
    
    $response['status']=$status;
    $response['status_message']=$status_message;
    $response['data']=$data;
    
    $json_response = json_encode($response);
    echo $json_response;
}

?>