<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kendb";

    // Connection
    // $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    // if($conn){
    //     echo "Connected to ".$dbname." established successfully";
    // }else{
    //     die("Connection failed: ". mysqli_connect_error());
    // }

    // Connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    else{
        echo "Connected to ".$dbname." Established successfully";
    }
?>