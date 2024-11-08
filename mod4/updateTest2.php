<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Table</h1>
    <form action="updateTest2.php" method="post">
        Enter Id: <br><br>
        <?php
            $conn = mysqli_connect("localhost","root","","kendb");

            if($conn){
                // echo "Connection established successfully<br><br>";
                
                $sql = "SELECT id FROM testtable";
                $res = mysqli_query($conn, $sql);

                if(mysqli_num_rows($res)>0){
                    echo "<select name='selectId'>";

                    while($row = mysqli_fetch_assoc($res)){
                        $id=$row['id'];
                        echo "<option value='".$id."'>".$row["id"]."</option>";
                    }echo "</select><br><br>";
                }else{
                    echo "0 results";
                }
                
            }else{
                die("Connection Failed : ".mysqli_connect_error($conn));
            }
            // mysqli_close($conn);

        ?>
        
        Enter the Message: <br><input type="text" name="msg"><br><br>
        <input type="submit" value="Update Record" name="updatee">
    </form>

    <?php
        if(isset($_POST['updatee'])){
            $value = $_POST['msg'];
            $id = $_POST['selectId'];
            $sql = "UPDATE testtable SET testField='$value' WHERE id=$id";

            $res = mysqli_query($conn, $sql);
            if($res){
                echo "Updated Successfuly";
            }else{
                echo "Error".mysqli_error($conn);
            }
        }             
        mysqli_close($conn);
    ?>
</body>
</html>