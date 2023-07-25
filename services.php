<?php

$url = "localhost";
$database = "demodb";
$username = "root";
$password = "";
$conn = new mysqli($url, $username, $password, $database);

if(!$conn){
    die("Unable to connect: ".$conn->connect_error);
}

$sql = "SELECT * FROM demodb.tblusers";
$results = mysqli_query($conn, $sql);

$rows = array();

if(mysqli_num_rows($results)>0){
    while($record = mysqli_fetch_assoc($results)){
        array_push($rows, $record);
    }
    print json_encode($rows);
}
else{
    echo("No records found");
}