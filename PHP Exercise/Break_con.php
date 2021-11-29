<?php

// Continue and break in PHP 

for($i=0;$i<=10;$i++)
{
    if($i == 4){
        break;
    }

    echo "NO is $i </br>";
}


for($i=0;$i<=10;$i++)
{
    if($i == 4){
        continue;
    }

    echo "NO is $i";
}

?>