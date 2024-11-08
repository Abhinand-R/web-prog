<html>
<body>
    <h1>pattern checker    ^def---for serchinf g first    ==>>and def$ for lat</h1>
    <form action="" method="POST">
        enter the string
        <input type="text" name="string"><br><br>
        enter the patter
        <input type="text" name="pattern"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $str=$_POST['string'];
    $pattern=$_POST['pattern'];
    $pattern="/.$pattern./";
    if(preg_match($pattern,$str)){
        echo "pattern found";
        
    }
    else{
        echo "not found";
    }


}