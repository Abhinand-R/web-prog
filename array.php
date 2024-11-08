<?php
$cars=array("abb","volvo","bmw","toyo");
array_push($cars,"audi");
rsort($cars);
array_pop($cars);
for($i=0;$i<count($cars);$i++){
print($cars[$i]."<br>");
}

$mon=array(
    "jan"=>10,
    "feb"=>2,
    "mar"=>3,
    "apr"=>4,
    "may"=>5,
    "june"=>6,
    "jul"=>7,
);
ksort($mon);
foreach($mon as $name=>$value)
print("<h3>$name is the $value month </h3>");
asort($mon);
unset($mon['mar']);
foreach($mon as $name=>$value)
print("<h3>$name is the $value month </h3>");

//implode and explode
$str="hello  am abhi  from  india";
$words=explode(" ",$str);
for($i=0;$i<count($words);$i++){
    print($words[$i]."<br>");
    }
$str2=implode(" ",$words);
print("<h2>$str2</h2>");

var_dump($mon);

$cars2=array("toyo","volvo");
if(array_intersect($cars2,$cars)===$cars2){
    echo "<br/>it is subst<br/>";
}
else{
    echo "not a subset";
}

function msg(int $fname,float $yr){
return $fname+$yr;
}
echo "gg".msg("45",1.5);
?>
