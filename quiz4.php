<?php

$x = 0;

for ($i=0; $i <= 10; $i++) 
{ 
    $x++;
    if($x == 5 || $i == 3)
    {
        break;
    }
    echo $i."<br>";
}

?>