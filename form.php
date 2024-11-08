<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['cancel'])){
    header("Location:index.php");   
}
if(isset($_POST['login'])){
    $fail=false;
    $str=$_POST['string'];
    $pattern=$_POST['pattern'];
    if($str==null || $pattern==null){
        $fail= "username and passwd requred";
    }
    else if($str=="admin" && $pattern=="admin123"){
        header("Location:index.php?name=".urlencode($str));
        $fail=false;
    }
    else{
        $fail= "incoorect passswd";
    }
}
?>

<h1>LOG IN</h1>
<?php
if($fail!=false){
    echo '<p style="color:red;">'.htmlentities($fail);
}
?>
<form action="" method="POST">
        enter the username
        <input type="text" name="string"><br><br>
        enter the passwd
        <input type="text" name="pattern"><br>
        <input type="submit" name="login" value="login">
        <input type="submit" name="cancel" value="cancel">
    </form>
</body>
</html>