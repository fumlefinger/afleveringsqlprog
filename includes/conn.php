<?php

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "schoolcontrols";

$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
    die("connection failed");
}
else {  
}
?>