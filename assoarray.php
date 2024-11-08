<?php
$ages=array(
    "harry"=>21,
    "bob"=>19,
    "alice"=>20,
    "megha"=>22
);
$ages["megha"]=28;
asort($ages);
foreach($ages as $name=>$value)
echo("$name=>$value");
