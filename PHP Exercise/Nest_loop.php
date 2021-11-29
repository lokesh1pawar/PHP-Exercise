<!-- Using nested for loops, create a multiplication table for the numbers 1-7.
  -->

<?php

for($x=1;$x<=7;$x++)
{
    echo "</br>";
    for($y=1;$y<=10;$y++)
    {
        echo $x * $y ;
    }
}

?>