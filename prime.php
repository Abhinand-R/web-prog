<html>
<body>
    <h1>prime number checker</h1>
    <form action="" method="POST">
        enter anumber
        <input type="number" name="num">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $num=$_POST['num'];
    if(prime($num)){
        echo "$num is prime";
    }
    else{
        echo "$num is not";
    }
}
function prime($numb){
    $flag=0;
    for($i=2;$i<=$numb/2;$i++){
        if($numb%$i==0){
            $flag=1;
        }
    }
    if($flag==0){
        return true;
    }
    else{
        return false;
    }
}
?>