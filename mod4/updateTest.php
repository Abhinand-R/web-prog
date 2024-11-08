<?php
    $conn = mysqli_connect("localhost","root","","kendb");

    if($conn){
        echo "Connection established successfully<br><br>";
        
        // $sql = "UPDATE testtable SET testField='I  India' WHERE id='5'";
        $sql = "DELETE from testtable WHERE id='8'";

        if(mysqli_query($conn, $sql)){
            echo "Record updated successfully<br>";
        }else{
            echo "Error updating reecord".mysqli_error($conn);
        }

        $sql = "SELECT * FROM testtable";
        $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res)>0){
            echo "<table border=><tr><th>Id</th><th>My Messages</th></tr>";

            while($row = mysqli_fetch_assoc($res)){
                echo "<tr><td>".$row["id"]. "</td><td>".$row["testField"]."</td>";
            }echo "</table>";
        }else{
            echo "0 results";
        }
    }else{
        die("Connection Failed : ".mysqli_connect_error($conn));
    }
    mysqli_close($conn);
?>

