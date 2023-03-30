<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "information";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    if($conn->connect_error){
        die("Connection error:" .$conn->connect_error);
    }
    
?>