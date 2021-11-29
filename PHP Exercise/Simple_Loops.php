<?php

// FOR Loop  

$i ;

for($i=0;$i<= 5;$i++)
{
    echo "Hello techIQ". "</br>";
}

// WHILE Loop  

$j = 1 ;

while($j <= 10)
{
    echo "The no. is -> $j </br>";

    $j++;
}
 

// DO WHILE Loop 

$k = 1 ;

do{
    echo"Somethinggg </br>";
    $k++;
} while($k<= 10);


// FOREACH Loop

$age = array("Lokesh"=>"23", "Aman"=>"45", "Mohit"=>"61");

foreach ($age as $x => $value ){
    echo "$x => $value </br>";
}