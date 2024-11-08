<html>
    <body>
        <h4>strcmp==for string comparison</h4>
        <h4>pattern matching-regular expresion[regex]- /def/  pattern enclosed in /../</h4>
        <h4>POSIX    AND   Perl based-</h4>
        <h4>preg_match(regex,str)-return bool <br>preg_split(regex,str)</h4>
    </body>
</html>
<?php
$str1="bapple";
$str2="apple";
$res=strcmp($str1,$str2);
if($res<0){
    echo "$str1.</br>";
}
elseif($res==0){
    echo "eqal";
}
else{
    echo "$str2.</br>";
}

$str="compterPUT";
$pattern="/put/";
if(preg_match($pattern,$str,$match)){
    echo "pattern found";
    
}
else{
    echo "not found";
}
echo count($match[0]);
?>