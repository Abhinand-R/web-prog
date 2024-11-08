<?php
    $conn = mysqli_connect("localhost","root","","kendb");

    if($conn){
        echo "Connection established successfully";
        
        $sql = "INSERT INTO testtable(testField) VALUES ('$_POST[testfield]')";
        $res = mysqli_query($conn, $sql);

        if($res){
            echo '<br>Data inserted';
        }
        else{
            die("Error : ". mysqli_error($conn));
        }
    }else{
        die("Connection Failed : ".mysqli_connect_error($conn));
    }
    mysqli_close($conn);
?>