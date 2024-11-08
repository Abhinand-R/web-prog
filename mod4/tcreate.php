<?php
    $conn = mysqli_connect("localhost","root","","kendb");

    if($conn){
        echo "Connection established successfully";
        
        $sql = "CREATE TABLE test11(name VARCHAR(75), mark INT)";
        $res = mysqli_query($conn, $sql);

        if($res){
            echo '<br>Table test11 created successfullly';
        }
        else{
            die("Could not create table \n : ". mysqli_error($conn));
        }
    }else{
        die("Connection Failed : ".mysqli_connect_error($conn));
    }
    mysqli_close($conn);
?>