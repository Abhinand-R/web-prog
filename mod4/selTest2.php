<?php
    $conn = mysqli_connect("localhost","root","","kendb");

    if($conn){
        echo "Connection established successfully<br><br>";
        
        $sql = "SELECT * FROM testtable";
        $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res)>0){
            echo "...id...My Messages..............<br>";

            while($row = mysqli_fetch_assoc($res)){
                echo "...".$row["id"]. ".........".$row["testField"]."<br>";
            };
        }else{
            echo "0 results";
        }
        
    }else{
        die("Connection Failed : ".mysqli_connect_error($conn));
    }
    mysqli_close($conn);
?>

